<?php
include_once('db.php');
$adnum=$_POST['ad_no'];
$fn=$_POST['fullname'];
$dob=$_POST['dob'];
$gen=$_POST['gender'];
$cont_add=$_POST['cont_address'];
$dat=$_POST['ad_date'];
$klas=$_POST['klass'];
mysqli_query($conn,"INSERT INTO stud_rec(ad_no,fullname,dob,gender,cont_address,ad_date,klass) VALUES($adnum,$fn,$dob,$gen,$cont_add,$dat,$klas)")
?>
<html>
<?php
$result=mysqli_query($conn,SELECT * FROM stud rec))
?>
</html>