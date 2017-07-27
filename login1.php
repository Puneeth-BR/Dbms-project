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
<style type="text/css">.kisb .kl_abmenu { font-size:12px; font-family: "Segoe UI", Arial, sans-serif; color: #FFFFFF; float: left; padding: 8px; border: 1px solid #FFFFFF; background: #057662; background: -moz-linear-gradient(#057662, #1a8171);background: -ms-linear-gradient(#057662, #1a8171);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #057662), color-stop(100%, #1a8171)); background: -webkit-linear-gradient(#057662, #1a8171); background: -o-linear-gradient(#057662, #1a8171);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171"); -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr="#057662", endColorstr="#1a8171")";background: linear-gradient(#057662, #1a8171);border-radius: 8px;}</style></head>

<body class="home blog custom-background">

<div id="wrapper">

<!--DOTTED ACCENT-->
<div class="dotted"></div>

<div id="header">
	<!--LOGO-->
		<a id="logo" href="index.php"><img src="images/logo(1).png" alt="eventure" kasperskylab_antibanner="on"></a>	<!--MENU-->
	<div id="navigation" class="menu-main-container"><ul id="dropmenu" class="menu"><li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item-menu-item-10"><a href="index.php">Home</a></li>
<li id="menu-item-302" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-302"><a href="">Events</a>
<ul class="sub-menu" style="">
	<li id="menu-item-303" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-303"><a href="seminars.php">Seminars</a></li>
	<li id="menu-item-304" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-304"><a href="plays.php">Plays</a></li>
	<li id="menu-item-305" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-305"><a href="concerts.php">Concerts</a></li>
	</ul>
</li>
<li id="menu-item-384" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-384"><a href="gallery.php">Gallery</a>
</li>
<li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="contact.php">Contact</a></li>
<!--<li id="menu-item-614" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-614><a href="login.php">Login</a></li>-->
		
</ul>
</div>
<select id="selectMenu"><option value="" selected="selected">Menu</option><option value="index.php">Home</option><option value="events.php">Events</option><option value="seminars.php">Seminars</option><option value="plays.php">Plays</option><option value="concerts.php">Concerts</option><option value="gallery.php">Gallery</option><option value="contact.php">Contact</option></select>	
</div>
<!--end header-->
<?php
if(!empty($_POST))
{	
$msg="";	
if(empty($_POST['usernm']))		
{			
$msg[]="Enter Username";		
}				
if(empty($_POST['pwd']))		
{			
$msg[]="Enter Password";		
}						
if(!empty($msg))		
{			
echo '<b>Error:-</b><br>';						
foreach($msg as $k)			
{				
echo '<li>'.$k;			
}		
}		
else		
{											
$link=mysqli_connect("localhost","root","")or die("Can't Connect...");						
mysqli_select_db($link,"event") or die("Can't Connect to Database...");						
$unm=$_POST['usernm'];						
$q="select * from user where uname='$unm'";						
$res=mysqli_query($link,$q) or die("wrong query");						
$row=mysqli_fetch_assoc($res);						
if(!empty($row))			
{				
if($_POST['pwd']==$row['pwd'])				
{					
$_SESSION=array();					
$_SESSION['unm']=$row['uname'];					
$_SESSION['uid']=$row['pwd'];					
$_SESSION['status']=true;										
if($_SESSION['unm']!="admin")					
{						
					
}					
else					
{						
				
}				
}								
else				
{					
echo 'Incorrect Password....';				
}			
}			
else			
{				
echo 'Invalid User';			
}		}		
}	
else	
{		
header("location:index.php");	
}			
?>



								 <form action="login1.php" method="POST">
										<h2>LogIn</h2>
											<b>Username:</b>
											<br><input type="text" name="usernm"><br>
											<br>
											
											
											<b>Password:</b>
											<br><input type="password" name="pwd"><br><br>
											<input type="submit" id="x" value="Login" />
<br><br>
<font color=grey>Dont have an account?</font> <a href="register.php"><input type="button" value="Register Here!"></a>

										</form> 
 
<!--COPYRIGHT-->
<div id="copyright">� 2017 Event Manager. </div>
</body>
</html>