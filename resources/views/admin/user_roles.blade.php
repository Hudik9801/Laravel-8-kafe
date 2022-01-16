@extends('layouts.admin')

@section('title', ' User Roles')

@section('javascript')

    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>



@endsection





@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <section class="container-header">
            <div class="container-fluid">


            </div>
        </section>

        <section>


                        <div class="card-body">
                            <div class="basic-form">

                                <table id="example1" class="table table bordered table-striped">
                                    <tr>
                                        <th>Id</th> <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th> <td>{{$data->name}}</td>
                                    </tr>

                                    <tr>
                                        <th>Email</th> <td>{{$data->email}}</td>
                                    </tr>

                                    <tr>
                                        <th>Roles</th>
                                        <td>
                                            <table>
                                                @foreach($data->roles as $row)
                                                    <tr>
                                                        <td>
                                                            {{$row->name}}
                                                        </td>
                                                        <td>
                                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete! Are you sure')"/>
                                                            <img src="{{asset('assets/admin/img')}}/bin.png" height="20">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Add Role</th>
                                        <td>
                                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <select name="roleid" >
                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-primary">Add Role</button>
                                            </form>
                                        </td>
                                    </tr>


                                </table>


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
