<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
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
    <link rel="stylesheet" href="css/styleshop.css">

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
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
			<section class="section section-sm section-last bg-default section-style-2 text-md-left">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-10 col-xl-7">
            <?php
//Store transaction information into database from PayPal
$item_number = $_GET['item_number']; 
$txn_id = $_GET['tx'];
$payment_gross = $_GET['amt'];
$currency_code = $_GET['cc'];
$payment_status = $_GET['st'];
//Get product price to store into database
$sql = "SELECT * FROM products WHERE id = ".$item_number;
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$row = mysqli_fetch_assoc($resultset);
if(!empty($txn_id) && $payment_gross == $row['price']){
    //Insert tansaction data into the database
    mysqli_query($con, "INSERT INTO payments(item_number,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')");
	$last_insert_id = mysqli_insert_id($con);    
?>
	              <h1 class="oh swiper-title contextscolor">Your payment has been successful.</h1>

    <h1 class="oh swiper-title contextscolor">Your Payment ID - <?php echo $last_insert_id; ?>.</h1>
<?php
}else{
?>
	<h1>Your payment has failed.</h1>
<?php
}
?>
              
              <!-- Quote Classic-->
              <article class="quote-classic">
                <div class="quote-classic-text">
                  <p class="q">Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
     <?php
            require 'footer.php';
           ?>
        </div>
			<div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="https://kit.fontawesome.com/0898a97359.js" crossorigin="anonymous"></script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    </body>
</html>
