@extends('layouts.admin')

@section('title', 'Comment Detail List')




@section('content')

    <div class="content-body">




        <div class="card">
            <div class="card-header">
                @include('home.message')
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <tr>
                            <th>Id</th><td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Adı & Soyad</th> <td>{{$data->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th> <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Review</th> <td>{{$data->review}}</td>
                        </tr>
                        <tr>
                            <th>Rate</th> <td>{{$data->rate}}</td>
                        </tr>


                        <tr>
                            <th>IP</th><td>{{$data->IP}}</td>
                        </tr>
                        <tr>
                            <th>Created Date</th> <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Update Date</th> <td>{{$data->updated_at}}</td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>
                                <form role="form" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post">
                                    @csrf

                                    <select name="status">

                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" >Update Comment</button>
                                    </div>
                                </form>



                            </td>

                        </tr>


                    </table>



                </div>



            </div>

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
