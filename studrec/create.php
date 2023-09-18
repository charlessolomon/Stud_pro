<?php
include_once('db.php');
if(isset($_POST)){
$adnum="kis/2022/".rand(2,5000);
$fn=$_POST['fullname'];
$db=$_POST['dob'];
$gend=$_POST['gender'];
$con_add=$_POST['address'];
$adt=$_POST['addate'];
$cr=$_POST['course'];
$class=$_POST['class'];
$gname=$_POST['gname'];
$gnum=$_POST['gnum'];

mysqli_query($conn,"INSERT INTO stud_rec(adno,fullname,dob,gender,address,addate,course,class,gname,gnum) VALUES('$adnum','$fn','$db','$gend','$con_add','$adt','$cr','$class','$gname','$gnum')") or die(mysqli_error($conn));
}
?>