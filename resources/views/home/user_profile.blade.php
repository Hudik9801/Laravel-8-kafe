@extends('layouts.home')


@section('title', 'User Profile')

   <div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
                <div class="login-form"><!--login form-->
                    <ul class="breadcrumb">
                        <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                        <li><a  href="{{route('myprofile')}}"><i class="fa fa-home"  ></i>User Profile</a></li>

                    </ul>

                       <div class="section">
                           <div class="container">
                               <div class="row">
                                   <div id="aside" class="col-md-2">
                                       @include('home.usermenu')
                                   </div>

                                  <div id="main" class="col-md-10">
                                      @include('profile.show')
                                  </div>

                               </div>

                           </div>

                       </div>




                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</div>



