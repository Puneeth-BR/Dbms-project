<?php
$link=mysql_connect("localhost","root","")or die("Can't Connect...");
mysql_select_db("event",$link) or die("Can't Connect to Database...");
$query="delete from  user where uid =".$_GET['uid'];
mysql_query($query,$link) or die("can't Execute...");
header("location:users.php");
?>