var currentPage = 1;
var pageSize = 10; // Number of items per page

function loadPage(page) {
    if (page < 1) return;
    currentPage = page;
    munculkanSemua();
}

// Fungsi untuk memotong teks jika terlalu panjang
function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + '...';
    }
    return text;
}

// Fungsi untuk menampilkan modal portofolio
function showPortfolioModal(judul, keterangan, foto) {
    const tampilFotoPro = `${baseURL}images/${foto}`;
    $('#portfolioModalLabel').text(judul);
    $('#portfolioDescription').html(keterangan.replace(/\n/g, '<br/>'));
    $('#portfolioImage').attr('src', tampilFotoPro);
    $('#portfolioModal').modal('show');
}

// Fungsi untuk memuat semua portofolio
function munculkanSemua() {
    $.ajax({
        url: baseURL + 'Portofolio?page=' + currentPage + '&pageSize=' + pageSize,
        type: 'GET',
        success: function (response) {
            var cardsContainer = $('#cardsContainer');
            cardsContainer.empty();
            if (response.data && response.data.length > 0) {
                var cardsData = response.data;
                cardsData.forEach(function (card) {
                    let truncatedDescription = truncateText(card.ket_porto, 60);
                    let content = `
                        <div class="col-lg-4 mix ${card.Kategori}">
                            <div class="portfolio-card mb-50">
                                <div class="img">
                                    <img src="${baseURL}images/${card.fotoprojek}" alt="">
                                </div>
                                <div class="info" style="background-color: white;">
                                    <h5>
                                        <a href="javascript:void(0);" onclick="showPortfolioModal('${card.judul_porto}', \`${card.ket_porto.replace(/'/g, "\\'")}\`, '${card.fotoprojek}')">
                                            ${card.judul_porto}
                                        </a>
                                    </h5>
                                    <small class="d-block color-main text-uppercase">${card.Kategori}</small>
                                    <div class="text">
                                        ${truncatedDescription}
                                    </div>
                                    <div class="tags">
                                        <a href="#">${card.Kategori}</a>
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

// Fungsi untuk memuat portofolio berdasarkan kategori
function munculkanBerdasarkan(nama_category) {
    $.ajax({
        url: baseURL + 'Portofolio?nama_category=' + nama_category + '&page=' + currentPage + '&pageSize=' + pageSize,
        type: 'GET',
        success: function (response) {
            var cardsContainer = $('#cardsContainer');
            cardsContainer.empty();
            if (response.data && response.data.length > 0) {
                var cardsData = response.data;
                cardsData.forEach(function (card) {
                    let truncatedDescription = truncateText(card.ket_porto, 60);
                    let content = `
                        <div class="col-lg-4 mix ${card.Kategori}">
                            <div class="portfolio-card mb-50">
                                <div class="img">
                                    <img src="${baseURL}images/${card.fotoprojek}" alt="">
                                </div>
                                <div class="info" style="background-color: white;">
                                    <h5>
                                        <a href="javascript:void(0);" onclick="showPortfolioModal('${card.judul_porto}', \`${card.ket_porto.replace(/'/g, "\\'")}\`, '${card.fotoprojek}')">
                                            ${card.judul_porto}
                                        </a>
                                    </h5>
                                    <small class="d-block color-main text-uppercase">${card.Kategori}</small>
                                    <div class="text">
                                        ${truncatedDescription}
                                    </div>
                                    <div class="tags">
                                        <a href="#">${card.Kategori}</a>
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

// Memuat kategori saat dokumen siap
$.ajax({
    url: baseURL + 'Category',
    type: 'GET',
    success: function (response) {
        if (response.data && response.data.length > 0) {
            var categoryData = response.data;
            var container = $('#Category');
            container.empty();
            let showAllButton = `<button type="button" class="control" onclick="munculkanSemua(); $('.control').removeClass('active'); $(this).addClass('active');">All</button>`;
            container.append(showAllButton);
            categoryData.forEach(function (category) {
                let content = `<button type="button" class="control" data-filter="${category.nama_category}" onclick="munculkanBerdasarkan('${category.nama_category}')">
                    ${category.nama_category}
                </button>`;
                container.append(content);
            });
        } else {
            let content1 = `<h1> Tidak ada kategori</h1>`;
            // container.append(content1);
        }
    },
    error: function (_xhr, status, error) {
        console.error(status + ': ' + error);
    }
});

// Inisialisasi saat dokumen siap
$(document).ready(function () {
    munculkanSemua();
});
