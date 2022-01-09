@extends('layouts.home')


@section('title', 'Order Products')

<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="card col-sm-3">
                <ul class="breadcrumb">
                    <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                    <li><a  href="#"><i class="fa fa-home"  ></i>User Products</a></li>
                    @include('home.usermenu')


                </ul>
            </div>
            <form action="{{route('user_order_store')}}" method="post">
                @csrf

                <div class="card col-sm-9">
                    <div class="section-title">
                        <p>Table No</p>
                    </div>


                        <div class="form-one">

                            <input class="form-control" type="text"  name="tableno"  value="" placeholder="Table No*" required>


                        </div>
                    </div>



                    <div class="card col-sm-9">
                        <div class="shopper-info">
                            <p>Payments Detail Total:${{$total}}</p>


                        <div class="input-checkbox">
                            <input type="hidden" name="total" value="{{$total}}">


                        </div>



                        <input class="form-control" type="text"  name="cardname"  value="" placeholder="Name&Surname*" required>

                        <input class="form-control" type="text"  name="cardnumber"  value="" placeholder="Card Number*" required>

                        <input class="form-control" type="text"  name="dates"  value="" placeholder="mm/yy*" required>

                        <input class="form-control" type="text"  name="key"  value="" placeholder="Secret Number*" required>


                                <div class="pull-right">
                                    <button class="btn btn-primary">Ürün Satin Al</button>
                                </div>





                        </div>
                    </div>

            </form>



        </div>
    </div>
</div>






