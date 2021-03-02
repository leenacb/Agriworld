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
	background-color:rgba(0,0,0,0.6);
}
td{
	color:white;
}

	</style>
<!-- //web font -->
</head>
<body  class="far">
	<a href="Admin_home.php"  class="btn btn-outline-primary">< Previous</a>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1 class="text-dark"> Crop Add Form</h1>
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
  
  $crop=$_POST['cropname'];
  $price=$_POST['price'];
          
    
        // Get all the submitted data from the form 
        $sql = "INSERT INTO tb_cropprice(item,price) values('$crop','$price')";
  
        // Execute query 
        mysqli_query($db, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
       
  } 
  $result = mysqli_query($db, "SELECT * FROM tb_cropprice"); 

?> 
  
<div id="content" class="shade"> 
  
  <form method="POST" action="" enctype="multipart/form-data"> 
  <input type="text" name="cropname" placeholder="cropname">
  <input type="text" name="price" placeholder="price">
 
  
    
        
      <div>
          <input type="submit" name="upload" value="submit" class="btn bg-danger"> 
		
        </div> 
  </form>
 </div>
	</div>
</div>
</div> 
 	
 	<table class="table shade" border=1>

 <tr> 
 <th class="bg-info text-dark"><b>id</b></th>
 <th class="bg-info text-dark"><b>item</b></th>
 <th class="bg-info text-dark"><b>Price</b></th>
 <th class="bg-info text-dark"><b>update/delete</b></th>

  </tr> 
  <?php
  foreach($result as $value=>$row)
    {
	 
     echo "<tr>
     <td>".$row['id']."</td>
     <td>".$row['item']."</td>
     <td>Rupees ".$row['price']."</td>
      <td><a href='cropdelete.php?id=".$row['id']."' class='btn btn-block btn-info'>Delete/</a><a href='cropupdate.php?id=".$row['id']."' class='btn btn-block btn-info'>Edit</a></td></tr>";
  }?>

					
					
					
					
	</table>			
</body>
</html>
