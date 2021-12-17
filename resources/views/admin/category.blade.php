@extends('layouts.admin')

@section('title', 'Category List')




@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <section class="container-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Categories</h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>

        <section>

            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin_category_add')}}" type="button" class="btn btn-primary me-2" style="width: 200px" id="js-programmatic-enable">Add Category</a>
                </div>
                <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width:900px">
                                <thead>
                                <tr>
                                    <th>İd</th>
                                    <th>Parent</th>
                                    <th>Title</th>
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
                                    <td>{{ $rs->parent_id }}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td>Edit</td>
                                    <td><a href="{{route('admin_category_delete',['id'=> $rs->id])}}" onlick="return confirm('Delete! Are you sure?') "> Delete</a></td>
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
