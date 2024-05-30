@extends ('layout.main_layout')

@section('Contents')
    <main class="about-page style-5">
        <!-- ====== start about ====== -->
        <header class="about-page-sec style-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="info">
                            <h1>Be the best partner <br> to create solutions
                                <span>
                                    together
                                    <img src="{{ asset('assets/Main/img/header/head5_line.png') }}" alt=""
                                        class="head-line">
                                    <img src="{{ asset('assets/Main/img/header/head5_pen.png') }}" alt=""
                                        class="head-pen">
                                </span>
                            </h1>
                            <p id="brand_keterangan">
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-vid">
                            <img src="{{ asset('assets/Main/img/vid-banner.png') }}" alt="">
                            <a id="linkyt" href="" data-lity class="play-icon">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/Main/img/header/hand_megaphone.png') }}" alt=""
                class="hand-mega slide_up_down">
            <img src="{{ asset('assets/Main/img/header/head6_rating.png') }}" alt=""
                class="head6-rating scale_up_down">
            <img src="{{ asset('assets/Main/img/header/header5_linechart.png') }}" alt=""
                class="head6-charts scale_up_down">
            <img src="{{ asset('assets/Main/img/header/rocket.png') }}" alt="" class="head6-rocket">
        </header>
        <!-- ====== end about ====== -->


        <!-- ====== start Reasons ====== -->
        <section class="community pt-40 style-5">
            <div class="container">
                <div class="section-head text-center mb-40 style-5">
                    <h2 class="mb-20"> Work <span> Values </span> </h2>
                    <p>we value professionalism, dedication, and a commitment to excellence</p>
                </div>
                <div class="content rounded-pill" id="culture">

                </div>
        </section>
        <!-- ====== end Reasons ====== -->


        <!-- ====== start about ====== -->
        <section class="about section-padding style-5 style-6">
            <div class="content border-0 p-0">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> Our Business <span> Philosophy </span> </h2>
                            </div>
                            <p id="philosophy"></p>
                            <div class="line-links">
                                <a href="#">Our History</a>
                                <a href="#">Vision & Mision</a>
                                <a href="#">Carrier</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img">
                                <img src="{{ asset('assets/Main/img/Main/superman_3d.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/Main/img/choose_us/about_s6_bubbles.png') }}" alt=""
                class="bubbles rotate-center">
        </section>
        <!-- ====== end about ====== -->


        <!-- ====== start choose us ====== -->
        <section class="choose-us style-6">
            <div class="container">
                <div class="row justify-content-between gx-0">
                    <div class="col-lg-6">
                        <div class="img">
                            <img src="{{ asset('assets/Main/img/choose_us/man_arrow.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="section-head mb-30 style-5">
                                <h2> Our <span> Services </span> </h2>
                            </div>
                            <div class="text mb-50 fs-12px color-666">
                                Build Your brand and grow your business
                            </div>
                            <ul id="service-abt">

                            </ul>
                            <a href="page-services-5.html"
                                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-60 px-5">
                                <span>See More </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/Main/img/choose_us/about_s6_bubbles.png') }}" alt=""
                class="bubbles rotate-center">
        </section>
        <!-- ====== end choose us ====== -->


        <!-- ====== start clients ====== -->
        <section class="clients section-padding style-5">
            <div class="section-head text-center mb-40 style-5">
                <h2 class="mb-20"> Our <span> Client </span> </h2>
                <p>More than 100 companies trust and choose Hexagon Inc</p>
            </div>
            <div class="content">
                <div class="clients-slider5" dir="rtl">
                    <div class="swiper-container swiper-container-atas">
                        <div class="swiper-wrapper" id="clientAtas">

                        </div>
                    </div>
                </div>

                <div class="clients-slider5" dir="rtl">
                    <div class="swiper-container swiper-container-bawah">
                        <div class="swiper-wrapper" id="clientBawah">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end clients ====== -->


        <!-- ====== start Culture ====== -->
        <section class="culture section-padding style-5">
            <div class="section-head text-center mb-70 style-5">
                <h2 class="mb-20"> Our <span> Value </span> </h2>
                <p>Learn, Bright and Idea</p>
            </div>
            <div class="content">
                <div class="culture-slider position-relative pb-80 style-5">
                    <div class="swiper-container swiper-container-value">
                        <div class="swiper-wrapper" id="value-abt">

                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- ====== end Culture ====== -->


        <!-- ====== start team ====== -->
        <section class="team section-padding style-6">
            <div class="content">
                <div class="container">
                    <div class="section-head text-center mb-70 style-5">
                        <h2 class="mb-20"> Our <span> Leaders </span> </h2>
                        <p>Profressional & Friendly is our slogan. Meet our leaders</p>
                    </div>
                    <div class="row" id="team">

                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end team ====== -->


        <!-- ====== Start Whatsapp ====== -->
        <div style="position:fixed;left:20px;bottom:10px;">
            <a href="https://api.whatsapp.com/send?phone=6281222181823&amp;text=Halo%20Admin%20Hexagon%20!"
                style="margin-bottom:10px"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="10px" width="40"
                    height="40" viewBox="0 0 80 80">
                    <path fill="#f2faff"
                        d="M7.904,58.665L7.8,58.484c-3.263-5.649-4.986-12.102-4.983-18.66 C2.826,19.244,19.577,2.5,40.157,2.5C50.14,2.503,59.521,6.391,66.57,13.446C73.618,20.5,77.5,29.879,77.5,39.855 c-0.01,20.583-16.76,37.328-37.34,37.328c-6.247-0.003-12.418-1.574-17.861-4.543l-0.174-0.096L2.711,77.636L7.904,58.665z">
                    </path>
                    <path fill="#788b9c"
                        d="M40.157,3L40.157,3c9.85,0.003,19.105,3.838,26.059,10.799C73.17,20.76,77,30.013,77,39.855 c-0.009,20.307-16.536,36.828-36.855,36.828c-6.149-0.003-12.237-1.553-17.606-4.482l-0.349-0.19l-0.384,0.101l-18.384,4.82 l4.91-17.933l0.11-0.403l-0.209-0.362c-3.22-5.574-4.92-11.94-4.917-18.41C3.326,19.52,19.852,3,40.157,3 M40.157,2 C19.302,2,2.326,18.969,2.317,39.824C2.313,46.49,4.055,53,7.367,58.735L2,78.339l20.06-5.26 c5.526,3.015,11.751,4.601,18.084,4.604h0.016c20.855,0,37.831-16.969,37.84-37.827c0-10.108-3.933-19.613-11.077-26.764 C59.78,5.942,50.28,2.003,40.157,2L40.157,2z">
                    </path>
                    <path fill="#79ba7e"
                        d="M39.99,70c-5.009-0.003-9.965-1.263-14.332-3.646l-2.867-1.564l-3.159,0.828l-6.482,1.699	l1.659-6.061l0.907-3.312l-1.718-2.974C11.38,50.437,9.997,45.255,10,39.986C10.007,23.453,23.464,10.002,39.997,10	c8.022,0.003,15.558,3.126,21.221,8.793C66.881,24.461,70,31.998,70,40.011C69.992,56.547,56.535,70,39.99,70z">
                    </path>
                    <path fill="#fff"
                        d="M56.561,47.376c-0.9-0.449-5.321-2.626-6.143-2.924c-0.825-0.301-1.424-0.449-2.023,0.449	c-0.599,0.9-2.322,2.924-2.845,3.523c-0.524,0.599-1.048,0.674-1.948,0.226c-0.9-0.449-3.797-1.4-7.23-4.462	c-2.674-2.382-4.478-5.327-5.001-6.227c-0.524-0.9-0.057-1.385,0.394-1.834c0.403-0.403,0.9-1.051,1.349-1.575	c0.449-0.524,0.599-0.9,0.9-1.5c0.301-0.599,0.151-1.126-0.075-1.575c-0.226-0.449-2.023-4.875-2.773-6.673	c-0.729-1.752-1.472-1.515-2.023-1.542c-0.524-0.027-1.123-0.03-1.722-0.03c-0.599,0-1.575,0.226-2.397,1.126	c-0.822,0.9-3.147,3.074-3.147,7.498s3.222,8.699,3.671,9.298c0.449,0.599,6.338,9.678,15.36,13.571	c2.144,0.924,3.821,1.478,5.125,1.894c2.153,0.684,4.113,0.587,5.664,0.355c1.728-0.259,5.321-2.174,6.067-4.273	c0.75-2.099,0.75-3.899,0.524-4.273C58.06,48.051,57.461,47.825,56.561,47.376z">
                    </path>
                </svg> </a>
        </div>
        <!-- ====== End Whatsapp ====== -->
    </main>
@endsection
