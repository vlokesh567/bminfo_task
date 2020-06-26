<?php
include "config.php";
error_reporting(0); 
session_start();
// session_destroy();
date_default_timezone_set('Asia/Kolkata');
$sql = "SELECT * FROM employees WHERE id='".$_SESSION['eid']."'";

	$result = $db->prepare($sql); 
	$result->execute(); 
	$row = $result->fetchObject();

	$ptime = date("Y-m-d h:i:s");

	$query1="UPDATE `emp_sessions` SET `logout_time` = '".$ptime."' WHERE `id` = '".$_SESSION['session_id']."' AND `emp_id` = '".$_SESSION['eid']."'";
	// echo $query1;
	$query = $db->prepare($query1);
		
	if($query->execute()){
		// echo "lkjd";
		session_destroy();
		header("Location: index.php");
	}



?>