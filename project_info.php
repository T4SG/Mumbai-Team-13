<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
	
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<link href="css/styles.css" rel="stylesheet">

    <style>
    #canvas-holder1 {
        width: 300px;
        margin: 20px auto;
    }
    #canvas-holder2 {
        width: 50%;
        margin: 20px 25%;
    }
    #chartjs-tooltip {
        opacity: 1;
        position: absolute;
        background: rgba(0, 0, 0, .7);
        color: white;
        padding: 3px;
        border-radius: 3px;
        -webkit-transition: all .1s ease;
        transition: all .1s ease;
        pointer-events: none;
        -webkit-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
    }
    .chartjs-tooltip-key{
      display:inline-block;
      width:10px;
      height:10px;
    }
    </style>

  </head>
	<body>
    <br>
  <h1><center>Progress Report</center></h1>
  <br>
 <div class="row">
    <div class="col-md-1"></div>
 <label> Date:</label>  May 10, 2012<br>
    <div class="col-md-1"></div>
<label>Project start date:</label>
 April 10, 2011<br>
    <div class="col-md-1"></div>
 <label>Anticipated project end date:</label> July 10, 2012
<br>    <div class="col-md-1"></div>
<label>Construction timeline:</label>3 months
 </div>
<br>
<br>
 <?php
$project_id=$_GET['project_id'];
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'code4good');
define('DB_DATABASE', 'Implementation_new');
$activity;
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

$sql="SELECT activities.activity_name, project_activity.weight, activity_tracking.completed_percentage, MAX( activity_tracking.date ) 
FROM activities, project_activity, activity_tracking
WHERE project_activity.activity_id = activities.activity_id
AND project_activity.proj_act_id = activity_tracking.proj_act_id
AND project_activity.project_id ='1'
GROUP BY activity_tracking.proj_act_id";

  $count=0;
  
 			 $result = mysql_query($sql,$connection);


   if (!$result) {
       echo "DB Error, could not query the database\n";
       echo 'MySQL Error: ' . mysql_error();
       exit;
   }


   while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        ?>
 
        
 <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
<label><?php echo $row[0] ?></label>
</div>
<div class="col-md-4">
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?PHP echo $row[1];?>%">
    <?php echo $row[1] ?> Complete
  </div>
</div>

  </div>
</div>
  
<?php 
} 


 ?>



</DIV>
</DIV>
</DIV>
</br>
	
	

	
	<script src="Chart.js"></script>


	<?php

	$sql="select project_activity.project_id,project_activity.activity_id, project_activity.weight, activity_tracking.completed_percentage,activity_tracking.date  from project_activity, activity_tracking
where project_activity.proj_act_id= activity_tracking.proj_act_id and project_activity.project_id=1 group by project_activity.activity_id";
	$count=0;
  
	 $result = mysql_query($sql,$connection);


   if (!$result) {
       echo "DB Error, could not query the database\n";
       echo 'MySQL Error: ' . mysql_error();
       exit;
   }
   $n=0;$total=0;
 while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    
	$activity[$n]=$row[2]*$row[3]/100;
	$total=$total+$activity[$n];
	$n=$n+1;

	}
	
	
	?>
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<h2> Overall progress of school</h2>
	<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?PHP echo $total;?>%">
    <?php echo $total ?> Complete
  </div>
</div>
</div>
<div class="col-md-2"></div>
</div>
	
<script>

    Chart.defaults.global.pointHitDetectionRadius = 1;
    Chart.defaults.global.customTooltips = function(tooltip) {

        var tooltipEl = $('#chartjs-tooltip');

        if (!tooltip) {
            tooltipEl.css({
                opacity: 0
            });
            return;
        }

        tooltipEl.removeClass('above below');
        tooltipEl.addClass(tooltip.yAlign);

        var innerHtml = '';
        for (var i = tooltip.labels.length - 1; i >= 0; i--) {
          innerHtml += [
            '<div class="chartjs-tooltip-section">',
            ' <span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
            ' <span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
            '</div>'
          ].join('');
        }
        tooltipEl.html(innerHtml);

        tooltipEl.css({
            opacity: 1,
            left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
            top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
            fontFamily: tooltip.fontFamily,
            fontSize: tooltip.fontSize,
            fontStyle: tooltip.fontStyle,
        });
    };

	
	
    var lineChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
	<?php	

	for ($j = 0; $j < 18; $j++) {
	if ($activity[$j]==null)
		continue;
    echo "{  label: 'My First dataset',
            fillColor: 'rgba(50,50,50,0.2)',
            strokeColor: 'rgba(220,220,220,1)',
            pointColor: 'rgba(220,220,220,1)',
            pointStrokeColor: '#fff',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data:[";

for ($x = 0; $x < count($activity[$j]); $x++) {
if($x!=count($activity[$j])-1)
	echo $activity[$j][$x].","; 
else
	echo $activity[$j][$x]; 
	}

if($j!=count($activity)-1)
	echo "]},"; 
else
	echo "]}]};";
	
	
	}

		
		?>
 
    window.onload = function() {
        var ctx1 = document.getElementById("chart1").getContext("2d");
        window.myLine = new Chart(ctx1).Line(lineChartData, {
          showScale: false,
          pointDot : true,
            responsive: true
        });

        var ctx2 = document.getElementById("chart2").getContext("2d");
        window.myLine = new Chart(ctx2).Line(lineChartData, {
            responsive: true
        });
    };


    </script>

  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>