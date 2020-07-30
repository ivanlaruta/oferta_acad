<!DOCTYPE html>
<html lang="en">

<head>
    <title>EGPP</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('templates/datta-able/template/assets/css/style.css')}}">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    @include('layouts.partials.sidebar')
    @include('layouts.partials.header')
    @yield('content')
    

    <!-- Required Js -->

    <script src="{{asset('templates/datta-able/template/assets/js/vendor-all.min.js')}}"></script>
	<script src="{{asset('templates/datta-able/template/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('templates/datta-able/template/assets/js/pcoded.min.js')}}"></script>

</body>
</html>
