<!-- Preloader start -->
  <!-- <div class="fullpage_loader">
    <span class="loader">
    </span>
  </div> -->
  <!-- Preloader end -->
  <!-- Header section start -->
  <div id="header-fixed-height"></div>
  <header class="ep-header-section" id="sticky-header">
    <!-- Top header section start -->
    <div class="d-none d-xl-block top-header custom">
      <div class="container">
        <div class="row">
          <div class="col-md-8 align-self-center">
            <ul class="list-unstyled contact-info left d-flex align-items-center" style="flex-wrap: nowrap; gap:20px;">
              <li class="d-flex align-items-center gap-2 text-white">
                <span class="icon">
                  <i class="fa-solid fa-phone"></i>
                </span>
                <a href="tel:<?php echo $mobilenumber1; ?>"><?php echo $mobilenumber1; ?></a>
              </li>
              <li class="d-flex align-items-center gap-2 text-white">
                <span class="icon">
                  <i class="fa-solid fa-envelope"></i>
                </span>
                <a href="mailto:<?php echo $emailaddress; ?>"><?php echo $emailaddress; ?></a>
              </li>
              <li class="d-flex align-items-center gap-2 text-white">
                <span class="icon">
                  <i class="fa-solid fa-location-dot"></i>
                </span>
                <a href="<?php echo $addresslink; ?>"><?php echo $address; ?></a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="list-unstyled contact-info d-flex justify-content-end flex-wrap align-items-center">
              <div class="language d-flex align-items-center gap-2">
                <!-- <div class="img">
                  <img src="assets/img/header/icon.svg" alt="language">
                </div>
                <div class="input-group">
                  <select class="form-select white shadow-none">
                    <option value="en">English</option>
                    <option value="fr">French</option>
                    <option value="es">Spanish</option>
                    <option value="bn">Bengali</option>
                    <option value="hi">Hindi</option>
                  </select>
                </div> -->
              </div>
              <div class="social-icon">
                <ul class="d-flex list-unstyled gap-2">
                  <li>
                    <a href="https://www.facebook.com/profile.php?id=100064167338334" class="rounded-pill d-flex align-items-center justify-content-center">
                      <i class="fa-brands fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/@bharatcopy6850" class="rounded-pill d-flex align-items-center justify-content-center">
                      <i class="fa-brands fa-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/bharatcopyudhyog2?igsh=MXJ3cjV5NWNvdnNjMQ==" class="rounded-pill d-flex align-items-center justify-content-center">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top header section end -->
    <nav class="navbar p-0 navbar-expand-xl d-none d-xl-flex">
      <a class="navbar-brand position-absolute p-0" href="index">
        <svg class="shape" xmlns="http://www.w3.org/2000/svg" width="359" height="160" viewBox="0 0 359 160"
          fill="none">
          <path d="M0 0H359L315 60V160H227.056H0V0Z" fill="currentColor" />
        </svg>
        <img  src="assets/img/logo/logo.png"
class="position-absolute logo"
id="mainLogo"
alt="logo"
style="
width:200px;
transition:all 0.3s ease;
top:35px;
left:60px;
z-index:999;
">
      </a>
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="./index.php">
                Home 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php"> About Us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./shop.php">
                Our Products
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="https://shop.bharatcopy.com">
                Shop Now
              </a>
            </li>
        
             <li class="nav-item">
              <a class="nav-link" href="./gallary.php"> Gallery </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php"> Contact US</a>
            </li>
          </ul>
          <div class="header-action d-flex justify-content-end align-items-center">
            <ul class="list-unstyled d-none d-xxl-flex gap-3">
              <li>
                <button
                  class="offcanvas-btn rounded-pill bg-three border-0 d-flex align-items-center justify-content-center">
                  <i class="fa-solid fa-bars"></i>
                </button>
              </li>
            </ul>
           
          </div>
        </div>
      </div>
    </nav>
    <!-- offcanvas menu part start -->
    <div class="offcanvas-overlay position-fixed top-0 start-0 w-100 h-100"></div>
    <aside class="offcanvas-menu position-fixed top-0 h-100 w-100">
      <div class="header-info d-flex align-items-center justify-content-between gap-4">
        <div class="logo">
          <a href="index">
            <img class="bg-white p-2 rounded-3" src="assets/img/logo/logo.png" width="200" alt="logo">
          </a>
        </div>
        <button class="offcasvas-close bg-transparent border-0 text-white">
          <i class="fa-regular fa-xmark"></i>
        </button>
      </div>
      <div class="des">
        <p>Platinum Cables excels in offering premium electrical solutions for residential, commercial, and industrial sectors. We specialize in an extensive range of cables, from ACSR conductors to insulated, flexible, and specialized wires. Our commitment to innovation, quality, and customer satisfaction ensures reliable, durable products tailored to meet diverse client needs.</p>
      </div>
      <div class="contact-info separator">
        <h4 class="contact-title heading-four text-white">Contact Info</h4>
        <ul class="list-unstyled">
          <li class="d-flex align-items-center gap-3">
            <div
              class="icon-box icon-box-border d-flex align-items-center justify-content-center rounded-pill flex-shrink-0">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="info">
              <h5 class="info-label text-white mb-2">
                Call Now</h5>
              <a href="tel:<?php echo $mobilenumber1; ?>" class="info-text">+91-<?php echo substr($mobilenumber1,3,10); ?></a>
            </div>
          </li>
          <li class="d-flex align-items-center gap-3">
            <div
              class="icon-box icon-box-border d-flex align-items-center justify-content-center rounded-pill flex-shrink-0">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="info">
              <h5 class="info-label text-white mb-2">Email Us</h5>
              <a href="mailto:<?php echo $emailaddress; ?>" class="info-text"><?php echo $emailaddress; ?></a>
            </div>
          </li>
          <li class="d-flex align-items-center gap-3">
            <div
              class="icon-box icon-box-border d-flex align-items-center justify-content-center rounded-pill flex-shrink-0">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="info">
              <h5 class="info-label text-white mb-2">Location</h5>
              <a href="<?php echo $addresslink; ?>" target="_blank" class="info-text"><?php echo $address; ?></a>
            </div>
          </li>
        </ul>
      </div>
      <div class="social-icon pt-30">
        <h4 class="social-title heading-four text-white">Social Info</h4>
        <ul class="list-unstyled d-flex align-items-center flex-wrap gap-2">
          <li><a class="icon-box secondary-bg d-flex align-items-center justify-content-center rounded-pill"
              target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a class="icon-box secondary-bg d-flex align-items-center justify-content-center rounded-pill"
              target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a class="icon-box secondary-bg d-flex align-items-center justify-content-center rounded-pill"
              target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
    </aside>
    <!-- offcanvas menu part end -->


    <!-- mobile navbar part start -->
    <!-- =========================
