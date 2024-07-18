@extends ('layout.main_layout')

@section('Contents')
    <div class="container-fluid px-0">
        <!--Contents-->
        <main class="blog-page style-5">

            <!-- ====== start all-news ====== -->
            <section class="all-news section-padding pt-50 blog bg-transparent style-3">
                <div class="container">
                    <div class="blog-details-slider mb-100">
                        <div class="section-head text-center mb-60 style-5">
                            <h2 class="mb-20 color-000" id="judul"></h2>
                            <small class="d-block date text">
                                <a href="portofolio" class="text-uppercase brd-gray pe-3 me-3 color-blue5 fw-bold"
                                    id="kategori">
                                </a>
                            </small>
                        </div>

                        <div class="blog-details-slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper" id="foto-berita">
                                    <!-- Gambar-gambar akan dimasukkan di sini -->
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-8">
                                <div class="d-flex small align-items-center justify-content-between mb-70 fs-12px">
                                    <div class="l_side d-flex align-items-center">
                                        <a href="https://hexagon.co.id/" class="me-3 mt-10 me-lg-5">
                                            <span
                                                class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                H
                                            </span>
                                            <span class="">
                                                By Admin Hexagon
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="blog-content-info">
                                    <h4 class="fw-bold color-000 lh-4 mb-30" id="Judul"></h4>
                                    <div class="text mb-10 color-666" id="isi-konten"></div>
                                    <!-- ====== end Related Posts ====== -->
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="side-blog style-5 ps-lg-5 mt-5 mt-lg-0">

                                    <div class="side-categories mb-50 mt-100">
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
                </div>
            </section>
            <!-- ====== end all-news ====== -->
        </main>
    </div>
@endsection

@section('script')
    <!-- Tambahkan Swiper CSS dan JS di sini -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
        .swiper-container {
            width: 100%;
            height: 400px;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }
    </style>

    <script>
        $(document).ready(function() {
            var pathArray = window.location.pathname.split('/');
            var id = pathArray[pathArray.length - 1];
            var swiper = null; // Declare swiper variable outside fetchNewsData

            function fetchNewsData(url, id, callback) {
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        var news = response.data.find(n => n.id == id);
                        if (news) {
                            callback(news);
                        } else if (response.next_page_url) {
                            fetchNewsData(response.next_page_url, id, callback);
                        } else {
                            callback(null);
                        }
                    },
                    error: function() {
                        callback(null);
                    }
                });
            }

            fetchNewsData(baseURL + 'Portofolio', id, function(news) {
                if (news) {
                    $('#judul').text(news.judul_porto);
                    $('#Judul').text(news.judul_porto);
                    $('#isi-konten').html(news.ket_porto.replace(/\n/g, '<br/>'));
                    $('#kategori').text(news.Kategori);

                    let fotoContainer = $('#foto-berita');
                    fotoContainer.empty();
                    news.images.forEach(image => {
                        let imgElement =
                            `<div class="swiper-slide"><img src="${baseURL}images/${image.images}" alt="" class="img-fluid mb-3"></div>`;
                        fotoContainer.append(imgElement);
                    });

                    if (swiper) {
                        swiper.destroy(true,
                        true); // Destroy existing swiper instance before creating a new one
                    }

                    // Initialize Swiper
                    swiper = new Swiper('.swiper-container', {
                        loop: true,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    });
                } else {
                    $('#judul').text('Portofolio not found');
                    $('#kategori').text('null');
                    $('#foto-berita').html(
                        '<img src="https://www.exabytes.co.id/blog/wp-content/uploads/2021/11/error-404-not-found.jpg" alt="404 Not Found" class="img-fluid">'
                    );
                }
            });

            $.ajax({
                url: baseURL + 'Category',
                type: 'GET',
                success: function(response) {
                    if (response && response.data && Array.isArray(response.data) && response.data
                        .length > 0) {
                        var categoryData = response.data;
                        var container = $('#Category');
                        container.empty();
                        let showAllButton = `<a href="#" class="cat-item" onclick="munculkanSemua(); $('.cat-item').removeClass('active'); $(this).addClass('active');">
                            <span>All</span>
                        </a>`;
                        container.append(showAllButton);
                        categoryData.forEach(function(category) {
                            let content = `<a href="#" class="cat-item" data-filter="${category.nama_category}" onclick="munculkanBerdasarkan('${category.nama_category}')">
                                <span>${category.nama_category}</span>
                            </a>`;
                            container.append(content);
                        });
                    } else {
                        var container = $('#Category');
                        container.empty();
                        let content = `<h1>Tidak ada kategori</h1>`;
                        container.append(content);
                    }
                },
                error: function(_xhr, status, error) {
                    console.error(status + ': ' + error);
                }
            });

        });
    </script>
@endsection
