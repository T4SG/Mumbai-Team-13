<?php
$mysql_host = "localhost";
$mysql_database = "Implementation";
$mysql_user = "root";
$mysql_password = "code4good";
echo "hi";
$con = mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("connection failed");
mysql_select_db($mysql_database,$con) or die("db selection failed");
 

 	if($r=mysql_query("INSERT INTO `User` VALUES ('mohit','gurnani1','kavita','general')",$con))
	{
	$flag= "Inserted";
	}

 	print(json_encode($flag));
	mysql_close($con);


?>

