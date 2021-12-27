@extends('layouts.home')


@section('title', 'Frequently Asked Question')
@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>

@endsection



<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
                <div class="login-form"><!--login form-->
                    <ul class="breadcrumb">
                        <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                        <li><a  href="#"><i class="fa fa-home"  ></i>Frequently Asked Question</a></li>

                    </ul>

                    <div class="section">
                        <div class="container">
                            <div class="row">

                                <div id="accordion">

                                    @foreach($datalist as $rs)
                                        <h2>{{$rs->question}}</h2>

                                                <div>
                                        <p>{!! $rs->answer !!}</p>
                                                </div>

                                    @endforeach


                                </div>



                        </div>

                    </div>




                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</div>
</div>

