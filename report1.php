<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'code4good');
define('DB_DATABASE', 'Implementation_new');

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
echo "Cnnection";
$sql    = 'select name,address,current_budget from  project';
echo "sdl";
$result = mysql_query($sql);
echo "disp";

?>
