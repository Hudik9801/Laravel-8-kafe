@auth
<div class="brands_products"><!--brands_products-->
    <h2>User Panel</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">

            <li><a href="{{route('myreviews')}}"> <span class="pull-right"></span>My Profile</a></li>
            <li><a href="{{route('user_orders')}}"> <span class="pull-right"></span>My Orders</a></li>
            <li><a href="{{route('myreviews')}}"> <span class="pull-right"></span>My Review</a></li>
            <li><a href="{{route('user_shopcart')}}"> <span class="pull-right"></span>My Shopcart</a></li>
            <li><a href="{{route('user_products')}}"> <span class="pull-right"></span>My Product</a></li>
            <li><a href="{{route('logout')}}"> <span class="pull-right"></span>Logout</a></li>
            @php
            $userRoles=Auth::user()->roles->pluck('name');

            @endphp
            @if($userRoles->contains('admin'))
                <li><a href="{{route('admin_home')}}" target="_blank"  >Admin Panel</a></li>
            @endif

        </ul>
    </div>
</div><!--/brands_products-->
@endauth
