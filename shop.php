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
            <h1 class="page-title text-white pb-20">Our Products</h1>
            <ul class="list-unstyled bread-crumb d-flex justify-content-center">
              <li><a href="index">Home</a></li>
              <li>Our Products</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Page header section end -->
    <!-- Services section start -->
<?php
$brands = ['Practical Notebook','Note Book','Daksh','Bill Book','Board','Cash Memo','Challan Book','Drawing Notebook','Duplicate Book','Files','Sheets & Papers','Receipt Book','Register','Spiral Notebook','Writing Pads','Voucher Book'];


$products = [

    // Hawamahal
    [
        'category' => 'Sheets & Papers',
        'name' => 'Geography A3 Punch Paper',
        'price' => '₹230',
        'image' => 'assets/img/shop/h2.png'
    ],
     [
        'category' => 'Files',
        'name' => 'Index [box file] File',
        'price' => '₹67 – ₹72',
        'image' => 'assets/img/shop/h1.png'
    ],
    [
        'category' => 'Note Book',
        'name' => 'Ex-Notebook(A4)',
        'price' => '₹60 – ₹250',
        'image' => 'assets/img/shop/h3.png'
    ],
    
     [
        'category' => 'Note Book',
        'name' => 'Rasiyan Rough Notebook(A4)',
        'price' => '₹60 – ₹140',
        'image' => 'assets/img/shop/h5.png'
    ],
    [
        'category' => 'Spiral Notebook',
        'name' => 'Spiral Notebook',
        'price' => '₹100 – ₹260',
        'image' => 'assets/img/shop/h6.png'
    ],
    [
        'category' => 'Practical Notebook',
        'name' => 'XXL Practical Notebook',
        'price' => '₹60 – ₹100',
        'image' => 'assets/img/shop/h7.png'
    ],
     [
        'category' => 'Sheets & Papers',
        'name' => 'Punch Papers 20 Sheets (1 Doz)',
        'price' => '₹132',
        'image' => 'assets/img/shop/h8.png'
    ],
    [
        'category' => 'Sheets & Papers',
        'name' => 'Punch Papers 12 Sheets (1 Doz)',
        'price' => '₹84',
        'image' => 'assets/img/shop/h36.png'
    ],
    [
        'category' => 'Sheets & Papers',
        'name' => 'Graph Pads (Packets)',
        'price' => '₹50',
        'image' => 'assets/img/shop/h37.png'
    ],
    [
        'category' => 'Sheets & Papers',
        'name' => 'Double Foolscap Papers 12×20 (240 Pages)',
        'price' => '₹30',
        'image' => 'assets/img/shop/h38.png'
    ],
     [
        'category' => 'Note Book',
        'name' => 'Notebook(A5)',
        'price' => '₹40 – ₹80',
        'image' => 'assets/img/shop/h14.png'
    ],
    [
        'category' => 'Daksh',
        'name' => 'DAKSH A6 EX- NOTEBOOK',
        'price' => '₹20 – ₹60',
        'image' => 'assets/img/shop/h17.png'
    ],
    [
        'category' => 'Note Book',
        'name' => 'Notebook(A6)',
        'price' => '₹20 – ₹40',
        'image' => 'assets/img/shop/h18.png'
    ],
    [
        'category' => 'Bill Book',
        'name' => 'Bill Book',
        'price' => '₹22 – ₹40',
        'image' => 'assets/img/shop/h19.png'
    ],
    [
        'category' => 'Board',
        'name' => 'White /Green Board (Nova)',
        'price' => '₹499 – ₹2,368',
        'image' => 'assets/img/shop/h21.png'
    ],
    [
        'category' => 'Board',
        'name' => 'White /Green Board (Classic)',
        'price' => '₹224 – ₹2,176',
        'image' => 'assets/img/shop/h20.png'
    ],
    [
        'category' => 'Cash Memo',
        'name' => 'Cash Memo',
        'price' => '₹13 – ₹25',
        'image' => 'assets/img/shop/h22.png'
    ],
     [
        'category' => 'Challan Book',
        'name' => 'Challan Book',
        'price' => '₹30 – ₹55',
        'image' => 'assets/img/shop/h4.png'
    ],
    [
        'category' => 'Drawing Notebook',
        'name' => 'Drawing Notebook',
        'price' => '₹20 – ₹60',
        'image' => 'assets/img/shop/h23.png'
    ],
    [
        'category' => 'Duplicate Book',
        'name' => 'Duplicate Book No. 16, 12, 8, and 6',
        'price' => '₹23 – ₹55',
        'image' => 'assets/img/shop/h30.png'
    ],
    [
        'category' => 'Duplicate Book',
        'name' => 'Triplicate Book No. 16, 12, 8, and 6',
        'price' => '₹35 – ₹85',
        'image' => 'assets/img/shop/h25.png'
    ],
    [
        'category' => 'Receipt Book',
        'name' => 'Receipt Book',
        'price' => '₹30 – ₹55',
        'image' => 'assets/img/shop/h31.png'
    ],
    [
        'category' => 'Voucher Book',
        'name' => 'Voucher Book',
        'price' => '₹4.25 – ₹20.00',
        'image' => 'assets/img/shop/h39.png'
    ],
    [
        'category' => 'Writing Pads',
        'name' => 'Conference Pad',
        'price' => '₹4.25 – ₹6.25',
        'image' => 'assets/img/shop/h40.png'
    ],
    [
        'category' => 'Writing Pads',
        'name' => 'Writing Pad 11 no., 22 no., 33no., 40 no.',
        'price' => '₹6.00 – ₹20.50',
        'image' => 'assets/img/shop/h41.png'
    ],
    [
        'category' => 'Files',
        'name' => 'Black PVC Geography File',
        'price' => '₹156 – ₹276',
        'image' => 'assets/img/shop/h28.png'
    ],
    [
        'category' => 'Files',
        'name' => 'Cobra File',
        'price' => '₹134 – ₹232',
        'image' => 'assets/img/shop/h29.png'
    ],
    [
        'category' => 'Files',
        'name' => 'Special Cobra File',
        'price' => '₹42',
        'image' => 'assets/img/shop/h26.png'
    ],
    [
        'category' => 'Files',
        'name' => 'Two Piece File',
        'price' => '₹7 – ₹8',
        'image' => 'assets/img/shop/h27.png'
    ],
    [
        'category' => 'Register',
        'name' => '16*26 Hard Bound Register',
        'price' => '₹38 – ₹122',
        'image' => 'assets/img/shop/h32.png'
    ],
     [
        'category' => 'Register',
        'name' => '17*27 Hard Bound Register',
        'price' => '₹44.42 – ₹153.08',
        'image' => 'assets/img/shop/h33.png'
    ],
     [
        'category' => 'Register',
        'name' => 'Hard Bound Register',
        'price' => '₹50 – ₹255',
        'image' => 'assets/img/shop/h34.png'
    ],
    // Tiago
    [
        'category' => 'Note Book',
        'name' => 'Notebook(A4)',
        'price' => '₹60 – ₹250',
        'image' => 'assets/img/shop/h10.png'
    ],
    [
        'category' => 'Spiral Notebook',
        'name' => 'Spiral Notebook',
        'price' => '₹60 – ₹250',
        'image' => 'assets/img/service/serviceimg-2.png'
    ],
     [
        'category' => 'Note Book',
        'name' => 'Notebook(A5)',
        'price' => '₹40 – ₹80',
        'image' => 'assets/img/shop/h15.png'
    ],
   

    // Negi
    [
        'category' => 'Spiral Notebook',
        'name' => 'Spiral Notebook',
        'price' => '₹100 – ₹300',
        'image' => 'assets/img/shop/h9.png'
    ],
    

    // Yuvraj
    [
        'category' => 'Graph Notebook',
        'name' => 'A4 Graph Notebook',
        'price' => '₹85 – ₹172',
        'image' => 'assets/img/shop/h11.png'
    ],
    [
        'category' => 'Note Book',
        'name' => 'Notebook(A4)',
        'price' => '₹40 – ₹120',
        'image' => 'assets/img/shop/h13.png'
    ],
    [
        'category' => 'Sheets & Papers',
        'name' => 'Punch Papers 10 Sheets (1 Doz)',
        'price' => '₹66',
        'image' => 'assets/img/shop/h12.png'
    ],
    [
        'category' => 'Note Book',
        'name' => 'Notebook(A5)',
        'price' => '₹40 – ₹80',
        'image' => 'assets/img/shop/h16.png'
    ],
    [
        'category' => 'Duplicate Book',
        'name' => 'Duplicate Book No. 16, 12, 8, and 6',
        'price' => '₹16.50 – ₹44.00',
        'image' => 'assets/img/shop/h24.png'
    ],
    [
        'category' => 'Register',
        'name' => 'Hard Bound Register',
        'price' => '₹50 – ₹255',
        'image' => 'assets/img/shop/h35.png'
    ],
];
?>


