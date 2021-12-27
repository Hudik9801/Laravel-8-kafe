@extends('layouts.admin')

@section('title', 'Frequently Asked Question List')

@php
    $datalist=\App\Models\Faq::all();
@endphp




@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <section class="container-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Frequently Asked Question</h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Frequently Asked Question</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>

        <section>

            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin_faq_add')}}" type="button" class="btn btn-primary me-2" style="width: 200px" id="js-programmatic-enable" enctype="multipart/form-data">Add Faq</a>
                    @include('home.message')
                </div>
                <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width:900px">
                                <thead>
                                <tr>
                                    <th>İd</th>
                                    <th>Position</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>



                                </tr>
                                </thead>

                                <tbody>
                                <div class="card-body">
                                    @foreach ($datalist as $rs)
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->position }}</td>
                                            <td>{{ $rs->question }}</td>
                                            <td>{!! $rs->answer !!}</td>




                                            <td>{{ $rs->status }}</td>
                                            <td><a href="{{route('admin_faq_edit',['id'=> $rs->id])}}"><img src="{{asset('assets/admin/img')}}/pencil.png" height="30"></a></td>

                                            <td><a href="{{route('admin_faq_delete',['id'=> $rs->id])}}" onlick="return confirm('Delete! Are you sure?') "> <img src="{{asset('assets/admin/img')}}/bin.png" height="30"></a></td>

                                        </tr>
                                    @endforeach
                                </div>
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
