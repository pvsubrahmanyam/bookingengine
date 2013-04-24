<?php
/*
Plugin Name: Bookingengine 
Plugin URI: stage.fitow.com?return=true
Description: bokinengine Plugin performs booking
Version: 2.5.7
Author: Automattic
Author URI: 
License: GPLv2 or later
*/
require_once('functions.php');
//remove_filter('template_redirect', 'redirect_canonical'); 
?>
<html>
<head>

<script type="text/javascript">

	window.onload = function()
	{
		document.getElementById('mylink').onclick = function()
		{
			alert('done');
			document.getElementById('myform').submit();
			return true;
		}
	}
	var id=0;
	function pluginCall()
	{
		
		document.getElementById('clickid').value=id;
		/*document.getElementById('myForm').submit();*/
		this.form.submit();
		
	}
</script>
</head>
<body id="mydiv">

<?php
//register_activation_hook( __FILE__, 'bookingengine_activate' );

function fitow()
 {  
 
 ?>

<form method="POST" name="form" id="form" action="">
<a href="javascript:document.form.submit();" onClick="">Stagefitow</a>

<!--<input type="submit" name="submit"  value="stage fitow" style="color:#39F; background-color:#FFF; cursor:pointer;">-->
</form>
<?php

 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
//if(isset($_POST['SUBMIT']))
{
	
$ur1=wp_redirect(plugins_url('bookingengine/login.php?r'));
 
}



//add_action("foo", "foo");
 }
?>
</body>
</html>


