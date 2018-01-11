<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html><body>
    <?php session_start();
	
if($_SESSION["email"]==null)
{require 'menu1.php';}
else
{
require 'menulogout.php';
}
require 'classproduct.php';
$obj=new classproduct();
?>
	<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>Lorem Ipsum is   </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
						
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>There are many  </h3>
						<p>Popular belief Contrary to , Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
												

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>Sed ut perspiciatis</h3>
						<p>Lorem Ipsum is not simply random text. Contrary to popular belief, It has roots in a piece of classical Latin literature from 45 BC.</p>
								

						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->
<div class="container">
	<div class="cont">
		<div class="container">
			<div class="content-top-bottom">
				<h2>Featured PRODUCTS</h2>
				<div class="men">
				<?php 
				$res=$obj->getallproduct();
				while($row=$res->fetch_assoc()){
			echo '		<div class="col-md-4  bottom-cd simpleCart_shelfItem">';
			echo '			<div class="product-at ">';
			echo '			<a href="single1.php?id='.$row["product_id"].'"><img  class="img-responsive" src="../'.$row["image1"].'" alt="">';
			echo '			<div class="pro-grid">';
			echo '						<span class="buy-in">Buy Now</span>';
			echo '			</div>';
			echo '		</a>	';
			echo '		</div>';
			echo '		<p class="tun"><span>'.$row["pname"].'</span><br>CLARISSA</p>';
			echo '		<div class="ca-rt">';
			echo '			<a href="single1.php?id='.$row["product_id"].'" class="item_add"><p class="number item_price"><i> </i>'.$row["price"].'</p></a>';
			echo '		</div>';
			echo '		<div class="clearfix"></div>					';
			echo '	</div> ';
			
}	
					?>
					</div>
							
				</div>
			</div>
		</div>
	<!----->
	</div>
	<!---->
<?php require 'footer.php'; ?>
</body>
</html>
			