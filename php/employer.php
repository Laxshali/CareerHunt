<?php
	require_once 'dbconf.php';
	function AddData($connect,$companyname,$email,$phone_no,$vacant_post,$address,$others){
		try {            
		
			$sql = "INSERT INTO employer VALUES('$companyname','$email','$phone_no','$vacant_post','$address','$others')";
			
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
		$companyname=$_POST['companyname'];
		$email=$_POST['email'];
		$phone_no=$_POST['phone'];
		$vacant_post=$_POST['post'];
		$address=$_POST['address'];
		$others=$_POST['details'];
		AddData($connect,$companyname,$email,$phone_no,$vacant_post,$address,$others);

	}
	

	?>