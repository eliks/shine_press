<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shine Press | Contact</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<!-- //grid-slider -->
<!---calender-style---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<!---//calender-style---->	
</head>
<body>
	@if(Session::has('info'))
    	<div style="background-color: green; color: white;text-align: center; text-decoration: blink;">{{ Session::get('info') }}</div>
    @elseif(Session::has('congrat'))
    	<div style="background-color: green; color: white;text-align: center;">{{ Session::get('congrat') }}</div>
    @endif
    <!-- start header_bottom -->
    <div class="header-bottom">
		 <div class="container">
		   <div class="clear"></div>
		</div>
    </div>
	<!-- start menu -->
    <div class="menu" id="menu">
	  <div class="container">
		 <div class="logo">
			<a href="index">
				<div style="width: 145px; height: 40px;">
					<p style="font-size: 26px;font-family: serif;font-weight: 700;"> Shine Press</p>
				</div>
				<!-- <img src="images/logo.png" alt=""/> -->
			</a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li><a href="index">Home</a></li>
			   <li><a href="about">About</a></li>
			   <li><a href="services">Services</a></li>
			   <li class="active"><a href="contact">Contact</a></li>
			   <!-- <li><a href="#">Gallery</a></li> -->
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
	<div class="main">
       <div class="about_banner_img"><img src="images/class_img.jpg" class="img-responsive" alt=""/></div>
		 <div class="about_banner_wrap">
      	    <h1 class="m_11">Contact</h1>
      	</div>
		<div class="border"> </div> 
