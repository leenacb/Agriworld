<?php
$id=$_GET['id'];

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
<!-- //web font -->



	<style>
	.far
{
	background-image:url('images/ric.jpg');
}	
.shade
{
	background-color:rgba(0,0,0,0.6);
	</style>
</head>
<body class="far" >
<a href="crop_add.php"  class="btn btn-outline-primary">< Previous</a>
	
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1 class="text-dark"> Crop Update Form</h1>
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
        $sql = "update tb_cropprice set item='$crop',price=$price where id=$id";
  
        // Execute query 
        mysqli_query($db, $sql); 
          
        // Now let's move the uploaded image into the folder: image 
       header('Location:crop_add.php');
  } 
  $result = mysqli_query($db, "SELECT * FROM tb_cropprice where id=$id"); 


  foreach($result as $value=>$row)
    {
?> 
  
<div id="content" class="shade"> 
  
  <form method="POST" action="" enctype="multipart/form-data"> 
  <input type="text" value="<?php echo $row['item']; ?>" name="cropname" placeholder="cropname">
  <input type="text" name="price" value="<?php echo $row['price']; ?>"placeholder="price">
 
  
    <?php
}
    ?>
        
      <div>
          <input type="submit" name="upload" value="update" class="btn bg-danger"> 
		
        </div> 
  </form>
 </div>
	</div>
</div>
</div> 
</body>
</html>
