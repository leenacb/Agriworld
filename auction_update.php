<?php


$mysql=new mysqli("localhost","root","","agriworld");



$name=$_POST['crop_name'];
$id=$_POST['id'];

$price=$_POST['minprice'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];



$sql="update tb_auction set crop_name='$name',minprice='$price',quantity='$quantity',date='$date' where id=$id"; 
header("location:auction_form.php");
mysqli_query($mysql,$sql);
?>