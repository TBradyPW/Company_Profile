
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



function alamat() {
    $.ajax({
        url: baseURL + 'alamat',
        method: 'GET',
        success: function (data) {
            var container = $('#alamat');
            container.empty();
            if (data.data.length > 0) {
                var cultureData = data.data.slice(0, 3);
                cultureData.forEach(function (alm) {

                    var divisi = DOMPurify.sanitize(alm.nama_tempat);
                    var alamat = DOMPurify.sanitize(alm.lokasi);
                    let konten = ` 
                    <p> ${divisi}: </p> ${alamat} <br>
                    <br>
                    `;
                    container.append(konten);
                });
            } else {
                container.append('<h6>Lokasi tidak di ketahui</h6>');
            }
        },
        error: function (error) {
            console.error('Gagal mengambil data:', error);
        }
    });
}

$(document).ready(function () {
    contact();
    alamat();
});