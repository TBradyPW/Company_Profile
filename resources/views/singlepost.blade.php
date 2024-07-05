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
                                <a href="posts25d9.html?category=news"
                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold" id="kategori">
                                </a>
                                <i class="bi bi-clock me-1"></i> <span class="op-8">Posted on <span
                                        id="waktu"></span></span>
                            </small>
                        </div>

                        <div class="content-card">
                            <div class="img">
                                <img id="foto-berita" src="" alt="News">
                            </div>
                        </div>
                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-8">
                                <div class="d-flex small align-items-center justify-content-between mb-70 fs-12px">
                                    <div class="l_side d-flex align-items-center">
                                        <a href="posts3e27.html?author=gilda.hidayanto" class="me-3 me-lg-5">
                                            <span
                                                class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                a
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
                                    <div class="side-categories mb-50">
                                        <h6 class="title mb-20 mt-100 text-uppercase fw-normal">
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
    <script>
        function timeSince(date) {
            const now = new Date();
            const secondsPast = (now.getTime() - new Date(date).getTime()) / 1000;

            if (secondsPast < 60) {
                return `${Math.floor(secondsPast)} seconds ago`;
            }
            if (secondsPast < 3600) {
                return `${Math.floor(secondsPast / 60)} minutes ago`;
            }
            if (secondsPast < 86400) {
                return `${Math.floor(secondsPast / 3600)} hours ago`;
            }
            if (secondsPast < 604800) {
                return `${Math.floor(secondsPast / 86400)} days ago`;
            }
            if (secondsPast < 2419200) {
                return `${Math.floor(secondsPast / 604800)} weeks ago`;
            }
            if (secondsPast < 31536000) {
                return `${Math.floor(secondsPast / 2419200)} months ago}`;
            }
            return `${Math.floor(secondsPast / 31536000)} years ago`;
        }

        $(document).ready(function() {
            var pathArray = window.location.pathname.split('/');
            var id = pathArray[pathArray.length - 1];

            function fetchNewsData(url, id, callback) {
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        var news = response.data.find(n => n.news_id == id);
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

            $(document).ready(function() {
                var pathArray = window.location.pathname.split('/');
                var id = pathArray[pathArray.length - 1];

                fetchNewsData(baseURL + 'News', id, function(news) {
                    let tampilfoto = `${baseURL}images/${news.fotonews}`;
                    var content = DOMPurify.sanitize(news.ket_news.replace(/\n/g, '<br/>'));
                    if (news) {

                        $('#Judul').text(news.judul_news);
                        $('#judul').text(news.judul_news);
                        $('#isi-konten').html(content);
                        $('#kategori').text(news.category_news);
                        if (news.fotonews && news.fotonews.length > 0) {}
                        $('#foto-berita').attr('src', tampilfoto);
                        $('#waktu').text(timeSince(news.created_at));
                        if (tampilfoto && tampilfoto.length > 0) {
                            $('#foto-berita').attr('src', tampilfoto);
                        } else {
                            $('#foto-berita').attr('src',
                                'https://www.exabytes.co.id/blog/wp-content/uploads/2021/11/error-404-not-found.jpg'
                            );
                        }
                    } else {
                        $('#judul').text('News not found');
                        $('#kategori').text('null');
                        $('#waktu').text('null');
                        $('#foto-berita').attr('src',
                            'https://www.exabytes.co.id/blog/wp-content/uploads/2021/11/error-404-not-found.jpg'
                        );
                    }
                });
            });
            $.ajax({
                url: baseURL + 'category_news',
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
                            var content1 = DOMPurify.sanitize(category.nama_category);
                            let content = `<a href="#" class="cat-item" data-filter="${category.nama_category}" onclick="munculkanBerdasarkan('${category.nama_category}')">
                    <span><b>${content1}</b></span>
                </a>`;
                            container.append(content);
                        });
                    } else {
                        var container = $('#Category');
                        container.empty();
                        let content = `<h1>Tidak ada category</h1>`;
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
