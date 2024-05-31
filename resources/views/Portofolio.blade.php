@extends ('layout.main_layout')

@section('Contents')
    <main class="portfolio-page style-1">
        <!-- ====== start portfolio-projects ====== -->
        <section class="portfolio-projects section-padding pt-50 style-1 bg-white">
            <div class="container">
                <div class="section-head text-center style-4 mb-40">
                    <small class="title_small">portfolio</small>
                    <h2 class="mb-20">Our <span> Projects </span> </h2>
                    <p>We have an experienced team of production and inspection personnel to ensure quality.</p>
                </div>
                <div class="controls" id=Category>
                    {{-- disini adalah category --}}
                </div>
                <section class="portfolio style-1">
                    <div class="content">
                        <div id="cardsContainer" class="row mix-container">
                            {{-- ini card  --}}
                            {{-- <div class="col-lg-4 mix security consultation">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{ asset('assets/Main/img/projects/prog/1.jpg') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Infrastructure Upgrade </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">IT Consultation</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">Consultation</a>
                                            <a href="#">Management</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="text-center">
                                <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white me-4" target="_blank">
                                    <small> Show More (24) </small>
                                </a>
                            </div>
                </section>
            </div>
        </section>
        <section class="download section-padding style-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="content text-center">
                            <div class="section-head text-center style-4">
                                <h2 class="mb-20"> Access your business potentials today & find opportunity for <span>
                                        bigger success </span> </h2>
                            </div>
                            <div class="butns mt-70">
                                <a href="page-contact-app.html" class="btn rounded-pill bg-blue4 fw-bold text-white me-4"
                                    target="_blank">
                                    <small> Start A Project Now </small>
                                </a>
                                <a href="page-about-app.html" class="btn rounded-pill hover-blue4 fw-bold border-blue4"
                                    target="_blank">
                                    <small> See Pricing & Plan </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/Main/img/contact_globe.svg') }}" alt="" class="contact_globe">
        </section>
        <!-- ====== end portfolio-projects ====== -->
    </main>
@endsection

@section('script')
    <script src="{{ asset('assets/Main/js/portofolio.js') }}"></script>
@endsection