<style>

.product-main-section{
    background: linear-gradient(to right,#f8fbff,#eef4ff);
    padding:100px 0;
    position:relative;
    overflow:hidden;
}

.product-main-section::before{
    content:'';
    position:absolute;
    width:450px;
    height:450px;
    background:rgba(0,177,255,.08);
    border-radius:50%;
    top:-150px;
    right:-100px;
}

.product-main-section::after{
    content:'';
    position:absolute;
    width:350px;
    height:350px;
    background:rgba(255,102,0,.08);
    border-radius:50%;
    bottom:-120px;
    left:-100px;
}

.product-header{
    text-align:center;
    margin-bottom:40px;
    position:relative;
    z-index:2;
}

.product-header h2{
    font-size:26px;
    font-weight:700;
    color:#0f172a;
}

.top-filter-wrapper{
    display:flex;
    flex-wrap:wrap;
    gap:12px;
    justify-content:center;
    margin-bottom:35px;
    position:relative;
    z-index:2;
}

.top-filter-btn{
    border:none;
    padding:10px 20px;
    border-radius:40px;
    background:#fff;
    color:#0f172a;
    font-weight:600;
    box-shadow:0 5px 18px rgba(0,0,0,.08);
    transition:.3s;
    cursor:pointer;
}

.top-filter-btn:hover,
.top-filter-btn.active{
    background:var(--bs-primary-color);
    color:#fff;
    transform:translateY(-2px);
}

.product-grid{
    width:100%;
    display:grid;
    grid-template-columns:repeat(4,minmax(0,1fr));
    gap:22px;
    position:relative;
    z-index:2;
}

.product-card{
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.35s;
    display:flex;
    flex-direction:column;
}

.product-card:hover{
    transform:translateY(-6px);
    box-shadow:0 18px 40px rgba(0,0,0,.12);
}

.product-image{
    height:170px;
    background:#f8fafc;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:10px;
}

.product-image img{
    width:100%;
    height:100%;
    object-fit:contain;
}

.product-content{
    padding:16px;
    display:flex;
    flex-direction:column;
    flex:1;
}

.product-name{
    font-size:15px;
    font-weight:600;
    line-height:1.4;
    color:#0f172a;
    margin-bottom:8px;
}

.product-price{
    font-size:18px;
    font-weight:700;
    color:#000;
    margin-bottom:14px;
}

.product-bottom{
    margin-top:auto;
    display:flex;
    align-items:start;
    gap:5px;
}
.product-bottom > div{
    display:flex;
    align-items:center;
    gap:8px;
    
}
.product-bottom > div .buy-btn{
    min-width:auto;
    width:36px;
    height:36px;
    padding:0;
    border-radius:50%;
    background:#fff;
    box-shadow:0 2px 8px rgba(0,0,0,.12);
}
.product-bottom > div .buy-btn img{
    width:36px;
    height:36px;
    object-fit:contain;
}
.buy-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    background:var(--bs-primary-color);
    color:#fff;
    text-decoration:none;
    padding:8px 18px;
    border-radius:10px;
    font-size:14px;
    font-weight:600;
    transition:.3s;
    min-width:110px;
}

