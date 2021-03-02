<?php
 

 $mysql=new mysqli("localhost","root","","agriworld");
 $id=$_GET['id'];
 $sql=$mysql->query("delete  from  tb_crop where id=$id");
header('location:farmer_crop.php');

?>