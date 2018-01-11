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
require 'menu1.php';}
else
{
require 'menulogout.php';
}

?>

		
	
			<div class="grow">
			<div class="container">
			<h2>order</h2>
	   		</div>
		 </div>
	 	<!-- grow -->
	 <div class="jumbotron container">

	 <center><b><h1 color="green">you didn't buy anything </h1></b><br>
	 please <a href="products.php">shop</a> something</center>
	 </div>
	<!-- grow -->
	
<!--//content-->
<?php require 'footer.php'; ?>
</body>
</html>
			