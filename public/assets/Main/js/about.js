$(window).on('load', function () {
    // ajax get data Brand message
    $.ajax({
        url: baseURL + 'abt_brand_message',
        type: 'GET',
        success: function (data) {
            if (data.data.length > 0) {
                var keterangan = data.data[data.data.length - 1].keterangan;
                $('#brand_keterangan').text(keterangan);
            } else {
                $('#brand_keterangan').text('Tidak ada pesan merek');
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
    // akhir get data Brand message

    // ajax get data Hero
    $.ajax({
        url: baseURL + 'abt_hero',
        type: 'GET',
        success: function (data) {
            if (data.data.length > 0) {
                var linkyt = data.data[data.data.length - 1].linkyt;
                $('#linkyt').attr('href', linkyt);
            } else {
                $('#linkyt').attr('href', '#').text('Tidak ada tautan hero');
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
    // akhir get data Hero

    // ajax get data Culture
    $.ajax({
        url: baseURL + 'abt_culture',
        method: 'GET',
        success: function (data) {
            var container = $('#culture');
            container.empty();

            if (data.data.length > 0) {
                var cultureData = data.data.slice(0, 3);
                cultureData.forEach(function (culture) {
                    let konten = ` 
                        <div class="commun-card">
                            <div class="inf">
                                <h5>${culture.judul_culture}</h5>
                                <small>${culture.ket_culture}</small>
                            </div>
                        </div>
                    `;
                    container.append(konten);
                });
            } else {
                container.append('<center><h1>Tidak ada data budaya</h1></center>');
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
    // akhir get data Culture

    // ajax get data Philosophy
    $.ajax({
        url: baseURL + 'abt_philosophy',
        type: 'GET',
        success: function (data) {
            if (data.data.length > 0) {
                var philosophy = data.data[data.data.length - 1].ket_pilo;
                $('#philosophy').text(philosophy);
            } else {
                $('#philosophy').text('Tidak ada philosophy');
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
    // akhhir get data Philosophy

    // ajax get data Client
    $.ajax({
        url: baseURL + 'abt_client',
        method: 'GET',
        success: function (data) {
            var clientData = data.data;
            var clientAtas = $('#clientAtas');
            var clientBawah = $('#clientBawah');
            clientAtas.empty();
            clientBawah.empty();

            if (clientData.length > 0) {
                clientData.forEach(function (client, index) {
                    let konten = `
                        <div class="swiper-slide">
                            <a href="#" class="img">
                                <img src="${baseURL}images/${client.foto_client}" alt="">
                            </a>
                        </div>
                    `;
                    if ((index + 1) % 2 !== 0) {
                        clientAtas.append(konten);
                    } else {
                        clientBawah.append(konten);
                    }
                });

                var swiperAtas = new Swiper('.swiper-container-atas', {
                    slidesPerView: 4,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 0,
                    },
                    speed: 7000,
                    direction: 'horizontal',
                });

                var swiperBawah = new Swiper('.swiper-container-bawah', {
                    slidesPerView: 4,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 0,
                    },
                    speed: 7000,
                    direction: 'horizontal',
                });
                swiperBawah.el.style.transform = 'rotateY(180deg)';
                Array.from(swiperBawah.slides).forEach(slide => {
                    slide.style.transform = 'rotateY(180deg)';
                });
            } else {
                clientAtas.append('<center><h1>Tidak ada data klien</h1></center>');
                clientBawah.append('<center><h1>Tidak ada data klien</h1></center>');
            }
        },
        error: function (error) {
            console.error('Error fetching client data:', error);
        }
    });
    // akhir get data Client

    // ajax get data Service
    $.ajax({
        url: baseURL + 'Service',
        method: 'GET',
        success: function (data) {
            var container = $('#service-abt');
            container.empty();

            if (data.data.length > 0) {
                var serviceData = data.data.slice(0, 3);
                serviceData.forEach(function (service) {
                    let konten = ` 
                        <li class="d-flex mb-40">   
                            <small class="icon-50 me-4 flex-shrink-0">
                                <img src="${baseURL}images/${service.fotoservice}" alt="">
                            </small>
                            <div class="inf">
                                <h5>${service.judul_service}</h5>
                                <p class="fs-12px color-666 mt-2">
                                    ${service.ket_service}
                                </p>
                            </div>
                        </li>
                    `;
                    container.append(konten);
                });
            } else {
                container.append('<center><h1>Tidak ada data layanan</h1></center>');
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
    // akhir get data Service
    // ajax get data team
    $.ajax({
        url: baseURL + 'abt_team',
        method: 'GET',
        success: function (data) {
            var teamData = data.data;
            var container = $('#team');
            container.empty();
            if (teamData.length > 0) {
                teamData.forEach(function (team) {
                    if (!team.is_new_update) {
                        let konten = ` 
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="${baseURL}images/${team.foto_orang}" alt="">
                                    <div class="social-icons">
                                        <a href="${team.link_ig}">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="${team.link_fb}">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="${team.link_in}">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="${team.link_ig}">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#">
                                        <h6>${team.nama_orang}</h6>
                                    </a>
                                    <small>${team.jabatan}</small>
                                </div>
                            </div>
                        </div>
                    `;
                        container.append(konten);
                    }
                });
            } else {
                container.append('<center><h1>Tidak ada data tim</h1></center>');
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
    // akhir get data team

    // ajax get data value
    $.ajax({
        url: baseURL + 'abt_value',
        method: 'GET',
        success: function (data) {
            var container = $('#value-abt');
            container.empty();

            if (data.data.length > 0) {
                data.data.forEach(function (value) {
                    let konten = `
                    <div class="swiper-slide" style="width: 455px; margin-right: 30px;">
                        <a href="" class="culture-card d-block" data-fancybox="gallery">
                            <img src="${baseURL}images/${value.foto_value}" alt="">
                            <span class="overlay"></span>
                        </a>
                    </div>
                `;
                    container.append(konten);
                });

                new Swiper('.swiper-container-value', {
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
                });
            } else {
                container.append('<center><h1>Tidak ada data</h1></center>');
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
    // akhir get data Value
});
