$(document).ready(function () {
    const baseUrl = 'http://192.168.1.3:8000/api/'
    const tampilGmbr = baseUrl + 'images/'
    $.ajax({
        url: baseUrl + 'abt_brand_message',
        type: 'GET',
        success: function (data) {
            var keterangan = data.data[0].keterangan;
            $('#brand_keterangan').text(keterangan);
        },
        error: function (xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });

    $.ajax({
        url: baseUrl + 'abt_hero',
        type: 'GET',
        success: function (data) {
            var linkyt = data.data[0].linkyt;
            $('#linkyt').attr('href', linkyt);
        },
        error: function (xhr, status, error) {
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
        error: function (xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });

    $.ajax({
        url: baseUrl + 'abt_philosophy',
        type: 'GET',
        success: function (data) {
            var latestData = data.data;
            var philosophy = latestData.ket_pilo;
            $('#philosophy').text(philosophy);
        },
        error: function (xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
});
