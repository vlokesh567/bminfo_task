<?php
include "config.php";
session_start();
	$sql = "SELECT * FROM employees WHERE email='".$_POST['email']."' AND epassword='".$_POST['password']."'";

	$result = $db->prepare($sql); 
	$result->execute(); 
	$row_count = $result->rowCount();

	if($row_count>0){
	    $row = $result->fetchObject();
	    // echo "ok";
	    date_default_timezone_set('Asia/Kolkata');
	    $emp_id = $row->id;
	    $date = date("yy-m-d");
	    $Logintime = date("Y-m-d h:i:s");
	    $query1="INSERT INTO `emp_sessions` (`emp_id`, `date`, `login_time`) VALUES ('$emp_id', '$date', '$Logintime')";
		// echo $query1;
		$query = $db->prepare($query1);    
		// $query->execute();
		if($query->execute()){
		 $_SESSION['session_id'] = $db->lastInsertId();
		 $_SESSION['email'] =$row->email;
	     $_SESSION['name'] =$row->ename;
	     $_SESSION['eid'] =$row->id;	
	     header("Location: employee.php");
		}

		}
		else{
		    echo "<script>
alert('Please Provide Correct Details');
window.location.href='login.php';
</script>";
		}


?>