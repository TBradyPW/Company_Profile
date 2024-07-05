@extends ('layout.service_layout')
<!--Contents-->

@section('Contents')
    <!-- ====== start header ====== -->
    <header class="section-padding style-1" data-scroll-index="0">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="section-head mb-60">
                                <h6 class="color-main text-uppercase">Hexagon Inc</h6>
                                <h2>
                                    IT <br><span class="fw-normal">Consultan</span>
                                </h2>
                            </div>
                            <div class="text" id="keterangan">
                            </div>
                            <div class="bttns mt-5">
                                <a href="{{ url('Services') }}"
                                    class="btn btn-dark sm-butn butn-gard  border-0 text-white rounded-pill bg-blue5 fw-bold text-white me-4">
                                    <span>our services</span>
                                </a>
                                <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity class="vid-btn">
                                    <i class="bi bi-play wow heartBeat infinite slow"></i>
                                    <span>
                                        Hexagon’s <br> Showreels
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="img">
                            <img src="{{ asset('assets/Main/img/header/head.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/Main/img/header/head_shape_r.png') }}" alt="" class="head-shape-r wow">
        <img src="{{ asset('assets/Main/img/header/head_shape_l.png') }}" alt="" class="head-shape-l wow">
    </header>
    <!-- ====== end header ====== -->

    <main>
        <!-- ====== start about ====== -->
        <section class="about style-1" data-scroll-index="1">
            <div class="container">
                <div class="content">
                    <div
                        class="about-logos d-flex align-items-center justify-content-between border-bottom border-1 brd-light pb-20">
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0">
                            <img src="{{ asset('assets/Main/img/about/about_logos/1.png') }}" alt="">
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/Main/img/about/about_logos/2.png') }}" alt="">
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.4s">
                            <img src="{{ asset('assets/Main/img/about/about_logos/3.png') }}" alt="">
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.6s">
                            <img src="{{ asset('assets/Main/img/about/about_logos/4.png') }}" alt="">
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.8s">
                            <img src="{{ asset('assets/Main/img/about/about_logos/5.png') }}" alt="">
                        </a>
                    </div>
                    <div class="about-info">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="title">
                                    <h3 class=" wow fadeInUp slow">“Technology is best when it brings people together.”
                                    </h3>
                                    <small class=" wow fadeInUp slow fw-bold">Patricia Cross</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info">
                                    <h6 class=" wow fadeInUp slow">We can help to maintain and modernize your IT
                                        infrastructure & solve various infrastructure-specific issues a business may
                                        face.</h6>
                                    <p class=" wow fadeInUp slow">Hexagon Co is the partner of choice for many of the
                                        world’s leading enterprises, SMEs and technology challengers. We help businesses
                                        elevate their value through custom software development, product design, QA and
                                        consultancy services.</p>
                                    <a href="page-about-5.html"
                                        class="btn btn-outline-light mt-5 sm-butn wow fadeInUp slow">
                                        <span>more about us</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-numbers">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="num-item wow fadeInUp" data-wow-delay="0">
                                    <div class="num">
                                        <span class="counter">
                                            20
                                        </span>
                                        <span>
                                            <i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                    <div class="inf">
                                        Years of Experience
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="num-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="num">
                                        <span class="counter">
                                            15
                                        </span>
                                        <span>
                                            K
                                        </span>
                                    </div>
                                    <div class="inf">
                                        Projects completed
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="num-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="num">
                                        <span class="counter">
                                            240
                                        </span>
                                    </div>
                                    <div class="inf">
                                        Awards achievied
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="num-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="num">
                                        <span class="counter">
                                            180
                                        </span>
                                    </div>
                                    <div class="inf">
                                        Satisfied clients on 24 countries
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('assets/Main/img/about/num_shap.png') }}" alt="" class="about_shap">
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->


        <!-- ====== start services ====== -->
        <section class="services section-padding style-1" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                        <div class="section-head mb-60">
                            <h6 class="color-main text-uppercase wow fadeInUp">our services</h6>
                            <h2 class="wow fadeInUp">
                                Perfect IT Solutions <span class="fw-normal">For Your Business</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0">
                                <h5>
                                    <a href="page-services-5.html"> IT Consultation </a>
                                    <span class="num">01</span>
                                </h5>
                                <div class="icon">
                                    <img src="{{ asset('assets/Main/img/icons/serv_icons/1.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Strategy</a>
                                        <a href="#">Consultation</a>
                                        <a href="#">Management</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0.2s">
                                <h5>
                                    <a href="page-services-5.html"> Data Security </a>
                                    <span class="num">02</span>
                                </h5>
                                <div class="icon">
                                    <img src="{{ asset('assets/Main/img/icons/serv_icons/2.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Management</a>
                                        <a href="#">Backup & Recovery</a>
                                        <a href="#">Transfer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0.4s">
                                <h5>
                                    <a href="page-services-5.html"> Website Development </a>
                                    <span class="num">03</span>
                                </h5>
                                <div class="icon">
                                    <img src="{{ asset('assets/Main/img/icons/serv_icons/3.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Ecommerce</a>
                                        <a href="#">Landing Page</a>
                                        <a href="#">CMS</a>
                                        <a href="#">Plugin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-box mb-4 mb-md-0 wow fadeInUp" data-wow-delay="0">
                                <h5>
                                    <a href="page-services-5.html"> UI/UX Design </a>
                                    <span class="num">04</span>
                                </h5>
                                <div class="icon">
                                    <img src="{{ asset('assets/Main/img/icons/serv_icons/4.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Website</a>
                                        <a href="#">Mobile App</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-box mb-4 mb-md-0 wow fadeInUp" data-wow-delay="0.2s">
                                <h5>
                                    <a href="page-services-5.html"> Cloud Services </a>
                                    <span class="num">05</span>
                                </h5>
                                <div class="icon">
                                    <img src="{{ asset('assets/Main/img/icons/serv_icons/5.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Cloud Storerage</a>
                                        <a href="#">Hosting & VPS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                                <h5>
                                    <a href="page-services-5.html"> Game Development </a>
                                    <span class="num">06</span>
                                </h5>
                                <div class="icon">
                                    <img src="{{ asset('assets/Main/img/icons/serv_icons/6.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Unity 2D/3D</a>
                                        <a href="#">VR/AR</a>
                                        <a href="#">iOS & Android</a>
                                        <a href="#">HTC Vive</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/Main/img/services/ser_shap_l.png') }}" alt="" class="ser_shap_l">
            <img src="{{ asset('assets/Main/img/services/ser_shap_r.png') }}" alt="" class="ser_shap_r">
        </section>
        <!-- ====== end services ====== -->


        <!-- ====== start choose-us====== -->
        <section class="choose-us section-padding pt-0 style-1" data-scroll-index="3">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-5">
                        <div class="info">
                            <div class="section-head mb-60">
                                <h6 class="color-main text-uppercase wow fadeInUp">Why choose us</h6>
                                <h2 class="wow fadeInUp">
                                    Boost Your Business <span class="fw-normal">With New Tech</span>
                                </h2>
                            </div>
                            <div class="text">
                                Our team can assist you in transforming your business through latest tech capabilities
                                to stay ahead of the curve.
                            </div>
                            <ul>
                                <li class="wow fadeInUp">
                                    <span class="icon">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <h6>
                                        Latest IT Solutions & Integration With Blockchain
                                    </h6>
                                </li>
                                <li class="wow fadeInUp">
                                    <span class="icon">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <h6>
                                        Over 100+ Payment Gateways Support
                                    </h6>
                                </li>
                                <li class="wow fadeInUp">
                                    <span class="icon">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <h6>
                                        AI Machine & Deep Learning
                                    </h6>
                                </li>
                                <li class="wow fadeInUp">
                                    <span class="icon">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <h6>
                                        Dedicated Support 24/7
                                    </h6>
                                </li>
                            </ul>

                            <a href="page-about-5.html" class="btn butn-gard border-0 text-white wow fadeInUp">
                                <span>How We Works</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/Main/img/choose_us/choose_lines.svg') }}" alt="" class="choose-us-img">
            <img src="{{ asset('assets/Main/img/choose_us/choose_brands.png') }}" alt=""
                class="choose-us-brands">
            <img src="{{ asset('assets/Main/img/choose_us/choose_bubbles.png') }}" alt=""
                class="choose-us-bubbles">
        </section>
        <!-- ====== end choose-us====== -->


        <!-- ====== start portfolio ====== -->
        <section class="portfolio section-padding bg-gray style-1" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                        <div class="section-head mb-60">
                            <h6 class="color-main text-uppercase wow fadeInUp">Portfolio</h6>
                            <h2 class="wow fadeInUp">
                                Latest Projects <span class="fw-normal">From Our Team</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="content wow fadeIn slow">
                    <div class="portfolio-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" id="portofolio">
                            </div>
                        </div>
                    </div>

                    <!-- ====== slider pagination ====== -->
                    <div class="swiper-pagination"></div>

                    <!-- ====== slider navigation ====== -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            </div>
            <img src="{{ asset('assets/Main/img/projects/prog/shap_r.png') }}" alt="" class="shap_r">
            <img src="{{ asset('assets/Main/img/projects/prog/shap_l.png') }}" alt="" class="shap_l">
        </section>
        <!-- ====== end portfolio ====== -->


        <!-- ====== start testimonials ====== -->
        <section class="testimonials section-padding style-1" data-scroll-index="5">
            <div class="container">
                <div class="section-head mb-60 text-center">
                    <h6 class="color-main text-uppercase wow fadeInUp">testimonials</h6>
                    <h2 class="wow fadeInUp">
                        The Trust <span class="fw-normal">From Clients</span>
                    </h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="vid_img mb-2 mb-md-0 wow zoomIn slow">
                                <img src="{{ asset('assets/Main/img/testimonials/testi.jpg') }}" alt="">
                                <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity class="play_icon">
                                    <i class="bi bi-play"></i>
                                </a>
                                <div class="img_info wow fadeInUp">
                                    <h4><a href="#">Casper Defloy</a></h4>
                                    <small><a href="#">Tech Leader at Esty Inc</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="info wow fadeInUp">
                                <div class="client_card mb-2" data-wow-delay="0">
                                    <div class="user_img">
                                        <img src="{{ asset('assets/Main/img/testimonials/user1.jpg') }}" alt="">
                                    </div>
                                    <div class="inf_content">
                                        <div class="rate_stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <h6>
                                            “Hexagon provide perfect IT solutions, fast process and affordable price.
                                            We’re really satisfied!”
                                        </h6>
                                        <p>Ibrahima K. <span class="text-muted">/ Senior Marketing at Amazon</span></p>
                                    </div>
                                </div>
                                <div class="client_card mb-2" data-wow-delay="0.2s">
                                    <div class="user_img">
                                        <img src="{{ asset('assets/Main/img/testimonials/user2.jpg') }}" alt="">
                                    </div>
                                    <div class="inf_content">
                                        <div class="rate_stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <h6>
                                            “Hexagon - 1st my choice for cloud services method”
                                        </h6>
                                        <p> Ben S. <span class="text-muted">/ CEO at ThemesCamp</span></p>
                                    </div>
                                </div>
                                <div class="client_card" data-wow-delay="0.4s">
                                    <div class="user_img">
                                        <img src="{{ asset('assets/Main/img/testimonials/user3.jpg') }}" alt="">
                                    </div>
                                    <div class="inf_content">
                                        <div class="rate_stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <h6>
                                            “Our profit increased so much. Really Awesome!”
                                        </h6>
                                        <p>Alexander A. <span class="text-muted">/ Tech Leader of Traveloka</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end testimonials ====== -->

        <!-- ====== start team ====== -->
        <section class="team section-padding pt-0 style-1">
            <div class="container">
                <div class="section-head mb-60 text-center">
                    <h6 class="color-main text-uppercase wow fadeInUp">meet our expert</h6>
                    <h2 class="wow fadeInUp">
                        Clients Satisfaction, <span class="fw-normal">Our Reputation</span>
                    </h2>
                </div>
                <div class="content">
                    <div class="team_box wow fadeInUp" data-wow-delay="0">
                        <div class="avatar">
                            <img src="{{ asset('assets/Main/img/team/1.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Michael Edwards</a></h6>
                            <small>CEO Founder</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="avatar">
                            <img src="{{ asset('assets/Main/img/team/2.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Bobby Kane</a></h6>
                            <small>CTO</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="avatar">
                            <img src="{{ asset('assets/Main/img/team/3.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Robert Downey Jr</a></h6>
                            <small>Project Manager</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="avatar">
                            <img src="{{ asset('assets/Main/img/team/4.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Andrew Robertson</a></h6>
                            <small>Marketing Leader</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="avatar">
                            <img src="{{ asset('assets/Main/img/team/5.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Alexander Avery</a></h6>
                            <small>Creative Director</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bttns mt-4 text-center">
                    <a href="page-about-5.html" class="btn btn-dark wow zoomIn">
                        <span>See All Team</span>
                    </a>
                    <a href="page-contact-5.html" class="btn butn-gard border-0 text-white wow zoomIn">
                        <span>Join Our Team</span>
                    </a>
                </div>
            </div>
            <img src="{{ asset('assets/Main/img/team/team_shap.png') }}" alt="" class="team_shap">
        </section>
        <!-- ====== end team ====== -->

        <!-- ====== start blog ====== -->
        <section class="blog section-padding bg-gray style-1" data-scroll-index="6">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                        <div class="section-head mb-60">
                            <h6 class="color-main text-uppercase wow fadeInUp">our press</h6>
                            <h2 class="wow fadeInUp">
                                Latest Posts <span class="fw-normal">From Our Press</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="blog_slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" id="News">
                            </div>
                        </div>
                        <!-- ====== slider navigation ====== -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end blog ====== -->
    </main>
    <!--End-Contents-->
@endsection

@section('script')
    <script src="{{ asset('assets/Main/js/itconsul.js') }}"></script>
@endsection
