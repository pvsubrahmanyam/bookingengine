<?php
@session_start();
if(!isset($_SESSION['userName'])) 
{
header('location:login.php');
}
require_once('functions.php');
require_once('connection.php');
$user=new User(); 
if(isset($_POST['SUBMIT']))
	{
		
		$ary1=$_REQUEST['new_quantity'];
		$count=count($_REQUEST['new_quantity']);
		$ary2=$_REQUEST['text'];
		for($i=0;$i<$count;$i++)
	{
		$id1=$ary1[$i];
		$ar2=$ary2[$i];
		$update=mysql_query("UPDATE wp_room_type SET description='$ar2' WHERE roomid='$id1'");
	} 
	header('location:inclusions.php');
	}
	?>