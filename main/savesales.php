<?php
session_start();
$conn=mysql_connect("localhost","root","root");
if(!$conn) die(mysql_error());

$select_db=mysql_select_db("sales");
if(!$select_db) die(mysql_error());
$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount'];
$z = $_POST['profit'];
$cname = $_POST['cname'];

echo "Invoice: " . $a;
echo "<br>";
echo "Cashier: " . $b;
echo "<br>";
echo "Date: " . $c;
echo "<br>";
echo "Payment Type: " . $d;
echo "<br>";
echo "Amount: " . $e;
echo "<br>";
echo "Profit: " . $z;
echo "<br>";


$f = $_POST['cash'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,due_date,name,balance) VALUES ('$a','$b','$c','$d','$e','$z','$f','$cname',' ')";
$query1=mysql_query($sql) or die(mysql_error());
header("location: preview.php?invoice=$a");

?>
