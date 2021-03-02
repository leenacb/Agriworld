<?php session_start();
$id=$_SESSION['loginid'];
$mysql=new mysqli("localhost","root","","agriworld");
$query=$mysql->query("select * from tb_seller  where loginid=$id ");
foreach($query as $value=>$row)
    {
echo  $name=$row['fname'];
	


?><!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Updation Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<style>
.far
{
background-image:url('images/ric.jpg');
}
.shade
{
	background-color:rgba(0,0,0,0.6);

}
.top{
	margin-top:150px;
}

</style>
</head>
<body class="far">
<div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">
            <!-- top navigation -->
            <div class="top-navigation-wrapper">
                <div class="top-navigation-container container">
                    <div class="top-navigation-left">
                        <div class="top-navigation-left-text">
                            Phone : +918845566      Email :agriworld@gmail.com </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
			<div id="greennature-header-substitute"></div>
            <div class="greennature-header-inner header-inner-header-style-5">
                <div class="greennature-header-container container">
                    <div class="greennature-header-inner-overlay"></div>
                    <!-- logo -->
                    <div class="greennature-logo">
                        <div class="greennature-logo-inner">
                             <img src="images/logo.png" alt="" /> </a>
                            <a href="index-2.html"><h3 style="color:green">Agri-World</h3>		
                              
                        </div>
                        <div class="greennature-responsive-navigation dl-menuwrapper" id="greennature-responsive-navigation">
                            <button class="dl-trigger">Open Menu</button>
                            <ul id="menu-main-menu" class="dl-menu greennature-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item page_item page-item-5680 current_page_item"><a href="index-2.html" aria-current="page">Home</a></li>
                                
                                    <ul class="dl-submenu">
                                        
                                            
                                </li>
                                
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="blog-full-with-right-sidebar.html">Blog</a>
                                    
                                    </ul>
                                </li>
       
                            </ul>
                        </div>
                    </div>


			
	</div>
                    <!-- navigation -->
                    <div class="greennature-navigation-wrapper">

                        <nav class="greennature-navigation" id="greennature-main-navigation">
                            <ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                            	<li></li>
                                <li class="menu-item menu-item-home current-menu-item greennature-normal-menu"><a href="seller_home.php"><i class="fa fa-home"></i>Home</a></li>
                                <li class="menu-item menu-item-has-children greennature-normal-menu">
                                    <ul class="sub-menu">
                                        
                                        
                                        
                                    </ul>
                                    <li class="menu-item menu-item-has-children"><a href="gallery_images.php" class="sf-with-ul-pre"></a>
                                            
                                </li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children greennature-mega-menu"><a href="logout.php" class="sf-with-ul-pre"><i class="fa fa-globe"></i>Logout</a>
								
                                    
                                </li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children greennature-normal-menu"><a href="blog-full-with-right-sidebar.html" class="sf-with-ul-pre"></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-full-with-right-sidebar.html">Blog Full</a></li>
                                        <li class="menu-item menu-item-has-children menu-item-"><a href="#" class="sf-with-ul-pre">Blog Column</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-1-column.html">Blog 1 Column (Right Sidebar)</a></li>
                                                <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns (Right Sidebar)</a></li>
                                                <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children menu-item-7"><a href="#" class="sf-with-ul-pre">Blog Masonry</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-2-columns-masonry.html">Blog 2 Columns &#8211; Masonry (Right Sidebar)</a></li>
                                                <li class="menu-item"><a href="blog-3-columns-masonry.html">Blog 3 Columns – Masonry</a></li>
                                                <li class="menu-item"><a href="blog-4-columns-masonry.html">Blog 4 Columns – Masonry</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                            </ul>
                            <a class="greennature-donate-button greennature-lb-payment"><span class="greennature-button-overlay"></span><span class="greennature-button-donate-text">Donate</span></a>

                        </nav>
                        <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                        <div class="clear"></div>
                          
                    </div>
                    <div class="clear"></div>
                  
                </div>
            </div>

        </header>
       
	<!-- main -->
	<div class="top">
	<div class="main-w3layouts wrapper">
		<h1> Seller updation Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top shade">
				<form action="update_seller_action.php" method="post">
					<input class="text" type="text" name="fname" placeholder="Firstname" required="" value=<?php echo $row['fname']; ?>>
					<input class="text" type="text" name="lname" placeholder="Lastname" required="" value=<?php echo $row['lname']; ?>>
					
					<input class="text" type="date" name="dob" placeholder="Date of Birth" required="" value=<?php echo $row['dob']; ?>></td>
					
					<input type="text" class="text" type="address" name="address" placeholder="Address" required="" value=<?php echo $row['address']; ?>></td>
					<input class="text" type="text" name="phone" placeholder="Phonenumber" required="" value=<?php echo $row['phno']; ?>>
					<input class="text email" type="email" name="email" placeholder="Email" required="" value=<?php echo $row['email']; ?>>
					<input class="text" type="text" name="adhar" placeholder="Adhar" required="" value=<?php echo $row['adar']; ?>>
					
					
					
	<?php } ?>
						
					<input type="submit" value="UPDATE" class="btn bg-danger">
				</form>
				
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			
		</ul>
	</div>
	<!-- //main -->
</body>
</html>