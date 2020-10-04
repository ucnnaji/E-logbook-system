<?php
ob_start();
require ( '../mysqli_connect.php' ) ;
session_start();
if (!isset($_SESSION['user_level']))
/*if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 3)) */
{ header("Location: ../login");
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

    <title>CRAWFORD siwes portal</title>

    <!-- Bootstrap core CSS -->
      <style>

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}


/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>

    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
       <script src="../assets/js/jquery.js"></script>

<script src="../assets/jquery-1.10.2.min.js"></script>

    <script src="../assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<?php

    function username($id){
        GLOBAL $dbcon;
    $q = "SELECT id, user_level, name, matric, email, pnum, start_date, end_date, supervisor, company, image, password, date FROM users WHERE id='$id'";
$result = @mysqli_query ($dbcon, $q);
if ($result) {
if (@mysqli_num_rows($result) == 1) {
 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
 echo ' '.$row['name'].' ';
 }
 mysqli_free_result ($result);
 }else{
	 echo'<div class="alert alert-danger">User not found</div>';
 }
 }
}

    ?>
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
                <div id="myModal" class="modal">
  <div class="clos btn btn-danger pull-right">&times;</div>
  <img class="modal-content" id="imgs" width="300" height="500">
  <div id="caption"></div>
</div>

                      <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <div class="btn btn-primary"><?php username($_GET['id']); ?></div>
                  	  <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
    <?php
    $id = $_GET['id'];
    $q = "SELECT id, week, start_date, monday, tuesday, wednessday, thursday, friday, saturday, image, status1, status2, status3 FROM report WHERE user_id='$id'";
$result = @mysqli_query ($dbcon, $q);

if ($result) {
    echo'
      <thead>
                              <tr>
                                  <th>Week</th>
                                  <th>Starting Date</th>
                                  <th>Monday</th>
                                  <th>Tuesday</th>
                                  <th>Wednessday</th>
                                  <th>Thursday</th>
                                  <th>Friday</th>
                                  <th>Saturday</th>
                                  <th>Image</th>
                                  <th>Supervisor Remark</th>
                                  <th>Industry Remark</th>
                                  <th>Overall Remark</th>
                                  <th>Action</th>
                              </tr>
                              </thead>

    ';
if(@mysqli_num_rows($result) > 0){
    echo' <tbody>';
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

echo '
 <tr>
                                  <td>'.$row['week'].'</td>
                                  <td>'.$row['start_date'].'</td>
                                  <td>'.$row['monday'].'</td>
                                  <td>'.$row['tuesday'].'</td>
                                  <td>'.$row['wednessday'].'</td>
                                  <td>'.$row['thursday'].'</td>
                                  <td>'.$row['friday'].'</td>
                                  <td>'.$row['saturday'].'</td>
                                  <td><img width="80%" height="15%" src="../assets/img/logimage/'.$row['image'].'" class="userimg myImg" alt="'.$row['week'].' : '.$row['start_date'].'"></td>
                                  <td>';
                                  if($row['status1'] == 'pending'){echo '<div class="btn btn-info btn-xs">Pending...</div>';}
                                  elseif($row['status1'] == 'approve'){echo '<div class="btn btn-success btn-xs">Approved</div>';}
                                  elseif($row['status1'] == 'disapprove'){echo '<div class="btn btn-danger btn-xs">Disapproved</div>';}
echo'
                                  </td>
                                   <td>';
                                  if($row['status2'] == 'pending'){echo '<div class="btn btn-info btn-xs">Pending...</div>';}
                                  elseif($row['status2'] == 'approve'){echo '<div class="btn btn-success btn-xs">Approved</div>';}
                                  elseif($row['status2'] == 'disapprove'){echo '<div class="btn btn-danger btn-xs">Disapproved</div>';}
echo'

                                  </td>
                                  <td>';
                                  if($row['status3'] == 'pending'){echo '<div class="btn btn-info btn-xs">Pending...</div>';}
                                  elseif($row['status3'] == 'approve'){echo '<div class="btn btn-success btn-xs">Approved</div>';}
                                  elseif($row['status3'] == 'disapprove'){echo '<div class="btn btn-danger btn-xs">Disapproved</div>';}
echo'

                                  </td>
                                  <td>
                                  <a href="action?id='.$row['id'].'&id2='.$id.'&action=approve"><button class="btn btn-success btn-xs"><i class="fa fa-check"></i> Approve</button></a>
                                  <a href="action?id='.$row['id'].'&id2='.$id.'&action=disapprove"><button class="btn btn-danger btn-xs"><i class="fa fa-cancle"></i> Disapprove</button></a>
                                  </td>
                              </tr>


';


	}
	echo ' </tbody>';
}else{
	echo '<div class="alert alert-info">No Reports yet</div>';
}


}
?>


                          </table>
                          </section>

                    </div></div></div>



                  </div><!-- /col-lg-9 END SECTION MIDDLE -->


              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
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


	<script>
  var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.myImg');
var modalImg = $("#imgs");
var captionText = document.getElementById("caption");
$('.myImg').click(function(){
    modal.style.display = "block";
    var newSrc = this.src;
    modalImg.attr('src', newSrc);
    captionText.innerHTML = this.alt;
});
// Get the <span> element that closes the modal
var div = document.getElementsByClassName("clos")[0];
// When the user clicks on <span> (x), close the modal
div.onclick = function() {
  modal.style.display = "none";
}


      </script>

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
