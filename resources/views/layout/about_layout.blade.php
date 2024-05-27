<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from iteck-html.themescamp.com/page-about-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 02:30:05 GMT -->

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>@yield('Hexagon')</title>

    <!-- Favicon -->
    <link rel="shortcut icon"
        href="{{ asset('assets/About/img/Hexagon-logo-NT.png') }}" title="Favicon" sizes="16x16" />
                
    <!-- ====== bootstrap icons cdn ====== -->
        <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css') }}"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/About/css/lib/bootstrap.min.css') }}">

    <!-- ====== font family ====== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/About/css/lib/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/About/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/About/css/lib/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/About/css/lib/lity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/About/css/lib/swiper.min.css') }}" />

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/About/css/style.css') }}" />
</head>

<body>

    <!-- ====== start loading page ====== -->
    <!-- <div id="preloader">
    </div> -->
    <!-- ---------- loader ---------- -->
    @yield('loader')
    <!-- ====== end loading page ====== -->
    <!-- ====== start navbar ====== -->
    @yield('navbar')
    <!-- ====== end navbar ====== -->

    <!--Contents-->
    <main class="about-page style-5">


        <!-- ====== start about ====== -->
        @yield('Content-About')
        <!-- ====== end about ====== -->


        <!-- ====== start Reasons ====== -->
        @yield('Content-Reason')
        <!-- ====== end Reasons ====== -->


        <!-- ====== start about ====== -->
        @yield('Content-About2')
        <!-- ====== end about ====== -->


        <!-- ====== start choose us ====== -->
        @yield('Content-Choose-Us')
        <!-- ====== end choose us ====== -->


        <!-- ====== start clients ====== -->
        @yield('Content-Clients')
        <!-- ====== end clients ====== -->


        <!-- ====== start Culture ====== -->
        @yield ('Content-Culture')
        <!-- ====== end Culture ====== -->


        <!-- ====== start team ====== -->
        @yield ('Content-Team')
        <!-- ====== end team ====== -->


        <!-- ====== Start Whatsapp ====== -->
        @yield ('Content-Whatsapp')
        <!-- ====== End Whatsapp ====== -->
    </main>
    <!--End-Contents-->

    <!-- ====== start footer ====== -->
    @yield ('footer')
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <a href="#"
        class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script src="{{ asset('assets/About/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/About/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/About/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/About/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/About/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/About/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/About/js/lib/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/About/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/About/js/lib/jquery.counterup.js') }}"></script>
    <!-- <script src="{{ asset('assets/About/js/lib/pace.js') }}"></script> -->
    <script src="{{ asset('assets/About/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/About/js/main.js') }}"></script>
    <script src="{{ asset('assets/About/js/about.js') }}"></script>

</body>


<!-- Mirrored from iteck-html.themescamp.com/page-about-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 02:30:05 GMT -->

</html>
