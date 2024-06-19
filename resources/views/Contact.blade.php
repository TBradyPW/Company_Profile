@extends ('layout.main_layout')

@section('Contents')
    <main class="contact-page style-5">
        <!-- ====== start contact page ====== -->
        <section class="contact section-padding pt-50 style-6">
            <div class="container">
                <div class="section-head text-center mb-100 style-5">
                    <h2 class="mb-20"> Get In <span> Touch </span> </h2>
                    <p>We will contact again after receive your request in 24h</p>
                </div>
                <div class="text-center mb-100">
                    <h2 class="ltspc-20 text-uppercase fs-1 lh-1 mb-50 mt-30 color-blue5">(+62)<span id="nomor"></span>
                    </h2>
                    <h4 class="fw-normal mb-20 color-000" id="email"></h4>
                    <p class="fw-normal mb-10 color-000"> </p>
                    <div id="alamat">

                    </div>
                    {{-- <p> Office 1 : </p> Gedung BITC lt.3, Jl. MHS Mintareja Sarjana Hukum, Baros, Kota Cimahi 40521 <br>
                    <br>
                    <p> Office 2 : </p> Jl. Terusan Jakarta No. 175A, Antapani, bandung 40287 <br>
                    <br>
                    <p> Marketing Office : </p> Komplek Pondok Indah Plaza 1 Blok UA No. 32 Lt. II, Jaksel, DKI Jakarta <br>
                    <br>
                    <p> Studio : </p>Jl. Abdul Halim No.128, Cimahi Tengah, Kota Cimahi 40522
                    <p></p> --}}
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="https://smartinnovates.com/items/iteck/html/contact.php" class="form"
                                method="post">
                                <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" class="form-control" placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" class="form-control" placeholder="Phone Number (option)">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" class="form-control" placeholder="Your Website (option)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select class="form-select">
                                                <option value="" selected="">How can we help you?</option>
                                                <option value="">option 1</option>
                                                <option value="">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea rows="10" class="form-control" placeholder="How can we help you?"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-check d-inline-flex mt-30 mb-30">
                                            <input class="form-check-input me-2 mt-0" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label small" for="flexCheckDefault">
                                                By submitting, i’m agreed to the <a href="#"
                                                    class="text-decoration-underline">Terms &amp; Conditons</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <a href="#" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                            <span>Send Your Request </span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img src="assets/img/icons/contact_a.png" alt="" class="contact_a">
                    <img src="assets/img/icons/contact_message.png" alt="" class="contact_message">
                </div>
            </div>
        </section>
        <!-- ====== end contact page ====== -->

        <!-- ====== start contact page ====== -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.055827037373!2d107.55195482056057!3d-6.890996429885855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5d9351515f9%3A0xe262b702be99628a!2sHexagon%20Inc.!5e0!3m2!1sen!2sid!4v1664252136539!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- ====== start contact page ====== -->
    </main>
@endsection

@section('script')
    <script src="{{ asset('assets/Main/js/contact.js') }}"></script>
@endsection
