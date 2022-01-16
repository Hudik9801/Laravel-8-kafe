@extends('layouts.admin')

@section('title', 'Users List')

@php
    $datalist=\App\Models\User::all();
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
                        <h3>Users</h3>

                    </div>

                </div>


            </div>
        </section>

        <section>

            <div class="card">
                <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width:900px">
                                <thead>
                                <tr>
                                    <th>İd</th>
                                    <th></th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Roles</th>
                                    <th>Edit</th>
                                    <th>Delete</th>


                                </tr>
                                </thead>

                                <tbody>
                                <div class="card-body">
                                    @foreach ($datalist as $rs)
                                        <tr>
                                    <td>{{ $rs->id }}</td>
                                            <td>
                                                @if ($rs->profile_photo_path )
                                                    <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                                @endif

                                            </td>
                                            <td>{{ $rs->name }}</td>
                                            <td>{{ $rs->email }}</td>
                                            <td>{{ $rs->phone }}</td>
                                            <td>{{ $rs->address }}</td>
                                            <td>
                                                @foreach ($rs->roles as $row)
                                                    {{$row->name}},
                                                    <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=100 left=300 width=800,height=600')" >
                                                        <img src="{{asset('assets/admin/img')}}/images.png" height="20">
                                                    </a>

                                                @endforeach


                                            </td>



                                            <td><a href="{{route('admin_user_edit',['id'=> $rs->id])}}"><img src="{{asset('assets/admin/img')}}/pencil.png" height="30"></a></td>
                                            <td><a href="{{route('admin_user_delete',['id'=> $rs->id])}}" onlick="return confirm('Delete! Are you sure?') "> <img src="{{asset('assets/admin/img')}}/bin.png" height="30"></a></td>
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
