@extends('layouts.admin')

@section('title', 'Edit Frequently Asked Question List')

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
                        <h3>Edit Faq</h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Faq</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>

        <section>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Faq</h3>
                </div>

                    </div>

                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="mb-6">
                                        <label>Position</label>
                                        <input type="number" name="position" value="{{$data->position}}" class="form-control"   >
                                    </div>
                                    <div class="mb-6">
                                        <label>Question</label>
                                        <input type="text" name="question" value="{{$data->question}}" class="form-control"   >
                                    </div>



                                    <div class="mb-6">
                                        <label>Answer</label>
                                        <textarea id="answer" type="text" name="answer" class="form-control"></textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#answer' ) )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="default-select  form-control wide" style="width: 100%">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>False</option>
                                            <option>True</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn me-2 btn-primary">Update Faq</button>


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
