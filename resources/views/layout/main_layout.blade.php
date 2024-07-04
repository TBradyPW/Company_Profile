<!DOCTYPE html>
<html>

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />
    <!-- Title  -->
    <title>Hexagon Inc</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/Main/img/fav-hexagon.png') }}" title="Favicon" sizes="" />
    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css""
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/bootstrap.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.6/purify.min.js"></script>

    <!-- ====== font family ====== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/lity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/swiper.min.css') }}" />

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/Main/css/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/Index/css/lib/bootstrap.min.css') }}">
</head>

<body>

    <!-- ====== start loading page ====== -->
    <div class="mypreloader" id="myPreloader">
        <div class="spinner" id="loadingBulat"></div>
    </div>
    <style>
        #myPreloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #dfe5ed;
            z-index: 9999;
        }

        #loadingBulat {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 50px;
            height: 50px;
            margin-top: -25px;
            /* Mengatur tinggi agar loading bulat berada di tengah2 layar */
            margin-left: -25px;
            /* Mengatur lebar agar loading bulat berada di tengah2 layar */
            border: 5px solid #146df8;
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s linear infinite;
            z-index: 200;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <!-- ====== end loading page ====== -->

    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light style-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/Main/img/Hexagon-logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Home') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('About') }}">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Portofolio') }}">
                            Portfolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Services') }}">
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('News') }}">
                            News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Career') }}">
                            Career
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Contact') }}">
                            Contact
                        </a>
                    </li>

                </ul>
                <div class="col-lg-2">
                    <div class="items">
                        <div class="socail-icons">
                            <a href="https://twitter.com/"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2"
                                target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://facebook.com/"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://instagram.com/"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

    <!--Contents-->
    @yield ('Contents')
    <!--End-Contents-->

    <!-- ====== start footer ====== -->
    <footer class="style-5">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-lg-3">
                    <div class="items">
                        <div class="title">
                            PT. Hexagon Karyatama Indonesia
                        </div>
                        <small class="text">
                            Founded under the name PT. Hexagon Karyatama Indonesia, Hexagon Inc. is a company that
                            operates
                            in the field of digital artwork and IT solutions. With a focus on education and a commitment
                            to
                            providing high-quality services, we have established ourselves as a leading provider in our
                            industry
                        </small>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="items">
                        <div class="title">
                            Information
                        </div>
                        <small class="text mb-10 d-block">
                            Jl. Abdul Halim No.128, Cimahi Tengah, <br> Kota Cimahi, Jawa Barat 40522, INA
                        </small>
                        <small class="text mb-10 d-block">
                            <a href="https://wa.me/6281222181823">+62 812 2218 1823</a>
                        </small>
                        <small class="text d-block">
                            <a
                                href="https://mail.google.com/mail/u/0/?view=cm&amp;tf=1&amp;fs=1&amp;to=contact@hexagon.co.id">contact@hexagon.co.id</a>
                        </small>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="items">
                        <div class="title">
                            Our Ecosystem
                        </div>
                        <ul>
                            <li>
                                <a href="https://hexamedia.id/"> Hexamedia </a>
                            </li>
                            <li>
                                <a href="#"> Hexa Journal </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="items">
                        <div class="title">
                            Follow Us
                        </div>
                        <div class="socail-icons">
                            <a href="https://twitter.com/"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2"
                                target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://facebook.com/"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://instagram.com/"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <img src="{{ asset('assets/Main/img/logo-footer-50.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <small class="small">
                            © 2022 Copyrights by <a href="#" class="fw-bold text-decoration-underline">Hexagon
                                Inc.</a> All
                            Rights Reserved.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <a href="#"
        class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script>
        window.baseURL = "{{ env('API_BASE_URL') }}"
    </script>
    <script src="{{ asset('assets/Main/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/jquery.counterup.js') }}"></script>
    <!-- <script src="{{ asset('assets/Main/js/lib/pace.js') }}"></script> -->
    <script src="{{ asset('assets/Main/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/main.js') }}"></script>
    {{-- <script src="{{ asset('assets/Main/js/portofolio.js') }}"></script> --}}
    @yield ('script')
    <script>
        $(document).ajaxStart(function() {
            // Show the preloader when an Ajax request starts
            $("#myPreloader").fadeIn();
        });
        $(document).ajaxStop(function() {
            // Show the preloader when an Ajax request starts
            $("#myPreloader").fadeOut();
        });
    </script>

</body>

</html>
