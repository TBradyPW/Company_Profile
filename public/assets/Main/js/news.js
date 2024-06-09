    $.ajax({
        type: "GET",
        url: baseURL + 'News',
        success: function (result, status, xhr) {
            // swiper.destroy(true, true);
            let data = result.data;

            // Sort data berdasarkan created_at secara menurun
            data.sort((a, b) => {
                const dateA = new Date(a.created_at);
                const dateB = new Date(b.created_at);
                return dateB - dateA;
            });

            // Ambil 3 data terbaru
            const latestData = data.slice(0, 3);

            if (latestData.length > 0) {
                $("#port-list").empty();
                for (let d = 0; d < latestData.length; d++) {
                    // ngatur waktu longtime ago balblalba
                    const [day, month, year, hour, minute, second] = latestData[d].created_at.split(/[:\- ]/);
                    const epochTime = new Date(year, month - 1, day, hour, minute, second).getTime() / 1000;
                    const dateTime = timeAgo(epochTime);

                    // ngatur limit teks
                    const truncatedPostingan = truncateText(latestData[d].postingan, 150);

                    var appendHTML = `
                    <div class="swiper-slide">
                        <div class="content-card">
                            <div class="img overlay">
                                <img src="https://resources.hexagon.co.id/storage/postingan/${data[d].img}" alt="News">
                            </div>
                            <div class="info">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="cont">
                                            <small class="date small mb-20"> <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3"> News </a> <i class="far fa-clock me-1"></i> Posted on ${dateTime} </small>
                                            <h2 class="title">
                                                <a href="">${data[d].judul}</a>
                                            </h2>
                                            <p class="fs-13px mt-10 text-light text-info">
                                                ${truncatedPostingan}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                    $("#our-journal").append(appendHTML);
                }
            }
        },
            error: function (_xhr, status, error) {
                console.error(status + ': ' + error);
            },
})
                // <div class="swiper-slide">
                //     <div class="content-card">
                //         <div class="img overlay">
                //             <img src="https://resources.hexagon.co.id/storage/postingan/${data[d].img}" alt="News">
                //         </div>
                //         <div class="info">
                //             <div class="row">
                //                 <div class="col-lg-6">
                //                     <div class="cont">
                //                         <small class="date small mb-20"> <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3"> News </a> <i class="far fa-clock me-1"></i> Posted on ${dateTime} </small>
                //                         <h2 class="title">
                //                             <a href="">${data[d].judul}</a>
                //                         </h2>
                //                         <p class="fs-13px mt-10 text-light text-info">
                //                             ${truncatedPostingan}
                //                         </p>
                //                     </div>
                //                 </div>
                //             </div>
                //         </div>
                //     </div>
                // </div>
