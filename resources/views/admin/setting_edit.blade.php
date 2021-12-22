@extends('layouts.admin')

@section('title', 'Edit Setting')

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
                        <h3>Edit Setting</h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Setting</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>



                            <!-- Nav tabs -->
                            <div class="default-tab">

                                <div class="card-body">
                                    <div class="basic-form">
                                        <form class="form-valide-with-icon needs-validation" action="{{route('admin_setting_update')}}" enctype="multipart/form-data" >
                                            @csrf
                                            <div class="mb-6">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#general"><i class="la la-General me-2"></i> General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#smtp"><i class="la la-smtp me-2"></i> Smtp Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#social"><i class="la la-S-social me-2"></i> Social Media</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#about"><i class="la la-about me-2"></i> About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#page"><i class="la la-page me-2"></i> Contact Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#referencess"><i class="la la-referencess me-2"></i> References</a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="general" role="tabpanel">
                                        <div class="pt-4">

                                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control" >

                                            <div class="mb-6">
                                                <label>Title</label>
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control"   >
                                            </div>
                                            <div class="mb-6">
                                                <label>Keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control"   >
                                            </div>
                                            <div class="mb-6">
                                                <label>Description</label>
                                                <input type="text" name="description" value="{{$data->description}}" class="form-control"   >
                                            </div>
                                            <div class="mb-6">
                                                <label>Company</label>
                                                <input type="text" name="company" value="{{$data->company}}" class="form-control"   >
                                            </div>
                                            <div class="mb-6">
                                                <label>Address</label>
                                                <input type="text" name="address" value="{{$data->address}}" class="form-control"   >
                                            </div>
                                            <div class="mb-6">
                                                <label>Phone</label>
                                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control"   >
                                            </div>

                                            <div class="mb-6">
                                                <label>Fax</label>
                                                <input type="text" name="fax" value="{{$data->fax}}"  class="form-control"   >
                                            </div>

                                            <div class="mb-6">
                                                <label>Email</label>
                                                <input type="text" name="email" value="{{$data->email}}" class="form-control"   >
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select name="status" class="default-select  form-control wide" style="width: 100%">
                                                    <option selected="selected">{{$data->status}}</option>
                                                    <option>False</option>
                                                    <option>True</option>
                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="smtp">
                                        <div class="pt-4">
                                            <div class="mb-6">
                                                <label>Smtp Server</label>
                                                <input type="text" name="smptserver" value="{{$data->smptserver}}" class="form-control"   >
                                            </div>

                                            <div class="mb-6">
                                                <label>Smtp Email</label>
                                                <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control"   >
                                            </div>

                                            <div class="mb-6">
                                                <label>Smtp Password</label>
                                                <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control"   >
                                            </div>

                                            <div class="mb-6">
                                                <label>Smtp Port</label>
                                                <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control"   >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="social">
                                        <div class="pt-4">

                                            <div class="mb-6">
                                                <label>Facebook</label>
                                                <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control"   >
                                            </div>


                                            <div class="mb-6">
                                                <label>İnstagram</label>
                                                <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control"   >
                                            </div>
                                            <div class="mb-6">
                                                <label>Youtube</label>
                                                <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control"   >
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="about">
                                        <div class="pt-4">
                                            <div class="mb-6">

                                                <textarea id="aboutus" type="text" name="aboutus" class="form-control"></textarea>

                                            </div>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#aboutus' ) )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>




                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="page">
                                        <div class="pt-4">
                                            <div class="mb-6">

                                                <textarea id="contact" type="text" name="contact" class="form-control"></textarea>

                                            </div>
                                            <script>
                                                ClassicEditor

                                                    .create( document.querySelector( '#contact' ) )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="referencess">
                                        <div class="pt-4">
                                            <div class="mb-6">

                                                <textarea id="references" type="text" name="references" class="form-control"></textarea>

                                            </div>
                                            <script>
                                                ClassicEditor

                                                    .create( document.querySelector( '#references' ) )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>
                                        </div>
                                    </div>


                                </div>

                                                <div class="card-footer">


                                    <button type="submit" class="btn me-2 btn-primary">Update Setting</button>
                                                </div>
                                            </div>
                                        </form>
                            </div>
                          </div>
                            </div>
                             </div>

        </section>



    </div>
    <!--**********************************
        Content body end
    ***********************************-->


@endsection
