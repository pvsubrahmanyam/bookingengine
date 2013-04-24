<?php
 @session_start();
if(!isset($_SESSION['userName'])) 
{
header('location:login.php');
}
require_once('functions.php');
require_once('connection.php');
$user=new User(); 
 if(isset($_POST['SUBMIT'])){
       
		 $name=$_POST['name'];
		$des=$_POST['desc'];
		$phone=$_POST['phone'];
		$fax=$_POST['fax'];
		$webaddr=$_POST['webad'];
		$addr1=$_POST['addr1'];
		$addr2=$_POST['addr2'];
		$subb=$_POST['subr'];
		$region=$_POST['region'];
		$state=$_POST['state'];
		$pcode=$_POST['postcode'];
		$country=$_POST['country'];
		$cos=$_POST['coordinates'];
		$map=$_POST['map'];
		$accodi=$_POST['accodimation'];
		$ratingtype=$_POST['ratingtype'];
		$rating=$_POST['rating'];
		$leadtime=$_POST['ltime'];
	        $value=$_POST['value'];
		
       $query="INSERT INTO wp_properties  VALUES ('','$name','$des','$phone','$fax','$webaddr','$addr1','$addr2','$subb','$region','$state','$pcode','$country','$cos','$map','$accodi','$ratingtype','$rating','$leadtime','$value')";  
       $query1=mysql_query($query) or die(mysql_error);
      
          if($query1)
	{
	
		header('location:properties.php');
     }
    else{
	echo "<script> alert('hello')</script> ";
     }
 }
?>
	