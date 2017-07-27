<?php
$link=mysql_connect("localhost","root","")or die("Can't Connect...");
mysql_select_db("event",$link) or die("Can't Connect to Database...");
$query="delete from contact where uid =".$_GET['sid'];
mysql_query($query,$link) or die("can't Execute...");
header("location:messages.php");
?>