<?php 
  include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/normalize.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <script
      src="https://kit.fontawesome.com/0708c757e1.js"
      crossorigin="anonymous"
    ></script>
    <title>Victory Invest Group | Contact</title>
  </head>
  <body>
    <header class="page_header">
      <div class="container">
        <nav class="navbar navbar-expand-lg indigo">
          <div class="logo_holder">
            <a href="index.php">
              <img src="assets/images/logo.png" alt="" class="img-fluid logo" />
            </a>
          </div>
          <button
            class="navbar-toggler custom-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto d-flex align-items-center">
              <li class="nav-item active">
                <a class="nav-link" href="services.php"><?php echo $lang['services'] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="our-results.php"><?php echo $lang['results'] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="why-us.php"><?php echo $lang['why_us'] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php"><?php echo $lang['contact'] ?></a>
              </li>
              <li class="nav-item">
                <a href="contact.php?lang=pl" class="poland-flag">
                  <img src="assets/images/poland.png" alt="">
                </a>
              </li>
              <li class="nav-item">
                <a href="contact.php?lang=en" class="poland-flag">
                  <img src="assets/images/united-kingdom.png" alt="">
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <section class="breadcrumbs">
      <div class="container">
        <p><a href="index.php"><?php echo $lang['breadcrumbs'] ?></a> » <?php echo $lang['breadcrumbs_contact'] ?></p>
      </div>
    </section>

    <section id="case-studies">
      <div class="container">
        <h2 class="section-title"><?php echo $lang['contact_title'] ?></h2>
        <p class="section-subtitle">
          <?php echo $lang['contact_subtitle'] ?>
        </p>
        <div class="row">
          <div class="col-lg-6 contact-paragraphs">
            <div class="d-flex">
                <img src="https://www.seodirect.org/wp-content/uploads/2018/08/no-contracts-seo-direct.svg" alt="" class="mr-2 mb-1">
                <h3><?php echo $lang['contact_title_1'] ?></h3>
            </div>
            <p><?php echo $lang['contact_text_1'] ?></p>
            <div class="d-flex">
                <img src="assets/images/poland.png" alt="" class="mr-2 mb-1">
                <h3><?php echo $lang['contact_title_2'] ?></h3>
            </div>
            <p><?php echo $lang['contact_text_2'] ?></p>
          </div>
          <div class="col-lg-6">
            <div class="mailer">
                <div class="wrapper">
                  <div class="inner">
                    <label for="name"><?php echo $lang['form_name'] ?></label>
                    <input id="name" name="name" type="text">
                  </div>
                  <div class="inner">
                    <label for="email"><?php echo $lang['form_email'] ?></label>
                    <input id="email" name="email" type="text">
                    <div class="email_error"><?php echo $lang['form_email_error'] ?></div>
                  </div>
                </div>
                <div class="wrapper">
                  <div class="inner">
                    <label for="phone"><?php echo $lang['form_phone'] ?></label>
                    <input id="phone" name="phone" type="text">
                    <div class="phone_error"><?php echo $lang['form_phone_error'] ?></div>
                  </div>
                  <div class="inner">
                    <label for="website"><?php echo $lang['form_website'] ?></label>
                    <input id="website" name="website" type="text">
                  </div>
                </div>
                <div class="wrapper">
                  <div class="inner">
                    <label for="budget"><?php echo $lang['form_budget'] ?></label>
                    <input id="budget" name="budget" type="text">
                  </div>
                  <div class="inner">
                    <label for=""><?php echo $lang['form_contact'] ?></label>
                    <div class="checkbox">
                      <input  type="checkbox" value="Phone">
                      <label for=""><?php echo $lang['form_checkbox_1'] ?></label>
                    </div>
                    <div class="checkbox">
                      <input type="checkbox" value="Email">
                      <label for=""><?php echo $lang['form_checkbox_2'] ?></label>
                    </div>
                  </div>
                </div>
                <div class="wrapper">
                  <div class="inner textarea">
                    <label for="message"><?php echo $lang['form_message'] ?></label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                  </div>
                  <div class="alertbox"><?php echo $lang['form_alert'] ?></div>
                </div>
                <button id="mail-submit" class="link-button"><?php echo $lang['form_button'] ?></button>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blue">
      <div class="container">
        <h2 class="mb-4"><?php echo $lang['blue_title'] ?></h2>
        <a href="#" class="link-button">
          <i class="far fa-envelope"></i>
          <?php echo $lang['blue_button'] ?>
        </a>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="assets/images/logo.png" alt="" class="footer-logo">
            </div>
            <div class="col-lg-4">
              <h4 class="footer-column-heading"><?php echo $lang['footer_header_1'] ?></h4>
              <div class="row">
                <i class="fas fa-map-marker-alt"></i>
                <p>
                  Victory Invest Group sp. z o.o.<br>
                  ul. Solec 81B lok. A-51 <br>
                  00-382 Warszawa
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <h4 class="footer-column-heading"><?php echo $lang['footer_header_2'] ?></h4>
              <div class="row">
                  <i class="far fa-envelope"></i> biuro@victoryinvest.pl
              </div>
            </div>
        </div>
      </div>
    </footer>
    <div id="copyrights">
      <div class="container">
        <span>Copyright &#9400; 2019</span>
        <span><strong>Victory Invest Group</strong></span>
        <span class="rights"><?php echo $lang['copy_text_1'] ?></span>
        <span class="terms"><?php echo $lang['copy_text_2'] ?></span>
        <span><?php echo $lang['copy_text_3'] ?></span>
	    </div>
	  </div>

    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>

    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>

    <script
      type="text/javascript"
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
