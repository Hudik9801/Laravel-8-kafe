<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();

    }
    public static function getsetting()
    {
        return Setting::first();

    }
    public static function getslider()
    {
        return Product::first();

    }
    public static function countreview($id)
    {
        return \App\Models\Review::where('product_id',$id)->count();

    }
    public static function avgreview($id)
    {
        return \App\Models\Review::where('product_id',$id)->average('rate');

    }

    public function index()
    {
       $setting = Setting::first();
      $slider = Product::select('id','title','price','image')->limit(4)->get();
      $daily = Product::select('id','title','price','image')->limit(3)->InRandomOrder();
      $last = Product::select('id','title','price','image')->limit(3)->InRandomOrder();
      $picked = Product::select('id','title','price','image')->limit(3)->InRandomOrder();
      #print_r($daily);
      #exit();
       $data=[
         'setting'=>$setting,
         'slider'=>$slider,
           'daily'=>$daily,
           'last'=>$last,
           'picked'=>$picked,
         'page'=>'home'

       ];
        return view('home.index',$data);

    }
    public function product($id)
    {
        $data=Product::find($id);
        $datalist = Image::where('product_id',$id)->get();
        $reviews=\App\Models\Review::where('product_id',$id)->get();

        return view('home.product_details',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);

    }
    public function categoryproducts($id)
    {
        $datalist=Product::where('category_id',$id)->get();
        $data=Category::find($id);

        return view('home.category_products',['data'=>$data,'datalist'=>$datalist]);



    }
    public function addtocard($id)
    {
        echo "add to card<br>";
        $data = Product::find($id);
        print_r($data);
        exit();
    }
    public function getproduct(Request $request)
    {
        $search=$request->input('search');
        $count=Product::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1)
        {
            $data=Product::where('title','like','%'.$search.'%')->first();
            return redirect()->route('product',['id'=>$data->id,'slug'=>$data->slug]);

        }
        else
        {
         return redirect()->route('productlist',['search'=>$search]);
        }

    }

    public function productlist($search)
    {
        $datalist=Product::where('title','like','%'.$search.'%')->get();
        return view('home.search_products',['search'=>$search,'datalist'=>$datalist]);

    }



    public function aboutus()
    {
         $setting=Setting::first();
        return view('home.about',['setting'=>$setting]);

    }
    public function references()
    {
        $comment=Comment::where('user_id','=',Auth::id())->get();
        return view('home.references',['comment'=>$comment]);


    }

    public function faq()
    {
        $datalist=Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist]);

    }

    public function contact()
    {
        $setting=Setting::first();

        return view('home.contact',['setting'=>$setting]);

    }

    public function sendmessage(Request $request)
    {
        $data=new \App\Models\Message();

        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=$request->input('ip');

        $data->save();

        return redirect()->route('contact')->with('success','Mesajınız Kaydedilmiştir! Teşekkür ederiz');

    }



    public function login()  //*tmm*//
    {
        return view('admin.login');

    }

    public function logincheck(Request $request)
    {

        //*$method = $request->method();

        if ($request->isMethod('post'))
        {
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
        else
        {
            return view('admin.login');

        }


}

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function test($id,$name)
    {
        $data['$id']=$id;
        $data['name']=$name;

        return view('Home.test',["id"=>$id,$data]);
      /*echo "İd number:",$id;
        echo "<br>Name:",$name;

        for($i=1;$i<=$id;$i++){
            echo"<br>$i-$name";

        }*/
    }

    public function storecomment(Request $request)
    {

        $data=new Comment();
        $data->user_id=Auth::id();
        $data->subject=$request->input('subject');
        $data->review=$request->input('review');
        $data->rate=$request->input('rate');
        $data->ip=request()->ip();
        $data->save();




        return redirect()->route('references')->with('success','Yorumunuz Kaydedilmiştir! Teşekkür ederiz');


    }

    public function commentuser($id)
    {
        $comment=Comment::where('user_id','=',Auth::id())->get();

        return view('home.references',['comment'=>$comment]);
    }
}
