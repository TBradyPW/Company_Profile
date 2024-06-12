function truncateText(text, maxLength) {
    if (typeof text === 'string' && text.length > maxLength) {
        return text.substring(0, maxLength) + '[..]';
    }
    return text;
}
// Fungsi untuk menghitung waktu yang telah berlalu
function timeSince(date) {
    const now = new Date();
    const secondsPast = (now.getTime() - new Date(date).getTime()) / 1000;

    if (secondsPast < 60) {
        return `${Math.floor(secondsPast)} Detik lalu`;
    }
    if (secondsPast < 3600) {
        return `${Math.floor(secondsPast / 60)} Menit lalu`;
    }
    if (secondsPast < 86400) {
        return `${Math.floor(secondsPast / 3600)} Jam lalu`;
    }
    if (secondsPast < 604800) {
        return `${Math.floor(secondsPast / 86400)} Hari lalu`;
    }
    if (secondsPast < 2419200) {
        return `${Math.floor(secondsPast / 604800)} Minggu lalu`;
    }
    return `${Math.floor(secondsPast / 31536000)} Tahun lalu`;
}

function tampilRandome() {
    $.ajax({
        url: baseURL + 'News',
        type: 'GET',
        success: function (response) {
            var cardsContainer = $('#tampilRandome');
            cardsContainer.empty();
            if (response.data && Array.isArray(response.data) && response.data.length > 0) {
                var cardsData = response.data;
                cardsData = cardsData.sort(() => Math.random() - 0.5);
                cardsData = cardsData.slice(0, 5);
                cardsData.forEach(function (card) {
                    let tagsContent = '';
                    if (Array.isArray(card.tags)) {
                        tagsContent = card.tags.map(tag => `<a href="#">${tag}</a>`).join(' ');
                    }
                    let truncatedDescription = truncateText(card.ket_news, 100);
                    let truncatedJudul = truncateText(card.judul_news, 40);
                    let timeAgo = timeSince(card.created_at);
                    let content = `
                    <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="img img-cover">
                                <img src="https://hexagon.co.id/storage/post-images/591skxQEdBUUXUarcPL78FiRNuSzaxq4pt9oOMiF.jpg" class="radius-7" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body p-0">
                                <small class="d-block date text">
                                    <a href="#"
                                        class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">
                                        ${card.category_news}</a>
                                    <i class="bi bi-clock me-1"></i>
                                    <a href="#" class="op-8">${timeAgo}</a>
                                </small>
                                <a href="page-single-post-5.html?newsId=${card.id}" class="card-title mb-10">${truncatedJudul}</a>
                                <p class="fs-13px color-666">${truncatedDescription}</p>
                                <div class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                    <div class="l_side d-flex align-items-center">
                                        <span
                                            class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                            a
                                        </span>
                                        <a href="#">
                                            <small class="text-muted">By</small> Admin Hexagon
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
                    cardsContainer.append(content);
                });
            } else {
                let content = `<center><h1>TIDAK ADA BERITA</h1></center>`;
                cardsContainer.append(content);
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
}
function beritaBaru() {
    let allData = [];
    let page = 1;
    let totalPages = 1;

    function fetchPage(page) {
        $.ajax({
            url: baseURL + 'News?page=' + page,
            type: 'GET',
            success: function (response) {
                if (response.data && Array.isArray(response.data) && response.data.length > 0) {
                    allData = allData.concat(response.data);
                    if (response.last_page) {
                        totalPages = response.last_page;
                    }
                    if (page < totalPages) {
                        fetchPage(page + 1);
                    } else {
                        displayBerita(allData);
                    }
                } else {
                    displayBerita(allData);
                }
            },
            error: function (_xhr, status, error) {
                console.error(status + ': ' + error);
                displayBerita(allData);
            }
        });
    }

    function displayBerita(data) {
        var cardsContainer = $('#beritaBaru');
        cardsContainer.empty();

        if (data.length > 0) {
            var cardData = data.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
            var cardsData = cardData.slice(0, 3);

            cardsData.forEach(function (card) {
                let tagsContent = '';
                if (Array.isArray(card.tags)) {
                    tagsContent = card.tags.map(tag => `<a href="#">${tag}</a>`).join(' ');
                }
                let truncatedDescription = truncateText(card.ket_news, 100);
                let truncatedJudul = truncateText(card.judul_news, 40);
                let timeAgo = timeSince(card.created_at);
                let content = `
                <div class="col-lg-4">
                    <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                        <div class="img radius-7 overflow-hidden img-cover">
                            <img src="https://hexagon.co.id/storage/post-images/591skxQEdBUUXUarcPL78FiRNuSzaxq4pt9oOMiF.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body px-0">
                            <small class="d-block date mt-10 fs-10px fw-bold">
                                <a href="#"
                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">${card.category_news}</a>
                                <i class="bi bi-clock me-1"></i>
                                <a href="#" class="op-8">Posted on ${timeAgo}</a>
                            </small>
                            <h5 class="fw-bold mt-10 title">
                                <a href="page-single-post-5.html">${truncatedJudul}</a>
                            </h5>
                            <p class="small mt-2 op-8 fs-10px">${truncatedDescription}
                            </p>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span
                                        class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                        a
                                    </span>
                                    <a href="#" class="mt-1">
                                        By Admin Hexagon
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
                cardsContainer.append(content);
            });
        } else {
            let content = `<center><h1>TIDAK ADA BERITA</h1></center>`;
            cardsContainer.append(content);
        }
    }
    fetchPage(page);
}

// Memuat kategori saat dokumen siap
$.ajax({
    url: baseURL + 'category_news',
    type: 'GET',
    success: function (response) {
        if (response && response.data && Array.isArray(response.data) && response.data.length > 0) {
            var categoryData = response.data;
            var container = $('#Category');
            container.empty();
            let showAllButton = `<a href="#" class="cat-item" onclick="munculkanSemua(); $('.cat-item').removeClass('active'); $(this).addClass('active');">
                <span>All</span>
            </a>`;
            container.append(showAllButton);
            categoryData.forEach(function (category) {
                let content = `<a href="#" class="cat-item" data-filter="${category.nama_category}" onclick="munculkanBerdasarkan('${category.nama_category}')">
                    <span>${category.nama_category}</span>
                </a>`;
                container.append(content);
            });
        } else {
            var container = $('#Category');
            container.empty();
            let content = `<h1>Tidak ada category</h1>`;
            container.append(content);
        }
    },
    error: function (_xhr, status, error) {
        console.error(status + ': ' + error);
    }
});

$(document).ready(function () {
    tampilRandome();
    beritaBaru();
});
