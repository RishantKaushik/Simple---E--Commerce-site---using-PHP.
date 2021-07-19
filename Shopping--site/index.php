  <?php
session_start();
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Online shopping cart</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="image/icon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <!--Icons made by <a href="https://www.flaticon.com/authors/icongeek26" title="Icongeek26">Icongeek26</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>-->
    <script>
      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }
      
      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
      </script>
    <style>
    
    
      /* Button used to open the contact form - fixed at the bottom of the page */
      .open-button {
        background-color:transparent;
        color: white;
        padding: 0px 0px;
        border: none;
        cursor: pointer;
      }
      
      /* The popup form - hidden by default */
      .form-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
      }
      
      /* Add styles to the form container */
      .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
      }
      
      /* Full-width input fields */
      .form-container input[type=text], .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
      }
      
      /* When the inputs get focus, do something */
      .form-container input[type=text]:focus, .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      
      /* Set a style for the submit/login button */
      .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
      }
      
      /* Add a red background color to the cancel button */
      .form-container .cancel {
        background-color: red;
      }
      
      /* Add some hover effects to buttons */
      .form-container .btn:hover, .open-button:hover {
        opacity: 1;
      }
      .logofont a {
        width: 10em;
        height: 15rem;
        font-size: 25 vh;
        font-family: 'Gugi', cursive;
      }
      .contextscolor{
        color: #FCC201;
      }
      .blacktext{
        color: rgb(0, 0, 0);
      }
      .whitetext{
        color: rgb(252, 252, 252);
      }
      .boldtext{
        font-weight: bold;
      }
      .greentext{
        
        color: rgb(1, 252, 34);
      }
      .highlighttext{
        background-color: #FFFF00
      }
      
      .redtext{
        color: rgb(252, 1, 1);
        backdrop-filter: blur(5px);
      }
      .blur{
        background: rgba(255, 255, 255, 0.2); // Make sure this color has an opacity of less than 1
  backdrop-filter: blur(8px); // This be the blur
      }
      .pros{
        margin: 0 2%;
        width: 63%;
        display: block;
        text-align: center;
         overflow: hidden;
         justify-content: center;
         padding-left: 50%;
         padding-right: 50%;
      }
      
      
      @import url('https://fonts.googleapis.com/css2?family=Gugi&display=swap');
      </style>
  </head>
  <body>
    <div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
        </div>
      </div>
    </div> 
	 <?php
            require 'header.php';
           ?>
    <div class="page">
      <!-- Page Header-->
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide contextscolor" data-slide-bg="image/alien-4.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0 blur">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Laptops at your Door Steps</span></h1>
                    <p class="big swiper-text 2" style="font-size=18px" data-caption-animate="fadeInLeft" data-caption-delay="300"><b>"The Beast laptop. in special range  <big> $2,64,990.00</big> </b></p><a class="button button-lg button-primary button-winona button-shadow-2" href="products.php" data-caption-animate="fadeInUp" data-caption-delay="300">View OUR PRODUCTS</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide contextscolor" data-slide-bg="image/Aspire7-5.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0 blur">
                    <h1 class="oh swiper-title contextscolor"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Acer  Powerful laptop</span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">This is an another level of beast in acer . it is an good Choice as  Preformance & Gammers..</p>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="products.php" data-caption-animate="slideInUp" data-caption-delay="0">View OUR PRODUCTS</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide contextscolor" data-slide-bg="image/duo5.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0 blur">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Love this products</span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">This laptop is made specially for content creater and multitasking</p>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0">View OUR PRODUCTS</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <div class="swiper-slide contextscolor" data-slide-bg="image/legion7i-3.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0 blur">
                    <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Quality Products</span></h1>
                    <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">Only the Beast & Best laptop is there . Those are the future expandable & never be OUT DATE IT..</p>
                    <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0">View OUR PRODUCTS</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
          <div class="preview">
            <div class="preview__img"></div>
          </div>
          <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
          <div class="swiper-button-arrow"></div>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
      </section>
      <!-- What We Offer-->
      <section class="section section-md bg-default ">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">OUR PRODUCTS</span></h3>
          <div class="row row-md row-30">
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInUp">
                  <div class="services-terri-figure"><img src="image/legion7i-4.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-star-empty"></span>
                    <h5 class="services-terri-title"><a href="product.php">Lenevo legion7i</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInDown">
                  <div class="services-terri-figure"><img src="image/macpro-4.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-leaf"></span>
                    <h5 class="services-terri-title"><a href="product.php">Apple Macpro</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInUp">
                  <div class="services-terri-figure"><img src="image/nitro7-2.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-mustache"></span>
                    <h5 class="services-terri-title"><a href="product.php">Acer Nitro 7</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInDown">
                  <div class="services-terri-figure"><img src="image/pavalion15-4.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-smile"></span>
                    <h5 class="services-terri-title"><a href="product.php">HP Pavalion 15<br></a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInUp">
                  <div class="services-terri-figure"><img src="image/specte360-2.jpg" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-leaf"></span>
                    <h5 class="services-terri-title"><a href="product.php">HP SpecteX360</a></h5>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article class="services-terri wow slideInDown">
                  <div class="services-terri-figure"><img src="image/tritron4.png" alt="" width="370" height="278"/>
                  </div>
                  <div class="services-terri-caption"><span class="services-terri-icon linearicons-lighter"></span>
                    <h5 class="services-terri-title"><a href="product.php">Acer Tritron 300 </a></h5>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section CTA-->
      <section class="primary-overlay section parallax-container" data-parallax-img="image/legion7i-5.jpg">
        <div class="parallax-content section-xl contextscolor text-md-left">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-sm-8 col-md-7 col-lg-5">
                <div class="cta-modern">
                  <h3 class="cta-modern-title wow fadeInRight">Best Laptop. </h3>
                  <p class="lead">In Online shopping cart there is bestes laptop in performance & services.</p>
                  <p class="cta-modern-text oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor wow slideInLeft"></span><span class="d-inline-block wow slideInDown text-white">Rishant kaushik, Founder</span></p><a class="button button-md button-secondary-2 button-winona wow fadeInUp" href="products.php" data-wow-delay=".2s">View Our Services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Our Shop-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Popular Selectives</span></h3>
          <div class="row row-lg row-30">
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".15s">
                <div class="product-figure"><img src="image/alien-4.jpg" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                </div>
                <h6 class="product-title">Alienware Core i7 10th Gen</h6>
                <div class="product-price-wrap">
                  <div class="product-price">Rs. 2,64,990.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="products.php">View Product</a></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".1s">
                <div class="product-figure"><img src="image/predator2.jpg" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Acer Predator Helios 300 Core i7 9th </h6>
                <div class="product-price-wrap">
                  <div class="product-price">Rs 89,990.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="products.php">View Product</a></div>
                </div><span class="product-badge product-badge-new">New</span>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".05s">
                <div class="product-figure"><img src="image/legion7i-3.jpg" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                </div>
                <h6 class="product-title">Lenovo Legion 7i Core i7 10th Gen </h6>
                <div class="product-price-wrap">
                  <div class="product-price">Rs 1,95,990.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="products.php">View Product</a></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft">
                <div class="product-figure"><img src="image/macpro-4.jpg" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span>
                </div>
                <h6 class="product-title">Apple MacBook Pro Core i9 9th Gen </h6>
                <div class="product-price-wrap">
                  <div class="product-price">Rs 2,24,890.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="products.php">View Product</a></div>
                </div><span class="product-badge product-badge-sale">Sale</span>
              </article>
            </div>
			<div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".15s">
                <div class="product-figure"><img src="image/pavalion15-4.jpg" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                </div>
                <h6 class="product-title">HP Pavilion Gaming Core i5 9th Gen</h6>
                <div class="product-price-wrap">
                  <div class="product-price">Rs 73,990.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="products.php">View Product</a></div>
                </div>
              </article>
            </div>
			<div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".15s">
                <div class="product-figure"><img src="image/nitro7-3.jpg" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                </div>
                <h6 class="product-title">Acer Nitro 5 Core i5 10th Gen</h6>
                <div class="product-price-wrap">
                  <div class="product-price">Rs 74,990.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="products.php">View Product</a></div>
                </div><span class="product-badge product-badge-sale">Sale</span>
              </article>
            </div>
			<div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".15s">
                <div class="product-figure"><img src="image/produo2.jpg" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                </div>
                <h6 class="product-title">Asus ZenBook Pro Duo Core i7 9th Gen</h6>
                <div class="product-price-wrap">
                  <div class="product-price">Rs 2,42,869.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="products.php">View Product</a></div>
                </div>
              </article>
            </div>
			<div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".15s">
                <div class="product-figure"><img src="image/omen15-2.jpg" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                </div>
                <h6 class="product-title">HP Omen Core i7 10th Gen</h6>
                <div class="product-price-wrap">
                  <div class="product-price">Rs 1,17,890.00</div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="products.php">View Product</a></div>
                </div><span class="product-badge product-badge-new">New</span>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Section CTA-->
      <section class="primary-overlay section parallax-container" data-parallax-img="image/tritron3.jpg">
        <div class="parallax-content section-xxl contextscolor text-md-left">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-sm-9 col-md-7 col-lg-5">
                <div class="cta-modern">
                  <h3 class="cta-modern-title cta-modern-title-2 oh-desktop"><span class="d-inline-block wow fadeInLeft">-30% on all Gaming laptops</span></h3>
                  <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor cta-modern-decor-2 wow slideInLeft"></span><span class="d-inline-block wow slideInUp">Taste some of the best Haldhar's Pickels!</span></p><a class="button button-lg button-secondary button-winona wow fadeInRight" href="contacts.html" data-wow-delay=".2s">contact us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- What We Offer-->
      <section class="section section-xl bg-default">
        <div class="container">
          <h3 class="wow fadeInLeft">What People Say</h3>
        </div>
        <div class="container container-style-1">
          <div class="owl-carousel owl-style-12" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-xl-margin="45" data-autoplay="true" data-nav="true" data-center="true" data-smart-speed="400">
            <!-- Quote Tara-->
            <article class="quote-tara">
              <div class="quote-tara-caption">
                <div class="quote-tara-text">
                  <p class="q">In Online shopping cart i found the my real beast Alienware Core i7 10th Gen. Really belive me the delivery condition is so good.</p>
                </div>
                <div class="quote-tara-figure"><img src="image/atulpic.jpg" alt="" width="115" height="115"/>
                </div>
              </div>
              <h6 class="quote-tara-author">Atul Chaudhary</h6>
              <div class="quote-tara-status">Client</div>
            </article>
            <!-- Quote Tara-->
            <article class="quote-tara">
              <div class="quote-tara-caption">
                <div class="quote-tara-text">
                  <p class="q">In Online shopping cart  there is many variety of laptop and every laptop is upper case of previous one i love this site .If you want to purchase  JUST GO FOR IT..</p>
                </div>
                <div class="quote-tara-figure"><img src="image/akankshapic.jpg" alt="" width="115" height="115"/>
                </div>
              </div>
              <h6 class="quote-tara-author">Akanksha Chaudhary</h6>
              <div class="quote-tara-status">Client</div>
            </article>
			<article class="quote-tara">
              <div class="quote-tara-caption">
                <div class="quote-tara-text">
                  <p class="q">In Online shopping cart i order the hp pavalion 15 laptop and i get the specification  exactly as mention</p>
                </div>
                <div class="quote-tara-figure"><img src="image/rishantpic.jpg" alt="" width="115" height="115"/>
                </div>
              </div>
              <h6 class="quote-tara-author">Rishant kaushik</h6>
              <div class="quote-tara-status">Client</div>
            </article>
          </div>
        </div>
      </section>

      
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <h3 class="heading-3">Review your Products</h3>
          <form class="rd-form rd-mailform form-style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-20 gutters-20">
              <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
                  <input class="form-input" id="contact-your-name-6" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-6">Your Name*</label>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInUp">
                  <input class="form-input" id="contact-email-6" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email-6">Your E-mail*</label>
                </div>
              </div>
              <div class="col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
                  <!--Select 2-->
                  <select class="form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                    <option value="1">Select a Service</option>
                    <option value="2">Mass Purchases</option>
                    <option value="3">Personal </option>
                    <option value="4">Event Purchases</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap wow fadeIn">
                  <label class="form-label" for="contact-message-6">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-6" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <div class="group-custom-1 group-middle oh-desktop">
              <button class="button button-lg button-primary button-winona wow fadeInRight" type="submit">Send Review</button>
              <!-- Quote Classic-->
              <article class="quote-classic quote-classic-3 wow slideInDown">
                <div class="quote-classic-text">
                  <p class="q">Please order your products in working days in advance.</p>
                </div>
              </article>
            </div>
          </form>
        </div>
      </section>

      <!-- Section Services  Last section-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="owl-carousel owl-style-11 dots-style-2" data-items="1" data-sm-items="1" data-lg-items="2" data-xl-items="4" data-margin="30" data-dots="true" data-mouse-drag="true" data-rtl="true">
            <article class="box-icon-megan wow fadeInUp">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-bag"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Free Delivery</a></h5>
              <p class="box-icon-megan-text">If you order the product from our website , we will gladly deliver them to you for fast and free.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-map2"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Convenient Location</a></h5>
              <p class="box-icon-megan-text">Our Cart is situated in the downtown and is very easy to reach even on weekends.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-radar"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Free Warranty</a></h5>
              <p class="box-icon-megan-text">We have free warranty also available to all clients of our Online's Store.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-thumbs-up"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Best Service</a></h5>
              <p class="box-icon-megan-text">The client is our #1 priority as we deliver top-notch customer service.</p>
            </article>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
     <?php
            require 'footer.php';
           ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="https://kit.fontawesome.com/0898a97359.js" crossorigin="anonymous"></script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->
  </body>
</html>