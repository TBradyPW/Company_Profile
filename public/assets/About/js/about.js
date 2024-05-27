$(document).ready(function () {
    console.log(`env yeuh`)
    $.ajax({
        url: baseURL + 'abt_brand_message',
        type: 'GET',
        success: function (data) {
            if (data.data.length > 0) {
                var keterangan = data.data[data.data.length - 1].keterangan;
                $('#brand_keterangan').text(keterangan);
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });

    $.ajax({
        url: env('API_BASE_URL') + 'abt_hero',
        type: 'GET',
        success: function (data) {
            if (data.data.length > 0) {
                var linkyt = data.data[data.data.length - 1].linkyt;
                $('#linkyt').attr('href', linkyt);
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });

    $.ajax({
        url: env('API_BASE_URL') + 'abt_culture',
        method: 'GET',
        success: function (data) {
            var cultureData = data.data.slice(0, 3);;
            var container = $('#culture');
            container.empty();
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
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });

    $.ajax({
        url: env('API_BASE_URL') + 'Service',
        method: 'GET',
        success: function (data) {
            var serviceData = data.data.slice(0, 3);;
            var container = $('#service-abt');
            container.empty();
            serviceData.forEach(function (service) {
                let konten = ` 
                <li class="d-flex mb-40">   
                <small class="icon-50 me-4 flex-shrink-0">
                <img src="${baseUrl}images/${service.fotoservice}" alt="">
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
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });

    $.ajax({
        url: env('API_BASE_URL') + 'abt_philosophy',
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

    $.ajax({
        url: baseUrl + 'abt_team',
        method: 'GET',
        success: function (data) {
            var teamData = data.data;;
            var container = $('#team');
            container.empty();
            teamData.forEach(function (team) {
                let konten = ` 
                <div class="col-lg-3 col-sm-6">
                <div class="team-card mb-30 mb-lg-0 style-6">
                <div class="img img-cover">
                <img src="${baseUrl}images/${team.foto_orang}" alt="">
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
            });
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
});