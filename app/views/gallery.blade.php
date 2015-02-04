<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Thennek West Africa | Gallery</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
<script src='js/jquery.js'></script>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<!------ Light Box ------>
<link rel="stylesheet" href="css/swipebox.css">
<script src="js/ios-orientationchange-fix.js"></script> 
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
</script>
	<!------ Eng Light Box ------>	
<script src="js/vex-2.1.1/js/vex.combined.min.js"></script>
<script>vex.defaultOptions.className = 'vex-theme-os';</script>
<link rel="stylesheet" href="js/vex-2.1.1/css/vex.css" />
<link rel="stylesheet" href="js/vex-2.1.1/css/vex-theme-os.css" />
<script>
	vex.dialog.open
    message: 'Enter your username and password:'
    input: """
        <input name="username" type="text" placeholder="Username" required />
        <input name="password" type="password" placeholder="Password" required />
    """
    buttons: [
        $.extend({}, vex.dialog.buttons.YES, text: 'Login')
        $.extend({}, vex.dialog.buttons.NO, text: 'Back')
    ]
    callback: (data) ->
        return console.log('Cancelled') if data is false
        console.log 'Username', data.username, 'Password', data.password
</script>
</head>
<body>
<div class="header">	
	<div class="wrap"> 
		<div class="header-top">
			 <div class="logo" style="margin:0 !important;">
				 <a href="/">
				 	<!-- <img src="images/logo.png" alt=""> -->
				 	<div class="" id="logo_div">
				 		<!-- <h1>THENNEK <br />
				 		<span>WEST AFRICA</span></h1> -->
				 		<img src="images/logo.png" />
				 	</div>
				 </a>
			 </div>
			 <!-- <div style="height: 21px;width: 283px;display: inline-block;"></div> -->
			 <div class="" id="menuaddress">
				<div><img src="images/icons/email.png" alt=""><span style="margin-left: 7px;">info@thennekwestafrica.com</span></div>
				<div><img src="images/icons/phone.png" alt=""><span style="margin-left: 7px;">+233 (0) 302-333451</span><br />
															  <span style="margin-left: 23px;">+233 (0) 260 778 585</span><br />
															  <span style="margin-left: 23px;">+233 (0) 269 963 409</span></div>
				<div><img src="images/icons/envelope.png" alt=""><span style="margin-left: 7px;">P. O. Box AN 19847, Accra-Ghana</span></div>
			</div>
			<div class="clear"></div> 
	   	</div>
	</div>	
</div>
<div class="header-bottom">
	<div class="wrap">
		<div id='cssmenu'>
			<ul>
			   <li><a href="{{URL::to('/')}}"><span>Home</span></a></li>
			   <li class='active'><a href="{{URL::to('gallery')}}"><span>Gallery</span></a></li>
			   <li class='last'><a href="{{URL::to('contact')}}"><span>Contact</span></a></li>
			</ul>
		</div>
		<div class="clear"></div> 
	</div>
</div>
	<div class="main">
		<div class="content-bottom">
			<div class="wrap">
				<div class="heading4">
				  <p style="text-align:left;"><span style="font-size:30px;color:#737373;"><i>We are skilled at what we do...</i><span style="color:#b7b7b7;">&nbsp;</span></span></p>
				</div>
				<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_c.jpg" class="swipebox" title="Residential Apartment"> <img src="images/gallery/gal_img_c.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_2.jpg" class="swipebox" title="European standard UPVC door"> <img src="images/gallery/gal_img_2.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_3.jpg" class="swipebox" title="Italian aluminium door and window system"> <img src="images/gallery/gal_img_3.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_4.jpg" class="swipebox" title="Alucobond cladding or aluminium panel"> <img src="images/gallery/gal_img_4.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="clear"></div> 
		   		</div>	
		   		<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_5.jpg" class="swipebox" title="Spotless finishing..."> <img src="images/gallery/gal_img_5.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_d.jpg" class="swipebox" title="Corporate Property"> <img src="images/gallery/gal_img_d.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_7.jpg" class="swipebox" title="Beautifully crafted sun breakers"> <img src="images/gallery/gal_img_7.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_8.jpg" class="swipebox" title="Italian aluminium door and window system"> <img src="images/gallery/gal_img_8.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="clear"></div> 
		   		</div>	
		   		<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_9.jpg" class="swipebox" title="High quality stainless steel balustrades"> <img src="images/gallery/gal_img_9.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_10.jpg" class="swipebox" title="European standard UPVC door and window system"> <img src="images/gallery/gal_img_10.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_a.jpg" class="swipebox" title="No matter the stage of your project"> <img src="images/gallery/gal_img_a.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_12.jpg" class="swipebox" title="High quality steel balustrades"> <img src="images/gallery/gal_img_12.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="clear"></div> 
		   		</div>
		   		<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_13.jpg" class="swipebox" title="Sun breaker cross-sectional view"> <img src="images/gallery/gal_img_13.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_14.gif" class="swipebox" title="European standard UPVC door and window system"> <img src="images/gallery/gal_img_14.gif" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_15.jpg" class="swipebox" title="European standard UPVC door system"> <img src="images/gallery/gal_img_15.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_b.jpg" class="swipebox" title="No matter the stage of your project"> <img src="images/gallery/gal_img_b.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="clear"></div> 
		   		</div>	
		   		<div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_1.jpg" class="swipebox" title="Beautifully crafted sun breakersw"> <img src="images/gallery/gal_img_1.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_6.jpg" class="swipebox" title="European standard UPVC system"> <img src="images/gallery/gal_img_6.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_11.jpg" class="swipebox" title="Alucobond cladding or aluminium panel"> <img src="images/gallery/gal_img_11.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="images/gallery/gal_img_16.jpg" class="swipebox" title="High quality stainless steel balustrades"> <img src="images/gallery/gal_img_16.jpg" alt=""><span class="zoom-icon"></span> </a>
					</div>
					<div class="clear"></div> 
		   		</div>	
		   	</div>
	    </div>
	</div>
	   <div class="copy-right">
			<div class="wrap">
				<p>Built by <a href=""> elishasenoo@gmail.com</a></p>
			</div>
		</div>
</body>
</html>

    	
    	
            