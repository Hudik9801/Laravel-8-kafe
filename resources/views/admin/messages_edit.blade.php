<link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet"/>
<link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet"/>
<link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet"/>
<link href="{{asset('assets')}}/css/price-range.css" rel="stylesheet"/>
<link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/main.css" rel="stylesheet"/>
<link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet"/>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

        <section>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Message Detail</h3>
                    @include('home.message')
                </div>

                    </div>

                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="mb-6">
                                        <table id="example" class="display" style="min-width:900px">

                                                <th>İd</th><td>{{ $data->id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Name</th><td>{{ $data->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th><td>{{ $data->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th><td>{{ $data->phone }}</td>
                                            </tr>
                                            <tr>
                                                <th>Subject</th><td>{{ $data->subject }}</td>
                                            </tr>
                                            <tr>
                                                <th>Message</th><td>{{ $data->message }}</td>
                                            </tr>

                                            <tr>
                                                <th>İP</th><td>{{ $data->ip }}</td>
                                            </tr>

                                                <th>Admin Note</th>
                                                <td>
                                                    <textarea id="detail" name="note">{{ $data->note }}</textarea>

                                                </td>


                                            <td>
                                                <div>
                                                    <button type="submit" class="btn btn-primary">Update Message</button>
                                                </div>

                                            </td>



</table>
                                    </div>
                                </form>
                            </div>
                        </div>





                            </div>









        </section>




    </div>
    <!--**********************************
        Content body end
    ***********************************-->



