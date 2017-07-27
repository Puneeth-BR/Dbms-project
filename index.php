<?php session_start();?>
<html>
<head>
<title>Event Management</title>
<link href="css" rel="stylesheet" type="text/css"><link rel="stylesheet" href="style.css" type="text/css" media="screen">

<style>
body,
#countDown,
#wp-calendar {font-family: 'orbitron', sans-serif;}

/*--SIDEBSR STUFF--*/
#sidebar,
#postDetails {float: left;}
#listing, 
body.page .page {float: right;}
body.single .post {
    border-left: 1px dashed #CCCCCC;
    float: right;
    padding: 0 0 40px 35px;
}

/*--TWO COLUMN STUFF--*/
#twoColumns {
	text-align: justify;
	-moz-column-count: 2;
	-webkit-column-count: 2;
	column-count: 2;
	-moz-column-gap: 60px;
	-webkit-column-gap: 60px;
	column-gap:60px;
	-moz-column-rule: 1px dashed #ccc;
	-webkit-column-rule: 1px dashed #ccc;
	column-rule: 1px dashed #ccc;
}
@media screen and (max-width:740px) {
	#twoColumns {
		text-align: inherit;
		-moz-column-count: 1;
		-webkit-column-count: 1;
		column-count: 1;
	}
}

