<?php
 

 $mysql=new mysqli("localhost","root","","agriworld");
 $id=$_GET['id'];
 $sql=$mysql->query("delete  from  tb_notification where id=$id");
header('location:loan_noti_admin.php');

?>