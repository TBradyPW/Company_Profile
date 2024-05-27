document.addEventListener("DOMContentLoaded", (event) => {
    
    event.preventDefault()
    $(document).ajaxStart(function () {
        // Show the preloader when an Ajax request starts
        $("#myPreloader").fadeIn();
    });
    getDataCategory()
    getDataProject('all')
    $(document).ajaxStop(function () {
        // Hide the preloader when all Ajax requests are completed
        $("#myPreloader").fadeOut();
    });

    // ---------- portfolio mixitup -----------
    var containerEl = document.querySelector('.mix-container');
    mixitup(containerEl);

    $("#category-filter").on('click', '.control', function () {
        const items = $('.mix-container .col-lg-4');
        // Remove the active class from all buttons
        $('.control').removeClass('mixitup-control-active');

        // Add the active class to the clicked button
        $(this).addClass('mixitup-control-active');

        const filter = $(this).data('filter');
        getDataProject(filter);
    
        // Show/hide items based on the filter
        items.each(function () {
            const item = $(this);
            item.hide();
    
            if (filter === 'all' || item.hasClass(filter)) {
                item.show();
            }
        });
    });
});

function truncateText(text, maxLength) {
    if (text.length > maxLength) {
        return text.slice(0, maxLength) + '...';
    }
    return text;
}

function getDataProject(params) {
    $.ajax({
      type: "GET",
      url: 'http://localhost:5555/api/take-portfolio',
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
            if (params === 'all' || data[d].category === params){
                // ngatur limit teks
                const truncatedPostingan = truncateText(data[d].project_desc, 50);

                var appendHTML = `
                <div class="col-lg-4 mix security consultation ${data[d].category}">
                    <div class="portfolio-card mb-50">
                        <div class="img img-fluid" id="img-card-porto">
                            <img src="http://localhost:8000/storage/portfolio/${data[d].img[1]}" alt="${data[d].project_name}">
                            </div>
                        <div class="info">
                            <h5>
                                <a href="#" type="button" onclick="getDataCarousel(${data[d].id})" data-bs-toggle="modal" data-bs-target="#exampleModal-${d}"> ${data[d].project_name} </a>
                            </h5>
                            <small class="d-block color-main text-uppercase">${data[d].category}</small>
                            <div class="text">
                                ${truncatedPostingan}
                            </div>
                            <div class="tags">
                                <a href="#">${data[d].category}</a>
                            </div>
                        </div>
                    </div>
                </div>
                `

                const modalnih = `
                <div class="modal fade" id="exampleModal-${d}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">${data[d].project_name}</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div id="carouselExampleInterval-${d}" class="carousel slide mb-4" data-bs-ride="carousel">
                          <div class="carousel-inner" id="carousel-content-${data[d].id}">
                           
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval-${d}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon rounded-3" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval-${d}" data-bs-slide="next">
                            <span class="carousel-control-next-icon rounded-3" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                        <p>${data[d].project_desc.replace(/\n/g, '<br>')}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-sm btn-primary">Save changes</button> -->
                      </div>
                    </div>
                  </div>
                </div>
                `

                $("#port-list").append(appendHTML);
                $('#modal-project').append(modalnih)
            }
          }
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
      }
    })
}

function getDataCategory() {
    $.ajax({
      type: "GET",
      url: 'http://localhost:5555/api/take-porto-category',
      dataType: "json",
      headers: {
        // 'Authorization': 'Bearer '+TOKEN,
        'Content-Type': 'application/json'
      },
      success: function (result, status, xhr) {
        let data = result.data
        // console.log(result)
        if (data.length > 0) {
            // $("#category-filter").empty();
          for (let d = 0; d < data.length; d++) {
            var appendHTML = `
            <button type="button" class="control" data-filter="${data[d].category}">${data[d].category}</button>
            `
            $("#category-filter").append(appendHTML);
            }
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
      }
    })
}

function getDataCarousel(projectId){
  // alert(`Gblg ${projectId}`)
  $.ajax({
    type: "GET",
    url: 'http://localhost:5555/api/take-porto-image/'+projectId,
    dataType: "json",
    headers: {
      // 'Authorization': 'Bearer '+TOKEN,
      'Content-Type': 'application/json'
    },
    success: function (result, status, xhr) {
      let data = result.images
      // console.log(result)
      let isActive = ''
      data.forEach((e, i) => {
        i == 0 ? isActive = 'active' : isActive = ''
        const html = `<div class="carousel-item ${isActive}">
        <img src="http://localhost:8000/storage/portfolio/${e.img_name}" class="d-block w-75 mx-auto" alt="...">
      </div>
        `
        $(`#carousel-content-${projectId}`).append(html)
        
      });
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.error('Error:', textStatus, errorThrown);
    }
  })
}