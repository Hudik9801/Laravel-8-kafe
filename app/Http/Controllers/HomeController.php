<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



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

    public function index()
    {
        $setting=Setting::first();
        return view('home.index',['setting'=>$setting]);

    }
    public function aboutus()
    {
        $setting=Setting::first();
        return view('home.about',['setting'=>$setting]);

    }
    public function references()
    {
        $setting=Setting::first();

        return view('home.references',['setting'=>$setting]);

    }

    public function fag()
    {
        return view( 'home.fag');

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
}
