$(document).ready(function () {
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
                    if (data.data[i].judul_service === "IT Consultation") {
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
                        let truncatedKeterangan = truncateText(keterangan, 44);
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
                        slidesPerView: 4,
                        spaceBetween: 10,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        loop: true,
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
    lastProject();
    keteranganService();
});
