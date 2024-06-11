@extends ('layout.main_layout')

@section('Contents')
    <main class="blog-page style-5">


        <!-- ====== start blog-slider ====== -->
        <section class="blog-slider pt-50 pb-50 style-1">
            <div class="container">
                <div class="section-head text-center mb-60 style-5">
                    <h2 class="mb-20"> Our <span> Journal </span> </h2>
                    <div class="text color-666">Get the latest articles from our journal, writing, discuss and share</div>
                </div>
                <div class="blog-details-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="content-card">
                                    <div class="img overlay">
                                        <img src="assets/img/blog/s_blog.png" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="cont">
                                                    <small class="date small mb-20"> <a href="#"
                                                            class="text-uppercase border-end brd-gray pe-3 me-3"> News </a>
                                                        <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days
                                                            ago</a> </small>
                                                    <h2 class="title">
                                                        <a href="page-single-post-5.html">Solutions For Big Data Issue,
                                                            Expert Perspective</a>
                                                    </h2>
                                                    <p class="fs-13px mt-10 text-light text-info">If there’s one way that
                                                        wireless technology has changed the way we work, it’s that will
                                                        everyone is now connected [...]</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-card">
                                    <div class="img overlay">
                                        <img src="assets/img/blog/1.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="cont">
                                                    <small class="date small mb-20"> <a href="#"
                                                            class="text-uppercase border-end brd-gray pe-3 me-3"> News </a>
                                                        <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days
                                                            ago</a> </small>
                                                    <h2 class="title">
                                                        <a href="page-single-post-5.html">Solutions For Big Data Issue,
                                                            Expert Perspective</a>
                                                    </h2>
                                                    <p class="fs-13px mt-10 text-light text-info">If there’s one way that
                                                        wireless technology has changed the way we work, it’s that will
                                                        everyone is now connected [...]</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-card">
                                    <div class="img overlay">
                                        <img src="assets/img/blog/2.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="cont">
                                                    <small class="date small mb-20"> <a href="#"
                                                            class="text-uppercase border-end brd-gray pe-3 me-3"> News </a>
                                                        <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days
                                                            ago</a> </small>
                                                    <h2 class="title">
                                                        <a href="page-single-post-5.html">Solutions For Big Data Issue,
                                                            Expert Perspective</a>
                                                    </h2>
                                                    <p class="fs-13px mt-10 text-light text-info">If there’s one way that
                                                        wireless technology has changed the way we work, it’s that will
                                                        everyone is now connected [...]</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ====== pagination ====== -->
                    <div class="swiper-pagination"></div>
                    <!-- ====== arrows ====== -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- ====== end blog-slider ====== -->


        <!-- ====== start Popular Posts ====== -->
        <section class="popular-posts pt-50 pb-100 border-bottom brd-gray">
            <div class="container">
                <h5 class="post-sc-title text-center text-uppercase mb-70">Popular Posts</h5>
                <div class="row gx-5" id="beritaBaru">

                </div>
            </div>
        </section>
        <!-- ====== end Popular Posts ====== -->


        <!-- ====== start all-news ====== -->
        <section class="all-news section-padding blog bg-transparent style-3">
            <div class="container">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-8" id="tampilRandome">
                        <div class="pagination style-5 color-5 justify-content-center mt-60">
                            <a href="#" class="active">
                                <span>1</span>
                            </a>
                            <a href="#">
                                <span>2</span>
                            </a>
                            <a href="#">
                                <span>3</span>
                            </a>
                            <a href="#">
                                <span>4</span>
                            </a>
                            <a href="#">
                                <span>...</span>
                            </a>
                            <a href="#">
                                <span>20</span>
                            </a>
                            <a href="#">
                                <span class="text">next <i class="fas fa-chevron-right"></i> </span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="side-blog style-5 ps-lg-5 mt-5 mt-lg-0">

                            <form action="https://iteck-html.themescamp.com/contact.php" class="search-form mb-50"
                                method="post">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    search
                                </h6>
                                <div class="form-group position-relative">
                                    <input type="text" class="form-control rounded-pill"
                                        placeholder="Type and hit enter">
                                    <button class="search-btn border-0 bg-transparent"> <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>

                            <div class="side-categories mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    categories
                                </h6>
                                <div id="Category"></div>
                            </div>

                            <div class="side-share mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    social
                                </h6>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-goodreads-g"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end all-news ====== -->
    @endsection

    @section('script')
        <script src="{{ asset('assets/Main/js/news.js') }}"></script>
    @endsection
