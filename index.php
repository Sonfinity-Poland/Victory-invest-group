<?php 
  include "config.php";
?>

<!DOCTYPE html>
<html lang="pl">
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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/css/flag-icon.min.css">
    <script
      src="https://kit.fontawesome.com/0708c757e1.js"
      crossorigin="anonymous"
    ></script>
    <title>Victory Invest Group</title>
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
                <a href="index.php?lang=pl" class="poland-flag">
                  <img src="assets/images/poland.png" alt="">
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?lang=en" class="poland-flag">
                  <img src="assets/images/united-kingdom.png" alt="">
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <section id="main_banner">
      <div class="container">
        <h1 class="main-title">
          <?php echo $lang['main_title_first'] ?><br />
          <?php echo $lang['main_title_second'] ?>
        </h1>
        <h2 class="main-subtitle">
          <?php echo $lang['mian_subtitle'] ?>
        </h2>
        <a href="contact.php" class="link-button"><?php echo $lang['banner_button'] ?></a>
      </div>
    </section>
    <section id="studies">
      <div class="container">
        <h2 class="section-title"><?php echo $lang['results_title'] ?></h2>
        <p class="section-subtitle">
          <?php echo $lang['results_subtitle'] ?>
        </p>
        <div class="row">
          <div class="col-md-6">
            <div class="case-box">
              <img
                src="https://www.seodirect.org/wp-content/uploads/2019/07/graphic-casae-studie-1.png"
                alt=""
                class="img-fluid"
              />
              <div class="row case-numbers">
                <div class="col-md-6">
                  <span class="percentage">630%</span>
                  <span class="percentage-text"><?php echo $lang['results_percentage_first'] ?></span>
                </div>
                <div class="col-md-6">
                  <span class="percentage">320%</span>
                  <span class="percentage-text"><?php echo $lang['results_percentage_second'] ?></span>
                </div>
              </div>
              <p class="case-description">
                <?php echo $lang['results_text_first'] ?>
              </p>
              <div class="row case-testimonial">
                <img
                  src="assets/images/james_kern.jpg"
                  alt=""
                  class="avatar"
                />
                <p class="case-footer">
                  <strong>James Kern</strong><br />
                  <?php echo $lang['results_job_first'] ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="case-box">
              <img
                src="https://www.seodirect.org/wp-content/uploads/2019/07/graphic-casae-studie-1.png"
                alt=""
                class="img-fluid"
              />
              <div class="row case-numbers">
                <div class="col-md-6">
                  <span class="percentage">120%</span>
                  <span class="percentage-text"><?php echo $lang['results_percentage_first'] ?></span>
                </div>
                <div class="col-md-6">
                  <span class="percentage">85%</span>
                  <span class="percentage-text"><?php echo $lang['results_percentage_second'] ?></span>
                </div>
              </div>
              <p class="case-description">
                <?php echo $lang['results_text_second'] ?>
              </p>
              <div class="row case-testimonial">
                <img
                  src="assets/images/jansen_lee.jpg"
                  alt=""
                  class="avatar"
                />
                <p class="case-footer">
                  <strong>Jensen Lee</strong><br />
                  <?php echo $lang['results_job_second'] ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="section-grey">
      <div class="container">
        <h2 class="section-title"><?php echo $lang['about_title'] ?></h2>
        <p class="section-subtitle">
          <?php echo $lang['about_subtitle'] ?>
        </p>
        <div class="row slider autoplay">
          <div class="col-lg-4 col-sm-12">
            <div class="client-box">
              <img
                src="assets/images/joel_portillo.jpg"
                alt=""
                class="img-responsive avatar"
              />
              <p><strong>Joel Portillo</strong></p>
              <p><?php echo $lang['joel_job'] ?></p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="client-description">
                <?php echo $lang['joel_description'] ?>			  	
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="client-box">
              <img
                src="assets/images/matt_schreiber.jpg"
                alt=""
                class="img-responsive avatar"
              />
              <p><strong>Matt Schreiber</strong></p>
              <p><?php echo $lang['matt_job'] ?></p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="client-description">
                <?php echo $lang['matt_description'] ?>					
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="client-box">
              <img
                src="assets/images/harley_di_nardo.jpg"
                alt=""
                class="img-responsive avatar"
              />
              <p><strong>Harley Di Nardo</strong></p>
              <p><?php echo $lang['harley_job'] ?></p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="client-description">
                <?php echo $lang['harley_description'] ?>	
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
              <div class="client-box">
                <img
                  src="assets/images/hart_levin.jpg"
                  alt=""
                  class="img-responsive avatar"
                />
                
                <p><strong>Hart Levin</strong></p>
                <p><?php echo $lang['hart_job'] ?></p>


                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="client-description">
                  <?php echo $lang['hart_description'] ?>	
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="client-box">
                <img

                  src="assets/images/tom_werz.jpg"
                  alt=""
                  class="img-responsive avatar"
                />
                <p><strong>TOM WERZ</strong></p>
                <p><?php echo $lang['tom_job'] ?></p>

                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="client-description">
                  <?php echo $lang['tom_description'] ?>		
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="client-box">
                <img
                  src="assets/images/jansen_lee.jpg"
                  alt=""
                  class="img-responsive avatar"
                />

                <p><strong>Jensen Lee</strong></p>
                <p><?php echo $lang['jensen_job'] ?></p>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="client-description">
                  <?php echo $lang['jensen_description'] ?>					
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="client-box">
                  <img
                    src="assets/images/joseph_farzam.jpg"
                    alt=""
                    class="img-responsive avatar"
                  />
                  <p><strong>Joseph Farzam</strong></p>
                  <p><?php echo $lang['joseph_job'] ?>	</p>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p class="client-description">
                    <?php echo $lang['joseph_description'] ?>
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="client-box">
                  <img
                    src="assets/images/donna_mills.jpg"
                    alt=""
                    class="img-responsive avatar"
                  />
                  <p><strong>Donna Mills</strong></p>
                  <p><?php echo $lang['donna_job'] ?></p>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p class="client-description">
                    <?php echo $lang['donna_description'] ?>					
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="client-box">
                  <img
                    src="assets/images/taylor_hunter.jpg"
                    alt=""
                    class="img-responsive avatar"
                  />
                  <p><strong>Taylor Hunter</strong></p>
                  <p><?php echo $lang['taylor_job'] ?></p>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p class="client-description">
                    <?php echo $lang['taylor_description'] ?>		
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="client-box">
                  <img
                    src="assets/images/jessica_kienzl.jpg"
                    alt=""
                    class="img-responsive avatar"
                  />
                  <p><strong>Jessica Kienzl</strong></p>
                  <p><?php echo $lang['jessica_job'] ?></p>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p class="client-description">
                    <?php echo $lang['jessica_description'] ?>								
                  </p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="client-box">
                  <img
                    src="assets/images/dan_bassett.jpg"
                    alt=""
                    class="img-responsive avatar"
                  />
                  <p><strong>Dan Bassett</strong></p>
                  <p><?php echo $lang['dan_job'] ?></p>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p class="client-description">
                    <?php echo $lang['dan_description'] ?>								
                  </p>
                </div>
              </div>
        </div>
      </div>
    </section>

    <section id="features">
      <div class="container">
		<h2 class="pre-title"><?php echo $lang['features_pretitle'] ?></h2>
		<h2 class="section-title"><?php echo $lang['features_title'] ?></h2>
		<p class="section-subtitle"><?php echo $lang['features_subtitle'] ?></p>
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="features-box">
					<img 
						src="https://www.seodirect.org/wp-content/uploads/2018/08/place-optimization-seo-direct.svg" 
						alt=""
					>
					<p class="box-title"><strong><?php echo $lang['box_title_first'] ?></strong></p>
					<p><?php echo $lang['box_text_first'] ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="features-box">
					<img 
						src="https://www.seodirect.org/wp-content/uploads/2018/08/global-search-seo-direct.svg" 
						alt=""
					>
					<p class="box-title"><strong><?php echo $lang['box_title_second'] ?></strong></p>
					<p><?php echo $lang['box_text_second'] ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="features-box">
					<img 
						src="https://www.seodirect.org/wp-content/uploads/2018/08/e-commerce-seo-direct.svg" 
						alt=""
					>
					<p class="box-title"><strong><?php echo $lang['box_title_third'] ?></strong></p>
					<p><?php echo $lang['box_text_third'] ?></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="features-box">
					<img 
						src="https://www.seodirect.org/wp-content/uploads/2018/08/directory-submission.svg" 
						alt=""
					>
					<p class="box-title"><strong><?php echo $lang['box_title_fourth'] ?></strong></p>
					<p><?php echo $lang['box_text_fourth'] ?></p>
				</div>
			</div>
		</div>
	  </div>
    </section>
    <section id="faq"  class="section-grey">
      <div class="container">
        <h2 class="section-title mb-5"><?php echo $lang['faq_title'] ?></h2>
        <div class="row">
          <div class="col-md-6">
              <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-plus"></i>
                            <?php echo $lang['faq_1_title'] ?>
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <?php echo $lang['faq_1_text'] ?>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <i class="fas fa-plus"></i>
                          <?php echo $lang['faq_2_title'] ?>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <?php echo $lang['faq_2_text'] ?>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <i class="fas fa-plus"></i>
                          <?php echo $lang['faq_3_title'] ?>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <?php echo $lang['faq_3_text'] ?>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                      <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                              <i class="fas fa-plus"></i>
                              <?php echo $lang['faq_4_title'] ?>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                          <?php echo $lang['faq_4_text'] ?>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-plus"></i>
                                <?php echo $lang['faq_5_title'] ?>
                            </button>
                          </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                          <div class="card-body">
                            <?php echo $lang['faq_5_text'] ?>
                          </div>
                        </div>
                      </div>
                </div>
          </div>
          <div class="col-md-6">
              <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            <i class="fas fa-plus"></i>
                            <?php echo $lang['faq_6_title'] ?>
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <?php echo $lang['faq_6_text'] ?>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <i class="fas fa-plus"></i>
                            <?php echo $lang['faq_7_title'] ?>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                        <?php echo $lang['faq_7_text'] ?>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingEight">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <i class="fas fa-plus"></i>
                            <?php echo $lang['faq_8_title'] ?>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="card-body">
                        <?php echo $lang['faq_8_text'] ?>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                      <div class="card-header" id="headingNine">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              <i class="fas fa-plus"></i>
                              <?php echo $lang['faq_9_title'] ?>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                          <?php echo $lang['faq_9_text'] ?>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" id="headingTen">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                              <i class="fas fa-plus"></i>
                              <?php echo $lang['faq_10_title'] ?>
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                          <?php echo $lang['faq_10_text'] ?>
                        </div>
                      </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>
    <section id="form">
      	<div class="container">
		  	<div class="row">
				<div class="col-lg-6 text-left" style="padding-top: 100px;">
					<h2 class="section-title"><?php echo $lang['form_title'] ?></h2>
					<p><?php echo $lang['form_p_1'] ?></p>
					<p><?php echo $lang['form_p_2'] ?></p>
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
      src="//code.jquery.com/jquery-3.3.1.js"
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
    
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="assets/js/main.js"></script>

  </body>
</html>