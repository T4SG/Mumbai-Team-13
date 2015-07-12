<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'code4good');
define('DB_DATABASE', 'Implementation_new');

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

$user_id = $_POST["user_id"];

$sql = "SELECT project.project_id, project.name, project.current_budget, budget_tracking.budget_consumed, project.country FROM project, budget_tracking, partner_project WHERE partner_project.user_id = '$user_id' AND project.project_id = partner_project.project_id AND project.project_id = budget_tracking.project_id";

$result = mysql_query($sql);

$arr = Array();
while($row=mysql_fetch_assoc($result)){

array_push($arr,array("project_id"=>$row['project_id'],"name"=>$row['name'], "current_budget"=>$row['current_budget'], "budget_consumed"=>$row['budget_consumed'], "location"=>$row['country']));

}

echo json_encode(array("schools"=>$arr));
?>






