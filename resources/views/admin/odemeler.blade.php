@extends('layouts.admin')

@section('title', 'Admin Ödemeler')




@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">

        <section class="container-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3 class="card-title">Ödemeler</h3>

                    </div>
                    <div class="col-sm-6">

                    </div>

                </div>


            </div>
        </section>

        <section>

            <div class="card">
                <div class="card-header">


                    <table id="example" class="display" style="min-width:900px">
                        <thead>
                        <tr>
                            <th>İd</th>
                            <th>Ödeme Şekli</th>
                            <th>Status</th>

                        </tr>
                        </thead>

                        <tbody>
                        <div class="card-body">
                            @foreach ($datalist as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->payment_method }}</td>
                                    <td>{{ $rs->status }}</td>

                                </tr>
                            @endforeach
                        </div>
                        </tbody>

                    </table>




                </div>

            </div>




        </section>



    </div>
    <!--**********************************
        Content body end
    ***********************************-->



@endsection
