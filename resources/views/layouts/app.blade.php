<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href=""{{asset ('assets1/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href=""{{asset ('assets1/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{asset ('assets1/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{asset ('assets1/css/style.css') }}" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>



    @yield('content')

    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
        </div>
    </div>


    <script src="{{asset ('assets1/vendor/global/global.min.js') }}"></script>
    <script src="{{asset ('assets1/js/quixnav-init.js') }}"></script>
    <script src="{{asset ('assets1/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{asset ('assets1/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{asset ('assets1/vendor/morris/morris.min.js') }}"></script>


    <script src="{{asset ('assets1/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{asset ('assets1/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{asset ('assets1/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{asset ('assets1/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{asset ('assets1/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset ('assets1/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{asset ('assets1/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{asset ('assets1/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{asset ('assets1/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


    <script src="{{asset ('assets1/js/dashboard/dashboard-1.js') }}"></script>

</body>

</html>
