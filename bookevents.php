<?php session_start();?>
<html>
<head>
<title>Event Management</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
<style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
    <style type="text/css">

.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} 

</style>
<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
<tr><td id="ds_calclass">
</td></tr>
</table>    
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
</style>
<script src="js/datepicker.js" type="text/javascript"></script>
</head>
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
<div id="content">
<div class="post">
<h1 class="title">Welcome to Event Booking!</h1>
<div class="entry">
<br><br>
<?php
if(isset($_GET['error']))
{
echo '<font color="red">'.$_GET['error'].'</font>';
echo '<br><br>';
}
if(isset($_GET['ok']))
{
echo '<font color="blue">You have successfully Registered an event</font>';
echo '<br><br>';
}
?>
<table>
<form name="myForm" action="bookevents1.php" method="POST">
<tr>
<td><b>Event Name :</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30" maxlength="30" name='ename'></td>
<td>&nbsp;</td>
</tr>
<tr>
<td><b>Event Date:</b>&nbsp;&nbsp;</td>
<td><input type="text" name="edate" onclick="ds_sh(this);" id="txtBirthDate" /></td>
<td>&nbsp;</td>
</tr>
<tr><td>&nbsp;</tr>
<tr>
<td><b>Type of Event :</b>&nbsp;&nbsp;</td>
<td><select style="width: 195px;" name="etype">
<option>Play	
<option>Seminar
<option>Concerts</td>
</tr>
<tr>
<td><b>City:</b>&nbsp;&nbsp;</td>						
<td><select name="city">
<option>Bangalore
<option>Delhi
<option>Chennai
<option>Kochi
<option>Mysore
<option>Kolkata
<option>Mumbai
<option>Hyderabad
<option>Ahmedabad
<option>Pune
<option>Surat
<option>Jaipur
<option>Lucknow
<option>Kanpur
<option>Nagpur
<option>Indore
<option>Thane
<option>Bhopal
<option>Visakhapatnam
<option>Patna
<option>Vadodara
<option>Ghaziabad
<option>Ludhiana
<option>Agra
<option>Nashik
<option>Meerut
<option>Rajkot
<option>Varanasi
</select></td>
<td>&nbsp;</td>
</tr>
<tr><td>&nbsp;</tr>
<tr>
<td><b>Venue:</b>&nbsp;&nbsp;</td>
<td><textarea cols="3" rows="3" name='evenue'></textarea></td>
</tr>
<tr><td>&nbsp;</tr>
<tr>
<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
<td><input type='text' name='econtact'></td>
<td>&nbsp;</td>
</tr>
<tr>
<td><b>Descripition on Event:</b>&nbsp;&nbsp;</td>
<td><textarea cols="3" rows="3" name='edesc'></textarea></td>
</tr>
<tr><td>&nbsp;</tr>

<tr><td>&nbsp;</tr>
<tr>
<td colspan='2' align='center'>
<input type='submit' value="BOOK!">
</td>
</tr>
</form>
</table>
</body>
</html>