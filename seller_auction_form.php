<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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

}
th {
	color:white;
}
td 
{
	color:white;
}

</style>
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper far">
		<a href="seller_auction_table.php" class="btn btn-outline-primary">< previous</a>
		<h1 class="text-dark">Seller Auction Apply Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles"></ul>
				<form action="auction_insert_seller.php" method="post" class="shade">
					</br><input class="text" type="text" name="name" placeholder="name" required=""></br>
					<input class="text" type="text" name="productname" placeholder="product" required=""></br>
					<input class="text" type="text" name="price" placeholder="price" required=""></br>
					<input class="text" type="text" name="quantity" placeholder="quantity" required=""></br>
					<input class="text" type="submit" value="submit"  required=""></br>
					</div>
</div>
					
					

<div class="shade">
<table class="table">
<thead>
   <tr>
       <th class="bg-success">Id</th>
       <th  class="bg-success">Seller name</th>
	   <th  class="bg-success">crop name</th>
	   <th  class="bg-success">Price</th>
	   <th  class="bg-success">Quantity</th>
	    <th  class="bg-success">Action</th>

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
		   <td> <a href="."delete_auction.php?id=".$row['id']." class='btn btn-dark'>Delete</a></td>
		   </tr>";

    }

}


else
{
echo "error $sql".mysqli_error($link);
}
mysqli_close($link);
?>
</tbody>

</table>
</div>
</form>
</div>
</body>
</html>



