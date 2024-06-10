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
                    let konten = ` 
                    <div class="col-lg-3">
                            <a href="#" class="features-card mb-30 style-5">
                                <div class="image">
                                    <img src="https://hexagon.co.id/storage/carrier-images/1WiFmQkGjMQDNBTikMEbP8N8wZOzgkzoKl1huIV7.jpg"
                                        alt="${career.lowong_krj}">
                                </div>
                                <div class="info">
                                    <h5 class="card-title">
                                    ${career.lowong_krj}
                                    </h5>
                                    <p class="text">
                                    ${career.ket_lowong}
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