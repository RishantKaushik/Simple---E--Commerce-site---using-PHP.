<?php
    require 'connection.php';
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
      
      
      @import url('https://fonts.googleapis.com/css2?family=Gugi&display=swap');
	  
	/* css contact us */  
	
	
	
.contact-info{
  display: flex;
  width: 100%;
  max-width: 1200px;
  align-items: center;
  justify-content: center;
  padding: 0 20px;
}


.card{
  background: #6046b6;
  padding: 0 20px;
  margin: 0 10px;
  width: calc(33% - 20px);
  height: 200px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #56512a;
  cursor: pointer;
}

.card-icon{
  font-size: 28px;
  background: #ffe745;
  width: 60px;
  height: 60px;
  text-align: center;
  line-height: 60px !important;
  border-radius: 50%;
  transition: 0.3s linear;
}

.card:hover .card-icon{
  background: none;
  color: #fff;
  transform: scale(1.6);
}

.card p{
  margin-top: 20px;
  font-weight: 300;
  letter-spacing: 2px;
  max-height: 0;
  opacity: 0;
  transition: 0.3s linear;
}

.card:hover p{
  max-height: 40px;
  color:#fff;
  opacity: 1;
}


@media screen and (max-width:800px) {
  .contact-info{
    flex-direction: column;
  }
  .card{
    width: 100%;
    max-width: 300px;
    margin: 10px 0;
  }
}
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
    <div class="page">
      <!-- Page Header-->
      <?php
            require 'header.php';
           ?>
      <!-- parallax top-->
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Contact us</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(image/legion7i-5.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contact us</li>
          </ul>
        </div>
      </section>
           <section class="section section-lg bg-default">
        <div class="container">
          <div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-left" id="tabs-4">
            <div class="col-lg-4 col-xl-3">
              <h5 class="text-spacing-200 text-capitalize">10 + years of experience</h5>
              <ul class="nav list-category list-category-down-md-inline-block">
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay="0s"><a class="active" href="#tabs-4-1" data-toggle="tab">About us</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".1s"><a href="#tabs-4-2" data-toggle="tab">Our Mission</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".2s"><a href="#tabs-4-3" data-toggle="tab">Our Goals</a></li>
                <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".3s"><a href="#tabs-4-4" data-toggle="tab">Our Values</a></li>
              </ul><a class="button button-xl button-primary button-winona ,fas fa-phone" href="contacts.php">Contact us</a>
            </div>
            <div class="col-lg-8 col-xl-9">
              <!-- Tab panes-->
              <div class="tab-content tab-content-1">
                <div class="tab-pane fade show active" id="tabs-4-1">
                  <h4>a few words about us</h4>
                  <p>Back in the Ten years,<br>We realized that though people were buying laptops without any standards. laptops being such an important part of our work it is an essential that you get only the best in performance products</p>
                  <p>Through Online shopping cart you. Which can be a great alternative to the best companies of the laptop ,the newer generation have picked up.<br>We have now introduced the concept of provide Orchard to DoorStep laptops  </p><img src="image/tritron4.png" alt="" width="835" height="418"/>
                </div>
                <div class="tab-pane fade" id="tabs-4-2">
                  <h4>a few words about us</h4>
                                   <p>Back in the Ten years,<br>We realized that though people were buying laptops without any standards. laptops being such an important part of our work it is an essential that you get only the best in performance products</p>
                  <p>Through Online shopping cart you. Which can be a great alternative to the best companies of the laptop ,the newer generation have picked up.<br>We have now introduced the concept of provide Orchard to DoorStep laptops  </p><img src="image/swift7-2.jpg" alt="" width="835" height="418"/>
                </div>
                <div class="tab-pane fade" id="tabs-4-3">
                  <h4>a few words about us</h4>
                       <p>Back in the Ten years,<br>We realized that though people were buying laptops without any standards. laptops being such an important part of our work it is an essential that you get only the best in performance products</p>
                  <p>Through Online shopping cart you. Which can be a great alternative to the best companies of the laptop ,the newer generation have picked up.<br>We have now introduced the concept of provide Orchard to DoorStep laptops  </p><img src="image/duo4.jpg" alt="" width="835" height="418"/>
                </div>
                <div class="tab-pane fade" id="tabs-4-4">
                  <p>Back in the Ten years,<br>We realized that though people were buying laptops without any standards. laptops being such an important part of our work it is an essential that you get only the best in performance products</p>
                  <p>Through Online shopping cart you. Which can be a great alternative to the best companies of the laptop ,the newer generation have picked up.<br>We have now introduced the concept of provide Orchard to DoorStep laptops  </p><img src="image/macpro-1.jpg" alt="" width="835" height="418"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- contact us -->
	<div class="contact-info">
      <div class="card">
        <i class="card-icon far fa-envelope"></i>
        <a href="mailto:kaushikrishant8@gmail.com"><p>kaushikrishant8@gmail.com</p></a>
      </div>

      <div class="card">
        <i class="card-icon fas fa-phone"></i>
        <p>+91 844-969-6954</p>
      </div>

     <a href="track.html" class="card">
        <i class="card-icon fab fa-2x fa-opencart"></i>
        <p>Your Order</p></a>
      </div>
    
      <!-- Icon Classic-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-md row-50">
            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay="0s">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-helicopter"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Free Delivery</a></h5>
                    <p class="box-icon-classic-text">Lotus advenas ducunt ad gemna. Ubi est domesticus domina heu.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay=".1s">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-magnifier"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">20+ products</a></h5>
                    <p class="box-icon-classic-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay=".2s">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-leaf"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Fast Deliveries</a></h5>
                    <p class="box-icon-classic-text">Albus, dexter particulas grauiter consumere de ferox, bi-color abactus.</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      
      <!-- Our clients-->
      <section class="section section-lg bg-default text-md-left">
        <div class="container">
          <div class="row row-60 justify-content-center flex-lg-row-reverse">
            <div class="col-md-8 col-lg-6 col-xl-5">
              <div class="offset-left-xl-70">
                <h3 class="heading-3">What People Say</h3>
                <div class="slick-quote">
                  <!-- Slick Carousel-->
                  <div class="slick-slider carousel-parent" data-autoplay="true" data-swipe="true" data-items="1" data-child="#child-carousel-5" data-for="#child-carousel-5" data-slide-effect="true">
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Torus accelerares, tanquam ferox cacula. Fluctuss experimentum in burdigala! Ubi est peritus classis? Peregrinatione superbe ducunt ad magnum verpa.</span></h5>
                        <h5 class="quote-modern-author">Stephen Adams,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Gluten, fluctus, et galatae. Germanus classiss ducunt ad brodium. Pol, a bene cedrium. Tabess unda in neuter avenio! Orexiss sunt adelphiss de rusticus parma.</span></h5>
                        <h5 class="quote-modern-author">Sam Peterson,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
					
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Pol, silva! Grandis contencios ducunt ad torus. Monss congregabo in nobilis tectum! Velox, fatalis victrixs sapienter talem de emeritis, festus torus.</span></h5>
                        <h5 class="quote-modern-author">Jane McMillan,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Fluctuss sunt eras de neuter plasmator. Heuretes noster brabeuta est. Nixus, visus, et mensa. Primus, magnum tatas rare locus de altus, camerarius clabulare.</span></h5>
                        <h5 class="quote-modern-author">Will Jones,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                  </div>
                  <div class="slick-slider child-carousel" id="child-carousel-5" data-arrows="true" data-for=".carousel-parent" data-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
                    <div class="item"><img class="img-circle" src="image/akankshapic.jpg" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="image/akashpic.jpg" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="image/atulpic.jpg" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="image/rajeev.jpg" alt="" width="83" height="83"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
    
  </body>
</html>