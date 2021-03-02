<?php

session_start();
$id=$_SESSION['loginid'];
$mysql=new mysqli("localhost","root","","agriworld");


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
 <!--//web font -->
 <style>
.far
{
	background-image:url('images/ric.jpg');
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
 	<a href="Admin_home.php" class="btn btn-outline-primary"> < previous</a>
 	<h1 class="text-dark">Buy List of Crops</h1>
 	<div class="shade">
<table class="table">
	<tr>
		<td>Name of Farmer</td>
		<td>Crop</td>
		<td>phone No</td>
		<td>quantity in kg</td>
		<td>price for one kg</td>
		<td>Photo</td>
		<td>Buy Date</td>
		


	</tr>
	<?php
$mysql=new mysqli("localhost","root","","agriworld");
$sql=$mysql->query("SELECT * FROM tb_farmer f,tb_crop c,tb_buy b where b.loginid=f.loginid and b.crop_id=c.id;");

	foreach($sql as $value=>$row)
    {
    	?>
<tr><td><?php echo $row['fname'];?></td>
<td><?php echo $row['crop_name'];?></td>
<td><?php echo $row['phno'];?></td>
<td><?php echo $row['quantity'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo "<img src="."images/".$row['Filename']." style="."height:150px , width:150px".">"?></td>
<td><?php echo $row['buy_date'];?></td>

</tr>



    	<?php
    }

	?>
	</table>
</div>
</body>
</html>