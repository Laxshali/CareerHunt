<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>
  <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body style="background-image: url(images/lap3.jpg);">

    <div class="wrapper">
  <form action="php/SignUp.php" method="post" id="signup">

    <h1>Sign up</h1>

    <div class="input-box">
        <ion-icon name="mail-outline"></ion-icon>
        <input type="email" name="email" placeholder="Email" required>
        
    </div>

    <div class="input-box">
        <ion-icon name="lock-closed-outline"></ion-icon>
        <input type="password" name="password_has" id ="password" placeholder="Password" required>
        
    </div>

    <div class="input-box">
        <ion-icon name="lock-closed-outline"></ion-icon>
        <input type="password" id="cpassword" placeholder="Confirm Password" required>
       
    </div>

    <div class="error_message" id="error_message"></div>

     <button type="submit" name="submit" class="btn">Sign up</button>

     
    <div class="register-link">
        <p>Already have an account? <a href="loginNew.php">  Login </a></p>
    </div>

</form>
</div>


<script src="js/signup.js"></script>
</body>
</html>