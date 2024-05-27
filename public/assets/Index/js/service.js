var topServiceSwiper = new Swiper('.services-slider.style-6 .swiper-container', {
    slidesPerView: 6,
    centeredSlides: true,
    spaceBetween: 0,
    speed: 1000,
    pagination: false,
    navigation: false,
    mousewheel: false,
    keyboard: true,
    autoplay: {
        delay: 4000,
    },
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        480: {
            slidesPerView: 1,
        },
        787: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 6,
        }
    },
    on: {
        slideChange: function () {
          var activeIndex = this.activeIndex;
          var realIndex = this.slides.eq(activeIndex).attr('data-swiper-slide-index');
         $('.swiper-slide').removeClass('swiper-slide-nth-prev-2 swiper-slide-nth-next-2');
         $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').prev().prev().addClass('swiper-slide-nth-prev-2');
         $('.swiper-slide[data-swiper-slide-index="'+realIndex+'"]').next().next().addClass('swiper-slide-nth-next-2');
        },
      }
});

var reviewSwiper = new Swiper('.testimonial-slider.style-5 .swiper-container', {
    slidesPerView: 4,
    spaceBetween: 0,
    speed: 1000,
    pagination: {
        el: ".testimonial-slider.style-5 .swiper-pagination",
        clickable: true,
    },
    navigation: false,
    mousewheel: false,
    keyboard: true,
    autoplay: {
        delay: 4000,
    },
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        480: {
            slidesPerView: 1,
        },
        787: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        }
    }
});

document.addEventListener("DOMContentLoaded", (event) => {
    event.preventDefault()
    $(document).ajaxStart(function () {
        $("#myPreloader").fadeIn();
    });
    $(document).ajaxStop(function () {
        $("#myPreloader").fadeOut();
    });
    getOurService();
    getDataClientReviews(reviewSwiper)
    getDataTopService(topServiceSwiper)
});

function getOurService() {
  const portoUrl = "http://localhost:5555/api/take-ourservice";
  const fetchOptions = {
      method: "GET",
      // headers: {
      //     "Authorization": token !== '' ? `Bearer ${token}` : ''
      // }
  };
  
  fetch(portoUrl, fetchOptions)
      .then(response => {
          if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
          }
          // console.log(response)
          return response.json();
      })
      .then(data => {
          // console.log(data)
          const ourServiceElement = document.getElementById("our-service");

          data.data.forEach(item => {
                  const cardContainer = document.createElement("div");
                  cardContainer.className = "col-lg-3";

                  const anchorElement = document.createElement("a");
                  anchorElement.href = "#";
                  anchorElement.className = "features-card mb-30 style-5";

                  const iconContainer = document.createElement("div");
                  iconContainer.className = "icon";

                  const imgElement = document.createElement("img");
                  imgElement.src = 'http://localhost:8000/storage/service/ourservice/'+item.img;
                  imgElement.alt = item.card_header;

                  const infoContainer = document.createElement("div");
                  infoContainer.className = "info";

                  const headingElement = document.createElement("h5");
                  headingElement.className = "card-title";
                  headingElement.textContent = item.card_header; 

                  const textElement = document.createElement("p");
                  textElement.className = "text";
                  textElement.textContent = item.card_detail;

                  iconContainer.appendChild(imgElement);
                  infoContainer.appendChild(headingElement);
                  infoContainer.appendChild(textElement);
                  anchorElement.appendChild(iconContainer);
                  anchorElement.appendChild(infoContainer);
                  cardContainer.appendChild(anchorElement);

                  ourServiceElement.appendChild(cardContainer);
          });
      })
      .catch(error => {
          console.error("Fetch error:", error);
  });
}

function getDataTopService(swiper) {
    $.ajax({
      type: "GET",
      url: 'http://localhost:5555/api/take-topservice',
      dataType: "json",
      headers: {
        // 'Authorization': 'Bearer '+TOKEN,
        'Content-Type': 'application/json'
      },
      success: function (result, status, xhr) {
        $('table#tableData > tbody > tr').remove();
        $('#tableData').parent().find('ul.pagination > li').remove()
        $('#tableData').parent().find('div.row-detail > div').remove()
        let data = result.data
        // console.log(data)
        if (data.length > 0) {
          for (let d = 0; d < data.length; d++) {
            var appendHTML = `
            <div class="swiper-slide">
                <a href="#" class="service-card style-6">
                    <div class="icon"> 
                        <img src="http://localhost:8000/storage/service/topservice/${data[d].img}" alt="${data[d].card_header}">
                    </div>
                    <div class="info">
                        <h5>${data[d].card_header}</h5>
                        <div class="text">
                            ${data[d].card_detail}
                        </div>
                    </div>
                </a>
            </div>
            `
            $("#top-service-swiper").append(appendHTML);
          }
          swiper.update()
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
      }
    })
}

function getDataClientReviews(swiper) {
    $.ajax({
      type: "GET",
      url: 'http://localhost:5555/api/take-clientreview',
      dataType: "json",
      headers: {
        // 'Authorization': 'Bearer '+TOKEN,
        'Content-Type': 'application/json'
      },
      success: function (result, status, xhr) {
        $('table#tableData > tbody > tr').remove();
        $('#tableData').parent().find('ul.pagination > li').remove()
        $('#tableData').parent().find('div.row-detail > div').remove()
        let data = result.data
        // console.log(data)
        if (data.length > 0) {
          for (let d = 0; d < data.length; d++) {
                let stars = ''
                for(let star = 1; star <= parseInt(data[d].rating); star++){
                    stars += '<i class="fas fa-star"></i>'
                }
                var appendHTML = `
                <div class="swiper-slide">
                    <a href="#" class="testi-card style-5">
                        <div class="stars">
                            ${stars}
                        </div>
                        <div class="text">
                            ${data[d].comment}
                        </div>
                        <div class="user mt-40 text-center">
                            <div class="icon-80 rounded-circle img-cover overflow-hidden m-auto">
                                <img src="assets/img/team/1.jpg" alt="">
                            </div>
                            <h6>${data[d].name}</h6>
                            <small>${data[d].job}</small>
                        </div>
                    </a>
                </div>
              `
            // for(let star = 1; star <= data.rating; star++){
            // }
            $("#client-reviews-service").append(appendHTML);
          }
          swiper.update()
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
      }
    })
  }

