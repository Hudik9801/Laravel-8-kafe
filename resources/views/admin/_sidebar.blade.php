<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">


    @auth
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
        <a href="{{route('logout')}}" class="d-block">Logout</a>
    @endauth


        <ul class="metismenu" id="menu">


            <li><a class="has-arrow " href="{{route('admin_category')}}" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    Category
                </a>


            </li>
            <li><a class="has-arrow " href="{{route('admin_products')}}" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    Products
                </a>
            </li>
            <li><a class="has-arrow " href="{{route('admin_message')}}" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    Contact Messages
                </a>
            </li>




            <li class="nav-item">
                <a class="has-arrow " href="{{route('admin_setting')}}" class="nav-link">
                    <i class="fas fa-info-circle"></i>
                    Settings
                </a>
            </li>
            <li><a class="has-arrow " href="{{route('admin_review')}}" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    Reviews
                </a>
            </li>
            <li><a class="has-arrow " href="{{route('admin_faq')}}" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    FAQ
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text">Orders</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin_orders')}}">All Orders</a></li>
                    <li><a href="{{route('admin_orders')}}">New Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'canceled'])}}">Canceled Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'accepted'])}}">Accepted Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'shipping'])}}">Shipping Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'completed'])}}">Completed Orders</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="{{route('admin_users')}}" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    Users
                </a>
            </li>





        </ul>


        <div class="side-bar-profile">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="side-bar-profile-img">

                </div>

                <div class="profile-button">
                    <i class="fas fa-caret-down scale5 text-light"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2 progress-info">
                <span class="fs-12"><i class="fas fa-star text-orange me-2"></i>Task Progress</span>
                <span class="fs-12">20/45</span>
            </div>
            <div class="progress default-progress">
                <div class="progress-bar bg-gradientf progress-animated" style="width: 45%; height:10px;" role="progressbar">
                    <span class="sr-only">45% Complete</span>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p><strong>Fillow Saas Admin</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
