	<!DOCTYPE html>

<html>
<title>auction details</title>
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
<title>Auction form</title>
<style>
 table,th,td,tr{
	        border:2px solid black
			padding:10px;
			border-collapse:collapse;
            }
			.far
{
	background-image:url('images/ric.jpg');
}	
.shade
{
	background-color:rgba(0,0,0,0.6);
	color:white;
}
td
{
color:white;
}
</style>
</head>




<body class="far">
	<h1 class="text-dark"><b>Auction Details</b></h1>
	<a href="Admin_home.php" class="btn btn-outline-primary">Previous</a>
<!-- main -->
	<div class="main-w3layouts wrapper">
		
		
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles"></ul>
		<form action="auction_apply.php" method="post">
</div>
<div class="shade">
<table class="table">
<thead>
   <tr>
       <th class="bg-success text-white">Id</th>
       <th class="bg-success text-white"> Name</th>
	   <th class="bg-success text-white">Product name</th>
	   <th class="bg-success text-white">price</th>
	   <th class="bg-success text-white">Quantity</th>
	   <th class="bg-success text-white">Action</th>
	</tr>
</thead>
<tbody>
<?php
$link=mysqli_connect("localhost","root","","agriworld");
if($link===false)
{
die("Error:could not connect".mysqli_connect_error());
}
$sql="select * from tb_auction_apply";
if(mysqli_query($link, $sql))
	
{
	$result=mysqli_query($link, $sql);
	while($row=mysqli_fetch_assoc($result))
   {
	echo  "<tr>
	       <td>".$row['id']."</td>
		   <td>".$row['name']."</td>
		   <td>".$row['productname']."</td>
		   <td>".$row['price']."</td>
		   <td>".$row['quantity']."</td>
		   
            <td><a href="."form_auction_delete.php?id=".$row['id']." class='btn btn-dark'>delete</a></td>
		   </tr>";

    }

}


else
{
echo "error $sql".mysqli_error($link);
}
mysqli_close($link);
?>

</body>
</html>