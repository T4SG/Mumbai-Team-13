<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'code4good');
define('DB_DATABASE', 'Implementation_new');

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

$username = $_POST["username"];
$password = $_POST["password"];


$sql    = "select user_id from  user where user_id='$username' and password='$password'";
$result = mysql_query($sql);


if(mysql_num_rows($result)>0){
	$user = mysql_fetch_array($result);
 echo json_encode(array("status"=>1,"user_id"=>$user[0]));
}
else
	echo json_encode(array("status"=>0));
?>

