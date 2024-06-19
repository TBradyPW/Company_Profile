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
