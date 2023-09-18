<?php
session_start();
include_once('db.php');
$dc=$_POST['dept_code'];
$td=$_POST['teach_id'];
$fn=$_POST['fullname'];
$sub=$_POST['subject'];
$_SESSION['klass']=$_POST['klass'];

 $sql=mysqli_query($conn,"SELECT * FROM teach_rec WHERE teach_id='$td'")or die(mysqli_error($conn));
while($row=mysqli_fetch_array($sql))
{
	$teach_id=$row['teach_id'];
	
	
}
if($td==$teach_id){
	//$_SESSION['class']
	header('location:find_result.php');
	//echo $pword;
}
if(!$td==$teach_id){
	$_SESSION['msg']="Wrong credentials,Check Department code or Teacher id try again";
	header('location:login_teach.php');
	//echo $pword;
}
?>