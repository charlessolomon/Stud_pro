<?php
$server="localhost";
$user="root";
$password="";
$dby="school_portal";
$conn=mysqli_connect($server,$user,$password,$dby);
if(!$conn){
	die('error connecting db:'. mysqli_connect_error());
}


?>