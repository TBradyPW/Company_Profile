document.addEventListener("DOMContentLoaded", (event) => {
    event.preventDefault()
    $(document).ajaxStart(function () {
        // Show the preloader when an Ajax request starts
        $("#myPreloader").fadeIn();
    });
    $(document).ajaxStop(function () {
        // Show the preloader when an Ajax request starts
        $("#myPreloader").fadeOut();
    });
    getDataLowongan()
    getDataLowonganAccordion()
});

function timeAgo(timestamp) {
    // alert(timestamp)
    const date = new Date(timestamp * 1000);
    const now = new Date();
    const secondsPast = (now.getTime() - date.getTime()) / 1000;
     
    if (secondsPast < 60) {
       return "Just now";
    }
     
    if (secondsPast < 3600) {
       return `${Math.floor(secondsPast / 60)} minutes ago`;
    }
     
    if (secondsPast <= 86400) {
       return `${Math.floor(secondsPast / 3600)} hours ago`;
    }
     
    if (secondsPast > 86400) {
       const days = Math.floor(secondsPast / 86400);
       return `${days} days ago`;
    }
}

// function truncateText(text, maxLength) {
//     if (text.length > maxLength) {
//         return text.slice(0, maxLength) + '...';
//     }
//     return text;
// }

function getDataLowongan() {
    $.ajax({
      type: "GET",
      url: 'http://localhost:5555/api/take-lowongan',
      dataType: "json",
      headers: {
        // 'Authorization': 'Bearer '+TOKEN,
        'Content-Type': 'application/json'
      },
      success: function (result, status, xhr) {
        let data = result.data
        console.log(result)
        if (data.length > 0) {
            $("#port-list").empty();
          for (let d = 0; d < data.length; d++) {
            // ngatur waktu longtime ago balblalba
            const [day, month, year, hour, minute, second] = data[d].created_at.split(/[:\- ]/);
            const epochTime = new Date(year, month - 1, day, hour, minute, second).getTime() / 1000;
            const dateTime = timeAgo(epochTime)

            // ngatur limit teks
            // const truncatedPostingan = truncateText(data[d].postingan, 150)
            var appendHTML = `
                    <div class="col-lg-3">
                        <a href="#" class="features-card mb-30 style-5">
                            <div class="image">
                                <img src="storage/carrier-images/1WiFmQkGjMQDNBTikMEbP8N8wZOzgkzoKl1huIV7.jpg" alt="Social Media Manager">
                            </div>
                            <div class="info">
                                <h5 class="card-title">
                                    ${data[d].lowongan}
                                </h5>
                                <p class="text">
                                    ${data[d].short_deskripsi}
                                </p>
                                <!-- <button data-bs-toggle="modal" data-bs-target="#exampleModal-${d}" class="mt-4 btn btn-primary btn-sm">Detail Lowongan</button> -->
                            </div>  
                        </a>
                    </div>
                    <div class="modal fade" id="exampleModal-${d}" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>
            `
            $("#list-lowongan").append(appendHTML);
          }
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
      }
    })
}

function getDataLowonganAccordion() {
    $.ajax({
      type: "GET",
      url: 'http://localhost:5555/api/take-lowongan',
      dataType: "json",
      headers: {
        // 'Authorization': 'Bearer '+TOKEN,
        'Content-Type': 'application/json'
      },
      success: function (result, status, xhr) {
        let data = result.data
        console.log(result)
        if (data.length > 0) {
            $("#port-list").empty();
          for (let d = 0; d < data.length; d++) {
            // ngatur waktu longtime ago balblalba
            const [day, month, year, hour, minute, second] = data[d].created_at.split(/[:\- ]/);
            const epochTime = new Date(year, month - 1, day, hour, minute, second).getTime() / 1000;
            const dateTime = timeAgo(epochTime)

            // ngatur limit teks
            // const truncatedPostingan = truncateText(data[d].postingan, 150)
            var appendHTML = `
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-${d}" aria-expanded="false" aria-controls="collapse1">
                        ${data[d].lowongan}
                    </button>
                </h2>
                <div id="collapse-${d}" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="text">
                            ${data[d].deskripsi_lowongan}
                        </p>
                    </div>
                </div>
            </div>
            `
            $(".deskripsi-lowongan").append(appendHTML);
          }
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
      }
    })
}

// function getDataPostLimited() {
//     $.ajax({
//         type: "GET",
//         url: 'http://localhost:5555/api/take-postingan',
//         dataType: "json",
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         success: function (result, status, xhr) {
//             let data = result.data;

//             // Sort data berdasarkan created_at secara menurun
//             data.sort((a, b) => {
//                 const dateA = new Date(a.created_at);
//                 const dateB = new Date(b.created_at);
//                 return dateB - dateA;
//             });

//             // Ambil 3 data terbaru
//             const latestData = data.slice(0, 3);

//             if (latestData.length > 0) {
//                 $("#port-list").empty();
//                 for (let d = 0; d < latestData.length; d++) {
//                     // ngatur waktu longtime ago balblalba
//                     const [day, month, year, hour, minute, second] = latestData[d].created_at.split(/[:\- ]/);
//                     const epochTime = new Date(year, month - 1, day, hour, minute, second).getTime() / 1000;
//                     const dateTime = timeAgo(epochTime);

//                     // ngatur limit teks
//                     const truncatedPostingan = truncateText(latestData[d].postingan, 150);

//                     var appendHTML = `
//                     <div class="col-lg-4 border-end brd-gray">
//                     <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
//                         <div class="img radius-7 overflow-hidden">
//                             <img src="storage/post-images/591skxQEdBUUXUarcPL78FiRNuSzaxq4pt9oOMiF.jpg" alt="News" class="card-img-top">
//                         </div>
//                         <div class="card-body px-0">
//                             <small class="d-block date mt-10 fs-10px fw-bold">
//                                 <a href="posts25d9.html?category=news" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
//                                 <i class="bi bi-clock me-1"></i>
//                                 <a href="#" class="op-8">Posted on ${dateTime}</a>
//                             </small>
//                             <h5 class="fw-bold mt-10 title">
//                                 <a href="posts-kunjungan-industri-smk-nu-haurgeulis-kab-indramayu-membangun-silaturahmi-dan-kerjasama-yang-kokoh-dengan-pt-hexagon-karyatama-indonesia.html">
//                                     ${data[d].judul}
//                                 </a>
//                             </h5>
//                             <p class="small mt-2 op-8 fs-10px">
//                                     ${truncatedPostingan}
//                                 <a href="></a>
//                             </p>
//                             <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
//                                 <div class="mt-2 l_side d-flex align-items-center">
//                                     <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
//                                         ${data[d].author.substring(0, 1)}
//                                         <a>
//                                             ${data[d].author}
//                                         </a>
//                                     </span>
//                                 </div>
//                             </div>
//                         </div>
//                         </div>
//                     </div>
//                     `;
//                     $("#lates-posts").append(appendHTML);
//                 }
//             }
//         },
//         error: function (jqXHR, textStatus, errorThrown) {
//             console.error('Error:', textStatus, errorThrown);
//         }
//     });
// }

// function getDataPostJournal(swiper) {
//     $.ajax({
//         type: "GET",
//         url: 'http://localhost:5555/api/take-postingan',
//         dataType: "json",
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         success: function (result, status, xhr) {
//             // swiper.destroy(true, true);
//             let data = result.data;

//             // Sort data berdasarkan created_at secara menurun
//             data.sort((a, b) => {
//                 const dateA = new Date(a.created_at);
//                 const dateB = new Date(b.created_at);
//                 return dateB - dateA;
//             });

//             // Ambil 3 data terbaru
//             const latestData = data.slice(0, 3);

//             if (latestData.length > 0) {
//                 $("#port-list").empty();
//                 for (let d = 0; d < latestData.length; d++) {
//                     // ngatur waktu longtime ago balblalba
//                     const [day, month, year, hour, minute, second] = latestData[d].created_at.split(/[:\- ]/);
//                     const epochTime = new Date(year, month - 1, day, hour, minute, second).getTime() / 1000;
//                     const dateTime = timeAgo(epochTime);

//                     // ngatur limit teks
//                     const truncatedPostingan = truncateText(latestData[d].postingan, 150);

//                     var appendHTML = `
//                     <div class="swiper-slide">
//                         <div class="content-card">
//                             <div class="img overlay">
//                                 <img src="http://localhost:8000/storage/postingan/${data[d].img}" alt="News">
//                             </div>
//                             <div class="info">
//                                 <div class="row">
//                                     <div class="col-lg-6">
//                                         <div class="cont">
//                                             <small class="date small mb-20"> <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3"> News </a> <i class="far fa-clock me-1"></i> Posted on ${dateTime} </small>
//                                             <h2 class="title">
//                                                 <a href="">${data[d].judul}</a>
//                                             </h2>
//                                             <p class="fs-13px mt-10 text-light text-info">
//                                                 ${truncatedPostingan}
//                                             </p>
//                                         </div>
//                                     </div>
//                                 </div>
//                             </div>
//                         </div>
//                     </div>
//                     `;
//                     $("#our-journal").append(appendHTML);
//                 }
//                 swiper.update();
//             }
//         },
//         error: function (jqXHR, textStatus, errorThrown) {
//             console.error('Error:', textStatus, errorThrown);
//         }
//     });
// }

