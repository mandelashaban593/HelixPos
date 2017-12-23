<?php
$conn=mysql_connect("localhost","root","root");
if(!$conn) die(mysql_error());

$select_db=mysql_select_db("sales");
if(!$select_db) die(mysql_error());
$a = $_POST['invoice'];
$b = $_POST['product_id'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$date = $_POST['date'];
$discount = $_POST['discount'];

echo $a;

echo "\n";

echo $b;


$result = "SELECT * FROM products WHERE product_id='$b'";

$query1=mysql_query($result) or die(mysql_error());

$row=mysql_fetch_assoc($query1) or die(mysql_error());

echo $row;

$asasa=$row['price'];
echo $asasa;

echo "\n";

$code=$row['product_code'];

echo $code;

echo "\n";



$gen=$row['gen_name'];
echo $gen;

echo "\n";


$name=$row['product_name'];

echo $name;

echo "\n";


$p=$row['profit'];

echo $p;



//edit qty
$sql = "UPDATE products 
        SET qty=qty-'$c'
		WHERE product_id='$b'";
$q = mysql_query($sql) or die(mysql_error());

$fffffff=$asasa-$discount;
$d=$fffffff*$c;
$profit=$p*$c;



// query
$sql = "INSERT INTO sales_order (invoice,product,qty,amount,name,price,profit,product_code,gen_name,date,discount) VALUES ('$a','$b','$c','$d ','$name','$asasa','$p', '$code','$gen','$date',0.0)";
mysql_query($sql) or die(mysql_error());

header("location: sales.php?id=$b&invoice=$a&profit=$p&qty=$c");



?>
