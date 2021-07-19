<?php
    session_start();
    require 'check_if_added.php';
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
      
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Shopping</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(image/alien-1.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active">Shopping</li>
          </ul>
        </div>
      </section>
        <div>
       <div id="main">
            <section id="pros">
                <div id="left">
                    <h3>Our products</h3>
                    <ul>
                        <li>
                            <div class="img"><a href="image/predator1.jpg"><img alt="" src="image/predator1.jpg"></a></div>
                            <div class="info">
                                 <article class="thumbnail thumbnail-creative" class="title"><a href="image/predator3.png" data-lightgallery="item">Acer Predator Helios 300 Core i7 9th </a></article>
                                <p> (15.6 inch, Abyssal Black)Gen(16 GB/1 TB HDD/256 GB SSD/Windows 10 Home/6 GB Graphics/NVIDIA Geforce RTX 2060) PH315-52-74DX Gaming Laptop</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1,14,990</strong>
                                </div>
                                <div class="actions">
               
                                <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
						     </div>
				
                        </li>
						      <li>
                            <div class="img"><a href="image/rogg-1.jpg"><img alt="" src="image/rogg-1.jpg"></a></div>
                            <div class="info">
                                 <article class="thumbnail thumbnail-creative" class="title"><a href="image/rogg-3.jpg" data-lightgallery="item">Asus ROG Strix G15 (2020) Core i7 10th Gen</a></article>
								 <p>(16 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA Geforce GTX 1650 Ti/144 Hz) G512LI-HN057T Gaming Laptop  (15.6 inch, Black Plastic, 2.30 kg)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$94,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                     ?>
                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="image/tritron1.jpg"><img alt="" src="image/tritron1.jpg"></a></div>
                            <div class="info">
                              <article class="thumbnail thumbnail-creative" class="title"><a href="image/tritron3.jpg" data-lightgallery="item">Acer Predator Triton 300 PT315-51</a></article>
                                <p>15.6-inch Gaming Laptop (9th Gen Core i5 9300H/8GB/1TB HDD + 256GB SSD/Windows 10 Home/4GB NVIDIA GeForce GTX 1650 Graphics), Abyssal Black</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$74,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="image/thinkpad1.jpg"><img alt="" src="image/thinkpad1.jpg"></a></div>
                            <div class="info">
                               <article class="thumbnail thumbnail-creative" class="title"><a href="image/thinkpad4.jpg" data-lightgallery="item">Lenovo THINKPAD E14 Core i5 10th Gen</a></article>
                                <p>(8 GB/512 GB SSD/Windows 10 Pro) E14 Business Laptop  (14 inch, Black, 1.77 kg)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$74,390.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img"><a href="image/swift7-1.jpg"><img alt="" src="image/swift7-1.jpg"></a></div>
                            <div class="info">
                                <article class="thumbnail thumbnail-creative" class="title"><a href="image/swift7-5.jpg" data-lightgallery="item">Acer Swift 7 Core i5 7th Gen</a></article>
                                <p>(8 GB/256 GB SSD/Windows 10 Home) SF713-51 Thin and Light Laptop  (13.3 inch, Black, 1.125 kg, With MS Office)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$72,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                           ?>
                                </div>
                            </div>
                        </li>
                         <li>
                            <div class="img"><a href="image/alien-1.jpg"><img alt="" src="image/alien-1.jpg"></a></div>
                            <div class="info">
								<article class="thumbnail thumbnail-creative" class="title"><a href="image/alien-4.jpg" data-lightgallery="item">Alienware Core i7 10th Gen</a></article>
                                <p>(16 GB/1 TB SSD/Windows 10 Home/8 GB Graphics/NVIDIA 
									Geforce RTX 2070) m15R3 Gaming Laptop  (15.6 inch,
								     Lunar Light, 2.5 kg, With MS Office)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$2,64,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						 <li>
                            <div class="img"><a href="image/specte360-1.jpg"><img alt="" src="image/specte360-1.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="#"></a>
								<article class="thumbnail thumbnail-creative" class="title"><a href="image/specte360-2.jpg" data-lightgallery="item">HP Spectre x360 Core i5 10th Gen</a></article>
									<p>(8 GB/512 GB SSD/Windows 10 Home)
									13-aw0204TU 2 in 1 Laptop  (13.3 inch,
									Night Fall Black, 1.27 kg, With MS Office)
                                   <div class="price">
                                    <span class="st">Our price:</span><strong>$99,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						 <li>
                            <div class="img"><a href="image/legion7i-1.jpg"><img alt="" src="image/legion7i-1.jpg"></a></div>
                            <div class="info">
								<article class="thumbnail thumbnail-creative" class="title"><a href="image/legion7i-3.jpg" data-lightgallery="item">Lenovo Legion 7i Core i7 10th Gen </a></article>
                                <p>(16 GB/1 TB SSD/Windows 10 Home/8 GB Graphics/NVIDIA Geforce RTX 2070) 15IMHg05 Gaming Laptop  (15.6 inch, Slate Grey, 2.25 kg, With MS Office)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1,95,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						 <li>
                            <div class="img"><a href="image/nitro7-1.jpg"><img alt="" src="image/nitro7-1.jpg"></a></div>
                            <div class="info">
                                <a class="title" href="#"></a>
								<article class="thumbnail thumbnail-creative" class="title"><a href="image/nitro7-5.jpg" data-lightgallery="item">Acer Nitro 5 Core i5 10th Gen </a></article>
                                <p>(8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA Geforce GTX 1650) AN515-55 Gaming Laptop  (15.6 inch, Black, 2.3 kg)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$74,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						 <li>
                            <div class="img"><a href="image/vivo15-1.jpg"><img alt="" src="image/vivo15-1.jpg"></a></div>
                            <div class="info">
								<article class="thumbnail thumbnail-creative" class="title"><a href="image/vivo15-5.jpg" data-lightgallery="item">Asus VivoBook 14 Core i5 10th Gen </a></article>
								<p>(8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/2 GB Graphics) X412FJ-EK513T Thin and Light Laptop  (14 inch, Peacock Blue, 1.50 kg)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$59,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						 <li>
                            <div class="img"><a href="image/zephyrusg14-1.jpg"><img alt="" src="image/zephyrusg14-1.jpg"></a></div>
                            <div class="info">
                                <article class="thumbnail thumbnail-creative" class="title"><a href="image/zephyrusg14-4.jpg" data-lightgallery="item">ASUS ROG Zephyrus G14 </a></article>
                                <p>14" FHD 120Hz, Ryzen 5 4600HS, GTX 1650Ti 4GB GDDR6 Graphics, Gaming Laptop (8GB/512GB SSD/MS Office 2019/Windows 10/Eclipse Gray/Without Anime Matrix/1.6 Kg), GA401II-HE022TS</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$94,390.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						 <li>
                            <div class="img"><a href="image/produo1.jpg"><img alt="" src="image/produo1.jpg"></a></div>
                            <div class="info">
                                <article class="thumbnail thumbnail-creative" class="title"><a href="image/produo5.jpg" data-lightgallery="item">Asus ZenBook Pro Duo Core i7 9th Gen </a></article>
                                <p>(32 GB/1 TB SSD/Windows 10 Home/6 GB Graphics) UX581GV-HM7201T 2 in 1 Laptop  (15.6 inch, Celestial Blue, 2.50 kg)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$2,42,869.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						 <li>
                            <div class="img"><a href="image/Aspire7-1.jpg"><img alt="" src="image/Aspire7-1.jpg"></a></div>
                            <div class="info">
                                <article class="thumbnail thumbnail-creative" class="title"><a href="image/Aspire7-2.jpg" data-lightgallery="item">Acer Aspire 7 Ryzen 7 Quad Core  </a></article>
								<p>(8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA Geforce GTX 1650/60 Hz) A715-41G-R9AE Gaming Laptop  (15.6 inch, Charcoal Black, 2.15 kg)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$59,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=13" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						 <li>
                            <div class="img"><a href="image/duo1.jpg"><img alt="" src="image/duo1.jpg"></a></div>
                            <div class="info">
                              <article class="thumbnail thumbnail-creative" class="title"><a href="image/duo4.jpg" data-lightgallery="item">Asus ZenBook Duo Core i7 10th Gen </a></article>
                                <p>(16 GB/1 TB SSD/Windows 10 Home/2 GB Graphics) UX481FL-B7611T Thin and Light Laptop  (14 inch, Celestial Blue, 1.5 kg)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1,09,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=14" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>						 
						<li>
                            <div class="img"><a href="image/ideapad540-2.jpg"><img alt="" src="image/ideapad540-2.jpg"></a></div>
                            <div class="info">
                                <article class="thumbnail thumbnail-creative" class="title"><a href="image/ideapad540-3.jpg" data-lightgallery="item">Lenovo Ideapad S540 Core i5 10th Gen </a></article>
                                <p>(8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/2 GB Graphics) S540-15IML Thin and Light Laptop  (15.6 inch, Mineral Grey, 1.8 kg, With MS Office)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$68,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=15" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						<li>
                            <div class="img"><a href="image/legiony530-1.jpg"><img alt="" src="image/legiony530-1.jpg"></a></div>
                            <div class="info">
								<article class="thumbnail thumbnail-creative" class="title"><a href="image/legiony530-3.jpeg" data-lightgallery="item">Lenovo Legion Y530 Core i7 8th Gen </a></article>
                                <p>(8 GB/1 TB HDD/128 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA Geforce GTX 1050) Y530-15ICH Gaming Laptop  (15.6 inch, Raven Black, 2.3 kg)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$76,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=16" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						<li>
                            <div class="img"><a href="image/omen15-1.jpg"><img alt="" src="image/omen15-1.jpg"></a></div>
                            <div class="info">
                              <article class="thumbnail thumbnail-creative" class="title"><a href="image/omen15-2.jpg" data-lightgallery="item">HP Omen Core i7 10th Gen </a></article>
                                <p>(16 GB/1 TB SSD/Windows 10 Home/4 GB Graphics/NVIDIA Geforce GTX 1650 Ti) 15-ek0019TX Gaming Laptop  (15.6 inch, Shadow Black, 2.36 kg)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$1,17,890.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=17" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						<li>
                            <div class="img"><a href="image/pavalion15-1.jpg"><img alt="" src="image/pavalion15-1.jpg"></a></div>
                            <div class="info">
                                <article class="thumbnail thumbnail-creative" class="title"><a href="image/pavalion15-4.jpg" data-lightgallery="item">HP Pavilion Gaming Core i5 9th Gen </a></article>
                                <p>(8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA Geforce GTX 1650) 15-dk0272TX Gaming Laptop  (15.6 inch, Shadow Black, 2.28 kg, With MS Office)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$73,990.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=18" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						<li>
                            <div class="img"><a href="image/macpro-1.jpg"><img alt="" src="image/macpro-1.jpg"></a></div>
                            <div class="info">
                                <article class="thumbnail thumbnail-creative" class="title"><a href="image/macpro-4.jpg" data-lightgallery="item">Apple MacBook Pro Core i9 9th Gen </a></article>
                                <p> (16 GB/1 TB SSD/Mac OS Catalina/4 GB Graphics) MVVK2HN/A  (16 inch, Space Grey, 2 kg)</p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$2,24,890.00</strong>
                                </div>
                                <div class="actions">
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=19" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </li>
						
                    </ul>
                </div>
               
            </section>
        </div>
      
      <!-- Blockquote-->
      <section class="section section-sm section-last bg-default section-style-2 text-md-left">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-10 col-xl-7">
              <h4>Blockquote</h4>
              <!-- Quote Classic-->
              <article class="quote-classic">
                <div class="quote-classic-text">
                  <p class="q">Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what you need.</p>
                </div>
                <p class="quote-classic-author">Rishant kaushik</p>
              </article>
            </div>
          </div>
        </div>
      </section>
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