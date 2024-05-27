$(document).ready(function () {
    const baseUrl = 'http://192.168.1.3:8000/api/'
    const tampilGmbr = baseUrl + 'images/'
    $.ajax({
        url: baseUrl + 'abt_brand_message',
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
        url: baseUrl + 'abt_hero',
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
        url: baseUrl + 'abt_culture',
        method: 'GET',
        success: function (data) {
            var cultureData = data.data.slice(0, 3);;
            var container = $('#culture');
            container.empty();
            cultureData.forEach(function (culture) {
                let konten = ` 
                <div class="commun-card">
                <div class="icon">
                    <img src="assets/img/icons/code3d.png" alt="">
                </div>
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
        url: baseUrl + 'Service',
        method: 'GET',
        success: function (data) {
            var cultureData = data.data.slice(0, 3);;
            var container = $('#service-abt');
            container.empty();
            cultureData.forEach(function (service) {
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
        url: baseUrl + 'abt_philosophy',
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
});