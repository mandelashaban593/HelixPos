r<?php
session_start();
$conn=mysql_connect("localhost","root","root");
if(!$conn) die(mysql_error());

$select_db=mysql_select_db("sales");
if(!$select_db) die(mysql_error());

$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['exdate'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
$g = $_POST['o_price'];
$h = $_POST['profit'];
$i = $_POST['gen'];
$j = $_POST['date_arrival'];
$k = $_POST['qty_sold'];

echo $a;
echo "\n";

echo $b;
echo "\n";

echo $c;
echo "\n";

echo $d;
echo "\n";


// query
$sql = "INSERT INTO products (product_code,product_name,expiry_date,price,supplier,qty,o_price,profit,gen_name,date_arrival,qty_sold,cost,onhand_qty) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','',0)";
mysql_query($sql) or die(mysql_error());

header("location: products.php");


?>
