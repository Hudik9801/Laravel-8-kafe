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
                        <h3>Yeni Çalışan Ekle</h3>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Yeni Çalışan Ekle</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>

        <section>

            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon needs-validation" action="{{route('admin_employee_create')}}" method="post" enctype="multipart/form-data" >
                                @csrf


                                <div class="mb-6">
                                    <label>Ad Soyad</label>
                                    <input type="text" name="Adsoy" class="form-control"   >
                                </div>
                                <div class="mb-6">
                                    <label>Doğum Tarihi</label>
                                    <input type="date" name="DateBirthDay" class="form-control"   >
                                </div>

                                <div class="mb-6">
                                    <label>Department</label>
                                    <input type="text" name="department"  class="form-control">

                                </div>
                                <div class="mb-6">
                                    <label>Telefon Numara</label>
                                    <input id="number" type="text" name="tel_number" class="form-control"></input>



                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="default-select  form-control wide" style="width: 100%">
                                        <option>True</option>
                                        <option>False</option>
                                        </select>
                                </div>


                                <button type="submit" class="btn me-2 btn-primary">Ekle </button>


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
