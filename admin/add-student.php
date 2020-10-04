<?php
ob_start();
require ( '../mysqli_connect.php' ) ;
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 3))
{ header("Location: ../login");
exit();
}


 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
  $errors = array();

if (empty($_POST['name'])) {
    $errors[] = 'error';
 $nameErr = 'You forgot to enter name.';
 } else
 {$name = mysqli_real_escape_string($dbcon, ($_POST['name']));}

 if (empty($_POST['matric'])) {
     $errors[] = 'error';
 $matricErr = 'You forgot to enter matric number.';
 } else
 {$matric = mysqli_real_escape_string($dbcon, ($_POST['matric']));}

 if (empty($_POST['pnum'])) {
     $errors[] = 'error';
 $pnumErr = 'You forgot to enter phone number.';
 } else
 {$pnum = mysqli_real_escape_string($dbcon, ($_POST['pnum']));}

 if (empty($_POST['email'])) {
     $errors[] = 'error';
 $emailErr = 'You forgot to enter students email.';
 } else
 {$email = mysqli_real_escape_string($dbcon, ($_POST['email']));}


 if (empty($_POST['start'])) {
     $errors[] = 'error';
 $startErr = 'You forgot to enter starting date.';
 } else
 {$start = mysqli_real_escape_string($dbcon, ($_POST['start']));}

 if (empty($_POST['end'])) {
     $errors[] = 'error';
 $endErr = 'You forgot to enter ending date.';
 } else
 {$end = mysqli_real_escape_string($dbcon, ($_POST['end']));}

 if (empty($_POST['supervisor'])) {
     $errors[] = 'error';
 $supervisorErr = 'You forgot to enter supervisor name.';
 } else
 {$supervisor = mysqli_real_escape_string($dbcon, ($_POST['supervisor']));}

if (empty($_POST['indsupervisor'])) {
     $errors[] = 'error';
 $indsupervisorErr = 'You forgot to enter Industrial supervisor name.';
 } else
 {$indsupervisor = mysqli_real_escape_string($dbcon, ($_POST['indsupervisor']));}

 if (empty($_POST['school'])) {
     $errors[] = 'error';
 $schoolErr = 'You forgot to enter student school.';
 } else
 {$school = mysqli_real_escape_string($dbcon, ($_POST['school']));}

 if (empty($_POST['company'])) {
     $errors[] = 'error';
 $companyErr = 'You forgot to enter company name.';
 } else
 {$company = mysqli_real_escape_string($dbcon, ($_POST['company']));}

 if (empty($_POST['password'])) {
     $errors[] = 'error';
 $passErr = 'You forgot to enter Password.';
 } else
 {$pass = mysqli_real_escape_string($dbcon, ($_POST['password']));}

  $image = $_FILES['image']['name'];
  $tmp_dir = $_FILES['image']['tmp_name'];
  $imgSize = $_FILES['image']['size'];

  if(empty($image)){
      $errors[] = 'error';
   $imgErr = "Please Select Image File.";
  }
  else
  {
   $upload_dir = '../assets/img/student/';

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
    $q = "SELECT user_level, name, matric, image, password FROM users WHERE (matric='$matric' or name='$name')";
  $result = mysqli_query ($dbcon, $q);
  if (@mysqli_num_rows($result) == 0) {
   $q = "INSERT INTO users (user_level, name, matric, email, pnum, start_date, end_date, school, supervisor, ind_supervisor, company, image, password, date)
 VALUES ('1', '$name', '$matric', '$email', '$pnum', '$start', '$end', '$school', '$supervisor', '$indsupervisor', '$company', '$image', '$pass',  NOW() )";
   $result = @mysqli_query ($dbcon, $q);
     move_uploaded_file($tmp_dir,$upload_dir.$image);
   if ($result)
   {
   $successMSG = "<script> alert('Student Added'); </script>";
   }
   else
   {
    $errMSG = "<script> alert('An error occured please try again later'); </script>";
   }
  }else{

      $exist = '<div class="alert alert-danger"><i class="fa fa-warning"></i> Matric number or Student name already exist</div>';
  }
  }else{
      $Err = '<div class="alert alert-danger"><i class="fa fa-warning"></i> Some fields were left blank, please check</div>';
  }
 }
 if (isset($successMSG)){echo $successMSG;}
 if (isset($errMSG)){echo $errMSG;}


function supervisor(){
GLOBAL $dbcon;
$q = "SELECT name FROM users WHERE user_level=2 ORDER BY date DESC";
$result = @mysqli_query ($dbcon, $q);
if ($result) {
if (@mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
echo '<option>'.$row['name'].'</option>';
}
mysqli_free_result ($result);
}
}
}

