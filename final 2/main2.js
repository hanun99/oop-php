$(document).ready(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 20) {
        $("#toTopBtn").fadeIn();
      } else {
        $("#toTopBtn").fadeOut();
      }
    });
  
    $("#toTopBtn").click(function() {
      $("html, body").animate(
        {
          scrollTop: 0
        },
        1000
      );
      return false;
    });
    
  });
let search = document.querySelector('.search-box');

document.querySelector('#search-icon').onclick = () => {
    search.classList.toggle('active');
}
var swiper = new Swiper(".home", {
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


// Swiper
var swiper = new Swiper(".teater-container", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 55000,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        568: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        },
        968: {
            slidesPerView: 5,
        },
    },
});