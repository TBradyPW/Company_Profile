<!DOCTYPE html>
<html>

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Hexagon - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />
    <!-- Title  -->
    <title>Hexagon Inc</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/Main/img/fav-hexagon.png') }}" title="Favicon" sizes="" />
    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/bootstrap.min.css') }}">
    <!-- ====== font family ====== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/lity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/Main/css/lib/swiper.min.css') }}" />
    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/Main/css/style.css') }}" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dompurify@2.3.4/dist/purify.min.js"></script>
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
    <nav class="navbar navbar-expand-lg navbar-light style-1">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/Main/img/hexagon-resize.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('IT Consultation') }}">
                            IT Consultan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Digital Marketing') }}">
                            Digital Marketing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Branding') }}">
                            Branding
                        </a>
                    </li>
                </ul>
                <div class="nav-side">
                    <div class="hotline pe-4">
                        <div class="icon me-3">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="cont">
                            <small class="text-muted m-0">Contact Hexagon</small>
                            <h6>(+23) 5535 68 68</h6>
                        </div>
                    </div>
                    <div class="qoute-nav ps-4">
                        <a href="page-contact-5.html" class="btn sm-butn butn-gard border-0 text-white">
                            <span>Free Quote</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

    <!--Contents-->
    @yield('Contents')
    <!--End-Contents-->
    <!-- ====== start chat-banner ====== -->
    <section class="chat-banner style-7 py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-3 col-sm-6 d-none d-lg-block">
                    <div class="img img1">
                        <img src="{{ asset('assets/Main/img/vector1.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="info text-center text-lg-left">
                        <p> Hire Us For Your Project </p>
                        <h3> Let's Work Together </h3>
                        <div class="btns mt-4">
                            <a href="#0"
                                class="btn btn-icon-circle rounded-pill bg-dark text-white fw-bold me-3 mb-3 mb-lg-0">
                                <small> Estimate Project <i class="fas fa-long-arrow-alt-right"></i> </small>
                            </a>
                            <a href="#0" class="btn btn-icon-circle rounded-pill border-light text-white">
                                <small> Contact Us <i class="fas fa-long-arrow-alt-right"></i> </small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="img img2">
                        <img src="{{ asset('assets/Main/img/vector2.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end chat-banner ====== -->
    <!-- ====== start footer ====== -->
    <footer class="style-7">
        <div class="container">
            <div class="content section-padding">
                <div class="row">
                    <div class="col-lg-4 border-1 border-end brd-gray">
                        <div class="info-logo">
                            <a href="#" class="logo">
                                <img src="{{ asset('assets/Main/img/Hexagon-logo.png') }}" alt="">
                            </a>
                            <div class="text">
                                Founded under the name PT. Hexagon Karyatama Indonesia, Hexagon Inc. is a company that
                                operates in the field of digital artwork and IT solutions. With a focus on education and
                                a commitment to providing high-quality services, we have established ourselves as a
                                leading provider in our industry.
                            </div>
                            <div class="social-links">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="links-side">
                            <div class="row gx-5">
                                <div class="col-lg-6">
                                    <div class="links-group">
                                        <h5>What We Do</h5>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul class="links">
                                                    <li>
                                                        <a href="#">Online Marketing</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Technology</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Business</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Content strategy</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Development</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Advertising Strategy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul class="links">
                                                    <li>
                                                        <a href="#">Game Development</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Application Design</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">IT Solutions</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Texture & Pattern</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Data Analysis</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="links-group">
                                        <h5>More Pages</h5>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul class="links">
                                                    <li>
                                                        <a href="#">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blogs</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Shop</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Contact</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Privacy Policy</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Terms of Use</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul class="links">
                                                    <li>
                                                        <a href="#">Refund Policy</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Terms Conditions</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Join Us <small
                                                                class="text-uppercase bg-blue7 text-white py-1 px-3 rounded-pill ms-2 lh-2">
                                                                hiring </small></a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Get In Touch</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">FAQ Page</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot bg-white p-3 rounded-pill text-center">
                <p> Full Copyright <a href="#" class="fw-bold"> @Hexagon Inc. </a> - 2024 </p>
            </div>
        </div>
        <!-- <img src="{{ asset('assets/Main/img/footer/footer_4_wave.png') }}" alt="" class="wave"> -->
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
    <script src="{{ asset('assets/Main/js/lib/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/lib/jquery.counterup.js') }}"></script>
    <!-- <script src="{{ asset('assets/Main/js/lib/pace.js') }}"></script> -->
    <script src="{{ asset('assets/Main/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/Main/js/main.js') }}"></script>
    @yield('script')
    <script>
        $(document).ready(function() {
            console.log('Document ready');
            $("#myPreloader").fadeOut();

            $(document).ajaxStart(function() {
                console.log('AJAX Start');
                $("#myPreloader").fadeIn();
            });
            $(document).ajaxStop(function() {
                console.log('AJAX Stop');
                $("#myPreloader").fadeOut();
            });
        });
    </script>
</body>

</html>
