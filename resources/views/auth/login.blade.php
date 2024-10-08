@extends('frontend.layout')
@section('content')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="section-hero" aria-label="section" class="jarallax" style="background-color: #F5F8FA">
        {{-- <img src="{{ asset('/frontend/images/background/2.jpg') }}" class="jarallax-img" alt=""> --}}
        <div class="v-center">
            <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 offset-lg-4">
                            <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                                <h4>Login</h4>
                                <div class="spacer-10"></div>
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form id="form_register" class="form-border" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="field-set">
                                        <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Your email" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="field-set">
                                        <input type="password" id="password" name="password" required autocomplete="current-password"  class="form-control" placeholder="Your password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div id="submit">
                                        <input type="submit" id="send_message" value="Sign In" class="btn-main btn-fullwidth rounded-3" />
                                    </div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </form>
                                <div class="title-line">Or&nbsp;sign&nbsp;up&nbsp;with</div>
                                <div class="row g-2">
                                    <div class="col-lg-6">
                                        <a class="btn-sc btn-fullwidth mb10" href="#"><img src="{{ asset('/frontend/images/svg/google_icon.svg') }}" alt="">Google</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="btn-sc btn-fullwidth mb10" href="#"><img src="{{ asset('/frontend/images/svg/facebook_icon.svg') }}" alt="">Facebook</a>
                                    </div>
                                </div>
                                <p class="mt-3">Not Registered yet? <a href="{{ route('register') }}">Register Here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
</div>
<!-- content close -->
@endsection
