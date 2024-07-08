$(document).ready(function () {

    // Untuk mengubah format waktu
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
    function truncateText(text, maxLength) {
        if (text.length > maxLength) {
            return text.substring(0, maxLength) + '...';
        }
        return text;
    }

    function service12() {
        $.ajax({
            url: baseURL + 'Service',
            type: 'GET',
            success: function (data) {
                var container = $('#service');
                container.empty();
                var brandingService = data.data.find(item => item.judul_service === "Branding");
                if (brandingService) {
                    var judul = DOMPurify.sanitize(brandingService.judul_service);
                    var keterangan = DOMPurify.sanitize(brandingService.ket_service);
                    $('#judul').text(judul);
                    $('#keterangan').html(keterangan);
                } else {
                    $('#judul').text('Tidak ada judul');
                    $('#keterangan').html('Tidak ada keterangan');
                }
                var reviewData = data.data;
                if (reviewData.length > 0) {
                    reviewData.forEach(function (service) {
                        let gambar = service.fotoservice ? `${baseURL}images/${service.fotoservice}` : `https://w7.pngwing.com/pngs/432/664/png-transparent-computer-icons-project-management-enterprise-resource-planning-projects-hand-project-people.png`;
                        var judul = DOMPurify.sanitize(service.judul_service);
                        var keterangan = DOMPurify.sanitize(service.ket_service);
                        let konten = `
                             <div class="swiper-slide">
                                <div class="service-card style-8">
                                    <div class="icon">
                                        <img src="${gambar}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5> ${judul} </h5>
                                        <p> ${keterangan} </p>
                                    </div>
                                </div>
                            </div>
                        `;
                        container.append(konten);
                    });
                } else {
                    container.append('<center><h1>Tidak ada</h1></center>');
                }
            },
            error: function (error) {
                console.error('Gagal mengambil data:', error);
            }
        });
    }

    function review() {
        $.ajax({
            url: baseURL + 'review',
            method: 'GET',
            success: function (data) {
                var container = $('#review');
                container.empty();
                var reviewData = data.data.filter(item => item.category_review === "IT").slice(0, 3);
                if (reviewData.length > 0) {
                    reviewData.forEach(function (review1) {
                        let gambar = review1.foto ? `${baseURL}images/${review1.foto}` : `https://w7.pngwing.com/pngs/432/664/png-transparent-computer-icons-project-management-enterprise-resource-planning-projects-hand-project-people.png`;
                        var review = DOMPurify.sanitize(review1.review);
                        var nama = DOMPurify.sanitize(review1.nama);
                        var dari = DOMPurify.sanitize(review1.dari);
                        let konten = `
                            <div class="col-lg-4">
                                <div class="testi-card wow fadeInUp">
                                    <div class="info">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p> “ ${review} ” </p>
                                        <img src="${gambar}" alt="" class="icon">
                                    </div>
                                    <div class="author mt-40">
                                        <div class="img icon-60 rounded-circle overflow-hidden img-cover me-3 flex-shrink-0">
                                            <img src="${gambar}" alt="">
                                        </div>
                                        <div class="inf">
                                            <p>${dari} </p>
                                            <h6> ${nama} </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        container.append(konten);
                    });
                } else {
                    container.append('<center><h1>Tidak ada review</h1></center>');
                }
            },
            error: function (_xhr, status, error) {
                console.error(status + ': ' + error);
            }
        });
    }
    service12();

    function lastNewsIt() {
        $.ajax({
            url: baseURL + 'News',
            method: 'GET',
            success: function (data) {
                var container = $('#News');
                container.empty();
                var portoLast = data.data.slice(0, 3);
                portoLast.sort(function (a, b) {
                    return new Date(b.created_at) - new Date(a.created_at);
                });
                if (data.data.length > 0) {
                    portoLast.forEach(function (news) {
                        let gambar = news.fotonews ? `${baseURL}images/${news.fotonews}` : `https://w7.pngwing.com/pngs/432/664/png-transparent-computer-icons-News-management-enterprise-resource-planning-Newss-hand-News-people.png`;
                        var judul = DOMPurify.sanitize(news.judul_news);
                        let truncatedJudul = truncateText(judul, 10);
                        let timeAgo = timeSince(news.created_at);
                        let konten = `
                          <div class="item wow fadeInUp">
                                        <div class="img img-cover">
                                            <img src="${gambar}" alt="">
                                        </div>
                                        <div class="info">
                                            <div class="date-author">
                                                <a href="#" class="date">
                                                    ${timeAgo}
                                                </a>
                                                <span class="color-999 mx-3"> | </span>
                                                <a href="#" class="author color-999">
                                                    By <span class="color-000 fw-bold"> Admin Hexagon</span>
                                                </a>
                                            </div>
                                            <h4 class="title">
                                                <a href="/News/Post/${news.news_id}"> ${truncatedJudul} </a>
                                            </h4>
                                        </div>
                                    </div>
                    `;
                        container.append(konten);
                    });
                } else {
                    container.append('<center><h6>Data News kosong</h6></center>');
                }
            },
            error: function (error) {
                console.error('Gagal mengambil data:', error);
            }
        });
    }
    // ourService();
    lastNewsIt();
    // lastProject();
    dataService();
    review();
    keteranganService();
});
