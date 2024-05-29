@extends ('layout.main_layout')

@section ('Contents')
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
                    <div class="swiper-wrapper" id="our-journal">
                        <!-- konten di append ke sini -->
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
            <h5 class="post-sc-title text-center text-uppercase mb-70">Latest Posts</h5>
            <div class="row gx-5" id="lates-posts"></div>
        </div>
    </section>
    <!-- ====== end Popular Posts ====== -->


    <!-- ====== start all-news ====== -->
    <section class="all-news section-padding blog bg-transparent style-3">
        <div class="container">
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-8" id="all-posts">
                    <!-- konten di append ke sinis -->
                </div>

                <div class="col-lg-4">
        <div class="side-blog style-5 ps-lg-5 mt-5 mt-lg-0">

            <form action="https://hexagon.co.id/posts" class="search-form mb-50">
                                        <h6 class="title mb-20 text-uppercase fw-normal">
                    search
                </h6>
                <div class="form-group position-relative">
                    <input type="text" class="form-control rounded-pill" placeholder="Search..." name="search" value="">
                    <button class="search-btn border-0 bg-transparent" type="submit"> <i class="fas fa-search"></i> </button>
                </div>
            </form>

            <div class="side-categories mb-50">
                <h6 class="title mb-20 text-uppercase fw-normal">
                    categories
                </h6>
                
                
                <a href="#" class="cat-item">
                    <span> all </span>
                    <span> 265 </span>
                </a>
                <a href="#" class="cat-item">
                    <span> News </span>
                    <span> 38 </span>
                </a>
                <a href="#" class="cat-item">
                    <span> Technology </span>
                    <span> 16 </span>
                </a>
                <a href="#" class="cat-item">
                    <span> Tips & Trick </span>
                    <span> 85 </span>
                </a>
                <a href="#" class="cat-item">
                    <span> Career </span>
                    <span> 21 </span>
                </a>
                <a href="#" class="cat-item">
                    <span> Community </span>
                    <span> 874 </span>
                </a>
                <a href="#" class="cat-item">
                    <span> Videos </span>
                    <span> 54 </span>
                </a>
                <a href="#" class="cat-item border-0">
                    <span> Others </span>
                    <span> 85 </span>
                </a>
            </a>
            
            </div>

            <div class="side-newsletter mb-50">
                <h6 class="title mb-10 text-uppercase fw-normal">
                    newsletter
                </h6>
                <div class="text">
                    Register now to get latest updates on promotions & coupons.
                </div>
                <form action="https://smartinnovates.com/items/iteck/html/contact.php" class="form-subscribe" method="post">
                    <div class="email-input d-flex align-items-center py-3 px-3 bg-white mt-3 radius-5">
                        <span class="icon me-2 flex-shrink-0">
                            <i class="far fa-envelope"></i>
                        </span>
                        <input type="text" placeholder="Email Address" class="border-0 bg-transparent fs-13px">
                    </div>
                    <button class="btn bg-blue5 sm-butn text-white hover-darkBlue w-100 mt-3 radius-5 py-3">
                        <span>Subscribe</span>
                    </button>
                </form>
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

            

            <div class="side-tags">
                <h6 class="title mb-20 text-uppercase fw-normal">
                    popular tags
                </h6>
                <div class="content">
                    <a href="#">WordPress</a>
                    <a href="#">PHP</a>
                    <a href="#">HTML/CSS</a>
                    <a href="#">Figma</a>
                    <a href="#">Technology</a>
                    <a href="#">Marketing</a>
                    <a href="#">Consultation</a>
                    <a href="#">Seo</a>
                    <a href="#">Envato</a>
                    <a href="#">Psd</a>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end all-news ====== -->
</main>
@endsection