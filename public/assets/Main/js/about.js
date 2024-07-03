$(window).on('load', function () {
    pesanHeader();
    hero();
    team();
    client();
    culture();
});

function pesanHeader() {
    $.ajax({
        url: baseURL + 'abt_brand_message',
        type: 'GET',
        success: function (data) {
            if (data.data.length > 0) {
                var keterangan = DOMPurify.sanitize(data.data[data.data.length - 1].keterangan.split('\n').join('<br>'));
                $('#brand_keterangan').html(keterangan);
            } else {
                $('#brand_keterangan').text('Tidak ada pesan');
            }
        },
        error: function (error) {
            console.error('Gagal mengambil data:', error);
        }
    });
}

function hero() {
    $.ajax({
        url: baseURL + 'abt_hero',
        type: 'GET',
        success: function (data) {
            if (data.data.length > 0) {
                var linkyt = data.data[data.data.length - 1].linkyt;
                var linkyt1 = DOMPurify.sanitize(linkyt);
                $('#linkyt').attr('href', linkyt1);
            }
        },
        error: function (error) {
            console.error('Gagal mengambil data:', error);
        }
    });
}


function culture() {
    $.ajax({
        url: baseURL + 'abt_culture',
        method: 'GET',
        success: function (data) {
            var container = $('#culture');
            container.empty();
            if (data.data.length > 0) {
                var cultureData = data.data.slice(0, 3);
                cultureData.forEach(function (culture) {
                    var judul = DOMPurify.sanitize(culture.judul_culture);
                    var keterangan = DOMPurify.sanitize(culture.ket_culture.split('\n').join('<br>'));
                    let konten = ` 
                        <div class="commun-card">
                            <div class="inf ml-50">
                                <h5>${judul}</h5>
                                <small>${keterangan}</small>
                            </div>
                        </div>
                    `;
                    container.append(konten);
                });
            } else {
                container.append('<h6>Data culture kosong</h6>');
            }
        },
        error: function (error) {
            console.error('Gagal mengambil data:', error);
        }
    });
}

// ajax get data Philosophy
$.ajax({
    url: baseURL + 'abt_philosophy',
    type: 'GET',
    success: function (data) {
        if (data.data.length > 0) {
            var philosophy = data.data[data.data.length - 1].ket_pilo.split('\n').join('<br>');
            var philosophySain = DOMPurify.sanitize(philosophy);
            $('#philosophy').html(philosophySain);
        } else {
            $('#philosophy').html("Lebah adalah makhluk ajaib yang di informasikan oleh Allah SWT sebagai salah satu makhluk spesial yang mendapatkan wahyu (Surat An-Nahl Ayat 68-69). Lebah hidup dengan baik yaitu selalu dekat dengan yang baik, memakan yang baik, menghasilkan kebaikan dan kebermanfaatan. Lebah terkenal sebagai makhluk yang loyal, cerdas, kuat, massive dan sangat solid, salah satu kemampuan spesial dari lebah ialah selalu mampu mengetahui jalan pulang (solusi) sesulit dan sejauh apapun perjalanannya (proses)");
        }
    },
    error: function (error) {
        console.error('Gagal mengambil data:', error);
    }
});
// akhhir get data Philosophy

function client() {
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
                swiper();
            } else {
                clientAtas.append('<center><h6>Data client kosong</h6></center>');
            }
        },
        error: function (error) {
            console.error('Gagal mengambil data:', error);
        }
    });
}

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
                var judul = DOMPurify.sanitize(service.judul_service);
                var keterangan = DOMPurify.sanitize(service.ket_service);
                let konten = ` 
                        <li class="d-flex mb-40">   
                            <small class="icon-50 me-4 flex-shrink-0">
                                <img src="${baseURL}images/${service.fotoservice}" alt="">
                            </small>
                            <div class="inf">
                                <h5>${judul}</h5>
                                <p class="fs-12px color-666 mt-2">
                                    ${keterangan}
                                </p>
                            </div>
                        </li>
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
// akhir get data Service

function team() {
    $.ajax({
        url: baseURL + 'abt_team',
        method: 'GET',
        success: function (data) {
            var container = $('#team');
            var teamData = data.data;
            container.empty();
            if (teamData.length > 0) {
                teamData.forEach(function (team) {
                    if (!team.is_new_update) {
                        let gambar = team.foto_orang ? `${baseURL}images/${team.foto_orang}` : `${baseURL}images/placeholder.png`;
                        var nama = DOMPurify.sanitize(team.nama_orang);
                        var jabatan = DOMPurify.sanitize(team.jabatan);
                        let konten = ` 
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="${gambar}" alt="">
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
                                        <h6>${nama}</h6>
                                    </a>
                                    <small>${jabatan}</small>
                                </div>
                            </div>
                        </div>
                    `;
                        container.append(konten);
                    }
                });
            } else {
                container.append('<center><h6>Data team kosong</h6></center>');
            }
        },
        error: function (error) {
            console.error('Gagal mengambil data' + error);
        }
    });
}

// ajax get data value
$.ajax({
    url: baseURL + 'abt_value',
    method: 'GET',
    success: function (data) {
        var container = $('#value-abt');
        var dataAbt = data.data;
        container.empty();

        if (data.data.length > 0) {
            dataAbt.forEach(function (value) {
                let konten = `
                    <div class="swiper-slide" style="width: 455px; margin-right: 30px;">
                        <a href="${baseURL}images/${value.foto_value}" class="culture-card d-block" data-fancybox="gallery">
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
            container.append('<center><h6>Data value kosong</h6></center>');
        }
    },
    error: function (error) {
        console.error('Gagal mengambil data' + error);
    }
});
// akhir get data Value

function swiper() {
    var swiperAtas = new Swiper('.swiper-container-atas', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 0,
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
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
        breakpoints: {
            0: {
                slidesPerView: 2,
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
        },
        speed: 7000,
        direction: 'horizontal',
    });
    swiperBawah.el.style.transform = 'rotateY(180deg)';
    Array.from(swiperBawah.slides).forEach(slide => {
        slide.style.transform = 'rotateY(180deg)';
    });
};
