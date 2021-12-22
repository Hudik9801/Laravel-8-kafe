@extends('layouts.admin')

@section('title', 'Add Product')

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
                        <h3>Add Product</h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>

        <section>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Product</h3>
                </div>

                    </div>

                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="mb-6">
                                        <label>Category</label>
                                        <select type="text" class="form-control select2"   name="category_id"  style="width: 100%">
                                            @foreach ($datalist as $rs)
                                             <option value="{{ $rs->id }}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-6">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"   >
                                    </div>
                                    <div class="mb-6">
                                        <label>Keyword</label>
                                        <input type="text" name="keywords" class="form-control"   >
                                    </div>

                                    <div class="mb-6">
                                        <label>İmage</label>
                                        <input type="file" name="image" class="form-control"   >

                                    </div>
                                    <div class="mb-6">
                                        <label>Price</label>
                                        <input type="number" name="price" value="0" class="form-control">

                                    </div>
                                    <div class="mb-6">
                                        <label>Detail</label>
                                        <textarea id="detail" type="text" name="detail" class="form-control"></textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#detail' ) )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>


                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="default-select  form-control wide" style="width: 100%">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn me-2 btn-primary">Add Product</button>


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
