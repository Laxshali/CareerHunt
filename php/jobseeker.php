<?php
	require_once 'dbconf.php';
	function AddData($connect,$fullname,$email,$gender,$phone_no,$qualification,$experience,$skills){
		try {            
		
			$sql = "INSERT INTO jobseeker VALUES('$fullname','$email','$gender','$phone_no','$qualification','$experience','$skills')";
			
			$result = mysqli_query($connect,$sql);
			if ($result) {
				// echo "create Account sucessfully";
			} else {
				die("Error ".mysqli_error($connect));
			}
            header('Location: ../index.html');
            exit;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$fullname=$_POST['fullname'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$phone_no=$_POST['phone'];
		$qualification=$_POST['qualification'];
		$experience=$_POST['experience'];
        $skills=$_POST['skills'];
		AddData($connect,$fullname,$email,$gender,$phone_no,$qualification,$experience,$skills);

	}
	

	?>