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
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<link href="css/login.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
</head>

<body>
<div id="Propertish_page_css">
<div id="header_propertish">
<div id="proprotish_logo"></div>

</div>
<div id="main_content">
<div id="navigation">
<ul>
<li>  <a href="dashboard.php">Dashboard</a></li>
<li> <a href="#"> Inventary</a></li>

<li class="active">  <a href="propertymanager.php">Property Manager</a></li>

<li>  <a href="#">Inclusions</a></li>

<li>  <a href="#">Reporting</a></li>

<li> <a href="#"> Setting</a></li>
<li> <a href="#"> Mesegrs</a></li>
<li> <a href="logout.php"> Logout</a></li>



</ul>

</div>

<div id="reporting_buttion">
<ul>
<li> <a href="properties.php">Properties</a></li>
<li class="active"> <a href="roomtypes.php">Room types</a></li>
<li> <a href="roomtypes.php">Room pols</a></li>
<li><a href="#"> Property PMS</a></li>



</ul>

</div>

<div id="content">
<div  id="new">
 EDIT ROOM
</div>
<div class="form">
<form action=" " method="post" onclick="return vlaid1();" >

  <p class="contact"><label for="name">Name:</label></p> 
   <input type="text" name="name" value=""  required="" id="var1"/>
   
   <p class="contact"><label for="name">Default Inclusions:</label></p>
 <textarea  style="width:412px; height:100px;" name="Default1" id="var2" required=""></textarea>

   <p class="contact"><label for="name">Default Allocation:</label></p>
   <input type="text" name="Default2" value="" id="var3" required="" />

  <p class="contact"><label for="name"> Default Rate:</label></p>
   <input type="text" name="Default3" value="" id="var4" required=""/>  

   <p class="contact"><label for="name">Persons Included in Rate:</label></p>
 <input type="text" name="Default4" value="" id="var5" required=""/> 
   
   <p class="contact"><label for="name">Max Persons in Room:</label></p>
   <input type="text" name="maxpersons" value="" id="var6" required=""/>
   <p class="contact"><label for="name">Extra Adult Rate:</label></p>
   <input type="text" name="rate1" value="" id="var7" required=""/>  
   <p class="contact"><label for="name">Extra Child Rate:</label></p>
  <input type="text" name="rate2" value="" id="var8" required=""/>
  <p class="contact"><label for="name">Rack Rate:</label></p>
   <input type="text" name="rate3" value="" id="var9" required=""/>
   <p class="contact"><label for="name">Default Minimum Stay:</label></p>
   <input type="text" name="rate4" value="" id="var10"/>
   <p class="contact"><label for="name">Type of Room:</label></p>
     <select  id="var11" name="roomtype" style="width:400px;">
    <option>Room</option>
  <option>Apartment </option>
  <option>House </option>
  <option>Unit </option>
  <option>Villa </option>
   <option>suite </option>
   <option>Berth </option>
   <option>Bed </option>
   </select>
   <p class="contact"><label for="name">Set stop sell on new days:</label></p>
   <input type="checkbox" name="sell" value="yes" id="var11" /> 
       <p class="contact"><label for="name"><input class="button" type="submit"  name="SUBMIT" value="SUBMIT"  />
   <input type="reset" class="button" name="Reset" value="RESET"  />
   
   <a href="dashboard.php"><input class="button" type="button" value="Back To DashBoard" /></a>
</label></p>
</form> </div>
</div>
<div style="width:auto; height:150px; float:left;">  
<?php
//include(footer.php); 
?></div>
</div></div>
</body>
</html>
<?php
if(isset($_POST['SUBMIT']))
{
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
	$sql1="INSERT INTO `room_type`(`name`, `defaultinclusion`, `defaultallocation`, `defaultrate`, `personincludedrate`, `maxpersons`, `extraadult_rate`, `extrachild_rate`, `rackrate`, `defaultmin_stay`, `typesofrooms`, `setstop`) VALUES ('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10','$var11','$var12')";
	mysql_query($sql1) or die("My sql Error");
		header('location:roomtypes.php');
	
	}
?>
