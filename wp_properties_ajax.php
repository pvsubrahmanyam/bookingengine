<?php

@session_start();
if(!isset($_SESSION['userName'])) 
{
header('location:login.php');
}
require_once('functions.php');
require_once('connection.php');
$user=new User(); 

$id=$_GET['id'];

$sql1=mysql_query("SELECT * FROM wp_room_type_details WHERE ppro_id='$id'") or die(mysql_error());
 ?>
 
	<table  border='1' bgcolor='#F7F7F7'  text-align='left' >
<tr>
<a href="javascript:void(0);" onClick="newRoom('wp_addroom.php')">[ADD NEW ROOM]</a>
</tr>
<tr> 
<th  width=400>Name</th>
<th colspan='2'>Options</th>
</tr>
<?php

while($sql2=mysql_fetch_array($sql1))
{
	
?>
<tr>
<td><b><font color="#663300"><?php echo $sql2['name'];?></font></b></td>
<td><b><font color="#663300">
<a href="javascript:void(0);" onclick="editRoom('wp_roomedit.php?id=<?php echo $sql2['roomid'] ?>')">Edit</a></font></b></td>
<td><b><font color="#663300"><a href="roomtypes.php">Rooms</a></font></b></td>
<!--<td><a href=delete.php?id=" . $row['id'] ." onclick=\"return confirm('Are you sure you want to delete?');\">Delete</a></td>";
--></tr>
<?php } ?>

</table>
</html>

