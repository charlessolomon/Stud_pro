<?php
include_once('db.php');

$adnum=$_POST['adno'];
$fn=$_POST['fullname'];
$db=$_POST['dobb'];
$gend=$_POST['gender'];
$con_add=$_POST['contaddress'];
$adt=$_POST['addate'];
$cr=$_POST['course'];
$klas=$_POST['klass'];

mysqli_query($conn,"INSERT INTO stud_rec(ad_no,fullname,dob,gender,cont_address,ad_date,klass) VALUES('$adnum','$fn','$db','$gend','$con_add','$adt','$klas')")

?>