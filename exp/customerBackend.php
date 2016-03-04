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


echo "<body>";

echo "Thank you for shopping with us~~~~ <br>";
echo "Your username: $name <br>";
echo "Your password: $pass <br>";
echo "Shipping method:$$shipping_method <br>";
echo "You got to pay: $ $total";

echo "</body>";

?>
