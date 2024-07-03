var currentPage = 1;
var currentCategory = '';

function loadPage(page) {
    if (page < 1) return;
    currentPage = page;
    if (currentCategory) {
        munculkanBerdasarkan(currentCategory);
    } else {
        munculkanSemua();
    }
}

// Untuk membataskan panjang teks jika terlalu panjang
function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + '...';
    }
    return text;
}

// Menampilkan seluruh data tanpa berdasarkan category
function munculkanSemua() {
    currentPage = 1;
    $.ajax({
        url: baseURL + 'Portofolio?page=' + currentPage + '&page=' + currentPage,
        type: 'GET',
        success: function (response) {
            var cardsContainer = $('#cardsContainer');
            cardsContainer.empty();
            if (response.data.length > 0) {
                var cardsData = response.data;
                cardsData.forEach(function (card) {
                    var keterangan = DOMPurify.sanitize(card.ket_porto);
                    let truncatedDescription = truncateText(keterangan, 60);
                    var kategori = DOMPurify.sanitize(card.Kategori);
                    var judul = DOMPurify.sanitize(card.judul_porto);
                    let content = `
                        <div class="col-lg-4 mix ${kategori}">
                            <div class="portfolio-card mb-50">
                                <div class="img">
                                    <img src="${baseURL}images/${card.fotoprojek}" alt="">
                                </div>
                                <div class="info" style="background-color: white;">
                                    <h5>
                                        <a href="Portofolio/Post/${card.id}">
                                            ${judul}
                                        </a>
                                    </h5>
                                    <small class="d-block color-main text-uppercase">${kategori}</small>
                                    <div class="text">
                                        ${truncatedDescription}
                                    </div>
                                    <div class="tags">
                                        <a href="#">${kategori}</a>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    cardsContainer.append(content);
                });
                updatePaginationControls(response.current_page, response.last_page);
            } else {
                let content = `<center><h1>Tidak ada data di kategori ini</h1></center>`;
                cardsContainer.append(content);
                hidePaginationControls();
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
}

// Menampilkan data berdasarkan category
function munculkanBerdasarkan(nama_category) {
    currentCategory = nama_category;
    currentPage = 1;
    $.ajax({
        url: baseURL + 'Portofolio?nama_category=' + nama_category + '&page=' + currentPage,
        type: 'GET',
        success: function (response) {
            var cardsContainer = $('#cardsContainer');
            cardsContainer.empty();
            if (response.data.length > 0) {
                var cardsData = response.data;
                cardsData.forEach(function (card) {
                    var keterangan = DOMPurify.sanitize(card.ket_porto);
                    let truncatedDescription = truncateText(keterangan, 60);
                    var kategori = DOMPurify.sanitize(card.Kategori);
                    var judul = DOMPurify.sanitize(card.judul_porto);
                    let content = `
                        <div class="col-lg-4 mix ${kategori}">
                            <div class="portfolio-card mb-50">
                                <div class="img">
                                    <img src="${baseURL}images/${card.fotoprojek}" alt="">
                                </div>
                                <div class="info" style="background-color: white;">
                                    <h5>
                                        <a href="Portofolio/Post/${card.id}">
                                            ${judul}
                                        </a>
                                    </h5>
                                    <small class="d-block color-main text-uppercase">${kategori}</small>
                                    <div class="text">
                                        ${truncatedDescription}
                                    </div>
                                    <div class="tags">
                                        <a href="#">${kategori}</a>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    cardsContainer.append(content);
                });
                updatePaginationControls(response.current_page, response.last_page);
            } else {
                let content = `<center><h1>Tidak ada data di kategori ini</h1></center>`;
                cardsContainer.append(content);
                hidePaginationControls();
            }
            // Mengubah warna tombol kategori yang aktif
            $('.control').removeClass('active');
            $(`[data-filter="${nama_category}"]`).addClass('active');
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
}

function updatePaginationControls(currentPage, totalPages) {
    var paginationControls = $('#paginationControls');
    paginationControls.empty();

    if (totalPages > 1) {
        $('.pagination').show();
        for (var i = 1; i <= totalPages; i++) {
            let pageControl = `<a href="#" onclick="loadPage(${i})" class="${i === currentPage ? 'active' : ''}"><span>${i}</span></a>`;
            paginationControls.append(pageControl);
        }
    } else {
        hidePaginationControls();
    }
}

function hidePaginationControls() {
    $('.pagination').hide();
}

// Category portofolio
$.ajax({
    url: baseURL + 'Category',
    type: 'GET',
    success: function (response) {
        if (response.data && response.data.length > 0) {
            var categoryData = response.data;
            var container = $('#Category');
            container.empty();
            let showAllButton = `<button type="button" style="font-weight: bold; font-size: 14.4px; ./ass="control" onclick="munculkanSemua(); $('.control').removeClass('active'); $(this).addClass('active');">All</button>`;
            container.append(showAllButton);
            categoryData.forEach(function (category) {
                var kategori = DOMPurify.sanitize(category.nama_category);
                let content = `<button type="button" style="font-weight: bold; font-size: 14.4px;" class="control" data-filter="${category.nama_category}" onclick="munculkanBerdasarkan('${category.nama_category}')">
                    ${kategori}
                </button>`;
                container.append(content);
            });
        } else {
            let content1 = `<h1> Tidak ada kategori</h1>`;
            container.append(content1);
        }
    },
    error: function (_xhr, status, error) {
        console.error(status + ': ' + error);
    }
});

munculkanSemua();
munculkanBerdasarkan();

// $(window).on('load', function () {
// });
// $(document).ready(function () {
//     munculkanSemua();
//     munculkanBerdasarkan();
// });
