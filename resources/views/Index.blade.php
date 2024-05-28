@extends ('layout.index_layout')

@section ('Header')
<header class="style-2 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="content text-center text-light text-capitalize">
                        <div class="top_info">
                            <h1 class="text-uppercase">Hexagon Inc.</h1>
                            <p class="fw-light text-uppercase">
                                <strong class="fw-bold">Digital Artwork & IT Solution</strong>
                                </br> Be the best partner to create solution together
                            </p>
                            <a href="https://youtu.be/q21HgEzSLO4" data-lity class="vid-btn">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="brands mt-200 mb-80">
                            <a href="#" class="logo wow fadeInUp" data-wow-delay="0">
                                <img src="{{ asset('assets/Index/img/about/about_logos/ppa-white.png') }}" alt="">
                            </a>
                            <a href="#" class="logo wow fadeInUp" data-wow-delay="0.2s">
                                <img src="{{ asset('assets/Index/img/about/about_logos/ahza-white.png') }}" alt="">
                            </a>
                            <a href="#" class="logo wow fadeInUp" data-wow-delay="0.4s">
                                <img src="{{ asset('assets/Index/img/about/about_logos/lipi-white.png') }}" alt="">
                            </a>
                            <a href="#" class="logo wow fadeInUp" data-wow-delay="0.6s">
                                <img src="{{ asset('assets/Index/img/about/about_logos/galeri-24.png') }}" alt="">
                            </a>
                            <a href="#" class="logo wow fadeInUp" data-wow-delay="0.8s">
                                <img src="{{ asset('assets/Index/img/about/about_logos/utama-white.png') }}" alt="">
                            </a>
                        </div>
                        <h4>Integrated with over 100 mainstream media outlets</h4>
                        <p class="d-block mt-40">Hexagon Inc. is the partner of choice for many leading
                            <br> enterprises, SMEs and technology challengers. We help businesses elevate their value
                            through <br> custom software development, product design, QA and consultancy
                            services.
                        </p>
                        <a href="about.html" class="btn sm-butn border text-white radius-9 mt-60 hover-darkBlue">
                            <span>More About Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/Index/img/header/header_2.png') }}" alt="" class="head_shape2 wave">
    </header>
@endsection

