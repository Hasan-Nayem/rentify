<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $sysSettings = \App\Models\SystemSetting::first();
        $favicon = !empty($sysSettings->favicon) ? asset($sysSettings->favicon) : asset('/frontend/images/icon.png');
        $siteTitle = !empty($sysSettings->system_name) ? $sysSettings->system_name : 'Rentaly';
    @endphp
    <link rel="icon" href="{{ $favicon }}" type="image/png" />
    @include('backend.includes.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>{{ $siteTitle }} - Admin</title>
</head>
<body>
    <!--start wrapper-->
    <div class="wrapper">
        @include('backend.includes.header')
        @include('backend.includes.asidebar')
        <!--start content-->
        <main class="page-content">
            @yield('content')
        </main>
        <!--end page main-->
        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->
    @include('backend.includes.toast')
    @include('backend.includes.script')
</body>
</html>
