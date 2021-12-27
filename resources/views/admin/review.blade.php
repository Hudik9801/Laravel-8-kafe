@extends('layouts.admin')

@section('title', 'Reviews Messages List')




@section('content')


    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <section class="container-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Reviews</h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Reviews</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>

        <section>

            <div class="card">
                <div class="card-header">
                    @include('home.message')
                </div>
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






        </section>
        <div class="card-footer">
            <h3 class="card-title">Footer</h3>
        </div>

    </div>
    <!--**********************************
        Content body end
    ***********************************-->


@endsection

@section('footer')

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets')}}/admin/vendor/global/global.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendor/chart.js/Chart.bundle.min.js"></script>
    <!-- Apex Chart -->
    <script src="{{asset('assets')}}/admin/vendor/apexchart/apexchart.js"></script>

    <!-- Datatable -->
    <script src="{{asset('assets')}}/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/plugins-init/datatables.init.js"></script>

    <script src="{{asset('assets')}}/admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="{{asset('assets')}}/admin/js/custom.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/dlabnav-init.js"></script>
    <script src="{{asset('assets')}}/admin/js/demo.js"></script>
    <script src="{{asset('assets')}}/admin/js/styleSwitcher.js"></script>
@endsection
