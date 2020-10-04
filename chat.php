<?php
ob_start();
require ( 'mysqli_connect.php' ) ;
session_start(); 
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)) 
{ header("Location: login");  
exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
     <?php include 'plugins/header.php'; ?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
     <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  
                  	<div class="row mt">
          		<div class="col-lg-12">
 <?php                          
$q = "SELECT id, user_level, name, matric, email, pnum, start_date, end_date, supervisor, company, image, password, date FROM users WHERE name='{$_SESSION['supervisor']}' ORDER BY date DESC";
$result = @mysqli_query ($dbcon, $q);
if ($result) {                                                                         
echo '
    <div class="funkyradio">';    
if (@mysqli_num_rows($result) > 0) {	
 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
 echo '                     
<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="product-panel-2 pn">
								<img src="assets/img/student/'.$row['image'].'" width="250" height="160" alt="">
                                <h5 class="">'.$row['name'].'</h5>

<br>                            <button class="btn btn-small btn-success">School Supervisor</button>
								<a href="chat-with?id='.$row['id'].'"><button class="btn btn-small btn-theme04">CHAT</button></a>
							</div>
						</div>
                      ';   
 }
 mysqli_free_result ($result);
 }else{
	 echo'<div class="alert alert-danger">No users found</div>';
 }
 }
?>
                    </div>
<?php                          
$q = "SELECT id, user_level, name, matric, email, pnum, start_date, end_date, supervisor, company, image, password, date FROM users WHERE name='{$_SESSION['ind_supervisor']}' ORDER BY date DESC";
$result = @mysqli_query ($dbcon, $q);
if ($result) {                                                                         
echo '
    <div class="funkyradio">';    
if (@mysqli_num_rows($result) > 0) {	
 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
 echo '                     
<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="product-panel-2 pn">
								<img src="assets/img/student/'.$row['image'].'" width="250" height="160" alt="">
                                <h5 class="">'.$row['name'].'</h5>

<br>                            <button class="btn btn-small btn-success">Industrial Supervisor</button>
								<a href="chat-with?id='.$row['id'].'"><button class="btn btn-small btn-theme04">CHAT</button></a>
							</div>
						</div>
                      ';   
 }
 mysqli_free_result ($result);
 }else{
	 echo'<div class="alert alert-danger">No users found</div>';
 }
 }
?>
                   </div></div>
                  
                      
                  
                  </div></div>
         <div class="col-lg-6 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>Your Chat with Dr Afolabi</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Minutes Ago</muted><br/>
                      		   <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>3 Hours Ago</muted><br/>
                      		   <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>7 Hours Ago</muted><br/>
                      		   <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>11 Hours Ago</muted><br/>
                      		   <a href="#">Mark Twain</a> commented your post.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc product-panel-2">
                      	<div class="col-md-8">
                            <input type="text" name="chat" class="form-control" placeholder="ID" autofocus required>
                      	</div>
                          <div class="col-md-4">
                            <button class="btn btn-success"><i class="fa fa-send"></i> Send</button>
                      	</div>
                      </div>

                      
                      
                      
                  </div>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section
      </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
  

  </body>
</html>
