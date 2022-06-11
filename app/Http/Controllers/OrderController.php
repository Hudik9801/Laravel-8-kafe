<?php

namespace App\Http\Controllers;

use App\Models\OdemeSekli;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Payment;
use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Order::where('user_id',Auth::id())->get();
        return view('home.user_order',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $total = $request->input('total');
        return view('home.user_order_add',['total'=>$total]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data=new Order;

        $data->tableno=$request->input('tableno');
        $data->total=$request->input('total');
        $data->user_id=Auth::id();
        $data->IP=$_SERVER['REMOTE_ADDR'];
        $data->save();

        $datalist=Shopcart::where('user_id',Auth::id())->get();
        foreach ($datalist as $rs)
        {
            $data2=new Orderitem;
            $data2->user_id=Auth::id();
            $data2->product_id=$rs->product_id;
            $data2->order_id=$data->id;
            $data2->price=$rs->product->price;
            $data2->amount=$rs->quantity*$rs->product->price;
            $data2->save();

        }



        return redirect()->route('user_orders')->with('success','Product Added Succesfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order,$id)
    {
        $datalist=Orderitem::where('user_id',Auth::id())->where('order_id',$id)->get();
        return view('home.user_order_item',['datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }


    public function siparis(Request $request){
        if($request->isMethod('post')){
            $data=Shopcart::where('user_id',Auth::id())->get();

            $total = $request->total;

        }else{
            echo "Hata: Post bilgisi yok";

        }
        return view('home.odeme_yap',['data'=>$data,'$total'=>$total])->with('success','Ödeme başarılı bir şekilde yapıldı');

    }

    public function satinal()
    {
        return back()->with('status', 'Kart Bilgileriniz Alındı');




    }

    public function odemesekli()
    {
        $datalist=OdemeSekli::where('user_id','=',Auth::user()->id)->get();
        return view('home.user_odeme_sekli',['datalist'=>$datalist]);



    }

    public function orderplace(Request $request)
    {
        $payment_method=$request->payment;
        $pdata=array();
        $pdata['payment_method']=$payment_method;
        $pdata['status']='Ödeme alındı';
        $payment_method=Payment::insertGetId($pdata);


        $data3 = Shopcart::where('user_id',Auth::id());
        $data3->delete();

            return back()->with('status', 'Ödeme Yapıldı');
    }

    public function kcart()
    {


    return view('home.payment_method');

    }

}
