<?php
$sth = "SELECT name, starts, finish FROM temp where project_id='11'";
$result4 = mysqli_query($con,$sth) or die(mysqli_error());
$rows = array();
$flag = true;
$table = array();
$table['cols'] = array(
  array('type' => 'string', 'label' => 'name'),
    array('type' => 'date', 'label' => 'starts'),
    array('type' => 'date', 'label' => 'finish'));

//$rows = array();
while($rows = mysqli_fetch_assoc($result4)) {
$temp = array();
$starts = date("Y-m-d"); 
$finish = date("Y-m-d"); 

$temp[] = array('v' => (string) $rows['name']); 
$temp[] = array('v' => (string) $rows['starts']); 
$temp[] = array('v' => (string) $rows['finish']); 
$rows[] = array('c' => $temp);}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
//echo $jsonTable;
?>


<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':    [{'name':'visualization',
   'version':'1','packages':['timeline']}]}"></script>
<script type="text/javascript">

google.setOnLoadCallback(drawChart);
function drawChart() {

var container = document.getElementById('example3.1');
var chart = new google.visualization.Timeline(container);
var dataTable = new google.visualization.DataTable();
var data = "" google.visualization.DataTable(<?php echo json_encode($table,  JSON_NUMERIC_CHECK); ?>);

var options = {
    title: 'Progress',
    is3D: true
	timeline: { colorByRowLabel: true }
};

chart.draw(dataTable, options);
}

</script>