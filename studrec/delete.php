<?php
include_once 'db.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=$db_con->prepare("DELETE FROM stud_rec WHERE emp_id=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>