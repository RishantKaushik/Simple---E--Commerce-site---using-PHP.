<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
 <title>Online Shoping cart</title>
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
	 <link rel="stylesheet" href="css/style1.css">
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
			<div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1>Edit your profile</h1>
                        <form method="post" action="profileing.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name"  placeholder="User name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" placeholder="mobile no.">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City">
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control" name="pincode" placeholder="Pincode">
                            </div>
							
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Change">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
         <?php
            require 'footer.php';
           ?>
        </div>
		</div>
			<div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="https://kit.fontawesome.com/0898a97359.js" crossorigin="anonymous"></script>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

        
        </div>
    </body>
</html>
