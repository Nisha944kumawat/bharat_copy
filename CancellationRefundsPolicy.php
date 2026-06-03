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
            <h1 class="page-title text-white pb-20">Cancellation & Refunds Policy</h1>
            <ul class="list-unstyled bread-crumb d-flex justify-content-center">
              <li><a href="./index.php">Home</a></li>
              <li>Cancellation & Refunds Policy</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Page header section end -->
    <!-- Cancellation & Refunds Policy section start -->
     <style>
    .terms-section{
    padding: 80px 0;
}

.terms-content h3{
    font-size: 32px;
    font-weight: 700;
    color: #002855;
    margin-top: 40px;
    margin-bottom: 20px;
    line-height: 1.3;
    text-transform: uppercase;
}

.terms-content p{
    font-size: 18px;
    line-height: 1.9;
    color: #555;
    margin-bottom: 18px;
    text-align: justify;
}

.terms-content strong{
    color: #000;
    font-weight: 700;
}

@media(max-width:768px){
    .terms-content h3{
        font-size:24px;
    }

    .terms-content p{
        font-size:16px;
    }
}
   </style>
   
   <section class="terms-section">
    <div class="container">
        <div class="terms-content">
            <h3><strong>Our Cancellation & Refunds Policy</strong></h3>
<h4>Return Policy</h4>

<p>
We have a 7-day return policy, which means you have 7 days after receiving your item to request a return.
</p>

<p>
To be eligible for a return, your item must be in the same condition that you received it, unused, and in its original packaging ie with the shrink wrap.
<br>
<br>
You’ll also need the receipt or proof of purchase i.e. the original invoice sent along with the material.
</p>

<p>
To start a return, you can contact us at {email} and attach the invoice and photos of the material.
<br>
<br>
Please note that returns will need to be sent to the following address:
<br>
D-18, Vivekanand Colony, Chandpole Bazar, Jaipur - 302001, Rajasthan, India
</p>

<p>
If your return is accepted, we’ll send you a return shipping label, as well as instructions on how and where to send your package.
<br>
<br>
Items sent back to us without first requesting a return will not be accepted.
</p>

<p>
You can always contact us for any return question at {email}.
</p>

<h4>Damages and Issues</h4>

<p>
Please inspect your order upon reception and contact us immediately if the item is defective, damaged or if you receive the wrong item, so that we can evaluate the issue and make it right.
</p>

<h4>Exceptions / Non-Returnable Items</h4>

<p>
We cannot accept returns of sale items or gift cards.
</p>

<h4>Exchanges</h4>

<p>
The fastest way to ensure you get what you want is to return the item you have, and once the return is accepted, make a separate purchase for the new item.
</p>

<h4>Refunds</h4>

<p>
We will notify you once we’ve received and inspected your return, and let you know if the refund was approved or not.
<br>
<br>
If approved, you’ll be automatically refunded on your original payment method within 10 business days.
<br>
<br>
Please remember it can take some time for your bank or credit card company to process and post the refund too.
</p>

<p>
If more than 15 business days have passed since we’ve approved your return, please contact us at {email}.
</p>


            </div>
        </div>
    <!-- Cancellation & Refunds Policy section end -->

    <div id="output"></div>

  
  </main>
  <!-- Main area end -->
  <?php include("footer.php"); ?>
  <!-- JS start here -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(e){
      $("#contactForm").on('submit',(function(e) {
          e.preventDefault();
          $.ajax({
              url: "contactdata.php",
              type: "POST",
              data:  new FormData(this),
              contentType: false,
              cache: false,
              processData:false,
              success: function(html){
              $("#output").text("");  
              $("#output").prepend(html);
              },
              error: function(){alert("error")}           
          });
      }));
    });
  </script>
  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/gsap.js"></script>
  <script src="assets/js/gsap-scroll-trigger.js"></script>
  <script src="assets/js/gsap-split-text.js"></script>
  <script src="assets/js/simple-parallax.js"></script>
  <script src="assets/js/jquery.appear.js"></script>
  <script src="assets/js/jquery.odometer.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/ajax-form.js"></script>
  <script src="assets/js/jquery.nice-select.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
  <!-- JS end here -->
</body>
</html>