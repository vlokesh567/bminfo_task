<?php
include "../config.php";
session_start();
	$sql = "SELECT * FROM admin_details WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
	// echo $sql;
	$result = $db->prepare($sql); 
	$result->execute(); 
	$row_count = $result->rowCount();

	if($row_count>0){
	    $row = $result->fetchObject();
	    // echo "string";
	     $_SESSION['email'] =$row->email;
	     $_SESSION['name'] =$row->name;
	     header("Location: index.php");
	    // echo "ok";
	    // $emp_id = $row->id;
	    // $date = date("yy-m-d");
	    // $query1="INSERT INTO `emp_sessions` (`emp_id`, `date`) VALUES ('$emp_id', '$date')";
		// echo $query1;
		// $query = $db->prepare($query1);    
		// $query->execute();
		// if($query->execute()){
		//  $_SESSION['session_id'] = $db->lastInsertId();
		//  $_SESSION['email'] =$row->email;
	 //     $_SESSION['name'] =$row->ename;
	 //     $_SESSION['eid'] =$row->id;	
	 //     header("Location: employee.php");
		// }

	}
	else{
	    echo "0";
	}


?>