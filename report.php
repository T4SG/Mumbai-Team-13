<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'code4good');
define('DB_DATABASE', 'Implementation_new');

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

$sql    = "SELECT p.name, p.address, p.current_budget, b.budget_consumed
FROM project p
INNER JOIN budget_tracking b ON p.project_id = b.project_id";

$result = mysql_query($sql,$connection);


if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}


while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    echo "<table style='width:100%'><tr><td>" .$row[0].
"</td><td>" .$row[1].
"</td><td> 50</td> </tr><tr><td>" .$row[2] ."</td><td>" .$row[3] .
"</td><td> 50</td></tr></table>";
}

msql_free_result($result);
?>
