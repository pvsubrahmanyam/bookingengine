<?php


require_once('functions.php');
require_once('connection.php');
@session_start();
if(isset($_SESSION['userName'])) 
{
header('location:dashboard.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fitow</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
var ray={
ajax:function(st)
	{
		this.show('load');
		
	},
show:function(el)
	{
		this.getID(el).style.display='';
		
	},
getID:function(el)
	{
		
		return document.getElementById(el);
	}
}
</script>
<style type="text/css">
#load{
	
position:absolute;
z-index:1;
width:38px;
height:38px;
margin-top:-0px;
margin-left:-20px;
margin-right:-350px;
top:50%;
left:50%;

}
</style>
</head>

<body>
<div id="main">
<div id="header">
<div id="logo"></div>
</div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty( $_POST['username'] ) && !empty( $_POST['password'] )) 
{
$user=new User(); 
$login = $user->check_login($_POST['username'], $_POST['password']);
if ($login) 
{
$_SESSION['userName'] = TRUE;
$id=$_SESSION['userName'] ;
$_SESSION['user']=$_POST['username']; 
//$session=get_session();
//$ur1=plugins_url('bookingengine/dashboard.php');
header('location:dashboard.php?%@');
}
else 
{
// Login Failed
//$msg= 'Username / password wrong';
echo "<script>alert('username and password wrong')</script>";
}
}
?>

<form method="POST" action="" name="login" onsubmit="return ray.ajax()">
 <div id="username_text">
Username:
<input name="username" type="text" style="background:url(images/fdgfdgfdg.png); width:195px ; height:43px;padding:0px 0px 0px 10px; border:none" required=""/>
</div>
<div id="password_text">Password: <input name="password" type="password" style="background:url(images/fdgfdgfdg.png); width:195px  ; height:43px;padding:0px 0px 0px 10px; border: none" required="" /> </div>
<div id="load" style="display:none;"><img src="images/ajax-loader3.gif" alt="please wait"/></div>
<div id="login_box1"><input type="image" name="submit" src="images/images.jpg" onclick="return checkData();"/></div>
</form>
</div>
</body>
</html>
<?php
/*$uname=$_POST['text'];
 $pass=$_POST['password'];

if(isset($uname) && isset($pass))
{

$sql="select * from manage_user where username='$uname' and password='$pass'";
$result=  mysql_query($sql);
$qry=  mysql_num_rows($result);
$f=  mysql_fetch_array($result);
if($qry==0)
{
   echo"<script>alert('Please Check Username And Password');window.location='index.php?';</script>";
  
}
 else {
   echo"<script>alert('Login Sucessfully');</script>";
   $_SESSION['user']=$f['username'];
   $_SESSION['pwd']=$f['password'];
   header('location:dashboard.php');
}
}*/
?>
