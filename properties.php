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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fitow</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
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
<li class="active"> <a href="properties.php">Properties</a></li>
<li> <a href="roomtypes.php">Room types</a></li>
<li> <a href="roomtypes.php">Room pols</a></li>
<li><a href="#"> Property PMS</a></li>



</ul>

</div>
<?php
$result = mysql_query("SELECT * FROM wp_properties")
or die(mysql_error());
?>
<div id="content"> 
<div  id="new">
<a href="addnewproperty.php">[ADD NEW PROPERTY]</a>
</div>
<table  border='1' bgcolor='#F7F7F7'  text-align='left' >
<tr> 
<th  width=400>Name</th>
<th colspan='2'>Options</th>
</tr>
<?php
while($row = mysql_fetch_array( $result ))
{

?>

<tr>
<td><b><font color="#663300"><?php echo $row['Name'];?></font></b></td>
<td><b><font color="#663300"><a href="editproperties.php?id=<?php echo $row['id'] ?>">Edit</a></font></b></td>
<td><b><font color="#663300"><a href="roomtypes.php">Rooms</a></font></b></td>
<!--<td><a href=delete.php?id=" . $row['id'] ." onclick=\"return confirm('Are you sure you want to delete?');\">Delete</a></td>";
--></tr>
<?php } ?>

</table>
</div>
</div>
</div>
</body>
</html>