function indsupervisor(){
GLOBAL $dbcon;
$q = "SELECT name FROM users WHERE user_level=0 ORDER BY date DESC";
$result = @mysqli_query ($dbcon, $q);
if ($result) {
if (@mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
echo '<option>'.$row['name'].'</option>';
}
mysqli_free_result ($result);
}
}
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

    <title>CRAWFORD siwes portal</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <script src="../assets/js/chart-master/Chart.js"></script>

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
     <?php include '../plugins/header.php'; ?>
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
                  	  <h4 class="mb"><i class="fa fa-plus"></i> Add Student</h4>
                      <form class="form-horizontal style-form" method="post" action="add-student" enctype="multipart/form-data">
                            <?php if(isset($Err)){ echo $Err;} ?>
                            <?php if(isset($exist)){ echo $exist;} ?>
                       <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Student Full Name</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" name="name" placeholder="Student full name" value="<?php if(isset($_POST['name'])){ echo $_POST['name'];} ?>">
                              </div>
                            <div class="col-sm-4">
                            <?php if(isset($nameErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Name Not Entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Matric Number</label>
                              <div class="col-sm-6">
                                  <input type="number" class="form-control" name="matric" placeholder="Matric Number" value="<?php if(isset($_POST['matric'])){ echo $_POST['matric'];} ?>">
                              </div>
                               <div class="col-sm-4">
                            <?php if(isset($matricErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Matric Number Not Entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Phone Number</label>
                              <div class="col-sm-6">
                                  <input type="number" class="form-control" name="pnum" placeholder="Phone Number" value="<?php if(isset($_POST['pnum'])){ echo $_POST['pnum'];} ?>">
                              </div>
                           <div class="col-sm-4">
                            <?php if(isset($pnumErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Phone Number Not Entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-6">
                                  <input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>">
                              </div>
                               <div class="col-sm-4">
                            <?php if(isset($emailErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Email Not Entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Starting Date</label>
                              <div class="col-sm-6">
                                  <input type="date" class="form-control" name="start" placeholder="Day-Month-Year" value="<?php if(isset($_POST['start'])){ echo $_POST['start'];} ?>">
                              </div>
                               <div class="col-sm-4">
                            <?php if(isset($startErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Start Date Not Entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Ending Date</label>
                              <div class="col-sm-6">
                                  <input type="date" class="form-control" name="end" placeholder="Day-Month-Year" value="<?php if(isset($_POST['end'])){ echo $_POST['end'];} ?>">
                              </div>
                               <div class="col-sm-4">
                            <?php if(isset($endErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> End Date Not Entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">School</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" name="school" placeholder="School" value="<?php if(isset($_POST['school'])){ echo $_POST['school'];} ?>">
                              </div>
                               <div class="col-sm-4">
                            <?php if(isset($schoolErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Student School Not Entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Supervisor Name</label>
                              <div class="col-sm-6">
                                  <select type="text" class="form-control" name="supervisor">
                                  <option><?php if(isset($_POST['supervisor'])){ echo $_POST['supervisor'];} ?></option>
                                  <?php supervisor(); ?>
                                  </select>
                              </div>
                               <div class="col-sm-4">
                            <?php if(isset($supervisorErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Student Supervisor Not Entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Industrial Supervisor Name</label>
                              <div class="col-sm-6">
                                  <select type="text" class="form-control" name="indsupervisor">
                                  <option><?php if(isset($_POST['indsupervisor'])){ echo $_POST['indsupervisor'];} ?></option>
                                  <?php indsupervisor(); ?>
                                  </select>
                              </div>
                               <div class="col-sm-4">
                            <?php if(isset($indsupervisorErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Industrial Supervisor Not Entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Company Name</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" name="company" placeholder="Company Name" value="<?php if(isset($_POST['company'])){ echo $_POST['company'];} ?>">
                              </div>
                               <div class="col-sm-4">
                            <?php if(isset($companyErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Company Name Not Entered</div>';} ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Student Picture</label>
                              <div class="col-sm-6">
                                  <input class="form-control" type="file" name="image" accept="files/*" />
                              </div>
                               <div class="col-sm-4">
                            <?php if(isset($imgErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Please select an image</div>';}
                                  if(isset($imgErr2)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> File Size too large</div>';}
                                  if(isset($imgErr3)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Sorry, only JPG, JPEG, PNG & GIF files are allowed</div>';}
                                   ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-6">
                                  <input class="form-control" type="text" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])){ echo $_POST['password'];} ?>">
                              </div>
                               <div class="col-sm-4">
                            <?php if(isset($passErr)){ echo'<div class="alert alert-danger"><i class="fa fa-warning"></i> Password Not Entered</div>';} ?>
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

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>
	<script src="../assets/js/zabuto_calendar.js"></script>


	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


  </body>
</html>
