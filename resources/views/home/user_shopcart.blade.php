@extends('layouts.home')


@section('title','My Shopcart')





<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="card col-md-3">
                <ul class="breadcrumb">
                    <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                    <li><a  href="#"><i class="fa fa-home"  ></i>Shopcart</a></li>
                    @include('home.usermenu')



                </ul>
            </div>


            <div class="card col-md-9">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Image</td>
                        <td class="description">Product</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <th>Delete</th>

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
                                <td>
                                    <form action="{{route('user_shopcart_update',['id'=>$rs->id])}}" method="post" >
                                        @csrf

                                        <input  name="quantity" type="number" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}" onchange="this.form.submit()" >

                                    </form>
                                </td>
                                <td>{{ $rs->product->price * $rs->quantity}}</td>


                                <td><a href="{{route('user_shopcart_delete',['id'=> $rs->id])}}" onlick="return confirm('Delete! Are you sure?') "> <img src="{{asset('assets/admin/img')}}/bin.png" height="30"></a></td>
                            </tr>
                    @php
                        $total+=$rs->product->price * $rs->quantity;
                    @endphp
                    @endforeach


                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Cart Sub Total</td>
                                    <td>${{$total}}</td>
                                </tr>
                                <tr class="shipping-cost">
                                    <td>Shipping Cost</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td><span>${{$total}}</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    </tfoot>

                </table>

                <form action="{{route('user_order_add')}}" method="post">
                    @csrf
                    <input type="hidden" name="total" value="{{$total}}" >
                    <div class="pull-right">
                        <button type="submit" class="primary-btn">Place Order</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

</div>









