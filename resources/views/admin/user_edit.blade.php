@extends('layouts.admin')

@section('title', 'Edit User')

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
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit User</h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>

        <section>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                </div>

                    </div>

                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="mb-6">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{$data->name}}" class="form-control"   >
                                    </div>
                                    <div class="mb-6">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{$data->email}}" class="form-control"   >
                                    </div>
                                    <div class="mb-6">
                                        <label>Phone</label>
                                        <input type="number" name="phone" value="{{$data->phone}}" class="form-control"   >
                                    </div>




                                    <div class="mb-6">
                                        <label>Address</label>
                                        <input type="text" name="address" value="{{$data->address}}" class="form-control">

                                    </div>

                                    <div class="mb-6">
                                        <label>İmage</label>
                                        <input type="file" name="image"  class="form-control">

                                        @if( $data->profile_photo_path )
                                            <img src="{{ Storage::url($data->profile_photo_path)}}" height="60" alt="">
                                        @endif

                                    </div>




                                    <button type="submit" class="btn me-2 btn-primary">Update </button>


                                </form>
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
