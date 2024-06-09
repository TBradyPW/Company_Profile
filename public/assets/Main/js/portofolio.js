// Fungsi untuk memuat semua kartu tanpa filter kategori
function loadAllCards() {
    $.ajax({
        url: baseURL + 'Portofolio',
        type: 'GET',
        success: function (response) {
            var cardsContainer = $('#cardsContainer');
            cardsContainer.empty();
            if (response.data.length > 0) {
                var cardsData = response.data;
                cardsData.forEach(function (card) {
                    let content = `
                        <div class="col-lg-4 mix ${card.category}">
                            <div class="portfolio-card mb-50">
                                <div class="img">
                                    <img src="${card.imageUrl}" alt="">
                                </div>
                                <div class="info">
                                    <h5>
                                        <a href="${card.link}"> ${card.title} </a>
                                    </h5>
                                    <small class="d-block color-main text-uppercase">${card.category}</small>
                                    <div class="text">
                                        ${card.description}
                                    </div>
                                    <div class="tags">
                                        ${card.tags.map(tag => `<a href="#">${tag}</a>`).join(' ')}
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    cardsContainer.append(content);
                });
            } else {
                let content = ` <div class="col-lg-4 mix security consultation">
                <div class="portfolio-card mb-50">
                    <div class="img">
                        <img src="{{ asset('assets/Main/img/projects/prog/1.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h5>
                            <a href="page-single-project-5.html"> Infrastructure Upgrade </a>
                        </h5>
                        <small class="d-block color-main text-uppercase">IT Consultation</small>
                        <div class="text">
                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                        </div>
                        <div class="tags">
                            <a href="#">Consultation</a>
                            <a href="#">Management</a>
                        </div>
                    </div>
                </div>
            </div>  `;
                cardsContainer.append(content);
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
}

// Fungsi untuk memuat kartu berdasarkan kategori
function loadCategoryCards(categoryId) {
    $.ajax({
        url: baseURL + 'Portofolio?categoryId=' + categoryId,
        type: 'GET',
        success: function (response) {
            var cardsContainer = $('#cardsContainer');
            cardsContainer.empty();
            if (response.data.length > 0) {
                var cardsData = response.data;
                cardsData.forEach(function (card) {
                    let content = `
                        <div class="col-lg-4 mix ${card.category}">
                            <div class="portfolio-card mb-50">
                                <div class="img">
                                    <img src="${card.imageUrl}" alt="">
                                </div>
                                <div class="info">
                                    <h5>
                                        <a href="${card.link}"> ${card.title} </a>
                                    </h5>
                                    <small class="d-block color-main text-uppercase">${card.category}</small>
                                    <div class="text">
                                        ${card.description}
                                    </div>
                                    <div class="tags">
                                        ${card.tags.map(tag => `<a href="#">${tag}</a>`).join(' ')}
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    cardsContainer.append(content);
                });
            } else {
                let content = ` <div class="col-lg-4 mix ">
                <div class="portfolio-card mb-50">
                    <div class="img">
                        <img src="" alt="">
                    </div>
                    <div class="info">
                        <h5>
                            <a href=""> Category ini tidak di temukan </a>
                        </h5>
                        <small class="d-block color-main text-uppercase"></small>
                        <div class="text">
                            Tidak ad adata disini..
                        </div>
                        <div class="tags">
                            Pemuda pancasila
                        </div>
                    </div>
                </div>
            </div>`;
                cardsContainer.append(content);
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
}

// Menampilkan kategori dan tombol untuk semua kartu
$.ajax({
    url: baseURL + 'Category',
    type: 'GET',
    success: function (response) {
        if (response.data.length > 0) {
            var categoryData = response.data;
            var container = $('#Category');
            container.empty();
            let showAllButton = `<button type="button" class="control" onclick="loadAllCards()">All</button>`;
            container.append(showAllButton);
            categoryData.forEach(function (category) {
                let content = `<button type="button" class="control" data-filter="${category.id}" onclick="loadCategoryCards(${category.id})">${category.nama_category}</button>`;
                container.append(content);
            });
        } else {
            let content = `<h1>Tidak ada category</h1>`;
            container.append(content);
        }
    },
    error: function (_xhr, status, error) {
        console.error(status + ': ' + error);
    }
});

// Memuat semua kartu saat halaman pertama kali dimuat
$(document).ready(function () {
    loadAllCards();
});
