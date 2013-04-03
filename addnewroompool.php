<?php
include('config.php');
session_start();	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link href="css/proptes.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fitow room Pools</title>
</head>

<body>
<div id="main">
<div id="header">
<div id="logo"></div>
</div>
<div id="border_top"></div>
<div id="prortey_manger">Room Pools</div>
<div class="form">
<form   action=" " method="post" onclick="return vlaid1();">
<p class="contact"><label for="name">Name:</label></p> 
   <input type="text" name="name" value=""  required="" id="var1"/>
   
   <p class="contact"><label for="name">Default Pool Availability:</label></p>
 <input type="text" name="pool" value=""  required="" id="var1"/>

   <p class="contact"><label for="name">Copy Availability from existing room?:</label></p>
  <select  id="var11" name="roomtype" style="width:400px;">
  <option>no</option>
  <?php 
  $s1=mysql_query("select * from room_type");
  $s2=mysql_fetch_array($s1);
  ?>
  <option><?php echo $s2['name'];?></option>
  </select> 
  <p class="contact"><label for="name"></label></p>
   <p class="contact"><label for="name"><input class="button" type="submit"  name="SUBMIT" value="SUBMIT"  />
   <input type="reset" class="button" name="Reset" value="RESET"  />
   
   <a href="dashboard.php"><input class="button" type="button" value="Back To DashBoard" /></a>
</label></p>  
   </form>
</div>
</body>
</html>
<?php
 if(isset($_POST['SUBMIT']))
 {
 $var1=$_POST['name'];
 $var2=$_POST['pool'];
 $var3=$_POST['roomtype'];
 $q="INSERT INTO `room_pool`(name, default_avilability, avilable_roomtype) VALUES ('$var1','$var2','$var2s')";
 $q2=mysql_query($q) or die('MYSQL ERROR');
 if($q2)
 {
 echo "<script>alert('room pool added');</script>";
 header('location:roompools.php');
 }
 
 }
 