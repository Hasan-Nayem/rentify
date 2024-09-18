<!-- header begin -->
<header class="transparent header-light scroll-light has-topbar">
    <div id="topbar" class="topbar-dark text-light">
        <div class="container">
            <div class="topbar-left xs-hide">
                <div class="topbar-widget">
                    <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+208 333 9296</a></div>
                    <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>contact@rentaly.com</a></div>
                    <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 - 18.00</a></div>
                </div>
            </div>

            <div class="topbar-right">
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                    <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{ route('homepage') }}">
                                    <img class="logo-1" src="{{ asset('/frontend/images/logo-light.png') }}" alt="">
                                    <img class="logo-2" src="{{ asset('/frontend/images/logo.png') }}" alt="">
                                    {{-- @if (Route::currentRouteName() == 'homepage')
                                        <img class="logo-2" src="{{ asset('/frontend/images/logo.png') }}" alt="">
                                    @else
                                        <img class="logo-2" src="{{ asset('/frontend/images/logo-light.png') }}" alt="">
                                    @endif --}}
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="index.html">Home</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('showCars') }}">Cars</a>
                            </li>
                            <li><a class="menu-item" href="booking.html">Booking</a></li>
                            <li><a class="menu-item" href="{{ route('dashboard.user') }}">My Account</a>
                                <ul>
                                    <li><a class="menu-item" href="account-dashboard.html">Dashboard</a></li>
                                    <li><a class="menu-item" href="account-profile.html">My Profile</a></li>
                                    <li><a class="menu-item" href="account-booking.html">My Orders</a></li>
                                    <li><a class="menu-item" href="account-favorite.html">My Favorite Cars</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="de-flex-col">
                        <div class="menu_side_area">
                            <a href="{{ route("login") }}" class="btn-main">Sign In</a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                    {{-- <div class="de-flex-col" style="background-size: 100%; background-repeat: no-repeat;">
                        <div class="menu_side_area" style="background-size: 100%; background-repeat: no-repeat;">
                            <div class="de-login-menu" style="background-size: 100%; background-repeat: no-repeat;">

                                <span id="de-click-menu-profile" class="de-menu-profile">
                                    <img src="{{ asset('/frontend/images/profile/1.jpg') }}" class="img-fluid" alt="">
                                </span>
                                <div id="de-submenu-profile" class="de-submenu" style="background-size: 100%; background-repeat: no-repeat; display: none;">
                                    <div class="d-name" style="background-size: 100%; background-repeat: no-repeat;">
                                        <h4>Monica Lucas</h4>
                                        <span class="text-gray">monica@rentaly.com</span>
                                    </div>

                                    <div class="d-line" style="background-size: 100%; background-repeat: no-repeat;"></div>

                                    <ul class="menu-col">
                                        <li><a href="account-dashboard.html"><i class="fa fa-home"></i>Dashboard</a></li>
                                        <li><a href="account-profile.html"><i class="fa fa-user"></i>My Profile</a></li>
                                        <li><a href="account-booking.html"><i class="fa fa-calendar"></i>My Orders</a></li>
                                        <li><a href="account-favorite.html"><i class="fa fa-car"></i>My Favorite Cars</a></li>
                                        <li><a href="login.html"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                    </ul>
                                </div>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
