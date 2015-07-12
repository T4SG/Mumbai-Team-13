<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'code4good');
define('DB_DATABASE', 'Implementation_new');

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

$project_id = $_POST["project_id"];

$act = array();
array_push($act,$_POST["1"]);
array_push($act,$_POST["2"]);
array_push($act,$_POST["3"]);
array_push($act,$_POST["4"]);
array_push($act,$_POST["5"]);
array_push($act,$_POST["6"]);
array_push($act,$_POST["7"]);
$date = date('Y-m-d');

$sql1="select proj_act_id from project_activity where project_id='$project_id'";

$proj_ids = mysql_query($sql1);


for($i=0;$i<sizeOf($proj_ids);$i++){
	$proj_act_ids = mysql_fetch_array($proj_ids);
	//for($j=0;$j<sizeOf($act);$j++){
	$sql    = "update activity_tracking set completed_percentage = '$act[$i]', date = '$date' where proj_act_id='$proj_act_ids[$i]'";
	$result = mysql_query($sql);
//}
	
}

if(mysql_affected_rows()!=0)
	{echo json_encode(array("result"=>"1"));}
else 
	{echo json_encode(array("result"=>"0"));}

?>
