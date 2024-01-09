<?php
$a=$_COOKIE['msg'];
$b=$_COOKIE['fstyle'];
$c=$_COOKIE['fsize'];
$d=$_COOKIE['fcolor'];
$e=$_COOKIE['bgcolor'];

echo" ".$a;
echo"<body bgcolor=".$e.">";

echo"<font face=".$b." size=".$c." color=".$d.">".$a."</font>";

echo"</body>";


?>
