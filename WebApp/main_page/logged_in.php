<html>
<head>
<title>Project </title>

<?php
session_start();
?>
<!-- #CSS Links -->
<!-- Basic Styles -->
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
<link href="assets/plugins/iCheck-master/skins/all.css?v=1.0.2" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 
<!-- #GOOGLE FONT -->
<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">



<!-- #CSS Plugins Links -->
<!-- iCheck Checkbox and radio -->
<link href="assets/plugins/iCheck-master/skins/all.css?v=1.0.2" rel="stylesheet">
<!-- jasny-bootstrap -->
<link href="assets/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
<!-- bootstrap-switch -->
<link href="assets/plugins/bootstrap-switch/css/bootstrap-switch.css" rel="stylesheet">
<!-- bootstrap-multiselect -->
<link href="assets/plugins/bootstrap-multiselect-master/css/bootstrap-multiselect.css" rel="stylesheet">
<link href="assets/plugins/bootstrap-multiselect-master/css/prettify.css" rel="stylesheet">
<!-- alertify Dialogs -->
<link rel="stylesheet" href="assets/plugins/alertify/css/alertify.core.css">
<link rel="stylesheet" href="assets/plugins/alertify/css/alertify.default.css" id="toggleCSS">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="assets/plugins/fuelux/css/fuelux.min.css">
<!-- Data Slider -->
<link rel="stylesheet" href="assets/plugins/slider/css/slider.css">
<!-- bootstrap-datetimepicker -->
<link rel="stylesheet" href="assets/plugins/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker-master/css/daterangepicker-bs3.css">


</head>


<body>


<nav role="navigation" class="navbar navbar-default navbar-success">
   <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button data-target="#bs-example-navbar-collapse-3" data-toggle="collapse" class="navbar-toggle" type="button">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a href="#" class="navbar-brand"><img src="images/logo.jpg" height=50 width=100>	</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div id="bs-example-navbar-collapse-3" class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="../home.php">Community Reviews</a></li>
            <li>  <a href="../project_info.html"> Reports</a> </li>
            <li>  <a href="project.php"> Dashboard </a> </li>
          
		  <li class="dropdown">
               <a data-toggle="dropdown" class="dropdown-toggle" href="#">Search <b class="caret"></b></a>
               <ul style="min-width: 300px;" class="dropdown-menu">
                  <li>
                     <div class="row">
                        <div class="col-md-12">
                           <form role="search" class="navbar-form navbar-left">
                              <div class="input-group">
                                 <input type="text" placeholder="Search" class="form-control">
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
            <li>Hello, <?php echo $_SESSION["user_id"];
            ?>
            <li> Logout </li>

         <!--  <li><a href="login.html">Sign Up</a></li>
            <li class="dropdown"> -->

               
               <ul style="padding: 15px;min-width: 250px;" class="dropdown-menu">
                  <li>
                     <div class="row">
                        <div class="col-md-12">
                           <form id="login-nav" accept-charset="UTF-8" action="login" method="post" role="form" class="form">
                              <div class="form-group">
                                 <label for="exampleInputEmail2" class="sr-only">Email address</label>
                                 <input type="email" required="" placeholder="Email address" id="exampleInputEmail2" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword2" class="sr-only">Password</label>
                                 <input type="password" required="" placeholder="Password" id="exampleInputPassword2" class="form-control">
                              </div>
                              <div class="checkbox">
                                 <label>
                                 <div class="icheckbox_flat-red" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Remember me
                                 </label>
                              </div>
                              <div class="form-group">
                                 <button class="btn btn-success btn-block" type="submit">Sign in</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </li>
                  <li class="divider"></li>
                  <li>
                     <input type="button" value="Sign In with Google" id="sign-in-google" class="btn btn-primary btn-block">
                     <input type="button" value="Sign In with Twitter" id="sign-in-twitter" class="btn btn-primary btn-block">
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
   <!-- /.navbar-collapse -->
</nav> 

<div>
<img src="images/picbackground.jpg" height=100% width=100%>
<div>


<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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