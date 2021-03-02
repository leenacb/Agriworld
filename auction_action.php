<?php
require "database.php";
$name=$_POST['name'];
 $productname=$_POST['productname'];
  $price=$_POST['price'];
  $quantity=$_POST['quantity'];  
    
  
  
 
  // use exec() because no results are returned
  //$conn->exec($sql);
  $inid=$conn->lastInsertId();
  $sqlr="INSERT INTO tb_auction_apply(name,productname,price,quantity) values('$name','$productname',$price,'$quantity')";
  $conn->exec($sqlr);
  echo "New record created successfully";
  //header('location:.php');
  
  
?>