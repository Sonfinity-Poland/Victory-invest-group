$( document ).ready(function() {

  if(window.innerWidth <= "992") {
    $('.slider').addClass("single-item");
    $('.slider').removeClass("autoplay");
  }
   
  $('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000
  });

  $('.single-item').slick();

  $('.slick-next').html('<i class="fas fa-chevron-right"></i>');
  $('.slick-prev').html('<i class="fas fa-chevron-left"></i>');


});
          