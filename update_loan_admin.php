<?php
 

 $mysql=new mysqli("localhost","root","","agriworld");
 $id=$_GET['id'];
 


?>



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
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;' type='text/css' media='all' />
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/superfish/css/superfish.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/dl-menu/component.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/font-awesome-new/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/elegant-font/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/fancybox/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/flexslider/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/masterslider/public/assets/css/masterslider.main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/master-custom.css' type='text/css' media='all' />
<!-- //web font -->
<style>
table,th,td{
	border:2px solid black;
	padding:2px;
	border-collapse:collapse;
	background-color:rgba(0,0,0,0.7);
}
	
	.far
{
	background-image:url('images/ric.jpg');
	font-size:20px;
	color:black;

}	
td
{

	color:white;
}

</style>
</head>
<body class="far">

	<!-- main -->
	<h1>Update</h1>
	


<?php
  //$msg = ""; 
  $db = mysqli_connect("localhost", "root", "", "agriworld"); 
  // If upload button is clicked ... 
 if (isset($_POST['submit'])) { 
 
  $loan=$_POST['loan'];
  $total=$_POST['total'];
  $intr=$_POST['interest'];
  $dura=$_POST['duration'];
  //$notification=$_POST['notification'];
   
  
        // Get all the submitted data from the form 
      
  $sql = "update tb_notification set notification='$loan',cost=$total,interest=$intr,duration=$dura where id=$id";
        // Execute query 
        mysqli_query($db, $sql); 
         header('location:loan_noti_admin.php');
        }
  
?> 





 
 <div class="text-center">
 <?php


$mysql=new mysqli("localhost","root","","agriworld");
$query=$mysql->query("select * from tb_notification where id=$id");


  

	foreach($query as $value=>$row)
    {
	 ?>
	 <h1>ADD  LOAN NOTIFIACTION</h1>
<form method="POST" enctype="multipart/form-data"> 
  <input type="text" name="loan" value=<?php echo $row['notification']; ?>>
  <input type="text" name="total" value=<?php echo $row['cost'];?>>
  <input type="text" name="interest" value=<?php echo $row['interest'];?>>
  <input type="text" name="duration" value=<?php echo $row['duration'];?>>
<div>
          <input type="submit" name="submit" value="update"> 
		
        </div> 
  </form> 
  
	 
	       
	<?php }

?>
</div>

</form>

</body>
</html>