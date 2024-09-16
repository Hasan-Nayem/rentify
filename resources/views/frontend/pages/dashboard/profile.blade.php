@extends('frontend.pages.dashboard')
@section('dashboard-layout')
<div class="card padding40  rounded-5" style="background-size: 100%; background-repeat: no-repeat;">
    <div class="row" style="background-size: 100%; background-repeat: no-repeat;">
        <div class="col-lg-12" style="background-size: 100%; background-repeat: no-repeat;">
            <form id="form-create-item" class="form-border" method="post" action="https://www.madebydesignesia.com/themes/rentaly/email.php">
            <div class="de_tab tab_simple" style="background-size: 100%; background-repeat: no-repeat;">

                <ul class="de_nav">
                    <li class="active"><span>Profile</span></li>
                    <li><span>Notifications</span></li>
                </ul>

                <div class="de_tab_content" style="background-size: 100%; background-repeat: no-repeat;">
                    <div class="tab-1" style="background-size: 100%; background-repeat: no-repeat;">
                        <div class="row" style="background-size: 100%; background-repeat: no-repeat;">
                            <div class="col-lg-6 mb20" style="background-size: 100%; background-repeat: no-repeat;">
                                <h5>Username</h5>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
                            </div>
                            <div class="col-lg-6 mb20" style="background-size: 100%; background-repeat: no-repeat;">
                                <h5>Email Address</h5>
                                <input type="text" name="email_address" id="email_address" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="col-lg-6 mb20" style="background-size: 100%; background-repeat: no-repeat;">
                                <h5>New Password</h5>
                                <input type="Password" name="user_password" id="user_password" class="form-control" placeholder="********">
                            </div>
                            <div class="col-lg-6 mb20" style="background-size: 100%; background-repeat: no-repeat;">
                                <h5>Re-enter Password</h5>
                                <input type="Password" name="user_password_re-enter" id="user_password_re-enter" class="form-control" placeholder="********">
                            </div>
                            <div class="col-md-6 mb20" style="background-size: 100%; background-repeat: no-repeat;">
                                <h5>Language</h5>
                                <p class="p-info">Select your prefered language.</p>
                                <div id="select_lang" class="dropdown fullwidth" style="background-size: 100%; background-repeat: no-repeat;">
                                    <a href="#" class="btn-selector">English</a>
                                    <ul>
                                        <li class="active"><span>English</span></li>
                                        <li><span>France</span></li>
                                        <li><span>German</span></li>
                                        <li><span>Japan</span></li>
                                        <li><span>Italy</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb20" style="background-size: 100%; background-repeat: no-repeat;">
                                <h5>Hour Format</h5>
                                <p class="p-info">Select your prefered language.</p>
                                <div id="select_hour_format" class="dropdown fullwidth" style="background-size: 100%; background-repeat: no-repeat;">
                                    <a href="#" class="btn-selector">24-hour</a>
                                    <ul>
                                        <li class="active"><span>24-hour</span></li>
                                        <li><span>12-hour</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-2" style="background-size: 100%; background-repeat: no-repeat; display: none;">
                        <div class="row" style="background-size: 100%; background-repeat: no-repeat;">
                            <div class="col-md-6 mb-sm-20" style="background-size: 100%; background-repeat: no-repeat;">
                                <div class="switch-with-title s2" style="background-size: 100%; background-repeat: no-repeat;">
                                    <h5>Discount Notifications</h5>
                                    <div class="de-switch" style="background-size: 100%; background-repeat: no-repeat;">
                                      <input type="checkbox" id="notif-item-sold" class="checkbox">
                                      <label for="notif-item-sold"></label>
                                    </div>
                                    <div class="clearfix" style="background-size: 100%; background-repeat: no-repeat;"></div>
                                    <p class="p-info">You'll get notification while new discount available.</p>
                                </div>

                                <div class="spacer-20" style="background-size: 100%; background-repeat: no-repeat;"></div>

                                <div class="switch-with-title s2" style="background-size: 100%; background-repeat: no-repeat;">
                                    <h5>New Product Notification</h5>
                                    <div class="de-switch" style="background-size: 100%; background-repeat: no-repeat;">
                                      <input type="checkbox" id="notif-bid-activity" class="checkbox">
                                      <label for="notif-bid-activity"></label>
                                    </div>
                                    <div class="clearfix" style="background-size: 100%; background-repeat: no-repeat;"></div>
                                    <p class="p-info">You'll get notification while new product available.</p>
                                </div>

                            </div>

                            <div class="col-md-6" style="background-size: 100%; background-repeat: no-repeat;">
                                <div class="switch-with-title s2" style="background-size: 100%; background-repeat: no-repeat;">
                                    <h5>Daily Reports</h5>
                                    <div class="de-switch" style="background-size: 100%; background-repeat: no-repeat;">
                                      <input type="checkbox" id="notif-auction-expiration" class="checkbox">
                                      <label for="notif-auction-expiration"></label>
                                    </div>
                                    <div class="clearfix" style="background-size: 100%; background-repeat: no-repeat;"></div>
                                    <p class="p-info">We will send you a report everyday.</p>
                                </div>

                                <div class="spacer-20" style="background-size: 100%; background-repeat: no-repeat;"></div>

                                <div class="switch-with-title s2" style="background-size: 100%; background-repeat: no-repeat;">
                                    <h5>Monthly Reports</h5>
                                    <div class="de-switch" style="background-size: 100%; background-repeat: no-repeat;">
                                      <input type="checkbox" id="notif-outbid" class="checkbox">
                                      <label for="notif-outbid"></label>
                                    </div>
                                    <div class="clearfix" style="background-size: 100%; background-repeat: no-repeat;"></div>
                                    <p class="p-info">We will send you a report each month.</p>
                                </div>

                            </div>

                            <div class="spacer-20" style="background-size: 100%; background-repeat: no-repeat;"></div>
                        </div>
                    </div>

                </div>
            </div>

            <input type="button" id="submit" class="btn-main" value="Update profile">
            </form>
        </div>
    </div>
</div>
@endsection
