<!DOCTYPE html>

<html>
<head>
<title>Mattress A Ecommerce Category Flat Bootstrap Responsive Website Template | checkout :: w3layouts</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>

<!-- Custom Theme files -->
<!--theme-style-->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='..///fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='..///fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="../css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="../js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="#"><i class="facebok"> </i></a></li>
					<li><a href="#"><i class="twiter"> </i></a></li>
					<li><a href="#"><i class="inst"> </i></a></li>
					<li><a href="#"><i class="goog"> </i></a></li>
						<div class="clearfix"></div>	
				</ul>
			</div>
			<div class="header-left">
			
				<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form action="#" method="post">
							<input class="sb-search-input" placeholder="Enter your search term..." type="search"  id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						</form>
					</div>
				</div>
			
<!-- search-scripts -->
					<script src="../js/classie.js"></script>
					<script src="../js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->

				<div class="ca-r">
					<div class="cart box_1">
						<a href="checkout.php">
						<h3>
							cart<img src="../images/cart.png" alt=""/></h3>
						</a>
						

					</div>
				</div>
					<div class="clearfix"> </div>
			</div>
				
		</div>
		</div>
        <div class="container">
			<div class="head-top">
				<div class="logo">
					<h1><a href="index.php">Mattress</a></h1>
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li><a class="color8" href="index.php">BED LINEN</a></li>	
					  <li><a class="color8" href="products.php">SPECIAL</a></li>
					  	
				      <li><a class="color1" href="#">Category</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="h_nav">
							<ul>
							<?php
							
$con=mysqli_connect('localhost','root','','mattress');
$result=$con->query("select * from category_tbl " );
while($row=$result->fetch_assoc())
{
										echo '<li><a href="category.php?id='.$row["cat_name"].' ">'.$row["cat_name"].'</a></li>';
}
								?>		
										
											</ul>
									</div>
						  </div>
						</div>
					</li>
					<li class="grid"><a class="color2" href="#">PROFILE</a>
					  	<div class="mepanel">
						<div class="row">
						<div class="h_nav">
									<ul>
										<li><a href="profileview.php">VIEW PROFILE</a></li>
										<li><a href="profileedit.php">EDIT PROFILE</a></li>
										<li><a href="resetpassword.php">RESET PASSWORD</a></li>
										<li><a href="invoice.php">PAST ORDER</a></li>
									</ul>	
								</div>
						  </div>
						</div>
			    </li>
				    	
				<li><a class="color4" href="logout.php">logout</a></li>				
				<li><a class="color6" href="contact.php">Contact</a></li>
			  </ul> 
			  
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
        </div>
		
    
</body>
</html>
