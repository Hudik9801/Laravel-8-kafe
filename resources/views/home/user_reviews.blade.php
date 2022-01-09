@extends('layouts.home')



@section('title', 'My Reviews')

<div id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="card col-md-3">
                <ul class="breadcrumb">
                    <li><a  href="{{route('home')}}"><i class="fa fa-home"  ></i>HOME</a></li>
                    <li><a  href="#"><i class="fa fa-home"  ></i>User Reviews</a></li>
                    @include('home.usermenu')



                </ul>
            </div>


            <div class="card col-md-9">
                <div class="card-body">
                    <div class="table-responsive">

                                   <table id="example1" class="table table-bordered table-striped">
                                       <thead>
                                       <tr>
                                       <th>Id</th>
                                       <th>Product</th>
                                       <th>Subject</th>
                                       <th>Review</th>
                                       <th>Rate</th>
                                       <th>Status</th>
                                       <th>Date</th>

                                       <th style="..." colspan="3">Actions</th>
                                       </tr>
                                       </thead>

                                       </thead>
                                       <tbody>
                                       @include('home.message')
                                       @foreach($datalist as $rs)
                                           <tr>
                                               <td>{{$rs->id}}</td>
                                               <td><a href="{{route('product',['id'=>$rs->product->id])}}" target="_blank">
                                                       {{$rs->product->title}}</a>
                                               </td>
                                               <td>{{$rs->subject}}</td>
                                               <td>{{$rs->review}}</td>
                                               <td>{{$rs->rate}}</td>
                                               <td>{{$rs->status}}</td>
                                               <td>{{$rs->created_ad}}</td>

                                               <td>
                                                   <a href="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are You Sure?')">
                                                       <img src="{{asset('assets/admin/img')}}/bin.png" height="25">
                                                   </a>
                                               </td>



                                           </tr>
                                       @endforeach
                                       </tbody>
                                   </table>






                                </div>

                            </div>

                        </div>

                    </div>




                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</div>