.buy-btn:hover{
    color:#fff;
}
.buy-btntext{
    position: relative; /* important */
    display: inline-block;
    color:#000;
    text-decoration:none;
    font-size:12px;
    font-weight:bold;
    line-height:1.2;
    padding-right:39px; /* arrow ke liye space */
}

.buy-btntext::after{
    content:"";
    position:absolute;
    right:15px;
    top:50%;
    transform:translateY(-50%);
    
    width:25px;
    height:25px;

    background-image:url("assets/img/logo/arrow.png");
    background-repeat:no-repeat;
    background-size:contain;
    background-position:center;
}
.no-products{
    background:#fff;
    padding:50px;
    border-radius:20px;
    text-align:center;
    font-size:20px;
    color:#64748b;
    box-shadow:0 10px 35px rgba(0,0,0,.08);
}

@media(max-width:1200px){
    .product-grid{
        grid-template-columns:repeat(3,minmax(0,1fr));
    }
}

@media(max-width:991px){
    .product-grid{
        grid-template-columns:repeat(2,minmax(0,1fr));
    }

    .product-header h2{
        font-size:30px;
    }
}

@media(max-width:767px){
    .product-grid{
        grid-template-columns:repeat(1,minmax(0,1fr));
    }
}
@media(max-width:767px){

    .product-content{
        text-align:center;
    }

    .product-name,
    .product-price{
        text-align:center;
    }

        .product-bottom{
        width:fit-content;
        margin:0 auto;
        gap:12px;
    }
      .buy-btntext{
        font-size:15px;      /* 12 se bada */
        padding-right:45px;  /* arrow ke liye extra space */
        line-height:1.3;
    }

    .buy-btntext::after{
        width:32px;          /* 25 se bada */
        height:32px;
        right:5px;
    }
}

