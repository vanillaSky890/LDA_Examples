
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kissan Mitra Portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/img.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">


<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/camera.js"></script>
<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
<script>
$(document).ready(function() {
	/////// icons
	$(".social li").find("a").css({opacity:0.6});
	$(".social li a").hover(function() {
		$(this).stop().animate({opacity:1 }, 400, 'easeOutExpo');		    
	},function(){
	    $(this).stop().animate({opacity:0.6 }, 400, 'easeOutExpo' );		   
	}); 

	// camera
	$('#camera_wrap').camera({
		//thumbnails: true
		autoAdvance			: true,		
		mobileAutoAdvance	: true,
		height: '37%',
		hover: false,
		loader: 'none',
		navigation: false,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		pagination			: true,
		time: 7000,
		transPeriod: 1000,
		minHeight: '300px'
	});

	

}); //
$(window).load(function() {
	//

}); //
</script>		
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
	<![endif]-->    

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>      
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body>
<div id="main">
<?php

include('includes/header.php');


?>
</div>
<div id="slider" class="clearfix">
<?php
include('includes/slider.php');

?>

</div>

				
				<h1>Contact Address</h1>

				<figure class="google_map">
		            <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Glasgow,&amp;aq=&amp;sll=46.975033,31.994583&amp;sspn=0.368248,0.617294&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Glasgow,+Glasgow+City,+United+Kingdom&amp;t=m&amp;ll=55.866932,-4.256344&amp;spn=0.020324,0.070896&amp;z=13&amp;output=embed"></iframe>
		        </figure>

				<h4>
					Agros
				</h4>
				<p>
					8901 Marmora Road,<br>
Glasgow, D04 89GR.<br>
Telephone: +1 800 123 1234<br>
E-mail: <a href="#">mail@bteamny.com</a>
				</p>

				<div class="line1"></div>

				<h2>Contact Form </h2>

				<div id="note"></div>
<div id="fields">
	<form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
		<div class="row">
			<div class="span5">
				<div class="control-group">
				    <label class="control-label" for="inputName">Your full name:</label>
				    <div class="controls">				      
				      <input class="span5" type="text" id="inputName" name="name" value="Your full name:" onBlur="if(this.value=='') this.value='Your full name:'" onFocus="if(this.value =='Your full name:' ) this.value=''">
				    </div>
				</div>
				<div class="control-group">
				    <label class="control-label" for="inputEmail">Your email:</label>
				    <div class="controls">				      
				      <input class="span5" type="text" id="inputEmail" name="email" value="Your email:" onBlur="if(this.value=='') this.value='Your email:'" onFocus="if(this.value =='Your email:' ) this.value=''">
				    </div>
				</div>
				<div class="control-group">
				    <label class="control-label" for="inputPhone">Phone number:</label>
				    <div class="controls">				      
				      <input class="span5" type="text" id="inputPhone" name="phone" value="Phone number:" onBlur="if(this.value=='') this.value='Phone number:'" onFocus="if(this.value =='Phone number:' ) this.value=''">
				    </div>
				</div>
			</div>
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputMessage">Message:</label>
				    <div class="controls">				      				      
				      <textarea class="span4" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message:'" 
                        onFocus="if(this.value =='Message:' ) this.value=''">Message:</textarea>
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span5">
				<div class="control-group capthca">
				    <label class="control-label" for="inputCapthca">Capthca:</label>
				    <div class="controls">				      
				      <input class="" type="text" id="inputCapthca" name="capthca" value="Capthca:" onBlur="if(this.value=='') this.value='Capthca:'" onFocus="if(this.value =='Capthca:' ) this.value=''">
				      <img src="captcha/captcha.php">
				    </div>
				</div>
			</div>
		</div>
		<button type="submit" class="submit"><em></em>submit</button>
	</form>
</div>

				

										




			</div>
			<div class="span3">
				
				<h3>Contact Info</h3>

				<div class="thumb5">
					<div class="thumbnail clearfix">
						<figure class="img-polaroid"><img src="images/contacts01.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								Lorem ipsum dolor sit amet conse ctetur adipisicing 
							</h4>
							<p>
								amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. 
							</p>
							<div class="text-right"><a href="#" class="button1">Details</a></div>
						</div>
					</div>
				</div>
				

				<div class="line1"></div>

				<div class="thumb5">
					<div class="thumbnail clearfix">
						<figure class="img-polaroid"><img src="images/contacts02.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								Lorem ipsum dolor sit amet conse ctetur adipisicing 
							</h4>
							<p>
								amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetuer adipiscing elit. 
							</p>
							<div class="text-right"><a href="#" class="button1">Details</a></div>
						</div>
					</div>
				</div>

				

				

				





			</div>
		</div>
	</div>
</div>	
</div>
	
</div>	
</div>

<?php

include('includes/footer.php');
?>









	
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>