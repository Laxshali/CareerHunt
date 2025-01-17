<?php
require_once 'dbconf.php';

if (isset($_POST['login'])) {
    $username = $_POST["user"];
    $password = $_POST["password"];
    
   
    $sql = "SELECT Mail,Password FROM user WHERE Mail = '$username'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["Password"]; 

       
        if (password_verify($password, $hashedPassword)) {
           // session_start(); 
            
                header("Location: ../Profile.php");
                exit; 
        } else {
            $error = "Invalid username or password.";
        }
    }
    $connect->close(); 
    header("Location: ../login.php?error=" . urlencode($error));
    exit;
}
?>