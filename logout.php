<?php
include "config.php";
error_reporting(0); 
session_start();
// session_destroy();
date_default_timezone_set('Asia/Kolkata');
$sql = "SELECT * FROM emp_sessions WHERE id='".$_SESSION['session_id']."'";

	$result = $db->prepare($sql); 
	$result->execute(); 
	$row = $result->fetchObject();



	$ptime = date("Y-m-d h:i:s");
	
	$time = date($row->login_time);
	// echo $ptime."<br>";
	// echo $time."<br>";
	$diff = strtotime($ptime)-strtotime($time);
	$total_time= round(abs($diff) / 60,0);
	// echo $total_time."Mins";

	$query1="UPDATE `emp_sessions` SET `logout_time` = '".$ptime."', `total_session_time` = '".$total_time."' WHERE `id` = '".$_SESSION['session_id']."' AND `emp_id` = '".$_SESSION['eid']."'";
	// echo $query1;
	$query = $db->prepare($query1);
		
	if($query->execute()){
		// echo "lkjd";
		session_destroy();
		// echo $ptime." ".$row->logintime;
		
		header("Location: index.php");
	}



?>