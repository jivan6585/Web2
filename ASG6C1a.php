<?php
session_start();
$val1 = $_POST['pnm'];
$val2 = $_POST['pqy'];
$val3 = $_POST['prt'];



echo "<h3>Employee Details</h3> ";
echo "Name : ".$_SESSION['cnm']."<br>";
echo "Address : ".$_SESSION['cadr']."<br>";
echo "Class : ".$_SESSION['cmn']."<br><br>";

echo "Product : ".$val1."<br>";
echo "Quantity : ".$val2."<br>";
echo "Rate / Product : ".$val3."<br>";

$total = $val2+$val3;
echo "<h2>Total Bill : ".$total."</h2>";
?>
