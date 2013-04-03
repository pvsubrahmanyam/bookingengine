<?php
/*
Plugin Name: Bookingengine 
Plugin URI: localhost/bookinengine
Description: bokinengine Plugin performs booking
Version: 2.3
Author: Mr. Magic
Author URI: http://example.com/
*/
require_once('functions.php');
//remove_filter('template_redirect', 'redirect_canonical'); 
?>
<html>
<head>

</head>
<body>

<?php
//register_activation_hook( __FILE__, 'bookingengine_activate' );

function foo()
 {  
?>
<form method="POST" action="" name="admin">

<input type="image" name="submit" style="color:#999933; background-image:url(images/satya.png); background:admin;" value="admin">
</form>
<!--<a href="" onClick="readdata()">Admin</a>
--><?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$ur1=wp_redirect(plugins_url('bookingengine/login.php'));
}

}
 
//add_action("foo", "foo");

?>
</body>
</html>


