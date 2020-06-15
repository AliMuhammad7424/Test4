<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$_name = $_POST['name'];
	$_email = $_POST['email'];
	$_password = $_POST['password'];
	
	$_password = password_hash($password, PASSWORD_DEFAULT);
	
	require_once 'connect.php';
	
	$sql ="INSERT INTO usr_tbl(name,email,password) VALUES ('$name','$email',$password)";
	if( mysqli_query($conn, $sql) ){
		$result["success"] ="1";
		$result["success"] ="success";

		echo json_encode($result);
		mysqi_close($conn); 

		} else{
			$result["success"] ="0";
		    $result["success"] ="error";

		echo json_encode($result);
		mysqi_close($conn);
			 
		}
	}


 ?>