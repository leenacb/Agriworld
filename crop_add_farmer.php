<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

session_start();
$id=$_SESSION['loginid'];
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
  
  .far
{
  background-image:url('images/ric.jpg');
} 
.shade
{
  background-color: rgba(0,0,0,0.5);
}
td 
{
  color:white;
}
</style>
<!-- //web font -->
</head>
<body class="far">
  <a href="farmer_home.php"  class="btn btn-outline-primary">< Previous</a>
  
  <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1> Crop Add Form</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        
          <?php
error_reporting(0); 
?> 
<?php
  $msg = ""; 
   $db = mysqli_connect("localhost", "root", "", "agriworld"); 
  
  // If upload button is clicked ... 
  if (isset($_POST['upload'])) { 
  
  $fname=$_POST['cropname'];
  $lname=$_POST['price'];
  $qu=$_POST['qu'];
 
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "images/".$filename; 
          
   
        // Get all the submitted data from the form 
        $sql = "INSERT INTO tb_crop(crop_name,quantity,price,Filename,loginid) values('$fname','$lname','$qu','$filename',$id)";
  
        // Execute query 
        mysqli_query($db, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  } 
  $result = mysqli_query($db, "SELECT * FROM tb_crop"); 
  header('loaction:crop_add.php');
?> 
  
<!DOCTYPE html> 
<html> 
<head> 
<title>Image Upload</title> 
<link rel="stylesheet" type= "text/css" href ="style.css"/> 
<div id="content"> 

  <form method="POST" action="" enctype="multipart/form-data" class="shade"> 

<input type="text" name="cropname" placeholder="cropname" >
  

  <input type="text" name="price" placeholder="Crop Price">  
  <input type="text" name="qu" placeholder="Quantity in kg">
  
      <input type="file" name="uploadfile"> 
        
      <div>
          <input type="submit" name="upload" value="submit" class="btn bg-danger"> 
    
        </div> 
  </form> 
</div> 
</div></div>>





<table class="table shade">
<center>
 <tr class="bg-info"> 
 <th class="bg-info">id</th>
 <th class="bg-info">crop_name</th>
 <th class="bg-info">Quatity in kg</th>
 <th class="bg-info">price</th>
 <th class="bg-info">Photo</th>
 <td class="bg-info">Action</td>


 
 
 </tr>
 
 <div class="text-center bg-info">
 <?php


$mysql=new mysqli("localhost","root","","agriworld");
$query=$mysql->query("select * from tb_crop");




  foreach($query as $value=>$row)
    {
   
     echo "<tr>
   
   
   
   <td>".$row['id']."</td>
   <td>".$row['crop_name']."</td>
   <td>".$row['quantity']."</td>
   <td>".$row['price']."</td>
   

   <td> <img src="."images/".$row['Filename']." style="."height:100px , width:100px"."></td>
   
   <td>
   
   <a href='delet_crop.php?id=".$row['id']."' class='btn btn-block btn-info'>Delet</a></td></tr>";
  
         
  }

?>


</table>

          
          
          
          
         
  <!-- //main -->
  
</body>
</html>