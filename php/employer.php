<?php
	require_once 'dbconf.php';
	function AddData($connect,$email,$password){
		try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
		
			$sql = "INSERT INTO user VALUES('$email','$hashed_password')";
			
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
		$email = $_POST['email'];
		$password = $_POST['password_has'];
		AddData($connect,$email,$password);
	}
	

	?>