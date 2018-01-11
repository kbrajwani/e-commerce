<?php
$string=md5(rand());
$token=substr($string,0,10);
echo $token;
?>