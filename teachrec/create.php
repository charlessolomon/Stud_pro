<?php
include_once('db.php');
$td="kis.tch/2022/".rand(2,500);
$fn=$_POST['fullname'];
$dc=$_POST['dept_code'];
$sub=$_POST['subject'];
$class=$_POST['class'];

mysqli_query($conn,"INSERT INTO teach_rec(teach_id,fullname,dept_code,subject,class) VALUES('$td','$fn','$dc','$sub','$class')")


if($save=('location:add_teach.php')){
	($_SESSION['messages']="Result upload sucessful");
	header('location:contectual.php');
}
else{
	($_SESSION['messages()']="Result upload Fail");
	header('location:add_teach.php');		
}
?>
