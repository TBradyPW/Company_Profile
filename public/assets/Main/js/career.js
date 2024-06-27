$(window).on('load', function () {
    // ajax get data services
    $.ajax({
        url: baseURL + 'Career',
        method: 'GET',
        success: function (data) {
            var container = $('#list-lowongan');
            container.empty();
            if (data.data.length > 0) {
                data.data.forEach(function (career) {
                    var lowongan = DOMPurify.sanitize(career.lowong_krj);
                    var keterangan = DOMPurify.sanitize(career.ket_lowong);
                    let konten = ` 
                    <div class="col-lg-3">
                            <a href="#" class="features-card mb-30 style-5">
                                <div class="image">
                                    <img src="https://hexagon.co.id/storage/carrier-images/1WiFmQkGjMQDNBTikMEbP8N8wZOzgkzoKl1huIV7.jpg"
                                        alt="${lowongan}">
                                </div>
                                <div class="info">
                                    <h5 class="card-title">
                                    ${lowongan}
                                    </h5>
                                    <p class="text">
                                    ${keterangan}
                                    </p>
                                </div>
                            </a>
                        </div> 
                `;
                    container.append(konten);
                });
            } else {
                container.append('<center><h1>Tidak ada data lowongan</h1></center>');
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
});