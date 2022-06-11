@extends('layouts.admin')

@section('title', 'Order Detail List')




@section('content')

    <div class="content-body">




        <div class="card">
            <div class="card-header">
                @include('home.message')
            </div>


            <div class="card-body">
                <form role="form" action="{{route('admin_order_update',['id'=>$data->id])}}" method="post"   >
                    @csrf

                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th><td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Table No</th> <td>{{$data->tableno}}</td>
                            </tr>
                            <tr>
                                <th>Total</th> <td>{{$data->total}}</td>
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
                                    <select name="status">

                                        <option selected>{{$data->status}}</option>
                                        <option>Kabul Edildi</option>
                                        <option>Reddedildi</option>
                                        <option>Hazırlanıyor</option>
                                        <option>Yolda</option>
                                        <option>Tamamlandı</option>

                                    </select>
                                </td>

                            </tr>
                            <tr>
                                <th>Admin Note:</th>
                                <td><textarea name="note" rows="3" cols="15" >{{$data->note}}</textarea></td>
                            </tr>

                            </thead>

                        </table>


                        <button type="submit" class="btn btn-primary" >Update Order</button>
                    </div>
                </form>


                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <td class="text-center">Resim</td>
                        <td class="text-center">Ürün ADI</td>
                        <td class="text-center">Ürün Fiyat</td>




                    </tr>
                    </thead>


                    <tbody>
                    @php
                        $total=0;
                    @endphp


                    @foreach ($datalist as $rs)
                        <form role="form" action="{{route('admin_order_item_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data"  >
                            @csrf
                            <tr>
                                <td>
                                    @if($rs->product->image)
                                        <img src="{{Storage::url($rs->product->image)}}" height="60" alt="">
                                    @endif
                                </td>


                                <td>
                                    <a href="{{route('product',['id'=>$rs->product->id])}}">
                                        {{ $rs->product->title }}</a>
                                </td>
                                <td>{{ $rs->product->price }}</td>





                            </tr>
                        </form>


                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="empty" colspan="4">&nbsp;</th>

                        <table class="table table-condensed total-result">
                            <tr>
                                <th>Toplam Fiyat</th>
                                <th colspan="2" class="sub-total" >${{$rs->order->total}}</th>
                            </tr>
                        </table>
                    </tr>
                    </tfoot>


                </table>


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
