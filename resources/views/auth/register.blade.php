@extends('frontend.layout')
@section('content')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="text-light ">
        {{-- <img src="images/background/subheader.jpg" class="jarallax-img" alt=""> --}}
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="text-dark">Register</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->


    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Don't have an account? Register now.</h3>
                    <p>Welcome to Rentaly. We're excited to have you on board. By creating an account with us, you'll gain access to a range of benefits and convenient features that will enhance your car rental experience.</p>

                    <div class="spacer-10"></div>

                    <form name="contactForm" id='contact_form' class="form-border"  method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Name:</label>
                                    <input type='text' name='name'id='name' required autofocus autocomplete="name" class="form-control">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Email Address:</label>
                                    <input type='text' name='email' id='email' class="form-control" required autocomplete="username">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Choose a Username:</label>
                                    <input type='text' name='username' id='username' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Phone:</label>
                                    <input type='text' name='phone' id='phone' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Password:</label>
                                    <input type='password' name='password' id='password' class="form-control" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Re-enter Password:</label>
                                    <input type='password' id="password_confirmation" name="password_confirmation" required autocomplete="new-password" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-12">

                                <div id='submit' class="pull-left">
                                    <input type='submit' id='send_message' value='Register Now' class="btn-main color-2">
                                </div>

                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                <div class="clearfix"></div>

                            </div>

                        </div>
                    </form>
                    <p class="mt-2">Already Registred? <a href="{{ route('login') }}">Login Here</a> </p>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- content close -->
@endsection