MOBILE RESPONSIVE HEADER START
========================= -->

<!-- MOBILE HEADER -->
<!-- MOBILE HEADER -->

<div class="d-block d-xl-none"

style="
position:fixed;
top:0;
left:0;
width:100%;
background:#fff;
z-index:999999;
box-shadow:0 2px 10px rgba(0,0,0,0.08);
">

    <!-- INNER -->

    <div

    style="
    height:90px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:12px;
    ">

        <!-- LOGO -->

        <a href="index"

        style="
        text-decoration:none;
        display:flex;
        align-items:center;
        ">

            <img

            src="assets/img/logo/logo.png"

            id="mobileLogo"

            alt="logo"

            style="
            width:85px;
            display:block;
            object-fit:contain;
            margin-top:40px;
            ">

        </a>



        <!-- MENU BUTTON -->

        <button

        id="openMobileMenu"

        style="
        border:none;
        background:#b1198d;
        color:#fff;
        width:38px;
        height:38px;
        border-radius:6px;
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:16px;
        flex-shrink:0;
        cursor:pointer;
        ">

            <i class="fas fa-bars"></i>

        </button>

    </div>

</div>



<!-- MOBILE FULL MENU -->

<div

id="mobileMenu"

style="
position:fixed;
top:-100%;
left:0;
width:100%;
height:100%;
background:#fff;
z-index:99999999;
transition:0.4s ease;
overflow-y:auto;
padding:20px;
">

    <!-- TOP -->

    <div

    style="
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom:25px;
    ">

        <!-- LOGO -->

        <img

        src='assets/img/logo/logo.png'

        style="
        width:85px;
        display:block;
        ">



        <!-- CLOSE -->

        <button

        id="closeMobileMenu"

        style="
        border:none;
        background:none;
        font-size:34px;
        line-height:1;
        color:#000;
        cursor:pointer;
        ">

            ×

        </button>

    </div>



    <!-- MENU -->

    <ul

    style="
    list-style:none;
    padding:0;
    margin:0;
    ">

        <li style="border-bottom:1px solid #eee;">

            <a

            href="./index.php"

            class="mobileLink"

            style="
            display:block;
            padding:15px 0;
            text-decoration:none;
            color:#000;
            font-size:17px;
            font-weight:600;
            width:100%;
            ">

                Home

            </a>

        </li>



        <li style="border-bottom:1px solid #eee;">

            <a

            href="./about.php"

            class="mobileLink"

            style="
            display:block;
            padding:15px 0;
            text-decoration:none;
            color:#000;
            font-size:17px;
            font-weight:600;
            width:100%;
            ">

                About Us

            </a>

        </li>



        <li style="border-bottom:1px solid #eee;">
                <a

                href="./shop.php"

                class="mobileLink"

                style="
                display:block;
                padding:15px 0;
                text-decoration:none;
                color:#000;
                font-size:17px;
                font-weight:600;
                width:100%;
                ">

                    Our Products

                </a>


        </li>

        <li style="border-bottom:1px solid #eee;">
                <a

                href="https://shop.bharatcopy.com"

                class="mobileLink"

                style="
                display:block;
                padding:15px 0;
                text-decoration:none;
                color:#000;
                font-size:17px;
                font-weight:600;
                width:100%;
                ">

                    Shop Now

                </a>


        </li>

        <li style="border-bottom:1px solid #eee;">

            <a

            href="./gallary.php"

            class="mobileLink"

            style="
            display:block;
            padding:15px 0;
            text-decoration:none;
            color:#000;
            font-size:17px;
            font-weight:600;
            width:100%;
            ">

                Gallery

            </a>

        </li>



        <li style="border-bottom:1px solid #eee;">

            <a

            href="./contact.php"

            class="mobileLink"

            style="
            display:block;
            padding:15px 0;
            text-decoration:none;
            color:#000;
            font-size:17px;
            font-weight:600;
            width:100%;
            ">

                Contact Us

            </a>

        </li>

    </ul>



    <!-- CONTACT -->

    <div style="margin-top:30px;">

        <h4

        style="
        font-size:20px;
        font-weight:700;
        margin-bottom:20px;
        ">

            Contact Info

        </h4>



        <!-- PHONE -->

        <a

        href="tel:<?php echo $mobilenumber1; ?>"

        style="
        display:flex;
        gap:12px;
        margin-bottom:20px;
        text-decoration:none;
        color:#000;
        ">

            <div

            style="
            min-width:40px;
            width:40px;
            height:40px;
            background:#b1198d;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#fff;
            ">

                <i class="fa-solid fa-phone"></i>

            </div>

            <div>

                <div style="font-size:13px;color:#666;">
                    Call Now
                </div>

                <div style="font-weight:600;">
                    <?php echo $mobilenumber1; ?>
                </div>

            </div>

        </a>



        <!-- EMAIL -->

        <a

        href="mailto:<?php echo $emailaddress; ?>"

        style="
        display:flex;
        gap:12px;
        margin-bottom:20px;
        text-decoration:none;
        color:#000;
        ">

            <div

            style="
            min-width:40px;
            width:40px;
            height:40px;
            background:#b1198d;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#fff;
            ">

                <i class="fa-solid fa-envelope"></i>

            </div>

            <div>

                <div style="font-size:13px;color:#666;">
                    Email Us
                </div>

                <div style="font-weight:600;word-break:break-word;">
                    <?php echo $emailaddress; ?>
                </div>

            </div>

        </a>



        <!-- LOCATION -->

        <a

        href="<?php echo $addresslink; ?>"

        target="_blank"

        style="
        display:flex;
        gap:12px;
        margin-bottom:25px;
        text-decoration:none;
        color:#000;
        ">

            <div

            style="
            min-width:40px;
            width:40px;
            height:40px;
            background:#b1198d;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#fff;
            ">

                <i class="fa-solid fa-location-dot"></i>

            </div>

            <div>

                <div style="font-size:13px;color:#666;">
                    Location
                </div>

                <div style="font-weight:600;">
                    <?php echo $address; ?>
                </div>

            </div>

        </a>

    </div>



    <!-- SOCIAL -->

    <div

    style="
    display:flex;
    gap:14px;
    margin-top:15px;
    ">

        <a

        href="https://www.facebook.com/profile.php?id=100064167338334"

        target="_blank"

        style="
        width:42px;
        height:42px;
        background:#b1198d;
        border-radius:50%;
        color:#fff;
        display:flex;
        align-items:center;
        justify-content:center;
        text-decoration:none;
        ">

            <i class="fab fa-facebook-f"></i>

        </a>



        <a

        href="https://www.instagram.com/bharatcopyudhyog2?igsh=MXJ3cjV5NWNvdnNjMQ=="

        target="_blank"

        style="
        width:42px;
        height:42px;
        background:#b1198d;
        border-radius:50%;
        color:#fff;
        display:flex;
        align-items:center;
        justify-content:center;
        text-decoration:none;
        ">

            <i class="fab fa-instagram"></i>

        </a>



        <a

        href="https://www.youtube.com/@bharatcopy6850"

        target="_blank"

        style="
        width:42px;
        height:42px;
        background:#b1198d;
        border-radius:50%;
        color:#fff;
        display:flex;
        align-items:center;
        justify-content:center;
        text-decoration:none;
        ">

            <i class="fab fa-youtube"></i>

        </a>

    </div>

</div>



<!-- HEADER SPACE -->

<div class="d-block d-xl-none"

style="height:90px;">

</div>



<!-- MOBILE SCRIPT -->

<script>

/* OPEN MENU */

document.getElementById("openMobileMenu")
.onclick = function(){

    document.getElementById("mobileMenu")
    .style.top = "0";

};



/* CLOSE MENU */

document.getElementById("closeMobileMenu")
.onclick = function(){

    document.getElementById("mobileMenu")
    .style.top = "-100%";

};




/* AUTO CLOSE */

document.querySelectorAll(".mobileLink")
.forEach(function(link){

    link.onclick = function(){

        document.getElementById("mobileMenu")
        .style.top = "-100%";

    };

});

</script>
<!-- =========================
MOBILE RESPONSIVE HEADER END
========================= -->
    <!-- mobile navbar part end -->
  </header>
  <!-- Header section end -->

<script>

window.addEventListener("scroll", function () {

    let logo = document.getElementById("mainLogo");

    if (window.scrollY > 50) {

        logo.style.width = "170px";
        logo.style.top="60px";

    } else {

        logo.style.width = "200px";
        logo.style.top="35px";

    }

});

</script>