<html>
   <head>
   <title>Project </title>
   <style>
   table, th {
      border: 1px solid black;
      border-collapse: collapse;
      font-size:15px;
      font-family: "Segoe UI;"
   }
   th, td {
      padding: 15px;
   }
   </style>

   <!-- #CSS Links -->
   <!-- Basic Styles -->
   <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
   <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-

awesome.css">
   <link href="assets/plugins/iCheck-master/skins/all.css?v=1.0.2" rel="stylesheet">
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
    
   <!-- #GOOGLE FONT -->
   <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" 

rel="stylesheet" type="text/css">
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" 

rel="stylesheet" type="text/css">



   <!-- #CSS Plugins Links -->
   <!-- iCheck Checkbox and radio -->
   <link href="assets/plugins/iCheck-master/skins/all.css?v=1.0.2" rel="stylesheet">
   <!-- jasny-bootstrap -->
   <link href="assets/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" 

rel="stylesheet">
   <!-- bootstrap-switch -->
   <link href="assets/plugins/bootstrap-switch/css/bootstrap-switch.css" 

rel="stylesheet">
   <!-- bootstrap-multiselect -->
   <link href="assets/plugins/bootstrap-multiselect-master/css/bootstrap-multiselect.css" 

rel="stylesheet">
   <link href="assets/plugins/bootstrap-multiselect-master/css/prettify.css" 

rel="stylesheet">
   <!-- alertify Dialogs -->
   <link rel="stylesheet" href="assets/plugins/alertify/css/alertify.core.css">
   <link rel="stylesheet" href="assets/purl("images/picbackground.jpg")

lugins/alertify/css/alertify.default.css" id="toggleCSS">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="assets/plugins/fuelux/css/fuelux.min.css">
   <!-- Data Slider -->
   <link rel="stylesheet" href="assets/plugins/slider/css/slider.css">
   <!-- bootstrap-datetimepicker -->
   <link rel="stylesheet" href="assets/plugins/bootstrap-datetimepicker-

master/css/bootstrap-datetimepicker.css">
   <link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker-

master/css/daterangepicker-bs3.css">
   </head>


   <body style="background-image:url("images/picbackground.jpg")">
   <nav role="navigation" class="navbar navbar-default navbar-success">
      <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button data-target="#bs-example-navbar-collapse-3" data-toggle="collapse" 

class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="images/logo.jpg" height=50 

width=100>	</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div id="bs-example-navbar-collapse-3" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
               <li class="active"><a href="home.html">Home</a></li>
               <li><a href="#">Community Review</a></li>
               
               <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Search <b 

class="caret"></b></a>
                  <ul style="min-width: 300px;" class="dropdown-menu">
                     <li>
                        <div class="row">
                           <div class="col-md-12">
                              <form role="search" class="navbar-form navbar-left">
                                 <div class="input-group">
                                    <input type="text" placeholder="Search" class="form-

control">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">
                                    Go!</button>
                                    </span>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </li>
                  </ul>
               </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#">Sign Up</a></li>
               <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Sign in <b 

class="caret"></b></a>
                  <ul style="padding: 15px;min-width: 250px;" class="dropdown-menu">
                     <li>
                        <div class="row">
                           <div class="col-md-12">
                              <form id="login-nav" accept-charset="UTF-8" action="login" 

method="post" role="form" class="form">
                                 <div class="form-group">
                                    <label for="exampleInputEmail2" class="sr-only">Email 

address</label>
                                    <input type="email" required="" placeholder="Email 

address" id="exampleInputEmail2" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword2" class="sr-

only">Password</label>
                                    <input type="password" required="" 

placeholder="Password" id="exampleInputPassword2" class="form-control">
                                 </div>
                                 <div class="checkbox">
                                    <label>
                                    <div class="icheckbox_flat-red" style="position: 

relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins 

class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; 

width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; 

background: rgb(255, 255, 255);"></ins></div> Remember me
                                    </label>
                                 </div>
                                 <div class="form-group">
                                    <button class="btn btn-success btn-block" 

type="submit">Sign in</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </li>
                     <li class="divider"></li>
                     <li>
                        <input type="button" value="Sign In with Google" id="sign-in-

google" class="btn btn-primary btn-block">
                        <input type="button" value="Sign In with Twitter" id="sign-in-

twitter" class="btn btn-primary btn-block">
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
      <!-- /.navbar-collapse -->
   </nav> 

   <br><br><br>
 
<ul class='list-group'>
   <?php

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'code4good');
   define('DB_DATABASE', 'Implementation_new');

   $connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error

());
   $database = mysql_select_db(DB_DATABASE) or die(mysql_error());

   $sql    = "SELECT p.name, p.address, p.current_budget, b.budget_consumed,p.project_id
   FROM project p
   INNER JOIN budget_tracking b ON p.project_id = b.project_id";

   $result = mysql_query($sql,$connection);


   if (!$result) {
       echo "DB Error, could not query the database\n";
       echo 'MySQL Error: ' . mysql_error();
       exit;
   }


   while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
       echo "
  <li class='list-group-item'>
	   <div class='row'><div class='col-md-4'> Name:&nbsp;" .$row[0].
   "</div><div class='col-md-4'>Address:" .$row[1].
   "</div><div class='col-md-4'><a href ='../project_info.php?project_id=".$row[4]."'></div></div><div class='row'><div class='col-md-4'>
   For Project Info</div><div col-md-4>&nbsp;&nbsp;&nbsp;Total Budget=" .$row[2] ."</div><div col-md-4>&nbsp;&nbsp;&nbsp;&nbsp;Budget spent=" .$row[3] ."</div></div></li>";
   }

   msql_free_result($result);
   ?>
   <!--
   <table style="width:100%">
    <tr>
      <td>Project Name</td>
      <td>Budget</td>	
      <td><a href="../project_info.html">Click Here</a></td>
    </tr>
    <tr>
      <td>Start Date</td>
      <td>Spent</td>
      <td><a href="../project_info.html">Click Here</a></td>	
      
    </tr>
   </table>

   <br>

   <table style="width:100%">
    <tr>
      <td>Project Name</td>
      <td>Budget</td>	
      <td> 50</td>
    </tr>
    <tr>
      <td>Start Date</td>
      <td>Spent</td>
      <td> 50</td>	
      
    </tr>
   </table>
   <br>

   <table style="width:100%">
    <tr>
      <td>Project Name</td>
      <td>Budget</td>	
      <td> 50</td>
    </tr>
    <tr>
      <td>Start Date</td>
      <td>Spent</td>
      <td> 50</td>	
      
    </tr>

   </table>
   -->


   <!-- script references -->
   		<script 

src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
   		<script src="js/bootstrap.min.js"></script>
       <script 

src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/plugins/iCheck-master/js/icheck.js?v=1.0.2"></script>
   <script>
     $(document).ready(function(){
       $('input').iCheck({
        checkboxClass: 'icheckbox_flat-red',
        radioClass: 'iradio_flat-red'
       });
     });
   </script>
   <script src="assets/plugins/iCheck-master/js/icheck.js?v=1.0.2"></script>

   </body>

   </html>