@extends('layouts.home')


@section('title','Order İtem')





<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="card col-md-3">
                <ul class="breadcrumb">
                    <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                    <li><a  href="#"><i class="fa fa-home"  ></i>Order İtem</a></li>
                    @include('home.usermenu')



                </ul>
            </div>


            <div class="card col-md-9">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td>Image</td>
                        <td >Product</td>
                        <td >Price</td>
                        <td >Total</td>
                        <td >Status</td>
                        <td >Note</td>


                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $total=0;
                    @endphp

                    <div class="card-body">
                        @foreach ($datalist as $rs)

                            <tr>
                                <td>
                                    @if($rs->product->image)
                                        <img src="{{Storage::url($rs->product->image)}}" height="30" alt="">
                                    @endif
                                </td>


                                <td><a href="{{route('product',['id'=>$rs->id])}}">{{ $rs->product->title }}</a>
                                </td>
                                <td>{{ $rs->product->price }}</td>

                                <td>{{ $rs->amount}}</td>
                                <td>{{ $rs->status}}</td>
                                <td>{{ $rs->note}}</td>


                            </tr>

                    @endforeach


                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>SUBTOTAL?</td>
                                    <td>{{$total}}</td>  <!---product hata aldım  SUBTOTAL ayarla--->
                                </tr>

                            </table>
                        </td>
                    </tr>
                    </tfoot>

                </table>


            </div>
        </div>

    </div>

</div>