/*--FONT COLOR STUFF--*/
#wp-calendar #prev a,
#wp-calendar #next a,
li.activeMonth a.dateLink,
#copyright a:hover,
a {color:#0080e8;}

/*--BACKGROUND COLOR STUFF--*/
li.box a:hover,
.dateInfo:hover,
#wp-calendar td a:hover,
#commentform input[type="submit"]:hover,
input[type="submit"]:hover,
#postNav .pagenav a:hover,
#theTags a:hover,
#tagLine a:hover,
.sliderInfo a:hover,
.flex-direction-nav li a:hover,
#dropmenu li a:hover {background-color:#0080e8;}

/*--CUSTOM CSS STUFF--*/
</style>
<style type="text/css">.kisb .kl_abmenu { font-size:12px; font-family: "Segoe UI", Arial, sans-serif; color: #FFFFFF; float: left; padding: 8px; border: 1px solid #FFFFFF; background: #057662; background: -moz-linear-gradient(#057662, #1a8171);background: -ms-linear-gradient(#057662, #1a8171);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #057662), color-stop(100%, #1a8171)); background: -webkit-linear-gradient(#057662, #1a8171); background: -o-linear-gradient(#057662, #1a8171);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171"); -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171")";background: linear-gradient(#057662, #1a8171);border-radius: 8px;}
#rt-showcase.slider-container { background: #F5F6F8; }
.slider-container {
    padding-top: 20px;
}
.slider-container .csslider1 {
    position: relative;
    display: block;
    margin: 0 auto !important;
}
</style></head>

<body class="home blog custom-background">

<div id="wrapper">
<div id="header">
	<!--LOGO-->
		<a id="logo" href="index.php"><img src="images/logo(1).png" alt="eventure" kasperskylab_antibanner="on"></a>	<!--MENU-->
	<div id="navigation" class="menu-main-container"><ul id="dropmenu" class="menu"><li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-10"><a href="index.php">Home</a></li>
<li id="menu-item-302" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-302"><a href="">Events</a>
<ul class="sub-menu" style="">
	<li id="menu-item-303" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-303"><a href="seminars.php">Seminars</a></li>
	<li id="menu-item-304" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-304"><a href="plays.php">Plays</a></li>
	<li id="menu-item-305" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-305"><a href="concerts.php">Concerts</a></li>
       <!--<li id="menu-item-305" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-305"><a href="bookevents.php">Book Events</a></li>-->
<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="bookevents.php">Book Events</a><li>';
					}
					else
					{
						echo '';
					}
			?>

	</ul>
</li>
<li id="menu-item-384" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-384"><a href="gallery.php">Gallery</a>
</li>
<li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="contact.php">Contact</a></li>
<!--<li id="menu-item-614" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-614><a href="login.php">Login</a></li>-->
			<?php

					if(isset($_SESSION['status']))
					{
					
						echo '<li><a href="logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="login.php">Login</a></li>';
					}

			?>
</ul>
</div>
<select id="selectMenu"><option value="" selected="selected">Menu</option><option value="index.php">Home</option><option value="">Events</option><option value="seminars.php">Seminars</option><option value="plays.php">Plays</option><option value="concerts.php">Concerts</option><option value="gallery.php">Gallery</option><option value="contact.php">Contact</option></select>	
</div>
 <!-- slider -->
        <section id="rt-showcase-surround">
            <div id="rt-showcase" class="slider-container rt-overlay-dark">
                <div class="rt-container slider-container">
                    <div class="rt-grid-12 rt-alpha rt-omega">

                    
	<link rel="stylesheet" href="slider/slider1.css">
	<!--[if IE]><link rel="stylesheet" href="http://cssslider.com/sliders/demo-11/engine1/ie.css"><![endif]-->
	<!--[if lte IE 9]><script type="text/javascript" src="slider/ie.js"></script><![endif]-->
	<script type="text/javascript" src="slider/gestures.js"></script>

	<div class='csslider1 autoplay '>
		<input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide' >
		<input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
		<input name="cs_anchor1" id='cs_pause1_0' type="radio" class='cs_anchor pause'>
		<input name="cs_anchor1" id='cs_pause1_1' type="radio" class='cs_anchor pause'>
		<input name="cs_anchor1" id='cs_pause1_2' type="radio" class='cs_anchor pause'>
		
		<ul>
			<li class="cs_skeleton">
				<img src="images/3.jpeg" alt='CSS dynamic examples slider thumbnail with menu' title='Event Manager' style="width: 100%;">
			</li>
			<li class='num0 img slide'>
				<img src="images/3.jpeg" alt='HTML free player slideshow navigation gallery' title='Event Manager' title='Event' />
			</li>
			<li class='num1 img slide'>
				<img src="images/34.jpg" alt='CSS top paid carousel banner with links' title='Event Manager' title='Event' />
			</li>
			<li class='num2 img slide'>
				<img src="images/32.jpg" alt='Bootstrap using demo examples slider online image' title='Event Manager' title='Event' />
			</li>
		
		</ul>
		
		
		<div class='cs_play_pause'>
			<label class='cs_play' for='cs_play1'><span><i></i></span></label>
			<label class='cs_pause num0' for='cs_pause1_0'><span><i></i></span></label>
			<label class='cs_pause num1' for='cs_pause1_1'><span><i></i></span></label>
			<label class='cs_pause num2' for='cs_pause1_2'><span><i></i></span></label>
			
		</div>
		<div class='cs_arrowprev'>
			<label class='num0' for='cs_slide1_0'><span><i></i></span></label>
			<label class='num1' for='cs_slide1_1'><span><i></i></span></label>
			<label class='num2' for='cs_slide1_2'><span><i></i></span></label>
		</div>
		<div class='cs_arrownext'>
			<label class='num0' for='cs_slide1_0'><span><i></i></span></label>
			<label class='num1' for='cs_slide1_1'><span><i></i></span></label>
			<label class='num2' for='cs_slide1_2'><span><i></i></span></label>
		</div>
		
		<div class='cs_bullets'>
			<label class='num0' for='cs_slide1_0'>
				<span class='cs_point'></span>
				<span class='cs_thumb'><img src="images/3.jpeg" alt='Events' title='Events' /></span>
			</label>
			<label class='num1' for='cs_slide1_1'>
				<span class='cs_point'></span>
				<span class='cs_thumb'><img src="images/34.jpg" alt='Events' title='Events' /></span>
			</label>
			<label class='num2' for='cs_slide1_2'>
				<span class='cs_point'></span>
				<span class='cs_thumb'><img src="images/32.jpg" alt='Events' title='Events' /></span>
			</label>
		</div>
		
		</div>
		
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </section> 
        <!-- /slider -->
<!--end header-->
<div id="content"><br>
Event management is the application of project management to the creation and development of festivals, events and conferences. Event management involves studying the intricacies of the brand, identifying the target audience, devising the event concept, planning the logistics and coordinating the technical aspects before actually launching the event. Post-event analysis and ensuring a return on investment have become significant drivers for the event industry. The recent growth of festivals and events as an industry around the world means that the management can no longer be ad hoc. Events and festivals, such as the Asian Games, have a large impact on their communities and, in some cases, the whole country.
</div>
<!--COPYRIGHT-->
<div id="copyright">© 2017 Event Manager </div>
</body>
</html>