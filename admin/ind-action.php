<?php 
ob_start();
require ( '../mysqli_connect.php' ) ;
session_start(); 
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)) 
{ header("Location: ../login");  
exit(); 
}

$id = $_GET['id'];
$id2 = $_GET['id2'];
$action = $_GET['action'];

if($action == 'approve'){
    
    $q="UPDATE report SET status2='approve' WHERE id='$id'";
    $result = @mysqli_query ($dbcon, $q);
    header("Location: ind-student-log?id=$id2");
    
}elseif($action == 'disapprove'){
    
     $q="UPDATE report SET status2='disapprove' WHERE id='$id'";
    $result = @mysqli_query ($dbcon, $q);
    header("Location: ind-student-log?id=$id2");
    
}else{
    
    
}


















?>