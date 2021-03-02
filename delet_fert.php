<?php
 

 $mysql=new mysqli("localhost","root","","agriworld");
 $id=$_GET['id'];
 $sql=$mysql->query("delete  from  tb_product where id=$id");
header('location:product.php');

?>