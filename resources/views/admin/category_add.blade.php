@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')




@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <section class="container-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Add Category</h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>

        <section>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Category</h3>
                </div>

                    </div>

                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" action="{{route('admin_category_create')}}" method="post" novalidate="">
                                    @csrf
                                    <div class="mb-6">
                                        <label>Parent</label>
                                        <select type="text" class="form-control select2"   name="parent_id"  style="width: 100%">
                                            <option value=0 selected="selected">Main Category</option>
                                            @foreach ($datalist as $rs)
                                             <option value="{ $rs->parent_id }}">{{ $rs->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-6">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"   >

                                    </div>
                                    <div class="mb-6">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" class="form-control">

                                    </div>
                                    <div class="mb-6">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control">

                                    </div>

                                    <div class="mb-6">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control"   required=""></div>

                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="default-select  form-control wide" style="width: 100%">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn me-2 btn-primary">Add Category</button>


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
