<?php 
session_start();
$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
	mysql_select_db("event",$link) or die("Can't Connect to Database...");
	$q="select * from contact";
	 $res=mysql_query($q,$link) or die("Can't Execute Query...");

	mysql_close($link);
	?>
<html>
<head>
<title>Event Management</title>
<link href="css" rel="stylesheet" type="text/css"><link rel="stylesheet" href="../style.css" type="text/css" media="screen">

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
		<a id="logo" href="index.php"><img src="../images/logo(1).png" alt="eventure"></a>	


 <div id="content">
<center><h1> Messages</h1></center>
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						<tr>
								<td WIDTH='10%'><b><u>NO</u></b>
								<TD WIDTH='20%'><b><u>NAME</u></b>
								<TD WIDTH='20%'><b><u>EMAIL</u></b>
								<TD WIDTH='50%'><b><u>QUERY</u></b>
								<TD WIDTH='25%'><b><u>DELETE</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysql_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['cname'].'
										<td>'.$row['cemail'].'
										<td>'.$row['cquery'].'
										<td><a href="process_del_contact.php?sid='.$row['uid'].'"><img src="images/drop.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
</div>
</div>
<!--COPYRIGHT-->
<div id="copyright">© 2015 Event Manager </div>
</div>
</body>
</html>