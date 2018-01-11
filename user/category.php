<?php session_start();
	
if($_SESSION["email"]==null)
{require 'menu1.php';}
else
{
require 'menulogout.php';
}
	
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php

$_name=$_SESSION["email"];
$_id=$_GET["id"];

require 'classproduct.php';
$obj=new classproduct();
$result=$obj->getcategory($_id);



/*if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo $row["news_title"] ."<br>";
    }
}
else
{
    echo "no records found";
}*/

?>
    

    <!-- Page Content -->
<div class="grow">
		<div class="container">
			<h2>Products</h2>
		</div>
	</div>
	<!-- grow -->
	<div class="pro-du">
		<div class="container">
			<div class="col-md-9 product1">
				<div class=" bottom-product">
	


<?php
if($result->num_rows > 0){
while($row=$result->fetch_assoc())
{
   echo '		<div class="col-md-6 bottom-cd simpleCart_shelfItem">';
			echo '			<div class="product-at ">';
			echo '			<a href="single1.php?id='.$row["product_id"].'"><img class="img-responsive" height="150px" width="150px" src="../'.$row["image1"].'" alt="">';
			echo '			<div class="pro-grid">';
			echo '						<span class="buy-in">Buy Now</span>';
			echo '			</div>';
			echo '		</a>	';
			echo '		</div>';
			echo '		<p class="tun"><span>'.$row["pname"].'</span><br>CLARISSA</p>';
			echo '		<div class="ca-rt">';
			echo '			<a href="single1.php?id='.$row["product_id"].'" class="item_add"><p class="number item_price"><i> </i>$'.$row["price"].'</p></a>';
			echo '		</div>';
			echo '		<div class="clearfix"></div>					';
			echo '	</div> ';       
}
}
else
{
    echo "no record found";
}
?>      
	<div class="clearfix"> </div>
				</div>
				
				</div>
			<div class="col-md-3 prod-rgt">
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="index.php"><img class="img-responsive" src="../images/l2.jpg" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="index.php">TRIBECA LIVING</a></h6>
						<p><a href="index.php">450$</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="index.php"><img class="img-responsive" src="../images/l3.jpg" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="index.php">TRIBECA LIVING</a></h6>
						<p><a href="index.php">450$</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="index.php"><img class="img-responsive" src="../images/l1.jpg" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="index.php">TRIBECA LIVING</a></h6>
						<p><a href="index.php">450$</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class="pr-btm">
				<h4>What Our Client Say</h4>
					<img class="img-responsive" src="../images/pi.jpg" alt="">
					<h6>John</h6>
					<p>Lorem Ipsum is simply dummy text of the printing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
<!-- products -->
<?php require 'footer.php'; ?>
        
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
