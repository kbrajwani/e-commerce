<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
	</body>
	<?php session_start();
	
if($_SESSION["email"]==null)
{
header('location:login.php');

}
else
{
require 'classproduct.php';
$obj=new classproduct();
$email=$_SESSION["email"];
$result=$obj->getcheckout($email);	
if($result->num_rows==0)
		{
			header('location:checkoutempty.php');
		}
require 'menulogout.php';
}

$obj=new classproduct();
$email=$_SESSION["email"];
$result=$obj->getcheckout($email);
?>

		
	
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>Checkout</h2>
		</div>
	</div>
	<!-- grow -->
<div class="container">
	<div class="check">	 
			 <h1>My Shopping Bag</h1>
		 <div class="col-md-9 cart-items">
			<?php 
			$total=0;
		
			
			while($row=$result->fetch_assoc())
			{
				$res=$obj->getproduct($row["fk_product_id"]);
				$_row=$res->fetch_assoc();
		echo '	 <div class="cart-header2">';
		echo '		 <a class="close2" href="cartdelete.php?id='.$row["fk_product_id"].'"> </a>';
		echo '		  <div class="cart-sec simpleCart_shelfItem">';
		echo '				<div class="cart-item cyc">';
		echo '					 <img src="../'.$_row["image1"].'" class="img-responsive" alt=""/>';
		echo '				</div>';
		echo '			   <div class="cart-item-info">';
		echo '				<h3><a href="#">'.$_row["pname"].'</a><span>Model No: '.$_row["product_id"].'</span></h3>';
		echo '				<span>Price: '.$_row["price"].'</span>';
		$total=$total+$_row["price"];
		echo '				<ul class="qty">';
		echo '					<li><p>Size : 5</p></li>';
		echo '					<li><p>Qty : '.$row["quantity"].'</p></li>';
		echo '				</ul>';
		echo '					 <div class="delivery">';
		echo '					 <p>Service Charges : Rs.100.00</p>';
		echo '					 <span>Delivered in 2-3 business days</span>';
		echo '					 <div class="clearfix"></div>';
		echo '		        </div>';	
		echo '			   </div>';
		echo '			   <div class="clearfix"></div>';
											
		echo '		  </div>';
		echo '	  </div>';
			}
			
		
		
			?>		
		 </div>
		  <div class="col-md-3 cart-total">
			 <a class="continue" href="products.php">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1"><?php
				 
					 echo $total;
				 
				 ?></span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">100.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span><?php 
			   $total=$total+100;
			   echo $total;
			   ?></span></li>
			   <div class="clearfix"> </div>
			 </ul>
			 <div class="clearfix"></div>
			 <a class="order" href="insertbill.php">Place Order</a>
			 <div class="total-item">
				 
			 </div>
			</div>
		
			<div class="clearfix"> </div>
	 </div>
	 </div>


<!--//content-->
<?php require 'footer.php'; ?>

</body>
</html>
			