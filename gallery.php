<?php session_start();?>
<html>
<head>
<title>Event Management</title>
<link href="css/hoverbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/hoverbox1.css" type="text/css" media="screen">
<script src="js/js.js"></script>
<style>
section[role="main"] p a,li a{color:#7E3200;}section[role="main"] p a:hover,li a:hover{color:#461C00;}div#sidebarAd.cleanslate{background:rgba(255,255,255,0.25);}.CodeRay{background:rgba(255,255,255,0.75);}.row{overflow:visible}.project-header{margin-bottom:1em;}@media screen and (max-width: 767px) {.polaroids li:nth-child(n+5){display:none;}}ul.polaroids li{display:inline;}ul.polaroids a{background:#fff;display:inline;float:left;margin:0 0 27px 30px;width:auto;padding:10px 10px 15px;text-align:center;font-family:"Marker Felt",sans-serif;text-decoration:none;color:#333;font-size:18px;-webkit-box-shadow:0 3px 6px rgba(0,0,0,.25);-moz-box-shadow:0 3px 6px rgba(0,0,0,.25);-webkit-transform:rotate(-2deg);-webkit-transition:-webkit-transform .15s linear;-moz-transform:rotate(-2deg);}ul.polaroids li{padding-left:0;}@media screen and (max-width: 768px) {ul.polaroids li a{margin-left:0;}}ul.polaroids img{display:block;width:190px;margin-bottom:12px;}ul.polaroids a:after{content:attr(title);}ul.polaroids li:nth-child(even) a{-webkit-transform:rotate(2deg);-moz-transform:rotate(2deg);}ul.polaroids li:nth-child(3n) a{-webkit-transform:none;position:relative;top:-5px;-moz-transform:none;}ul.polaroids li:nth-child(5n) a{-webkit-transform:rotate(5deg);position:relative;right:5px;-moz-transform:rotate(5deg);}ul.polaroids li:nth-child(8n) a{position:relative;right:5px;top:8px;}ul.polaroids li:nth-child(11n) a{position:relative;left:-5px;top:3px;}ul.polaroids li.messy a{margin-top:-400px;position:relative;left:160px;}ul.polaroids li a:hover{-webkit-transform:scale(3.25);-moz-transform:scale(3.25);-webkit-box-shadow:0 3px 6px rgba(0,0,0,.5);-moz-box-shadow:0 3px 6px rgba(0,0,0,.5);position:relative;z-index:5;}

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
</head>

<body class="home blog custom-background">

<div id="wrapper">

<!--DOTTED ACCENT-->
<div class="dotted"></div>

<div id="header">
	<!--LOGO-->
		<a id="logo" href="index.php"><img src="images/logo(1).png" alt="eventure" kasperskylab_antibanner="on"></a>	<!--MENU-->
	<div id="navigation" class="menu-main-container"><ul id="dropmenu" class="menu"><li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-384"><a href="index.php">Home</a></li>
<li id="menu-item-302" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-384"><a href="#">Events</a>
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
<li id="menu-item-384" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-10"><a href="gallery.php">Gallery</a>
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
<select id="selectMenu"><option value="" selected="selected">Menu</option><option value="index.php">Home</option><option value="events.php">Events</option><option value="seminars.php">Seminars</option><option value="plays.php">Plays</option><option value="concerts.php">Concerts</option><option value="gallery.php">Gallery</option><option value="contact.php">Contact</option></select>	
</div>
<!--end header--><br>
<div class="row">
<div class="large-12 columns" style="overflow: visible">
<ul class="polaroids large-block-grid-4 small-block-grid-2">
<li>
<a href="" title="01">
<img alt="01" src="img/photo01.jpg"/>
</a>
</li>
<li>
<a href="" title="02">
<img alt="02" src="img/photo02.jpg"/>
</a>
</li>
<li>
<a href="" title="03">
<img alt="03" src="img/photo03.jpg"/>
</a>
</li>
<li>
<a href="" title="04">
<img alt="04" src="img/photo04.jpg"/>
</a>
</li>
<li>
<a href="" title="05">
<img alt="05" src="img/photo05.jpg"/>
</a>
</li>
<li>
<a href="" title="06">
<img alt="06" src="img/photo06.jpg"/>
</a>
</li>
<li>
<a href="" title="07">
<img alt="07" src="img/photo07.jpg"/>
</a>
</li>
<li>
<a href="" title="08">
<img alt="08" src="img/photo08.jpg"/>
</a>
</li>
<li>
<a href="" title="09">
<img alt="09" src="img/photo09.jpg"/>
</a>
</li>
<li>
<a href="" title="10">
<img alt="10" src="img/photo10.jpg"/>
</a>
</li>
<li>
<a href="" title="11">
<img alt="11" src="img/photo11.jpg"/>
</a>
</li>
<li>
<a href="" title="12">
<img alt="12" src="img/photo12.jpg"/>
</a>
</li>
</ul>
</div>
</div>

<!--COPYRIGHT-->
<div id="copyright">© 2017 Event Manager. </div>
</body>
</html>