function dataService() {
    $.ajax({
        url: baseURL + 'Service',
        method: 'GET',
        success: function (data) {
            var container = $('#our-service');
            container.empty();
            if (data.data.length > 0) {
                var serviceData = data.data;
                serviceData.forEach(function (service) {
                    let gambar = service.fotoservice ? `${baseURL}images/${service.fotoservice}` : `https://w7.pngwing.com/pngs/432/664/png-transparent-computer-icons-service-management-enterprise-resource-planning-services-hand-service-people.png`;
                    let konten = ` 
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="features-card mb-30 style-5">
                            <div class="icon"><img src="${gambar}" alt="${service.judul_service}"></div>
                            <div class="info">
                                <h5 class="card-title">${service.judul_service}</h5>
                                <p class="text">${service.ket_service}</p>
                            </div>
                        </a>
                    </div>
                `;
                    container.append(konten);
                });
            } else {
                container.append('<center><h6>Data service kosong</h6></center>');
            }
        },
        error: function (error) {
            console.error('Gagal mengambil data' + error);
        }
    });
}

function dataAtas() {
    $.ajax({
        url: baseURL + 'Service',
        method: 'GET',
        success: function (data) {
            var container = $('#top-service-swiper');
            container.empty();

            if (data.data.length > 0) {
                data.data.forEach(function (service) {
                    let konten = ` 
                    <div class="swiper-slide">
                        <a href="#" class="service-card style-6">
                            <div class="icon">
                                <img src="${baseURL}images/${service.fotoservice}" alt="${service.judul_service}">
                            </div>
                            <div class="info">
                                <h5>${service.judul_service}</h5>
                                <div class="text">
                                    ${service.ket_service}
                                </div>
                            </div>
                        </a>
                    </div>
                `;
                    container.append(konten);
                });

                // Inisialisasi Swiper setelah data ditambahkan
                var swiper = new Swiper('.services-slider', {
                    slidesPerView: 5,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                        },
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                        }
                    }
                });
            } else {
                container.append('<center><h1>Tidak ada data service</h1></center>');
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
}


// ajax get data value
$.ajax({
    url: baseURL + 'review',
    method: 'GET',
    success: function (data) {
        var container = $('#client-reviews-service');
        var dataAbt = data.data;
        container.empty();

        if (data.data.length > 0) {
            dataAbt.forEach(function (value) {
                let konten = `
                        <div class="swiper-slide" style="width: 414px;">
                            <a href="#" class="testi-card style-5">
                                <div class="stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <div class="text">
                                    "${value.review}"
                                </div>
                                <div class="user mt-40 text-center">
                                    <div class="icon-80 rounded-circle img-cover overflow-hidden m-auto">
                                        <img src="${baseURL}images/${value.foto}" alt="">
                                    </div>
                                    <h6>${value.nama}</h6>
                                    <small>${value.dari}</small>
                                </div>
                            </a>
                        </div>
                    `;
                container.append(konten);
            });
            new Swiper('.swiper-container', {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
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
                        slidesPerView: 4,
                        spaceBetween: 30
                    }
                }
            });
        } else {
            container.append('<center><h6>Data review kosong</h6></center>');
        }
    },
    error: function (error) {
        console.error('Gagal mengambil data' + error);
    }
});
// akhir get data review



$(document).ready(function () {
    dataAtas();
    dataService();
});
