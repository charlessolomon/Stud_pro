<?php
session_start();
include_once('db.php');


$adnum=$_SESSION['adno'];
$fn=$_SESSION['fullname'];
//$cr=$_SESSION['course'];
$sublist=implode(', ',$_POST['subject']);
$calist=implode(', ',$_POST['ca']);
$examlist=implode(', ',$_POST['exam']);
$t=0;
$subjectlist=explode(', ', $sublist);
$subjectcalist=explode(', ', $calist);
$subjectexamlist=explode(', ', $examlist);
$arraylength=count($subjectlist);
while($t<$arraylength){
	$subject=$subjectlist[$t];
	$cas=$subjectcalist[$t];
	$exams=$subjectexamlist[$t];
	$total=$cas+$exams;
	if($total>=70){
		$grade="A";
	}
	if($total>=60 AND $total<70){
		$grade="B";
	}
	if($total>=50 AND $total<60){
		$grade="C";
	}
	if($total>=45 AND $total<50){
		$grade="D";
	}
	if($total>=40 AND $total<45){
		$grade="E";
	}
	if($total<40){
		$grade="F";
}

 if($save=('location:resultupload.php')){
	($_SESSION['messages']="Result upload sucessful");
	header('location:result.php');
}
else{
	($_SESSION['messages()']="Result upload Fail");
	header('location:resultupload.php');		
}

	
	mysqli_query($conn,"INSERT INTO result_bank (ad_no,stname,course,subject,ca,exam,totalscore,grade) VALUES ('$adnum','$stname','$cr','$subjects','$cas','$exams','$total','$grade')")or die(mysqli_error($conn));
$t=$t+1;
}

echo "result upload successful";
?>