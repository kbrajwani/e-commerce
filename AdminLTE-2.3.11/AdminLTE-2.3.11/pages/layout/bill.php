<html>
<header class="main-header">
    <?php include 'adminmenu.php'; ?>
</header>
     <body class="hold-transition skin-blue layout-top-nav">

     

<?php
require 'kumarhandloom/class.php';
$obj=new database();
$res=$obj->getbill();
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
<div class="container bg-info">
<center><h2>bill table</h2></center>
</div>
<div class="container">
<form action="billdelete.php" method="post">
<table class="table">
<thead>
<th>Bill number</th>
<th>email</th>
<th>product_id</th>
<th>amount</th>
<th>date</th>
<th>shipping address</th>
<th>payment type</th>
<th>action</th>
</thead>
<?php
while($row=$res->fetch_assoc())
{
    echo "<tr>";
echo '<td>'.$row["bill_no"].'</td>';
echo '<td>'.$row["fk_email_id"].'</td>';
echo '<td>'.$row["fk_product_id"].'</td>';
echo '<td>'.$row["amount"].'</td>';
echo '<td>'.$row["date"].'</td>';
echo '<td>'.$row["shipping_address"].'</td>';
echo '<td>'.$row["payment_type"].'</td>';
echo '<td>
<input type="checkbox" name="chk[]" value="'.$row["bill_no"].'"> |
<a href="billdelete.php?id='.$row["bill_no"].'"><span class="glyphicon glyphicon-trash"></span></a> 

</td>';
}
?>
</table>
<input type="submit" value="delete">
</form>
</div>
     </body>
</html>


