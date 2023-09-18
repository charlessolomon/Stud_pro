<?php
session_start();
error_reporting(0);
if(!isset($_SERVER['HTTP_REFERER'])){
	header('location:admin_form.php');
	exit;
}

$role=$_SESSION['role'];
if ($role=='admin'){
  $usd=$_SESSION['userid'];
  $_SESSION['userid']=$usd;		
  include_once"include.php";
}elseif ($role=='teacher') {
  $usd=$_SESSION['userid'];
  $_SESSION['userid']=$usd;
  include_once"include_teach.php";
}elseif ($role=='student') {
  $usd=$_SESSION['userid'];
  $_SESSION['userid']=$usd;
  include_once"include_stud.php";
}
?>