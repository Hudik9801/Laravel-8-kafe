@auth
<div class="brands_products"><!--brands_products-->
    <h2>User Panel</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">

            <li><a href="{{route('myprofile')}}"> <span class="pull-right"></span>Profilim</a></li>
            <li><a href="{{route('user_orders')}}"> <span class="pull-right"></span>Siparişlerim</a></li>
            <li><a href="{{route('myreviews')}}"> <span class="pull-right"></span>Ödeme Yap</a></li>
            <li><a href="{{route('user_shopcart')}}"> <span class="pull-right"></span>Sepetim</a></li>

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
