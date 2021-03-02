<?php
 

 $mysql=new mysqli("localhost","root","","agriworld");
 $id=$_GET['id'];
 $sql=$mysql->query("delete  from  tb_cropprice where id=$id");
header('location:crop_add.php');

?>