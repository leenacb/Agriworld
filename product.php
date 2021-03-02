<?php
session_start();
$logid=$_SESSION['loginid'];

?><!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Agriworld</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- //web font -->
<style> 
table,th,td{
  border:2px solid black;
  padding:2px;
  border-collapse:collapse;
  background-color:rgba(0,0,0,0.5);
}
  
  .far
{
  background-image:url('images/ric.jpg');
  font-size:20px;
  color:white;
} 
td
{
  color:white;
}
.shade
{
  background-color: rgba(0,0,0,0.5);
}
</style>

</head>
<body class="far">
	<!-- main -->
	<div class="main-w3layouts wrapper">
    <a href="seller_home.php" class="btn btn-outline-primary">Previous</a>
		<h1> Product Add Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				
					<?php
error_reporting(0); 
?> 
<?php
  $msg = ""; 
  
  // If upload button is clicked ... 
  if (isset($_POST['upload'])) { 
  
  $fname=$_POST['cropname'];
  $lname=$_POST['price'];
 
  
    $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "images/".$filename; 
          
    $db = mysqli_connect("localhost", "root", "", "agriworld"); 
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO tb_product(product,price,image_details,log_id) values('$fname','$lname','$filename',$logid)";
  
        // Execute query 
        mysqli_query($db, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
        if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  } 
   
?> 
  


<div id="content" class="shade"> 
  
  <form method="POST" action="" enctype="multipart/form-data"> 
  <input type="text" name="cropname" placeholder="product name">
  <input type="text" name="price" placeholder="price">
  
      <input type="file" name="uploadfile" value=""> 
        
      <div>
          <input type="submit" name="upload" value="submit"> 
		
        </div> 
  </form> 
		</div></div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p> <a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			
		</ul>
	</div>

<body class="far">
  <h1 class="text-dark"><b>Fertilizer Product View table</h1>
  <!-- main -->
  
  <!-- //main -->






<form> 

<table class="table">
<center>
 <tr> 

 <th class="bg-info text-dark">Product</th>
 <th class="bg-info text-dark">Price</th>
 <th class="bg-info text-dark">Image</th>
 <th class="bg-info text-dark">Action</th>
 


 
 
 </tr>
 <div class="text-white">
 <?php


$mysql=new mysqli("localhost","root","","agriworld");
$query=$mysql->query("select * from tb_product");




  foreach($query as $value=>$row)
    {
   
     echo "<tr>  
   <td>".$row['product']."</td>
   <td>".$row['price']."</td>
   
<td> <img src="."images/".$row['image_details']." style="."height:150px , width:150px"."></td>
  

<td>

<a href='delet_fert.php?id=".$row['id']."' class='btn btn-block btn-info'>Delete</a></td></tr>";

  }
?>
</div>
</table>
	<!-- //main -->
</body>
</html>