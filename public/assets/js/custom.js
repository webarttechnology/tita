$(document).ready(function () {
    var swiper = new Swiper(".mySwiper1", {
        // autoplay: {
        //    delay: 2500,
        //    disableOnInteraction: false,
        // },
        pagination: {
        el: ".swiper-pagination",
        },
     });

     var swiper = new Swiper(".mySwiper2", {
      // autoplay: {
      //    delay: 2500,
      //    disableOnInteraction: false,
      // },
      navigation: {
         nextEl: ".bi-chevron-left",
         prevEl: ".bi-chevron-right",
       },
    });
    
     var swiper = new Swiper(".brandslogos", {
        autoplay: {
           delay: 2500,
           loop: true,
           disableOnInteraction: false,
        },
        breakpoints: {
           '280': {
              slidesPerView: 1,
              spaceBetween: 50,
           },
           '600': {
              slidesPerView: 3,
              spaceBetween: 50,
           },
           '991': {
              slidesPerView: 5,
              spaceBetween: 50,
           },
           '1200': {
              slidesPerView: 7,
              spaceBetween: 50,
           },
        },
        // pagination: {
        //    el: ".swiper-pagination",
        // },
     });

     var swiper = new Swiper(".carlistingslider", {
      autoplay: {
         delay: 2500,
         loop: true,
         disableOnInteraction: false,
      },
      breakpoints: {
         '280': {
            slidesPerView: 1,
            spaceBetween: 50,
         },

      },
      pagination: {
         el: ".swiper-pagination",
      },
   });

     /* menue active */
    var url = window.location;
    $('ul.navbar-nav a[href="' + url + '"]').parent().addClass('actives');
    $('ul.navbar-nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('actives');



    
});


