<?php 
include_once("connection.php");
//Set variables for paypal form
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_email = 'atularya4545@gmail.com';
?>
<title>Payment(paypal)</title>
<div class="container">
	<h2>Demo: PAYPAL</h2>
	<div class="col-lg-12">
	<div class="row">
		<?php
		$sql = "SELECT * FROM items";
		$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
		while( $row = mysqli_fetch_assoc($resultset) ) {
		?>
			
			<div class="col-sm-4 col-lg-4 col-md-4">
			<div class="thumbnail"> 
			<img src="images/<?php echo $row['p_image']; ?>"/>
			<div class="caption">
			<h4 class="pull-right">Price: <?php echo $row['price']; ?></h4>
			<h4>Name: <?php echo $row['name']; ?></h4>			
			</div>					
			<form action="<?php echo $paypal_url; ?>" method="post">			
			<!-- Paypal business test account email id so that you can collect the payments. -->
			<input type="hidden" name="business" value="<?php echo $paypal_email; ?>">			
			<!-- Buy Now button. -->
			<input type="hidden" name="cmd" value="_xclick">			
			<!-- Details about the item that buyers will purchase. -->
			<input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
			<input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
			<input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
			<input type="hidden" name="currency_code" value="INR">			
			<!-- URLs -->
			<input type='hidden' name='cancel_return' value='cancel.php'>
			<input type='hidden' name='return' value='success.php'>						
			<!-- payment button. -->
			<input type="image" name="submit" border="0"
			src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
			<img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >    
			</form>
			</div>
			</div>
				
		<?php } ?>
		</div>		
	</div>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="" title="Paypal Integration in PHP">Back to Tutorial</a>			
	</div>		
</div>
