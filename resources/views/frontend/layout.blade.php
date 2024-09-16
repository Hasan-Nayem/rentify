<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="{{ asset('/frontend/images/icon.png') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    @include('frontend.includes.css')
</head>

<body>
    <div id="wrapper">

        <!-- page preloader begin -->
        {{-- <div id="de-preloader"></div> --}}
        <!-- page preloader close -->

        @include('frontend.includes.header')

        @yield('content')

        <a href="#" id="back-to-top"></a>
        @include('frontend.includes.footer')

    </div>

        @include('frontend.includes.scripts')

</body>


</html>
