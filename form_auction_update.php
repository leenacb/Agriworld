<?php
 session_start();
$id=$_SESSION['loginid'];
$mysql=new mysqli("localhost","root","","agriworld");
$query=$mysql->query("select * from tb_auction  where id=$id ");



?><!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<style>
.far
{
background-image:url('images/ric.jpg');
}
.shade
{
	background-color:rgba(0,0,0,0.6);

}

</style>
</head>
<body class="far">
	<?php
	
	$aid=$_GET['id'];
	$csql="select * from tb_auction where id=$aid";
	$query=$mysql->query($csql);
	foreach($query as $value=>$row)
   {
	?>
	<a href="auction_form.php" class="btn btn-outline-primary"> < Previous</a>
	
	<!-- main -->
	<div class="main-w3layouts wrapper">    
		<h1 class="text-dark"><b> Auction updation Form</b></h1>
		<div class="main-agileinfo shade">
			<div class="agileits-top">
				<form action="auction_update.php" method="post">
					<input class="text" type="text" name="crop_name" placeholder="cropname" required="" value=<?php 
					echo $row['crop_name']; ?>>
					<input class="text" type="text" name="minprice" placeholder="minprice" required="" value=<?php echo $row['minprice']; ?>>
					
					<input class="text" type="text" name="quantity" placeholder="quantity" required="" value=<?php echo $row['quantity']; ?>></td>
					
					<input type="text" class="text"  name="date" placeholder="date" required="" value=<?php echo $row['date']; ?>></td>
					<input type="hidden" name="id" value=<?php echo $row['id']; ?>></td>
					
					
	
						
					<input type="submit" value="UPDATE" class="btn bg-danger">
				</form>
				<?php
				
   }
				?>
				
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>