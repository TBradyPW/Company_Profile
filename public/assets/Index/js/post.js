var swiper = new Swiper('.blog-details-slider .swiper-container', {
            slidesPerView: 1,
            spaceBetween: 0,
            effect: "fade",
            speed: 1000,
            pagination: {
                el: ".blog-details-slider .swiper-pagination",
                clickable: "true",
            },
            navigation: {
                nextEl: '.blog-details-slider .swiper-button-next',
                prevEl: '.blog-details-slider .swiper-button-prev',
            },
            mousewheel: false,
            keyboard: true,
            autoplay: {
                delay: 500,
            },
            loop: true
        });

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
    getDataPost('all')
    getDataPostLimited()
    getDataPostJournal(swiper)
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

function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.slice(0, maxLength) + '...';
    }
    return text;
}

function getDataPost(params) {
    $.ajax({
      type: "GET",
      url: 'http://localhost:5555/api/take-postingan',
      dataType: "json",
      headers: {
        // 'Authorization': 'Bearer '+TOKEN,
        'Content-Type': 'application/json'
      },
      success: function (result, status, xhr) {
        let data = result.data
        // console.log(result)
        if (data.length > 0) {
            $("#port-list").empty();
          for (let d = 0; d < data.length; d++) {
            // ngatur waktu longtime ago balblalba
            const [day, month, year, hour, minute, second] = data[d].created_at.split(/[:\- ]/);
            const epochTime = new Date(year, month - 1, day, hour, minute, second).getTime() / 1000;
            const dateTime = timeAgo(epochTime)

            // ngatur limit teks
            const truncatedPostingan = truncateText(data[d].postingan, 150)

            if (params === 'all' || data[d].category === params){
                var appendHTML = `
                <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="img img-cover">
                                <img src="storage/post-images/591skxQEdBUUXUarcPL78FiRNuSzaxq4pt9oOMiF.jpg" class="radius-7" alt="News">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body p-0">
                                <small class="d-block date text">
                                    <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold"> News </a>
                                    <i class="bi bi-clock me-1"></i>
                                    <a href="#" class="op-8">${dateTime}</a>
                                </small>
                                <a href="#" class="card-title mb-10">
                                    ${data[d].judul}
                                </a>
                                <p class="fs-13px color-666 ellipsis">
                                    ${truncatedPostingan}
                                </p>
                                <div class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                    <div class="l_side d-flex align-items-center">
                                        <span
                                            class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                            ${data[d].author.substring(0, 1)}
                                        </span>
                                        <a href="posts3e27.html?author=gilda.hidayanto">
                                            <small class="text-muted">By</small> ${data[d].author}
                                        </a>
                                    </div>
                                    <div class="r-side mt-1">
                                        <i class="bi bi-chat-left-text me-1"></i>
                                        <a href="#">24</a>
                                        <i class="bi bi-eye ms-4 me-1"></i>
                                        <a href="#">774k</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                `
                $("#all-posts").append(appendHTML);
            }
          }
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
      }
    })
}

function getDataPostLimited() {
    $.ajax({
        type: "GET",
        url: 'http://localhost:5555/api/take-postingan',
        dataType: "json",
        headers: {
            'Content-Type': 'application/json'
        },
        success: function (result, status, xhr) {
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
                    <div class="col-lg-4 border-end brd-gray">
                    <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                        <div class="img radius-7 overflow-hidden">
                            <img src="storage/post-images/591skxQEdBUUXUarcPL78FiRNuSzaxq4pt9oOMiF.jpg" alt="News" class="card-img-top">
                        </div>
                        <div class="card-body px-0">
                            <small class="d-block date mt-10 fs-10px fw-bold">
                                <a href="posts25d9.html?category=news" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                <i class="bi bi-clock me-1"></i>
                                <a href="#" class="op-8">Posted on ${dateTime}</a>
                            </small>
                            <h5 class="fw-bold mt-10 title">
                                <a href="posts-kunjungan-industri-smk-nu-haurgeulis-kab-indramayu-membangun-silaturahmi-dan-kerjasama-yang-kokoh-dengan-pt-hexagon-karyatama-indonesia.html">
                                    ${data[d].judul}
                                </a>
                            </h5>
                            <p class="small mt-2 op-8 fs-10px">
                                    ${truncatedPostingan}
                                <a href="></a>
                            </p>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="mt-2 l_side d-flex align-items-center">
                                    <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                        ${data[d].author.substring(0, 1)}
                                        <a>
                                            ${data[d].author}
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    `;
                    $("#lates-posts").append(appendHTML);
                }
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error:', textStatus, errorThrown);
        }
    });
}

function getDataPostJournal(swiper) {
    $.ajax({
        type: "GET",
        url: 'http://localhost:5555/api/take-postingan',
        dataType: "json",
        headers: {
            'Content-Type': 'application/json'
        },
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
                                <img src="http://localhost:8000/storage/postingan/${data[d].img}" alt="News">
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
                swiper.update();
                // swiper.destroy(true, true);
                // const newSwiper = new Swiper('.swiper-container', {
                //     direction: 'horizontal',

                //     loop: true,

                //     slidesPerView: 1,

                //     spaceBetween: 10,

                //     navigation: {

                //         nextEl: '.swiper-button-next',

                //         prevEl: '.swiper-button-prev',

                //     },

                //     pagination: {

                //         el: '.swiper-pagination',

                //         clickable: true,

                //     },
                // });
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error:', textStatus, errorThrown);
        }
    });
}

