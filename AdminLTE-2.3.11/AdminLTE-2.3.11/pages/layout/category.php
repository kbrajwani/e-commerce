<html>
<header class="main-header">
    <?php include 'adminmenu.php'; ?>
</header>
     <body class="hold-transition skin-blue layout-top-nav">

     

<?php
require 'kumarhandloom/class.php';
$obj=new database();
$res=$obj->getcategory();
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
<center><h2>category table</h2></center>
</div>
<div class="container">
<form method="post" action="categorydelete.php">
<table class="table">
<thead>

<th>Name</th>

<th>action</th>
</thead>
<?php
while($row=$res->fetch_assoc())
{
    echo "<tr>";

echo '<td>'.$row["cat_name"].'</td>';
echo '<td>
<input type="checkbox" name="chk[]" value="'.$row["cat_id"].'"> |
<a href="categorydelete.php?id='.$row["cat_id"].'"><span class="glyphicon glyphicon-trash"></span></a> |
<a href="categoryupdate.php?id='.$row["cat_id"].'"><span class="glyphicon glyphicon-edit"></span></a>
</td>';
}
?>
</table>
<input type="submit" value="delete">
</form>
</div>
     </body>
</html>


