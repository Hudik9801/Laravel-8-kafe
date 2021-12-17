<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    @auth
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
        <a href="{{route('admin_logout')}}" class="d-block">Logout</a>
    @endauth
    <div class="dlabnav-scroll">
        <div class="profile-info1">



        </div>
        <ul class="metismenu" id="menu">


            <li><a class="has-arrow " href="{{route('admin_category')}}" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    Category
                </a>


            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Products</span>
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
