@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')




@section('content')


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
                            <li class="breadcrumb-item active">Çalışanlar</li>
                        </ol>
                    </div>

                </div>


            </div>
        </section>

        <section>




            <div class="card">


                <div class="card-header">
                    <a href="{{route('admin_employee_add')}}" type="button" class="btn btn-primary me-2" style="width: 200px" id="js-programmatic-enable">Yeni çalışan ekleyiniz</a>
                </div>                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width:900px">
                            <thead>
                            <tr>
                                <th>İd</th>

                                <th>Ad Soyad</th>
                                <th>Doğum Tarihi</th>
                                <th>Bölüm</th>
                                <th>Telefon Numarası</th>




                            </tr>
                            </thead>

                            <tbody>
                            <div class="card-body">
                                @foreach ($datalist as $rs)
                                    <tr>
                                        <td>{{ $rs->id }}</td>

                                        <td>{{ $rs->Adsoy }}</td>
                                        <td>{{ $rs->DateBirthDay }}</td>
                                        <td>{{ $rs->department }}</td>
                                        <td>{{ $rs->tel_number }}</td>

,
                                    </tr>
                                @endforeach
                            </div>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>




        </section>




    </div>



@endsection
