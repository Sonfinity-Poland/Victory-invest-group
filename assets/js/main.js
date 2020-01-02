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


  // PHP MAILER


  function telephoneCheck(str) {
    var isphone = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g.test(str);
    return isphone;
  };

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  };

  function checkFields() {
  if ( $('#name').val()!='' && $('#email').val()!='' && $('#phone').val()!='' && $('#website').val()!='' && $('#budget').val()!='' && $('#message').val()!='') {
    if (telephoneCheck($('#phone').val()) && validateEmail($('#email').val())) {
      return true;
    } 
  };

  return false;
  }

  $('#email, #phone').on('keyup', function() {
    if (telephoneCheck($('#phone').val())) {
      $('.phone_error').hide();
    } else {
      $('.phone_error').addClass('error').show();
    }
    if (validateEmail($('#email').val())) {
      $('.email_error').hide();
    } else {
      $('.email_error').addClass('error').show();
    }
  });

  $('#mail-submit').click(function() {
    var postForm = {
      'name': $('#name').val(),
      'email': $('#email').val(),
      'phone': $('#phone').val(),
      'website': $('#website').val(),
      'budget': $('#budget').val(),
      'message': $('#message').val(),
    };

    if (checkFields()) {
      $.ajax({
        url: "send.php",
        type: "post",
        data: postForm,
        success: function(response) {
          if (response) {
            $('.alertbox').html('Dziękujemy za wiadomość.').addClass('ok').show();
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
    } else {
      $('.alertbox').show();
    }
  })


});
          