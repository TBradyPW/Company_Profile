@extends ('layout.main_layout')

@section('Contents')
    <main class="services-page style-5"><!-- ====== start features ====== -->
        <section class="features section-padding pt-50 style-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head text-center mb-60 style-5">
                            <h2 class="mb-20"> Our <span> Services </span> </h2>
                            <p>
                                We provide perfect IT Solutions for your business
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row" id="our-service">
                        <!-- konten di append kesini -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end features ====== -->

        <!-- ====== start services ====== -->
        <section class="services section-padding bg-white pb-50 style-6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head text-center mb-60 style-5">
                            <h2 class="mb-20"> Our Top <span> Services </span> </h2>
                            <p>
                                Build Your brand and grow your business
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="services-slider position-relative style-6">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal services-slider">
                        <div class="swiper-wrapper" id="top-service-swiper">
                            <!-- konten di append kesini -->
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end services ====== -->

        <!-- ====== start about ====== -->
        <section class="about pt-0 pb-150 style-5">
            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> Optimized User <span> Experiences </span> </h2>
                            </div>
                            <p>The uploading and updating processes made by suppliers can be streamlined through
                                front-end dashboards that create better ease of access. </p>
                            <div class="line-links">
                                <a href="#">Sales Breakdown &amp; Funnel</a>
                                <a href="#">Abadoned Carts</a>
                                <a href="#">Revenue by Channel &amp; Devices</a>
                            </div>
                        </div>
                        <div class="col-lg-8 order-0 order-lg-2">
                            <div class="img main-img1">
                                <img src=" {{ asset('assets/Main/img/about/about_s5_1_1.png') }}" alt=""
                                    class="sm-circle">
                                <img src="{{ asset('assets/Main/img/about/jatidiri.png') }}" alt=""
                                    class="img-body">
                                {{-- <img src="{{ asset('assets/Main/img/about/about_s5_1_3.png') }}" alt=""
                                    class="card1">
                                <img src="{{ asset('assets/Main/img/about/about_s5_1_4.png') }}" alt=""
                                    class="card2"> --}}
                                <img src="{{ asset('assets/Main/img/about/about_s5_1_5.png') }}" alt=""
                                    class="lg-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="img main-img2">
                                <img src="{{ asset('assets/Main/img/about/about_s5_2_1.png') }}" alt="">
                                <img src="{{ asset('assets/Main/img/about/about_s5_2_2.png') }}" alt=""
                                    class="img-body">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section-head mb-30 style-5">
                                <h2> 100+ Payment <span> Gateways </span> </h2>
                            </div>
                            <p>
                                With Iteck Marketplace, choose from hundreds of payment gateways for your customers.
                                From PayPal to Stripe to Skrill, Visa Debit, Master Card, etc
                            </p>
                            <ul class="list-icon">
                                <li>
                                    <span class="icon">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <h6>
                                        100% Guarantee Secure Payment
                                    </h6>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <h6>
                                        1% Extra Fees For All
                                    </h6>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <h6>
                                        Support Dispute &amp; Refund 24/7
                                    </h6>
                                </li>
                            </ul>
                            <a href="page-contact-5.html"
                                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-50">
                                <span> Book A Free Demo </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- ====== end about ====== -->

        <!-- ====== start testimonials ====== -->
        <section class="testimonials section-padding bg-gray5 style-5">
            <div class="container">
                <div class="section-head text-center mb-60 style-5">
                    <h2 class="mb-20"> Clients <span> Reviews </span> </h2>
                    <p> Hexagon Inc. loved from thoudsands customer worldwide and get trusted from big companies. </p>
                </div>
            </div>
            <div class="content">
                <div class="testimonial-slider position-relative style-5">
                    <div class="swiper-container pb-70 swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" id="client-reviews-service">
                            <!-- konten di append ke sini -->
                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end testimonials ====== -->
    </main>
@endsection

@section('script')
    <script src="{{ asset('assets/Main/js/service.js') }}"></script>
@endsection
