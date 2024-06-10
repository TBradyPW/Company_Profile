function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + '...';
    }
    return text;
}

function munculkanSemua() {
    $.ajax({
        url: baseURL + 'Portofolio',
        type: 'GET',
        success: function (response) {
            var cardsContainer = $('#cardsContainer');
            cardsContainer.empty();
            if (response.data && response.data.length > 0) {
                var cardsData = response.data;
                cardsData.forEach(function (card) {
                    let tagsContent = '';
                    if (Array.isArray(card.tags)) {
                        tagsContent = card.tags.map(tag => `<a href="#">${tag}</a>`).join(' ');
                    }
                    let truncatedDescription = truncateText(card.ket_porto, 60);
                    let content = `
                        <div class="col-lg-4 mix ${card.Kategori}">
                            <div class="portfolio-card mb-50">
                                <div class="img">
                                    <img src="https://cdn.dribbble.com/users/4174206/screenshots/16831422/media/94d29474875d173706b59dd856c4012d.jpg?resize=1000x750&vertical=center" alt="">
                                </div>
                                <div class="info" style="background-color: white;">
                                    <h5>
                                        <a href="${card.link}"> ${card.judul_porto} </a>
                                    </h5>
                                    <small class="d-block color-main text-uppercase">${card.Kategori}</small>
                                    <div class="text">
                                        ${truncatedDescription}
                                    </div>
                                    <div class="tags">
                                        <a href="#"> ${card.Kategori}</a>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    cardsContainer.append(content);
                });
            } else {
                let content = `<div class="col-lg-4 mix security consultation">
                    <div class="portfolio-card mb-50">
                        <div class="img">
                            <img src="https://cdn.dribbble.com/users/4174206/screenshots/16831422/media/94d29474875d173706b59dd856c4012d.jpg?resize=1000x750&vertical=center" alt="">
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
                </div>`;
                cardsContainer.append(content);
            }
        },
        error: function (_xhr, status, error) {
            console.error(status + ': ' + error);
        }
    });
}

function munculkanBerdasarkan(nama_category) {
    $.ajax({
        url: baseURL + 'Portofolio?nama_category=' + nama_category,
        type: 'GET',
        success: function (response) {
            var cardsContainer = $('#cardsContainer');
            cardsContainer.empty();
            if (response.data && response.data.length > 0) {
                var cardsData = response.data;
                cardsData.forEach(function (card) {
                    let tagsContent = '';
                    if (Array.isArray(card.tags)) {
                        tagsContent = card.tags.map(tag => `<a href="#">${tag}</a>`).join(' ');
                    }
                    let truncatedDescription = truncateText(card.ket_porto, 60);
                    let content = `
                        <div class="col-lg-4 mix ${card.Kategori}">
                            <div class="portfolio-card mb-50">
                                <div class="img">
                                    <img src="https://cdn.dribbble.com/users/4174206/screenshots/16831422/media/94d29474875d173706b59dd856c4012d.jpg?resize=1000x750&vertical=center" alt="">
                                </div>
                                <div class="info" style="background-color: white;" >
                                    <h5>
                                        <a href="${card.link}"> ${card.judul_porto} </a>
                                    </h5>
                                    <small class="d-block color-main text-uppercase">${card.Kategori}</small>
                                    <div class="text">
                                        ${truncatedDescription}
                                    </div>
                                    <div class="tags">
                                        <a href="#"> ${card.Kategori}</a>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    cardsContainer.append(content);
                });
            } else {
                let content = `<div class="col-lg-4 mix">
                    <div class="portfolio-card mb-50">
                        <div class="img">
                            <img src="https://cdn.dribbble.com/users/4174206/screenshots/16831422/media/94d29474875d173706b59dd856c4012d.jpg?resize=1000x750&vertical=center" alt="">
                        </div>
                        <div class="info">
                            <h5>
                                <a href=""> Category ini tidak ditemukan </a>
                            </h5>
                            <small class="d-block color-main text-uppercase"></small>
                            <div class="text">
                                Tidak ada data di sini.
                            </div>
                            <div class="tags">
                                <a href="#">Pemuda pancasila</a>
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

$.ajax({
    url: baseURL + 'Category',
    type: 'GET',
    success: function (response) {
        console.log(response); // Debugging log
        if (response.data && response.data.length > 0) {
            var categoryData = response.data;
            var container = $('#Category');
            container.empty();
            let showAllButton = `<button type="button" class="control" onclick="munculkanSemua()">All</button>`;
            container.append(showAllButton);
            categoryData.forEach(function (category) {
                let content = `<button type="button" class="control" data-filter="${category.nama_category}" onclick="munculkanBerdasarkan('${category.nama_category}')">${category.nama_category}</button>`;
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

$(document).ready(function () {
    munculkanSemua();
});
