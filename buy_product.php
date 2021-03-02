<?php

session_start();
$id=$_SESSION['loginid'];
$mysql=new mysqli("localhost","root","","agriworld");


?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />
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




 <style>
    .far
{
    background-image:url('images/ric.jpg');
}   
.shade
{

    background-color: rgba(0,0,0,0.5);
    }
    table
    {
        color:white;
    }
 </style>

</head>
<a href="Admin_home.php" class="btn btn-outline-primary"> < previous </a>
 <body class="far">
    <h1 class="text-center text-dark">Buy List Of Product</h1>
<table border="1" class="shade">
	<tr>
		<td>Name</td>
		<td>Product Name</td>
		<td>phno</td>
        <td>Buy Date</td>
		<td>price</td>
        <td>Product</td>
	


	</tr>
	<?php
$mysql=new mysqli("localhost","root","","agriworld");
$sql=$mysql->query("select   tb_farmer.fname,tb_product .product,tb_farmer.phno,tb_product.price,tb_product.image_details,tb_buy_prdt.d_buy
 from tb_farmer,tb_buy_prdt,tb_product  where tb_buy_prdt.log_id=tb_farmer.loginid and tb_buy_prdt.p_id=tb_product.id");

	foreach($sql as $value=>$row)
    {
    	?>
<tr><td><?php echo $row['fname'];?></td>
<td><?php echo $row['product'];?></td>
<td><?php echo $row['phno'];?></td>
<td><?php echo $row['d_buy'];?></td>
<td><?php echo $row['price'];?></td>

<td><?php echo "<img src="."images/".$row['image_details']." style="."height:150px , width:150px".">"?></td>


</tr>



    	<?php
    }

	?>
</table>
	</body>
    </html>