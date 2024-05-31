@extends ('layout.main_layout')

@section('Contents')
    <main class="services-page style-5">


        <!-- ====== start career list ====== -->
        <section class="features section-padding pt-50 style-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head text-center mb-60 style-5">
                            <h2 class="mb-20"> Join <span> Us ! </span> </h2>
                            <p>
                                Current Available Positions
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row" id="list-lowongan">

                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end features ====== -->

        <!-- ====== start about ====== -->
        <section class="about pt-0 pb-150 style-5">
            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> Current Available <span> Positions </span> </h2>
                            </div>
                            <p>The uploading and updating processes made by suppliers can be streamlined through
                                front-end dashboards that create better ease of access. </p>

                            <div class="accordion deskripsi-lowongan" id="accordionExample">
                                <!-- <div class="accordion-item">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading1">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-0" aria-expanded="false" aria-controls="collapse1">
                                                    Hexagon Inc
                                                </button>
                                            </h2>
                                            <div id="collapse-0" class="accordion-collapse collapse" aria-labelledby="heading1"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p class="text">
                                                        PT. Hexagon Karyatama Indonesia
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading1">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse1">
                                                    Hexagon Inc
                                                </button>
                                            </h2>
                                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p class="text">
                                                        PT. Hexagon Karyatama Indonesia
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading1">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse1">
                                                    Hexagon Inc
                                                </button>
                                            </h2>
                                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading1"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p class="text">
                                                        PT. Hexagon Karyatama Indonesia
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ====== end about ====== -->


                                <!-- ====== start cv ====== -->
                                <section class="testimonials section-padding bg-gray5 style-5">
                                    <div class="container">
                                        <div class="section-head text-center mb-60 style-5">
                                            <h2 class="mb-20"> Send Your <span> CV </span> to </h2>
                                            <h2 class="mb-20"> <span> contact@hexagon.co.id </span> </h2>
                                            <p> with subject : (your name)-(position) </p>
                                        </div>
                                    </div>

                                </section>
                                <!-- ====== end testimonials ====== -->

    </main>
@endsection

@section('script')
    <script src="{{ asset('assets/Main/js/career.js') }}"></script>
@endsection
