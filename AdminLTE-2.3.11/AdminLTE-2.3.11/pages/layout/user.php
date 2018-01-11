<html>
    <header class="main-header">
    <?php include 'adminmenu.php'; ?>
</header>
     <body class="hold-transition skin-blue layout-top-nav">

<?php
require 'kumarhandloom/class.php';
$obj=new database();
$res=$obj->getuser();
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
<center><h2>user table</h2></center>
</div>
<form method="post" action="userdelete.php">
<table class="table">
<thead>
<th>email</th>
<th>Name</th>

<th>mobile</th>
<th>address</th>
<th>gender</th>
<th>image</th>
<th>verify</th>
<th>user type</th>
<th>action</th>
</thead>
<?php
while($row=$res->fetch_assoc())
{
    echo "<tr>";
echo '<td>'.$row["email"].'</td>';
echo '<td>'.$row["uname"].'</td>';

echo '<td>'.$row["mobile_no"].'</td>';
echo '<td>'.$row["address"].'</td>';
echo '<td>'.$row["gender"].'</td>';
echo '<td><img height="150" width="150" src=../../../../'.$row["image"].'></img></td>';
echo '<td>'.$row["verify"].'</td>';
echo '<td>'.$row["user_type"].'</td>';
echo '<td>
<input type="checkbox" name="chk[]" value="'.$row["email"].'"> |
<a href="userdelete.php?id='.$row["email"].'"><span class="glyphicon glyphicon-trash"></span></a> |
<a href="userupdate.php?id='.$row["email"].'"><span class="glyphicon glyphicon-edit"></span></a> 

</td>';
}
?>
</table>
<input type="submit" value="delete">
</form>

     </body>
</html>