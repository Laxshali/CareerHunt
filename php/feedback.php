<?php
	require_once 'dbconf.php';
	function AddData($connect,$name,$email,$feedback){
		try {            
		
			$sql = "INSERT INTO feedback VALUES('$name','$email','$feedback')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				// echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../FeedbackRate.php');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$feedback=$_POST['message'];
		
		AddData($connect,$name,$email,$feedback);

	}
	

	?>