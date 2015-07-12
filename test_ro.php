<?php
						
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'code4good');
	define('DB_DATABASE', 'Implementation_new');

	$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
	$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

	

	$sql = "select image_filename from activity_photo where proj_act_id='1-111'";
	$result = mysql_query($sql);
	$arr = Array();
	while($row=mysql_fetch_assoc($result)){
		array_push($arr, $row['image_filename']);
	}
	echo $arr[0];
	
?>