<?php
 

 $mysql=new mysqli("localhost","root","","agriworld");
 $id=$_GET['id'];
 $sql=$mysql->query("delete  from  tb_auction_apply where id=$id");
header('location:form_auction_apply.php');

?>