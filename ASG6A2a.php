<?php
$msg=$_GET['msg'];
$fstyle=$_GET['fontstyle'];
$fsize=$_GET['fontsize'];
$fcolor=$_GET['fontcolor'];
$bgcolor=$_GET['bgcolor'];

setcookie('msg',$msg);
setcookie('fstyle',$fstyle);
setcookie('fsize',$fsize);
setcookie('fcolor',$fcolor);
setcookie('bgcolor',$bgcolor);

echo"Your text is: $msg <br>";
echo"Font style is:$fstyle <br>";
echo"font size is: $fsize <br>";
echo"font color is: $fcolor <br>";
echo"background color is: $bgcolor <br>";
?>

<html>
<body>
<form action="ASG6A2b.php" mathod="GET">
<input type="submit" value="ok">
</form>
</body>
</html>

