<html>
	<body style="background-color: #eeeeee; max-width: 600px;min-width:200px;height: 350px; padding: 40px;margin: 0 auto;">
		<div style=" margin: 0 auto;">
			<a href="{{URL::to('/')}}">
				<div style="width: *; margin-bottom: -30px; margin-left: -10px;">
					<img width="100%" height="auto" src="{{URL::asset('images/logo.png')}}" style="max-width: 270px;" />
				</div>
			</a>
			<h5 style="padding-left: 2px;margin-top:37px;margin-bottom:12px; color: #22658f;">Professionalism, Innovation and Excellence</h5>
			<div style="background-color: #ffffff;padding: 20px 40px;border: 1px solid #cccccc; color: #22658f;">
				<a href="{{URL::to('/')}}" style="text-decoration: none;">
					<h2 style="text-align: center;margin-top: 0px;">
						Thennek West Africa Limited
					</h2>
				</a>
				
				@yield('messagecontent')
				
			</div>
		</div>
		<div style="background-color: #22658f; color:#ffffff !important;">
			<p style="text-align: center;">Built by <a href="www.leamtech.com" style="color: #DEDEDE; text-decoration: none;font-weight: 700;"><em>Leam Tech Limited</em></a></p>
			<!-- <p style="padding-top: 0px;"><strong>Connect with us:</strong>
				<a style="text-decoration: none;" href="https://www.linkedin.com/company/tenderee-inc-"  target="_blank">
					<span style="display: inline-block;margin-left: 5px;padding-left: 9px;padding-right: 9px; background-color: #ffffff;border-radius: 3px;">LinkedIn</span>
				</a>
				<a style="text-decoration: none;" href="http://www.google.com/+TendereeInc"  target="_blank">
					<span style="display: inline-block;margin-left: 5px;padding-left: 9px;padding-right: 9px; background-color: #ffffff;border-radius: 3px;">Google+</span>
				</a>
			</p> -->
		</div>
		<div style="height: 10px;"></div>
	</body>
</html>
