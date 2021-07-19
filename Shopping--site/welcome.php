<?php
 include('connection.php');
?>
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
<?php
include('header.php');
?>
<div id="center">
<div id="center-set"> 
<h4 align='center'>Welcome <?php 
$_SESSION['id']=$id;
echo $email;?>,</h4>
You are now logged in. you can logout by clicking on signout link given below.
<div id="contentbox">
<?php
$sql="select * from users";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st"> 
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4"><?php echo $rows['id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><?php echo $rows['name']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
<td class="tl-4"><?php echo $rows['email']; ?></td>
</tr><tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">City:</div></td>
<td class="tl-4"><?php echo $rows['city']; ?></td>
</tr><tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Your full address :</div></td>
<td class="tl-4"><?php echo $rows['address']; ?></td>
</tr>
<td class="tl-1"><div align="left" id="tb-name">Reg. mobile no.</div></td>
<td class="tl-4"><?php echo $rows['contact']; ?></td>
</tr><tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Pincode:</div></td>
<td class="tl-4"><?php echo $rows['pincode']; ?></td>
</tr>
</table>
<div id="reg-bottom" class="btmrg">Copyright &copy; </div>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
<div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>
<div id="footer"><p> Copyright &copy; 2014-2015 7topics.com </p></div>
<?php
include('footer.php');
?>
</body>
</html>