<?php	
if(!empty($_POST)){	
$msg="";if(empty($_POST['ename']) || empty($_POST['edate']) || empty($_POST['evenue']) || empty($_POST['econtact']) )	
{		
$msg.="<li>Please full fill all requirement";	
}					
if($msg!="")	
{		
header("location:register.php?error=".$msg);}else	
{$ename=$_POST['ename'];	
$edate=$_POST['edate'];$etype=$_POST['etype'];$city=$_POST['city'];	
$evenue=$_POST['evenue'];$econtact=$_POST['econtact'];$edesc=$_POST['edesc'];	
$link=mysql_connect("localhost","root","")or die("Can't Connect...");mysql_select_db("event",$link) or die("Can't Connect to Database...");$query="insert into bevent(ename,edate,etype,city,evenue,econtact,edesc)	
values('$ename','$edate','$etype','$city','$evenue','$econtact','$edesc')";	
mysql_query($query,$link) or die("Can't Execute Query...");header("location:bookevents.php?ok=1");	
}	
}else{	
header("location:bookevent.php");
}?>