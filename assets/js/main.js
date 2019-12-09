$( document ).ready(function() {

  //SLICK

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


  // ACCORDION

  var buttons = document.querySelectorAll('.card-header .btn');
  console.log(buttons);

  buttons.forEach(button => button.addEventListener("click", () => {
    var icon = button.querySelector('i');

    if(!button.classList.contains("collapsed")) {
      icon.classList.remove("fa-minus");
      icon.classList.add("fa-plus");
      icon.style.color = "grey";
    } else {
      icon.classList.add("fa-minus");
      icon.classList.remove("fa-plus");
      icon.style.color = "#006adc";
    }
  }))


});
          