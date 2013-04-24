<?php
@session_start();
if(!isset($_SESSION['userName'])) 
{
header('location:login.php');
}
require_once('functions.php');
require_once('connection.php');
$user=new User(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type="text/javascript" >
function vlaid1()
{
	var var1=document.getElementById(var1).value;
	var var2=document.getElementById(var2).value;
	var var3=document.getElementById(var3).value;
	var var4=document.getElementById(var4).value;
	var var5=document.getElementById(var5).value;
	var var6=document.getElementById(var6).value;
	var var7=document.getElementById(var7).value;
	var var8=document.getElementById(var8).value;
	var var9=document.getElementById(var9).value;
	var var10=document.getElementById(var10).value;
	var var11=document.getElementById(var11).value;
	if(var1.lenght<=0)
	{
		alert('please enter name');
		document.getElementById(var1).focus();
		return false;
	}
	/*	if(var2.lenght==0)
	{
		alert('please enter default inclusion');
		document.getElementById(var2).focus();
		return false;
	}
		if(var3.lenght==0)
	{
		alert('please enter default allocation');
		document.getElementById(var3).focus();
		return false;
	}
		if(var4.lenght==0)
	{
		alert('please enter default rate');
		document.getElementById(var4).focus();
		return false;
	}
		if(var5.lenght==0)
	{
		alert('please enter persons include in rate');
		document.getElementById(var5).focus();
		return false;
	}
		if(var6.lenght==0)
	{
		alert('please enter max persons');
		document.getElementById(var6).focus();
		return false;
	}
		if(var7.lenght==0)
	{
		alert('please enter Extra Adult Rate');
		document.getElementById(var7).focus();
		return false;
	}
		if(var8.lenght==0)
	{
		alert('please enter Extra chaild rate');
		document.getElementById(var8).focus();
		return false;
	}
	
		if(var9.lenght==0)
	{
		alert('please enter rack rate');
		document.getElementById(var9).focus();
		return false;
	}
	
		if(var10.lenght==0)
	{
		alert('please enter minimum stay');
		document.getElementById(var10).focus();
		return false;
	}
		if(var11.lenght==0)
	{
		alert('please select type of room');
		document.getElementById(var11).focus();
		return false;
	}*/
	return true;
	}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/login.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<title>Fitow room types</title>
</head>
<body>

<div  id="new">
 EDIT ROOM
</div>
<div class="form">
<form   action="wp_update1.php" method="post">
<?php 
$id=$_GET['id'];
$sql1=mysql_query("select * from wp_room_type where roomid='$id'");
$sql2=mysql_fetch_array($sql1) ;
?>

  <p class="contact"><label for="name">NAME:</label></p>
  <input type="text" name="name" value="<?php  echo $sql2['name']; ?>"  id="var1"/>
   <p class="contact"><label for="name">Default Inclusions:</label></p>
   <textarea  style="width:412px; height:150px;" name="Default1" id="var2" ><?php echo $sql2['defaultinclusion']; ?></textarea>
<p class="contact"><label for="name">Default Allocation:</label></p>
   <input type="text" name="Default2" value="<?php echo $sql2['defaultallocation']; ?>" id="var3" /> 
<p class="contact"><label for="name">Default Rate:</label></p>
  <input type="text" name="Default3" value="<?php echo $sql2['defaultrate']; ?>" id="var4"/>   
<p class="contact"><label for="name">Persons Included in Rate:</label></p>
   <input type="text" name="Default4" value="<?php echo $sql2['personincludedrate']; ?>" id="var5"/>
   <p class="contact"><label for="name">Max Persons in Room:</label></p>
  <input type="text" name="maxpersons" value="<?php echo $sql2['maxpersons'];?>" id="var6"/>
  <p class="contact"><label for="name">Extra Adult Rate:</label></p>
   <input type="text" name="rate1" value="<?php echo $sql2['extraadult_rate'];?>" id="var7"/>  
   <p class="contact"><label for="name">Extra Child Rate:</label></p>
   <input type="text" name="rate2" value="<?php echo $sql2['extrachild_rate'];?>" id="var8"/>
   <p class="contact"><label for="name">Rack Rate:</label></p>
   <input type="text" name="rate3" value="<?php echo $sql2['rackrate'];?>" id="var9"/>
   <p class="contact"><label for="name">Default Minimum Stay:</label></p>
   <input type="text" name="rate4" value="<?php echo $sql2['defaultmin_stay'];?>" id="var10"/>
    <p class="contact"><label for="name">Type of Room:</label></p>
   <p class="contact"><label for="name">
   <select  id="var11" name="roomtype" style="width:400px;">
   <option><?php echo $sql2['typesofrooms'];?></option>
  <option>Room</option>
  <option>Apartment </option>
  <option>House </option>
  <option>Unit </option>
  <option>Villa </option>
   <option>suite </option>
   <option>Berth </option>
   <option>Bed </option>
   </select></label></p>
   <p class="contact"><label for="name">Set stop sell on new days:</label></p>
   <input type="checkbox" name="sell" value="yes"
   <?php 
   if($sql2['setstop']==yes)
   {
	 echo "checked='checked'";
   }?> id="var11"/> 
 
     <p class="contact"><label for="name">
     <input type="hidden" name="id" value="<?php echo $sql2['roomid'];?>"  />
     <input class="button" type="submit"  name="SUBMIT" value="SUBMIT"  />
   <input type="reset" class="button" name="Reset" value="RESET"  />
   
   <a href="dashboard.php"><input class="button" type="button" value="Back To DashBoard" /></a>
</label></p>
</form>
</div>         

<div style="width:auto; height:150px; float:left;">  
<?php
//include(footer.php); 
?></div>

</body>
</html>
