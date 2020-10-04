<?php
ob_start();
require ( 'mysqli_connect.php' ) ;
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1))
{ header("Location: login");
exit();
}

 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  $errors = array();

if (empty($_POST['week'])) {
    $errors[] = 'error';
 $weekErr = 'You forgot to week.';
 } else
 {$week = mysqli_real_escape_string($dbcon, ($_POST['week']));}

 if (empty($_POST['start'])) {
     $errors[] = 'error';
 $startErr = 'You forgot to start.';
 } else
 {$start = mysqli_real_escape_string($dbcon, ($_POST['start']));}

 if (empty($_POST['end'])) {
     $errors[] = 'error';
 $endErr = 'You forgot to enter end.';
 } else
 {$end = mysqli_real_escape_string($dbcon, ($_POST['end']));}

 if (empty($_POST['mon'])) {
     $errors[] = 'error';
 $monErr = 'You forgot to enter mon.';
 } else
 {$mon = mysqli_real_escape_string($dbcon, ($_POST['mon']));}


 if (empty($_POST['tue'])) {
     $errors[] = 'error';
 $tueErr = 'You forgot to enter tue.';
 } else
 {$tue = mysqli_real_escape_string($dbcon, ($_POST['tue']));}

 if (empty($_POST['wed'])) {
     $errors[] = 'error';
 $wedErr = 'You forgot to enter wed.';
 } else
 {$wed = mysqli_real_escape_string($dbcon, ($_POST['wed']));}

 if (empty($_POST['thur'])) {
     $errors[] = 'error';
 $thurErr = 'You forgot to enter thur.';
 } else
 {$thur = mysqli_real_escape_string($dbcon, ($_POST['thur']));}

 if (empty($_POST['fri'])) {
     $errors[] = 'error';
 $friErr = 'You forgot to enter fri.';
 } else
 {$fri = mysqli_real_escape_string($dbcon, ($_POST['fri']));}

 if (empty($_POST['sat'])) {
     $errors[] = 'error';
 $satErr = 'You forgot to enter sat.';
 } else
 {$sat = mysqli_real_escape_string($dbcon, ($_POST['sat']));}

  $image = $_FILES['image']['name'];
  $tmp_dir = $_FILES['image']['tmp_name'];
  $imgSize = $_FILES['image']['size'];

  if(empty($image)){
      $errors[] = 'error';
   $imgErr = "Please Select Image File.";
  }
  else
  {
   $upload_dir = 'assets/img/logimage/';

   $imgExt = strtolower(pathinfo($image,PATHINFO_EXTENSION));

   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');

   $image = rand(1000,1000000).".".$imgExt;


   if(in_array($imgExt, $valid_extensions)){

    if($imgSize > 0)    {
    }
    else{
        $errors[] = 'error';
     $imgErr2 = "Sorry, your file is too large.";
    }
   }
   else{
       $errors[] = 'error';
    $imgErr3 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
   }
  }

  if (empty($errors)){
    $q = "SELECT week FROM report WHERE (week='$week' && user_id='{$_SESSION['id']}')";
  $result = mysqli_query ($dbcon, $q);
  if (@mysqli_num_rows($result) == 0) {
   $q = "INSERT INTO report (user_id, week, start_date, end_date, monday, tuesday, wednessday, thursday, friday, saturday, image, status1, status2, status3, date)
 VALUES ('{$_SESSION['id']}', '$week', '$start', '$end', '$mon', '$tue', '$wed', '$thur', '$fri', '$sat', '$image', 'pending', 'pending', 'pending', NOW() )";
   $result = @mysqli_query ($dbcon, $q);
     move_uploaded_file($tmp_dir,$upload_dir.$image);
   if ($result)
   {
   $successMSG = "<script> alert('report added'); </script>";;
   }
   else
   {
    $errMSG = "<script> alert('An error occured please try again later'); </script>";
   }
  }else{

      $exist = '<div class="alert alert-danger"><i class="fa fa-warning"></i> Week already exist</div>';
  }
  }else{
      $Err = '<div class="alert alert-danger"><i class="fa fa-warning"></i> Some fields were left blank, please check</div>';
  }
 }
 if (isset($successMSG)){echo $successMSG;}
 if (isset($errMSG)){echo $errMSG;}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Crawford siwes portal</title>

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
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Weekly Report</h4>
                      <form class="form-horizontal style-form" method="post" action="index" enctype="multipart/form-data">
                      <?php if(isset($Err)){ echo $Err;} ?>
                      <?php if(isset($exist)){ echo $exist;} ?>
                       <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Week</label>
                              <div class="col-sm-3">
                                  <select class="form-control" name="week">
                                  <option><?php if(isset($_POST['week'])){ echo $_POST['week'];} ?></option>
                                  <option>Week 1</option>
                                  <option>Week 2</option>
                                  <option>Week 3</option>
                                  <option>Week 4</option>
                                  <option>Week 5</option>
                                  <option>Week 6</option>
                                  <option>Week 7</option>
                                  <option>Week 8</option>
                                  <option>Week 9</option>
                                  <option>Week 10</option>
                                  <option>Week 11</option>
                                  <option>Week 12</option>
                                  <option>Week 13</option>
                                  <option>Week 14</option>
                                  <option>Week 15</option>
                                  <option>Week 16</option>
                                  <option>Week 17</option>
                                  <option>Week 18</option>
                                  <option>Week 19</option>
                                  <option>Week 20</option>
                                  <option>Week 21</option>
                                  <option>Week 22</option>
                                  <option>Week 23</option>
                                  <option>Week 24</option>
                                  <option>Week 25</option>
                                  <option>Week 26</option>
                                  <option>Week 27</option>
                                  <option>Week 28</option>
                                  <option>Week 29</option>
                                  <option>Week 30</option>

                                  </select>
                              </div>
                           <div class="col-sm-6">
                                  <?php if(isset($weekErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Week Not selected</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Start Date</label>
                              <div class="col-sm-4">
                                  <input type="date" class="form-control" placeholder="Day-Month-Year" name="start" value="<?php if(isset($_POST['start'])){ echo $_POST['start'];} ?>">
                              </div>
                              <div class="col-sm-6">
                                  <?php if(isset($startErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Start date was not entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">End Date</label>
                              <div class="col-sm-4">
                                  <input type="date" class="form-control" placeholder="Day-Month-Year" name="end" value="<?php if(isset($_POST['end'])){ echo $_POST['end'];} ?>">
                              </div>
                              <div class="col-sm-6">
                                  <?php if(isset($endErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> End date was not entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Monday</label>
                              <div class="col-sm-12">
                                  <textarea class="form-control" wdith="50%" height="80%" type="text" name="mon"><?php if(isset($_POST['mon'])){ echo $_POST['mon'];} ?></textarea>
                              </div>
                              <div class="col-sm-12">
                                  <?php if(isset($monErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Monday\'s report was not entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tuesday</label>
                              <div class="col-sm-12">
                                  <textarea class="form-control" wdith="50%" height="80%" type="text" name="tue"><?php if(isset($_POST['tue'])){ echo $_POST['tue'];} ?></textarea>
                              </div>
                              <div class="col-sm-12">
                                  <?php if(isset($tueErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Tuesday\'s report was not entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Wednessday</label>
                              <div class="col-sm-12">
                                  <textarea class="form-control" wdith="50%" height="80%" type="text" name="wed"><?php if(isset($_POST['wed'])){ echo $_POST['wed'];} ?></textarea>
                              </div>
                               <div class="col-sm-12">
                                  <?php if(isset($wedErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Wednessday\'s report was not entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Thursday</label>
                              <div class="col-sm-12">
                                  <textarea class="form-control" wdith="50%" height="80%" type="text" name="thur"><?php if(isset($_POST['thur'])){ echo $_POST['thur'];} ?></textarea>
                              </div>
                               <div class="col-sm-12">
                                  <?php if(isset($thurErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Thursday\'s report was not entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Friday</label>
                              <div class="col-sm-12">
                                  <textarea class="form-control" wdith="50%" height="80%" type="text" name="fri"><?php if(isset($_POST['fri'])){ echo $_POST['fri'];} ?></textarea>
                              </div>
                               <div class="col-sm-12">
                                  <?php if(isset($friErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Friday\'s report was not entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Saturday</label>
                              <div class="col-sm-12">
                                  <textarea class="form-control" wdith="50%" height="80%" type="text" name="sat"><?php if(isset($_POST['sat'])){ echo $_POST['sat'];} ?></textarea>
                              </div>
                               <div class="col-sm-12">
                                  <?php if(isset($satErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Saturday\'s report was not entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Upload a picture</label>
                              <div class="col-sm-12">
                                  <input class="form-control" type="file" name="image" accept="files/*" />
                              </div>
                               <div class="col-sm-12">
                                  <?php if(isset($imgErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Plese select an image for the week</div>';} ?>
                                   <?php if(isset($imgErr2)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Image size too large</div>';} ?>
                                   <?php if(isset($imgErr3)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Sorry, only JPG, JPEG, PNG & GIF files are allowed</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-sm-12">
                                  <button class="btn btn-success col-md-12" type="submit">Submit</button>

                              </div>
                          </div>

                      </form>
                    </div></div></div>



                  </div></div>
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
  </section>
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
