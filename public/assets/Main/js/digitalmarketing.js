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

    function keteranganService() {
        $.ajax({
            url: baseURL + 'Service',
            type: 'GET',
            success: function (data) {
                var serviceFound = false;
                for (var i = 0; i < data.data.length; i++) {
                    if (data.data[i].judul_service === "Digital Marketing") {
                        var judul = DOMPurify.sanitize(data.data[i].judul_service);
                        var keterangan = DOMPurify.sanitize(data.data[i].ket_service);
                        $('#judul').text(judul);
                        $('#keterangan').html(keterangan);
                        serviceFound = true;
                        break;
                    }
                }
                if (!serviceFound) {
                    $('#judul').text('Tidak ada judul');
                    $('#keterangan').html('Tidak ada keterangan');
                }
            },
            error: function (error) {
                console.error('Gagal mengambil data:', error);
            }
        });
    }

    function lastProject() {
        $.ajax({
            url: baseURL + 'Portofolio',
            method: 'GET',
            success: function (data) {
                var container = $('#portofolio');
                container.empty();
                var portoLast = data.data.filter(function (project) { return project.Kategori === "Website Development" || project.Kategori === "Web Programmer"; });
                if (data.data.length > 0) {
                    portoLast.forEach(function (project) {
                        let gambar = project.fotoprojek ? `${baseURL}images/${project.fotoprojek}` : `https://w7.pngwing.com/pngs/432/664/png-transparent-computer-icons-project-management-enterprise-resource-planning-projects-hand-project-people.png`;
                        var judul = DOMPurify.sanitize(project.judul_porto);
                        var kategori = DOMPurify.sanitize(project.Kategori);
                        var keterangan = DOMPurify.sanitize(project.ket_porto);
                        let truncatedKeterangan = truncateText(keterangan, 50);
                        let truncatedJudul = truncateText(judul, 10);
                        let konten = `  
                        <div class="swiper-slide">
                                    <div class="portfolio-card">
                                        <div class="img">
                                            <img src="${gambar}" alt="">
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a href="/Portofolio/Post/${project.id}"> ${truncatedJudul} </a>
                                            </h5>
                                            <small class="d-block color-main text-uppercase"><a href="#"> ${kategori}</a></small>
                                            <div class="text">
                                            ${truncatedKeterangan}
                                            </div>
                                            <div class="tags">
                                            ${kategori}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    `;
                        container.append(konten);
                    });
                    var swiper = new Swiper('.swiper-container', {
                        slidesPerView: 3,
                        spaceBetween: 10,
                        loop: true,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            0: {
                                slidesPerView: 1,
                                spaceBetween: 10
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 20
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30
                            }
                        }
                    });
                } else {
                    container.append('<center><h6>Data project kosong</h6></center>');
                }
            },
            error: function (error) {
                console.error('Gagal mengambil data:', error);
            }
        });
    }


    function lastNewsIt() {
        $.ajax({
            url: baseURL + 'News',
            method: 'GET',
            success: function (data) {
                var container = $('#News');
                container.empty();
                var portoLast = data.data.filter(function (news) {
                    return news.category_news === "TECHNOLOGY" || news.category_news === "TIPS & TRICK";
                });
                if (data.data.length > 0) {
                    portoLast.forEach(function (news) {
                        let gambar = news.fotonews ? `${baseURL}images/${news.fotonews}` : `https://w7.pngwing.com/pngs/432/664/png-transparent-computer-icons-News-management-enterprise-resource-planning-Newss-hand-News-people.png`;
                        var judul = DOMPurify.sanitize(news.judul_news);
                        var kategori = DOMPurify.sanitize(news.category_news);
                        var keterangan = DOMPurify.sanitize(news.ket_news);
                        let truncatedKeterangan = truncateText(keterangan, 50);
                        let truncatedJudul = truncateText(judul, 10);
                        let timeAgo = timeSince(news.created_at);
                        let konten = `  
                          <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">${kategori}</a>
                                        </div>
                                        <div class="img">
                                            <img src="${gambar}" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="/News/Post/${news.news_id}">${truncatedJudul}</a></h6>
                                            <div class="auther">
                                                <span>
                                                    <small><a href="#">By Admin Hexagon</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">${timeAgo}</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                               ${truncatedKeterangan} 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    `;
                        container.append(konten);
                    });
                    var swiper = new Swiper('.swiper-container', {
                        slidesPerView: 3,
                        spaceBetween: 10,
                        loop: true,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            0: {
                                slidesPerView: 1,
                                spaceBetween: 10
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 20
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 30
                            }
                        }
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
    lastNewsIt();
    lastProject();
    keteranganService();
});
