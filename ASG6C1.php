<html>
<body>

<form action="ASG6C1a.php" method="post">
<?php
session_start();
$cnm = $_GET['cnm'];
$cadr = $_GET['cadr'];
$cmn = $_GET['cmn'];

$_SESSION['cmn']= $cnm;
$_SESSION['cadr']= $cadr;
$_SESSION['cmn']= $cmn;
?>
<center>
<h2>Enter Earnings of Employee:</h2>

<table>
<tr><td>Enter Product Name : </td><td><input type="text" name="pnm"></td><tr>
<tr><td>Enter Quantity : </td><td><input type="text" name="pqy"></td></tr>
<tr><td>Enter Rate / Product : </td><td><input type="text" name="prt"></td></tr>
<tr><td></td><td><input type="submit" value=Next></td></tr>
</table>
</center>
</form>
</body>
</html>


