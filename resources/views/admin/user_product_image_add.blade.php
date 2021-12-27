<html>
<head>
    <title>Image Gallery</title>


    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="{{asset('assets')}}/admin/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/nouislider/nouislider.min.css">


    <!-- Style css -->
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet">




</head>
<body>



                    <h3 class="card-title">Product : {{$data->title}}</h3>

                    <div class="card-body">

                                <form role="form" action="{{route('user_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="mb-6">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"   >
                                    </div>

                                    <div class="mb-6">
                                        <label>İmage</label>
                                        <input type="file" name="image" class="form-control"   >

                                    </div>


                                    <button type="submit" class="btn me-2 btn-primary">Add İmage</button>


                                </form>
                            </div>
            <table id="example" class="display" style="min-width:900px">
                <thead>
                <tr>
                    <th>İd</th>
                    <th>Title</th>
                    <th>İmage</th>
                    <th>Actions</th>


                </tr>
                </thead>

                <tbody>

                    @foreach ($images as $rs)
                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->title }}</td>
                            <td>
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                @endif
                            </td>
                            <td>
                                <a href="{{route('user_image_delete',['id'=> $rs->id,'product_id'=>$data->id])}}" onlick="return confirm('Delete! Are you sure?') ">
                                    <img src="{{asset('assets/admin/img')}}/bin.png" height="30"></a>
                                </td>
                        </tr>
                        @endforeach

                </tbody>
            </table>
</body>
</html>