</style>


<section class="product-main-section">

<div class="container">

    <div class="product-header">
        <h2>Premium Stationery & Notebook Collection</h2>
    </div>


    <div class="top-filter-wrapper" id="categoryFilters">

        <button class="top-filter-btn active" data-category="all">
            All Products
        </button>

        <?php
        $categories = array_unique(array_column($products,'category'));

        foreach($categories as $category){
        ?>

        <button class="top-filter-btn"
                data-category="<?php echo $category; ?>">
            <?php echo $category; ?>
        </button>

        <?php } ?>

    </div>


    <div class="product-grid" id="productGrid">

        <?php foreach($products as $product){ ?>

        <div class="product-card"
             data-category="<?php echo $product['category']; ?>">

            <div class="product-image">

                <img src="<?php echo $product['image']; ?>"
                     alt="<?php echo $product['name']; ?>">

            </div>

            <div class="product-content">

                <h3 class="product-name">
                    <?php echo $product['name']; ?>
                </h3>

                <div class="product-price">
                    <?php echo $product['price']; ?>
                </div>

                <div class="product-bottom">

                    <span  class="buy-btntext">
                        Buy With <br>
                        Confidence
                    </span>
                    
                    <div>
                          <a href="https://www.amazon.in/s?k=BCU+HAWAMAHAL&dc&ref=a9_asc_1" target="_blank" class="buy-btn">
                          <img src="assets/img/about/4.png" alt="Amazon">
                            </a>

                          <a href="https://www.meesho.com/BHARATCOPYUDYOG?ms=2" target="_blank" class="buy-btn">
                           <img src="assets/img/about/6.png" alt="Flipkart">
                             </a>

                           <a href="https://www.flipkart.com/search?q=bharat+copy+udhyog+&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off&augment=false" target="_blank" class="buy-btn">
                            <img src="assets/img/about/5.png" alt="Meesho">
                            </a>
                    </div>

                </div>

            </div>

        </div>

        <?php } ?>

        <div class="no-products"
             style="display:none;"
             id="noProducts">

            No products found.

        </div>

    </div>

</div>

</section>


<script>

const productCards =
document.querySelectorAll('.product-card');

const noProducts =
document.getElementById('noProducts');

let selectedCategory = 'all';

document.querySelectorAll('.top-filter-btn')
.forEach(button=>{

    button.addEventListener('click',function(){

        document.querySelectorAll('.top-filter-btn')
        .forEach(btn=>btn.classList.remove('active'));

        this.classList.add('active');

        selectedCategory =
        this.dataset.category;

        filterProducts();

    });

});

function filterProducts(){

    let visibleCount = 0;

    productCards.forEach(card=>{

        const cardCategory =
        card.dataset.category;

        if(
            selectedCategory === 'all' ||
            selectedCategory === cardCategory
        ){

            card.style.display='flex';
            visibleCount++;

        }else{

            card.style.display='none';

        }

    });

    noProducts.style.display =
    visibleCount === 0 ? 'block' : 'none';
}

filterProducts();

</script>



    <!-- Services section end -->
  </main>
  <!-- Main area end -->
  <?php include("footer.php"); ?>
  <!-- JS start here -->
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