<html>
<head><link href="store_style.css" rel="stylesheet" type="text/css"/></head>
<body>
<?php

//debugging
error_reporting(E_ALL);
ini_set("display_errors", 1);


$shipping_method = $_POST["shipping_method"];

$ls = $_POST["LSquantity"];
$ss = $_POST["SSquantity"];
$ws = $_POST["WSquantity"];

$name = $_POST["username"];
$pass = $_POST["password"];

$total = $ls*10000 + $ss*4500 + $ws*120;
echo "<table>";
echo "<tr><td><h1>Thank you for shopping with us~~~~ </h1></td></tr>";
echo "<tr><td><h2>Your username: $name </h2></td></tr>";
echo "<tr><td><h2>Your password: $pass </h2></td></tr>";
echo "<tr><td><h2>Shipping method:$$shipping_method </h2></td></tr>";
echo "<tr><td><h2>You got to pay: $ $total</h2></td></tr>";
echo "</table>";


?>
</body></html>
