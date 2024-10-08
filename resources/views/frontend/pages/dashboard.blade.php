@extends('frontend.layout')
@section('content')
 <!-- content begin -->
 <div class="no-bottom no-top zebra" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="jarallax text-light" style="background-color: #F5F8FA">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-dark">Dashboard</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->

    <section id="section-cars" class="bg-gray-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb30">
                    <div class="card padding30 rounded-5">
                        <div class="profile_avatar">
                            <div class="profile_img">
                                <img src="{{ asset('/frontend/images/profile/1.png') }}" alt="">
                            </div>
                            <div class="profile_name">
                                <h4>
                                    {{ Auth::user()->name }}
                                    <span class="profile_username text-gray">{{ Auth::user()->email }}</span>
                                </h4>
                            </div>
                        </div>
                        <div class="spacer-20"></div>
                        <ul class="menu-col">
                            <li><a href="{{ route('dashboard.user') }}" class="{{ Route::currentRouteName() == 'dashboard.user' ? "active" : "" }}" ><i class="fa fa-home"></i>Dashboard</a></li>
                            <li><a href="{{ route('profile.user') }}" class="{{ Route::currentRouteName() == 'profile.user' ? "active" : "" }}"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="{{ route('orders.user') }}" class="{{ Route::currentRouteName() == 'orders.user' ? "active" : "" }}"><i class="fa fa-calendar"></i>My Orders</a></li>
                            {{-- <li><a href="account-favorite.html"><i class="fa fa-car"></i>My Favorite Cars</a></li> --}}
                            {{-- <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <li>
                                    <i class="fa fa-sign-out"><input type="submit" value="Sign Out">
                                </li>
                            </form> --}}
                            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>Sign Out</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    @yield('dashboard-layout')
                </div>
            </div>
        </div>
    </section>

</div>
<!-- content close -->
@endsection
