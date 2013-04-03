<?php
include('config.php');
session_start();	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link href="css/proptes.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fitow room types</title>
</head>

<body>
<div id="main">
<div id="header">
<div id="logo"></div>
</div>
<div id="border_top"></div>
<div id="prortey_manger">Room Pools</div>

<div style="width:auto; height:150px; float:left;"> 
<?php
//include(heder.php); 
?></div>

<div style="height:25px; width:200px; background:#B1B096; float:left;">

  [<a href="addnewroompool.php">ADD NEW ROOM POOL</a>]
<br />
</div>
<div style="float:left; width:1024px;;">
<table border="2px" bordercolor="#8CCAE1"><tr>
     <td width="475px">Name:</td>
     <td width="400px">options</td> </tr>
<?php
$qry=mysql_query("SELECT * FROM room_pool");
while($row=mysql_fetch_array($qry))
{
	?>
<tr>

<td><?php echo $row['name'];?></td>
<td><a href="roompooledit.php?id=<?php echo $row['roompool_id'];?>"> Edit</a></td>

 </tr>
 <?php
}

?>
 </table>         
</div></div>
<div style="width:auto; height:150px; float:left;">  
<?php
//include(footer.php); 
?></div>

</body>
</html>