<!-- repeat -->
		<div id="contact" class="login">
		  	    <div class="row login_details">
		  	    	<div class="col-md-6">
					  <div class="join-right">
					  	 <h3>Why Choose us ?</h3>
					  	 <h4>we understand the art and science of printing</h4>
					  	 <p>No mater the job, we precisely calculated every drop of ink to achieve a desired outcome. Our prints bear us witness. <br> Everyday we make our clients smile.</p>	
					  	 <div class="buttons_login" style="padding-top: 4%;">
					  	 <div class="btn4" style="margin-left: 16%;">
					       <a href="contact" class="scroll" style="width: 150px; padding: 7px 12px;">Contact Us</a>
				         </div>
				         <div class="btn4" style="margin-left: 16%;">
					       <a href="#map" class="scroll" style="width: 150px; padding: 7px 12px;">Locate Us</a>
				         </div>	
				         <!-- <div class="p-ww">
						  <form>
						   <input class="date" id="datepicker" type="text" value="View Calender" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'View Calender';}">
						  </form>
					     </div> -->
				         <div class="clear"></div>
				         <!---strat-date-piker---->
					  <script src="js/jquery-ui.js"></script>
					  <script>
					  $(function() {
					    $( "#datepicker" ).datepicker();
					  });
					  </script>
					  </div>
					  </div>
					</div>
				 	<div class="col-md-6">
						  <div class="join">
						  	 <h3>Have a printing need?</h3>
						  	 <h4>we deliver with quality and on time</h4>
						  	 <p>With our ultra-modern equipements, our skilled personel <br> work round the clock to deliver the best quality on time. </p>	
						  	 <div class="btn3">
						       <a href="#" class="" data-toggle="modal" data-target="#myModal">Request a quote</a>
					         </div>	
						  </div>
					</div>
					<div class="clear"></div>
			   </div>
		  </div>
	    <div id="map" class="map" style="margin-top: 0%;padding-top: 0%;">
			<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2&amp;output=embed"> </iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=United+Kingdom&amp;aq=0&amp;oq=un&amp;sll=37.0625,-95.677068&amp;sspn=48.956293,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=55.378051,-3.435973&amp;spn=135.795411,68.554687&amp;t=m&amp;z=2" style="color:#666;font-size:12px;text-align:left"> </a></small>
			<div class="opening_hours" style="top:3%;">
			 <ul class="times">
			 	<h3>Opening <span class="opening">Hours</span></h3>
			 	<li><i class="calender"> </i><span class="week">Monday</span><div class="hours">08:00-17:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Tuesday</span><div class="hours">08:00-17:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Wednesday</span><div class="hours">08:00-17:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Thrusday</span><div class="hours">08:00-17:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Friday</span><div class="hours">08:00-17:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Saturday</span><div class="hours">Closed</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Sunday</span><div class="hours">08:00-17:00</div>  <div class="clear"></div></li>
			    <p>Our doors are always open. We are innovative in design, professional in business and deliver quality at the best price.</p>
			 	<h4>You're welcome!</h4>
			 </ul>
		    </div>
		 </div>
		 <div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<!-- <div class="col-md-4">
				   <h4 class="m_7">Newsletter Signup</h4>
				   <p class="m_8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy.</p>
				      <form class="subscribe">
			             <input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">Submit Email<i class="but_arrow"> </i></a>
			          </div>
				</div> -->
				<div id="semifooter" class="col-md-5 col-md-offset-1">
					<div class="f-logo">
						<div style="width: 145px; height: 40px;">
							<h3> Shine Press</h3>
						</div>
						<!-- <img src="images/logo.png" alt=""/> -->
					</div>
					<!-- <p class="m_9">We love what we do. We do what we do with love. Our clients love what we do. We invite you to test what we do. You will love it. </p> -->
					<p class="m_9">We know that in business, there is nothing more than a satisfied client, so we ensure every client smiles when we delivery. That is why we do what we do. </p>
					<div class="row">
						<div class="col-md-6">
							<p class="address">
								<i class="phone"></i>
								  <span class="m_10">(+233) 0208514386</span></p>
						</div>
						<div class="col-md-6">
							<p class="address">
								<i class="message"></i>
								  <span class="m_10">info@shineprintsgh.com</span></p>
						</div>
					</div>
				</div>
				<div id="semifooter" class="col-md-5 col-md-offset-1">
					<h3> Have a printing need?</h3>
					<p class="m_9">Describe your printing need and we will give you a quote, in a moment.</p>
					<div class="row">
						{{ Form::open(array('url' => 'submit_message_r')) }}
						<!-- <form action="" method="post"> -->
							<div class="col-md-6">
								{{ Form::text('name',Input::old('name'),array('class'=>'form-control','placeholder'=>'Your name','style'=>'margin-bottom: 5px;')) }}
								{{ Form::text('phone_number',Input::old('phone_number'),array('class'=>'form-control','placeholder'=>'Your phone number','style'=>'margin-bottom: 5px;')) }}
								{{ Form::text('email',Input::old('email'),array('class'=>'form-control','placeholder'=>'Your email address','style'=>'margin-bottom: 3px;')) }}
							</div>
							<div class="col-md-6">
								{{ Form::textarea('message',Input::old('message'),array('class'=>'form-control','placeholder'=>'Describe your printing need','style'=>'margin-bottom: 3px;','rows'=>'5')) }}
							</div>
							<div class="col-md-12">
								<input type="submit" class="form-control btn-primary" value="Request Quote" />
							</div>
						{{ Form::close() }}
					</div>
				</div>
				<div class="clear"></div>
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <!-- <div class="copy"> -->
		        <p style="text-align: center;color: #fff;">© 2014 Built by <a href="#" target="_blank"> elishasenoo@gmail.com</a></p>
		    <!-- </div> -->
		    <!-- <div class="social">	
			   <ul>	
				  <li class="facebook"><a href="#"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="pinterest"><a href="#"><span> </span></a></li>	
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="tumblr"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li class="rss"><a href="#"><span> </span></a></li>							
			   </ul>
		    </div> -->
		   <div class="clear"></div>
		  </div>
	     </div>
<!-- /repeat -->

<!-- modal  -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Contact us <small>We'd love to hear from you.</small></h4>
      </div>
      {{ Form::open(array('url' => 'submit_message_r')) }}
	      <div class="modal-body" style="padding-bottom: 0px;">
	        <div class="row">
	        	<div class="form-group col-lg-6">
	                <label for="input1">Name</label>
	                {{ Form::text('name',Input::old('name'),array('class'=>'form-control','placeholder'=>'Your name','style'=>'margin-bottom: 10px;')) }}
	                <label for="input2">Phone</label>
	                {{ Form::text('phone_number',Input::old('phone_number'),array('class'=>'form-control','placeholder'=>'Your phone number','style'=>'margin-bottom: 10px;')) }}
	                <label for="input3">Email</label>
					{{ Form::text('email',Input::old('email'),array('class'=>'form-control','placeholder'=>'Your email address','style'=>'')) }}
	            </div>
	            <div class="form-group col-lg-6">
	                <label for="input4">Message</label>
	                {{ Form::textarea('message',Input::old('message'),array('class'=>'form-control','placeholder'=>'Describe your printing need','style'=>'','rows'=>'8')) }}
	            </div>
	        </div>
	      </div>
	      <div class="modal-footer">
	      	<input type="submit" class="btn btn-primary" value="Request Quote" />
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
<!-- /modal -->
</body>
</html>