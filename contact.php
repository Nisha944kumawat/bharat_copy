<?php include("components.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- title -->
  <title><?php echo $titlepage; ?></title>
  <meta name="description" content="Tranzit - Transport & Logistic Services HTML Templatee">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0, user-scalable=yes">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS start here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawsome/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/odometer.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- CSS end here -->
</head>

<body>
<?php include("header.php"); ?>
  <!-- Main area start -->
  <main>
    <!-- Page header section start -->
    <section class="ep-page-header-section bg-control" data-background="assets/img/banner/sliderimg1.png">
      <div class="overlay bg-control" data-background="assets/img/bg/pageheaderbg.png">
        <div class="container">
          <div class="text text-center">
            <h1 class="page-title text-white pb-20">Contact Us</h1>
            <ul class="list-unstyled bread-crumb d-flex justify-content-center">
              <li><a href="./index.php">Home</a></li>
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Page header section end -->
    <!-- Contact us section start -->
<section class="ep-contact-section">
  <div class="container">

    <div class="contact-info-main pt-60">
      <div class="section-title text-center pb-60">
        <h6 class="subtitle d-inline-flex align-items-center">Contact Us
          <!-- <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.3171 1.10946e-05L19.3136 8.18934L11.3171 16.3787L3.32062 16.3787L11.3171 8.18934L3.32062 1.14441e-05L11.3171 1.10946e-05Z"
                fill="currentColor" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M0.686401 16.3787L0.686401 8.18934L0.686401 1.14441e-05L4.68376 4.09467L8.68199 8.18934L4.68376 12.284L0.686401 16.3787Z"
                fill="currentColor" />
            </svg>
          </span> -->
        </h6>

        <h2 class="title heading-two split-text right">Get In Touch With Us</h2>
        <p class="contact-desc">
    We are here to assist you with our products and services. Connect with us for inquiries, support, or business-related information.
   </p>
      </div>

      <div class="row g-5 align-items-stretch">

        <!-- LEFT CONTACT FORM -->
        <div class="col-lg-6 d-flex">
          <div class="tranzit-contact-form style3 custom rounded-20 me-0 w-100">

            <form id="contactForm" action="sendmail.php" method="POST">
              <div class="row g-4">

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="input-group black">
                    <input required name="form_name" type="text"
                      class="form-control shadow-none rounded-pill"
                      placeholder="Name">

                    <span class="icon position-absolute top-50 translate-middle-y">
                      <i class="fa-solid fa-user"></i>
                    </span>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="input-group">
                    <input required name="form_email" type="email"
                      class="form-control shadow-none rounded-pill"
                      placeholder="Email">

                    <span class="icon position-absolute top-50 translate-middle-y">
                      <i class="fa-solid fa-envelope"></i>
                    </span>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="input-group">
                    <input required name="form_phone" type="text"
                      class="form-control shadow-none rounded-pill"
                      placeholder="Phone Number">

                    <span class="icon position-absolute top-50 translate-middle-y">
                      <i class="fa-solid fa-phone"></i>
                    </span>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="input-group">
                    <input required name="form_address" type="text"
                      class="form-control shadow-none rounded-pill"
                      placeholder="Address">

                    <span class="icon position-absolute top-50 translate-middle-y">
                      <i class="fa-solid fa-home"></i>
                    </span>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="input-group">
                    <textarea name="form_message"
                      placeholder="Your Message"
                      class="form-control textarea-control shadow-none rounded-pill"></textarea>

                    <span class="icon icon-textarea position-absolute">
                      <i class="fa-solid fa-pen"></i>
                    </span>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                  <button type="submit"
                    class="theme-btn hover-effect-btn style2 text-uppercase w-100 border-0 rounded-pill d-flex align-items-center gap-2 text-center justify-content-center">

                    Send Message

                    <span class="theme-btn-icon">
                      <svg class="su-arrow-svg-top-right" width="10" height="10"
                        viewBox="0 0 10 10" fill="none"
                        xmlns="http://www.w3.org/2000/svg">

                        <path
                          d="M10 1V8C10 8.29167 9.90625 8.53125 9.71875 8.71875C9.53125 8.90625 9.29167 9 9 9C8.70833 9 8.46875 8.90625 8.28125 8.71875C8.09375 8.53125 8 8.29167 8 8V3.40625L1.71875 9.71875C1.51042 9.90625 1.27083 10 1 10C0.729167 10 0.489583 9.90625 0.28125 9.71875C0.09375 9.51042 0 9.27083 0 9C0 8.72917 0.09375 8.48958 0.28125 8.28125L6.59375 2H2C1.70833 2 1.46875 1.90625 1.28125 1.71875C1.09375 1.53125 1 1.29167 1 1C1 0.708333 1.09375 0.46875 1.28125 0.28125C1.46875 0.09375 1.70833 0 2 0H9C9.29167 0 9.53125 0.09375 9.71875 0.28125C9.90625 0.46875 10 0.708333 10 1Z"
                          fill="white"></path>

                        <path
                          d="M10 1V8C10 8.29167 9.90625 8.53125 9.71875 8.71875C9.53125 8.90625 9.29167 9 9 9C8.70833 9 8.46875 8.90625 8.28125 8.71875C8.09375 8.53125 8 8.29167 8 8V3.40625L1.71875 9.71875C1.51042 9.90625 1.27083 10 1 10C0.729167 10 0.489583 9.90625 0.28125 9.71875C0.09375 9.51042 0 9.27083 0 9C0 8.72917 0.09375 8.48958 0.28125 8.28125L6.59375 2H2C1.70833 2 1.46875 1.90625 1.28125 1.71875C1.09375 1.53125 1 1.29167 1 1C1 0.708333 1.09375 0.46875 1.28125 0.28125C1.46875 0.09375 1.70833 0 2 0H9C9.29167 0 9.53125 0.09375 9.71875 0.28125C9.90625 0.46875 10 0.708333 10 1Z"
                          fill="white"></path>

                      </svg>
                    </span>
                  </button>
                </div>

              </div>
            </form>

            <p class="ajax-response mb-0"></p>
          </div>
        </div>

        <!-- RIGHT CONTACT INFO -->
        <!-- RIGHT CONTACT INFO -->
   <!-- RIGHT CONTACT INFO -->
   <!-- RIGHT CONTACT INFO -->
   <div class="col-lg-6 d-flex">
    <div class="contact-img custom rounded-20 overflow-hidden w-100">

        <div class="contact-info h-100 d-flex flex-column gap-4">

            <!-- TOP CARD -->
            <div class="info-item custom rounded-30 p-4 flex-grow-1">

                <!-- ADDRESS -->
                <div class="d-flex align-items-start gap-3 mb-4">

                    <div class="icon custom flex-shrink-0 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div class="text">
                        <h4 class="heading-four mb-2">Office Address</h4>

                        <p class="mb-0">
                            <a class="custom"
                               href="<?php echo $addresslink; ?>"
                               target="_blank">
                                <?php echo $address; ?>
                            </a>
                        </p>
                    </div>

                </div>

                <!-- CALL + EMAIL -->
                <!-- CALL + EMAIL -->
    <div class="row g-2 align-items-center">

    <!-- CALL -->
    <div class="col-md-5">

        <div class="d-flex align-items-center gap-2 h-100">

            <div class="icon custom flex-shrink-0 d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-phone"></i>
            </div>

            <div class="text">
                <h4 class="heading-four mb-1">Call Us</h4>

                <p class="mb-0">
                    <a href="tel:<?php echo $mobilenumber1; ?>">
                        9351022500
                    </a>
                </p>
            </div>

        </div>

    </div>

    <!-- EMAIL -->
    <div class="col-md-7 ps-md-2">

        <div class="d-flex align-items-center gap-2 h-100">

            <div class="icon custom flex-shrink-0 d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="text email-text">
                <h4 class="heading-four mb-1">Email Us</h4>

                <p class="mb-0">
                    <a href="mailto:<?php echo $emailaddress; ?>">
                        <?php echo $emailaddress; ?>
                    </a>
                </p>
            </div>

        </div>

    </div>

   </div>

            </div>

            <!-- BOTTOM CARD (MAP) -->
            <div class="info-item custom rounded-30 overflow-hidden p-0 flex-grow-1">

                <div class="position-relative h-100">

                    <iframe
                        src="<?php echo $addressiframe; ?>"
                        width="100%"
                        height="100%"
                        style="border:0; display:block; min-height:350px;"
                        loading="lazy">
                    </iframe>

                    <a href="<?php echo $review; ?>"
                       target="_blank"
                       style="
                       position:absolute;
                       top:0;
                       left:0;
                       width:100%;
                       height:100%;
                       z-index:9;">
                    </a>

                </div>

            </div>

        </div>

    </div>
   </div>
      </div>
    </div>
  </div>
</section>
<style>
  .contact-info{
    height:100%;
}

.contact-info .info-item{
    background:#fff;
    border:1px solid #e8e8e8;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.contact-info .icon.custom{
    width:90px;
    height:90px;
    min-width:90px;
    border-radius:20px;
}

.contact-info .heading-four{
    margin-bottom:8px;
}
.contact-info .row{
    --bs-gutter-x: 10px;
}

.contact-info .row .d-flex{
    gap:12px !important;
}

.contact-info .icon.custom{
    width:75px;
    height:75px;
    min-width:75px;
}

.contact-info .email-text{
    min-width:0;
    flex:1;
}

.contact-info .email-text a{
    display:block;
    word-break:break-word;
    overflow-wrap:break-word;
    line-height:1.5;
}

.contact-info .text p{
    margin-bottom:0;
}

@media (max-width:991px){

    .contact-info .icon.custom{
        width:70px;
        height:70px;
        min-width:70px;
    }

    .contact-info .row .col-md-5,
    .contact-info .row .col-md-7{
        margin-bottom:15px;
    }

}
@media(max-width:991px){

    .contact-info{
        margin-top:30px;
    }

    .contact-info .icon.custom{
        width:70px;
        height:70px;
        min-width:70px;
    }

    .contact-info .row .col-md-6{
        margin-bottom:15px;
    }

}
</style>

    <!-- Contact us section end -->

    <div id="output"></div>

  
  </main>
  <!-- Main area end -->
  <?php include("footer.php"); ?>
  <!-- JS start here -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/gsap.js"></script>
  <script src="assets/js/gsap-scroll-trigger.js"></script>
  <script src="assets/js/gsap-split-text.js"></script>
  <script src="assets/js/simple-parallax.js"></script>
  <script src="assets/js/jquery.appear.js"></script>
  <script src="assets/js/jquery.odometer.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- <script src="assets/js/ajax-form.js"></script> -->
  <script src="assets/js/jquery.nice-select.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
  <!-- JS end here -->
</body>
</html>