@section ('Services')
<section class="services_projects section-padding">
            <div class="container">
                <div class="section-head mb-30 text-center">
                    <h2 class="text-white ltspc-20 text-uppercase fs-1 lh-1 mb-70">services</h2>
                </div>
                <div class="services_slider position-relative">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-box text-white text-center px-4 py-2 brd-light border-end style-2">
                                    <div class="icon mb-30">
                                        <img src="{{ asset('assets/Index/img/icons/serv_icons/7.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>IT Consultation</h4>
                                        <p class="op-7 mt-20 mb-30 px-3">We provide best IT solutions suit for any type
                                            of business as stragegy, management, etc</p>
                                        <div class="tags d-flex flex-wrap justify-content-center mt-30 style-2">
                                            <a href="#">Strategy</a>
                                            <a href="#">Consultation</a>
                                            <a href="#">Management</a>
                                            <a href="#">Infrastructure</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-box text-white text-center px-4 py-2 brd-light border-end style-2">
                                    <div class="icon mb-30">
                                        <img src="{{ asset('assets/Index/img/icons/serv_icons/8.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Software Development</h4>
                                        <p class="op-7 mt-20 mb-30 px-3">We provide best IT solutions suit for any type
                                            of business as stragegy, management, etc</p>
                                        <div class="tags d-flex flex-wrap justify-content-center mt-30 style-2">
                                            <a href="#">Ecommerce</a>
                                            <a href="#">Landing Page</a>
                                            <a href="#">CMS</a>
                                            <a href="#">Plugin</a>
                                            <a href="#">VR/AR</a>
                                            <a href="#">iOS & Android</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-box text-white text-center px-4 py-2 brd-light border-end style-2">
                                    <div class="icon mb-30">
                                        <img src="{{ asset('assets/Index/img/icons/serv_icons/9.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Advertising</h4>
                                        <p class="op-7 mt-20 mb-30 px-3">We provide best solutions suit for any type
                                            of business as strategy, management, etc</p>
                                        <div class="tags d-flex flex-wrap justify-content-center mt-30 style-2">
                                            <a href="#">Brand Development</a>
                                            <a href="#">Social Media Handling</a>
                                            <a href="#">Creative Visual</a>
                                            <a href="#">Content Strategy</a>
                                            <a href="#">Ads & SEO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination_circle position-relative pagi_white mt-70">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="section-head mb-30 text-center">
                    <h2 class="text-white ltspc-20 text-uppercase fs-1 lh-1 mb-70 pt-100">works</h2>
                </div>
                <div class="works_slider position-relative">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="work_card text-center d-block">
                                            <div class="img img-cover radius-6 overflow-hidden imgrotate-scale-hover">
                                                <img src="{{ asset('assets/Index/img/projects/unjani.jpg') }}" alt="">
                                            </div>
                                            <div class="info">
                                                <h4 class="text-white mt-4">
                                                    <a href="#">Banner Design UNJANI</a>
                                                </h4>
                                                <small class="color-lightBlue text-uppercase"><a href="#">Graphic Design,</a> <a href="#">Digital Marketing</a> </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="work_card text-center d-block">
                                            <div class="img img-cover radius-6 overflow-hidden imgrotate-scale-hover">
                                                <img src="{{ asset('assets/Index/img/projects/vinland.jpg') }}" alt="">
                                            </div>
                                            <div class="info">
                                                <h4 class="text-white mt-4"><a href="#">Web Design Vinland</a></h4>
                                                <small class="color-lightBlue text-uppercase"> <a href="#">Landing Page,</a> <a href="#">UI/UX Design</a> </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next radius-50 bg-transparent border brd-light"></div>
                    <div class="swiper-button-prev radius-50 bg-transparent border brd-light"></div>
                </div>
                <div class="text-center">
                    <a href="projects.html" class="btn sm-butn border text-white radius-9 mt-60 hover-darkBlue">
                        <span>See All Projects</span>
                    </a>
                </div>
            </div>
        </section>
@endsection

@section ('Reviews')
<section class="reviews style-2 border-top brd-light section-padding bg-darkBlue">
            <div class="container">
                <div class="section-head mb-30 text-center">
                    <h2 class="text-white ltspc-20 text-uppercase fs-1 lh-1 mb-70">reviews</h2>
                </div>
                <div class="reviews_slider">
                    <div class="swiper-container">
                        <!-- <div class="swiper-wrapper"> -->
                            <!-- <div class="swiper-slide">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="reviews_card text-center style-2">
                                            <h5 class="text-white lh-4">
                                                “We encountered a problem with processing <br> big data and after only 1
                                                week, Iteck’s Experts provided perfect <br> IT solutions, fast process &
                                                affordable price. <br> We’re really satisfied!”
                                            </h5>
                                            <div class="rev_user">
                                                <img src="{{ asset('assets/Index/img/team/2.jpg') }}" alt="">
                                            </div>
                                            <div class="rev_stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <small class="text-white mt-2 d-block">
                                                <span class="text-uppercase color-lightBlue">Conor M.</span> <span
                                                    class="op-7">/ Senior Marketing at Amazon</span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="swiper-slide"> -->
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="reviews_card text-center style-2">
                                            <h5 class="text-white lh-4">
                                                I am extremely satisfied with the advertising service provided by this company.<br> They are able to create creative ads and have an extraordinary impact on our business. <br>In addition, their team is friendly and easy to contact. We will continue to work with this company in the future.
                                            </h5>
                                            <div class="rev_user">
                                                <img src="{{ asset('assets/Index/img/team/1.jpg') }}" alt="">
                                            </div>
                                            <div class="rev_stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <small class="text-white mt-2 d-block">
                                                <span class="text-uppercase color-lightBlue">Mr. Budiman</span> <span
                                                    class="op-7">/ Client</span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination_circle position-relative pagi_white mt-70">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/Index/img/review/rev_l.png') }}" alt="" class="rev_l">
            <img src="{{ asset('assets/Index/img/review/rev_r.png') }}" alt="" class="rev_r">
        </section>
@endsection

