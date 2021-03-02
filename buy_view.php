<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<style>
table,th,td{
	border:2px solid black;
	padding:2px;
	border-collapse:collapse;
}
	
	.far
{
background-image:url('images/ric.jpg');
}

</style>
</head>
    




<body class="far">
	<!-- main -->
	



<form> 
<table class="table">
<center>
 <tr> 
 <th>id</th>
 <th>crop_name</th>
 <th>price</th>
 <th>Photo</th>
 


 
 
 </tr>
 
 <div class="text-center">
 <?php


$mysql=new mysqli("localhost","root","","agriworld");
$query=$mysql->query("select * from tb_crop");




	foreach($query as $value=>$row)
    {
	 
     echo "<tr>
	 
	 
	 
	 <td>".$row['id']."</td>
	 <td>".$row['crop_name']."</td>
	 <td>".$row['price']."</td>
	 <td> <img src="."images/".$row['Filename']." style="."height:100px , width:100px"."></td>
	 </tr>";

	
	       
	}
?>
</div>
</table>
</form>

</body>
</html>