
function contact() {
    $.ajax({
        url: baseURL + 'contact',
        type: 'GET',
        success: function (data) {
            if (data.data.length > 0) {
                var email = data.data[data.data.length - 1].email;
                var nomor = data.data[data.data.length - 1].notlp;
                $('#email').text(email);
                $('#nomor').text(nomor);
            } else {
                $('#email').text('Tidak ada email');
                $('#nomor').text('Tidak ada nomor');
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
                container.append('<h6>Data culture kosong</h6>');
            }
        },
        error: function (error) {
            console.error('Gagal mengambil data:', error);
        }
    });
}