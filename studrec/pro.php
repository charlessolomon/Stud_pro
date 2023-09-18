<?php
session_start();
include_once('db.php');
$un=$_POST['username'];
$pasw=$_POST['passw'];
$_SESSION['user']=$un;
 $sql=mysqli_query($conn,"SELECT * FROM login WHERE passw='$pasw'")or die(mysqli_error($conn));
while($row=mysqli_fetch_array($sql))
{
	$pword=$row['passw'];
	
	
}
if($pasw==$pword){
	header('location:quixlab-master/dash.php');
	//echo $pword;
}
if(!$pasw==$pword){
	$_SESSION['msg']="wrong credentials,check Username or Password try again";
	header('location:log.php');
	//echo $pword;
}
?>