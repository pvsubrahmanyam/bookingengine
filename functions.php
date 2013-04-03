<?php
require_once('connection.php');
error_reporting(E_ALL ^ E_NOTICE);
class User
{
public function __construct() 
{
$db = new DB_Class();
}
// Login process
function check_login($username, $password) 
{

//$pasword = md5($password);
$result1 = "SELECT * from wp_manage_user WHERE  username='$username' and password = '$password'";
//$wpdb->get_results("SELECT * FROM wp_users WHERE user_login='$username' and user_pass = '$password' ");
$result=mysql_query($result1);
$user_data = mysql_fetch_row($result);
$no_rows = mysql_num_rows($result);

if ($no_rows == 1) 
{

$_SESSION['login'] = true;
$_SESSION['id'] = $user_data['id'];
return TRUE;
}
else
{
return FALSE;
}

}
// Getting name
function data_insert($data) 
{
$result = mysql_query("SELECT name FROM users WHERE uid = $uid");
$user_data = mysql_fetch_array($result);
echo $user_data['name'];
}
// Getting session 
//add_action('init', 'myStartSession', 1);
function get_session() 
{
    if(!session_id()) {
        session_start();
    }

return $_SESSION['login'];
}
// Logout 
function user_logout() 
{
$_SESSION['login'] = FALSE;
session_destroy();
}

}
?>