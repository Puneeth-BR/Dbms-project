<?php	
if(!empty($_POST)){	
$msg="";if(empty($_POST['uname']) || empty($_POST['gender']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['email'])||empty($_POST['city'])||empty($_POST['contact']) )	
{		
$msg.="<li>Please full fill all requirement";	
}		
if($_POST['pwd']!=$_POST['cpwd'])	
{			
$msg.="<li>Passwords Does Not Match";	
}	
if(strlen($_POST['pwd'])>10)	
{
$msg.="<li>Please Enter Your Password in limited Format....";
}
//if(!ereg("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['email']))	
//{
//$msg.="<li>Please Enter Your Valid Email Address...";	
//}						
if($msg!="")	
{		
header("location:register.php?error=".$msg);}else	
{$uname=$_POST['uname'];	
$pwd=$_POST['pwd'];$gender=$_POST['gender'];$email=$_POST['email'];	
$contact=$_POST['contact'];$city=$_POST['city'];	
$link=mysqli_connect("localhost","root","")or die("Can't Connect...");mysqli_select_db($link,"event") or die("Can't Connect to Database...");$query="insert into user(uname,pwd,gender,email,contact,city)	
values('$uname','$pwd','$gender','$email','$contact','$city')";	
mysqli_query($link,$query) or die("Can't Execute Query...");header("location:register.php?ok=1");	
}	
}else{	
header("location:index.php");
}?>