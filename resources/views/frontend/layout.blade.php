<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @php
        $sysSettings = \App\Models\SystemSetting::first();
        $favicon = !empty($sysSettings->favicon) ? asset($sysSettings->favicon) : asset('/frontend/images/icon.png');
        $siteTitle = !empty($sysSettings->system_name) ? $sysSettings->system_name : 'Rentaly';
    @endphp
    <title>{{ $siteTitle }} - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="{{ $favicon }}" type="image/gif" sizes="16x16">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $siteTitle }} - Multipurpose Vehicle Car Rental Website Template" name="description">
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

        @include('frontend.includes.toast')
        @include('frontend.includes.scripts')

</body>


</html>
