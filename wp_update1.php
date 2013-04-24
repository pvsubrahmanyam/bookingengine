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
	$id=$_POST['id'];
	
	$var1=$_POST['name'];
	$var2=$_POST['Default1'];
	$var3=$_POST['Default2'];
	$var4=$_POST['Default3'];
	$var5=$_POST['Default4'];
	$var6=$_POST['maxpersons'];
	$var7=$_POST['rate1'];
	$var8=$_POST['rate2'];
	$var9=$_POST['rate3'];
	$var10=$_POST['rate4'];
	$var11=$_POST['roomtype'];
	$var12=$_POST['sell'];
	$sql1="UPDATE wp_room_type SET name='$var1',defaultinclusion='$var2',defaultallocation='$var3',defaultrate='$var4',personincludedrate='$var5',maxpersons='$var6',extraadult_rate='$var7',extrachild_rate='$var8',rackrate='$var9',defaultmin_stay='$var10',typesofrooms='$var11',setstop='$var12' WHERE roomid='$id'";
	mysql_query($sql1) or die("My sql Error");
	header('location:roomtypes.php');
	
	}
?>
