@extends ('layout.main_layout')

@section('Contents')
    <main class="portfolio-page style-1">
        <!-- ====== start portfolio-projects ====== -->
        <section class="portfolio-projects section-padding pt-50 style-1 bg-[#e7f1ff]">
            <div class="container">
                <div class="section-head text-center style-4 mb-40">
                    <h2 class="mb-20">Our <span> Projects </span> </h2>
                    <p>Empowering businesses, one solution at a time</p>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModalLabel"
                    aria-hidden="true" data-bs-backdrop="false">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="portfolioModalLabel">Judul Portofolio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                    <img class="img-fluid rounded" id="portfolioImage"
                                        src="https://resources.hexagon.co.id/storage/portfolio/Aplikasi%20UMKM%20Sumedang_umkm-dashboard.png"
                                        alt="Gambar Portofolio">
                                </div>
                                <p id="portfolioDescription"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .modal-body {
                        max-height: 60vh;
                        overflow-y: auto;
                    }

                    .modal-header {
                        position: sticky;
                        top: 0;
                        background: white;
                        z-index: 1000;
                    }

                    .modal-dialog {
                        max-width: 800px;
                    }

                    .control.active {
                        color: #007bff;
                    }
                </style>
                <div class="controls" id=Category>
                    {{-- disini adalah category --}}
                </div>
                <section class="portfolio style-1">
                    <div class="content">
                        <div id="cardsContainer" class="row mix-container">
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
