<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<body>
    <?php session_start();
	
if($_SESSION["email"]==null)
{require 'menu1.php';}
else
{
require 'menulogout.php';
}

$id=$_GET["id"];
require 'classproduct.php';
$obj=new classproduct();
$_result=$obj->getproduct($id);
$row=$_result->fetch_assoc();	
?>

	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2><?php echo $row["pname"]; ?></h2>
		</div>
	</div>
	<!-- grow -->
		<div class="product">
			<div class="container">
				
				<div class="product-price1">
				<div class="top-sing">
				<div class="col-md-7 single-top">	
						<div class="flexslider">
			  <ul class="slides">
			  <?php if($row["image1"]!="images/")
			  {
			    echo '<li data-thumb="../'.$row["image1"].'">';
			        echo '<div class="thumb-image"> <img src="../'.$row["image1"].'" data-imagezoom="true" class="img-responsive"> </div>';
			    echo '</li>';
			  }
			  if($row["image2"]!="images/")
			  {
			    echo '<li data-thumb="../'.$row["image2"].'">';
			         echo '<div class="thumb-image"> <img src="../'.$row["image2"].'" data-imagezoom="true" class="img-responsive"> </div>';
			    echo '</li>';
			  }if($row["image2"]!="images/")
			  {
			    echo '<li data-thumb="<?php echo "../'.$row["image2"].'">';
			         echo '<div class="thumb-image"> <img src="../'.$row["image2"].'" data-imagezoom="true" class="img-responsive"> </div>';
			    echo '</li>';
			  }
?>
			  </ul>
		</div>

	<div class="clearfix"> </div>
<!-- slide -->


						<!-- FlexSlider -->
  <script defer src="../js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

	
	
	
	
	
	
					</div>	
					<div class="col-md-5 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4><?php echo $row["pname"]?></h4>
							<h5 class="item"> <?php echo $row["price"]?></h5>
							<div class="star-on">
								
								<div class="review">
									<a href="#"> 1 customer review </a>
									
								</div>
							<div class="clearfix"> </div>
							</div>
							
							
							<p><?php echo $row["detail"]?><br>
							<h4>Warrenty:-<?php echo $row["warrenty"]." year"; ?><br>
										stock on hand:-<?php echo $row["soh"];?>
							</p></h4>
							
							<div class="available">
								<ul>
									<li>Color
										<select>
										<?php
										$str= $row["color"];
										$arr=explode(",",$str);
										$count=count($arr);
										for($i=0;$i<$count;$i++)
										{
										echo '<option>'.$arr[$i].' </option>';
										}
										?>
									</select></li>
								
								<div class="clearfix"> </div>
							</ul>
						</div>
							
								<a href="addtocart.php?id=<?php echo $id; ?>" class="add-cart item_add">ADD TO CART</a>
							
						</div>
					</div>
				<div class="clearfix"> </div>
				</div>
			<!---->

		</div>
		</div>
		</div>
<!--//content-->
<?php require 'footer.php'; ?>
</body>
</html>
			