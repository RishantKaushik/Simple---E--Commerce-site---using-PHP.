<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }  
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $contact= mysqli_real_escape_string($con,$_POST['contact']);
	$city= mysqli_real_escape_string($con,$_POST['city']);
	$address= mysqli_real_escape_string($con,$_POST['address']);
	$pincode= mysqli_real_escape_string($con,$_POST['pincode']);
    $email=$_SESSION['email'];
	if($email==$_SESSION['email']){
        $update_name_query="update users set name='$name' where email='$email'";
        $update_name_result=mysqli_query($con,$update_name_query) or die(mysqli_error($con));      
		$update_pincode_query="update users set pincode='$pincode' where email='$email'";
        $update_pincode_result=mysqli_query($con,$update_pincode_query) or die(mysqli_error($con));      
		$update_contact_query="update users set contact='$contact' where email='$email'";
        $update_contact_result=mysqli_query($con,$update_contact_query) or die(mysqli_error($con));      
		$update_city_query="update users set city='$city' where email='$email'";
		$update_city_result=mysqli_query($con,$update_city_query) or die(mysqli_error($con));
		$update_address_query="update users set address='$address' where email='$email'";
	    $update_address_result=mysqli_query($con,$update_address_query) or die(mysqli_error($con));
        echo "Your details has been updated.";
        ?>
        <meta http-equiv="refresh" content="3;url=products.php" />
        <?php
   } else{
        ?>
        <script>
            window.alert("Wrong try");
        </script>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
       
    }
?>