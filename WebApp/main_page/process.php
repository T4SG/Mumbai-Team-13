<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
//echo $username;
//echo $password;

$_SESSION["user_id"]=$username;
//echo "$_SESSION['user_id'];
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'code4good');
define('DB_DATABASE', 'Implementation_new');

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

//echo $database;

$sql    = "select user_id from  user where user_id='$username' and password='$password'";
//echo $sql;



$result = mysql_query($sql);


if(mysql_num_rows($result)>0){
	//echo "hello";
	header('location:logged_in.php');
}
else echo"Error Logging in";

?>
	
	