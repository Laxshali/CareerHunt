<!DOCTYPE html>
<html>
    <head>
        <title>Login Your Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/loginstyle.css">
     
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
       
    </head>
    <body>

        <div class="wrapper">
            <form action="php/login.php" method="post">
                <h1>Login</h1>

                <div class="input-box">
                    <input type="email" placeholder="Email Id" name="user" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="btn" name="login">Login</button>

                <div class="register-link">
                    <p>Don't have an account? <a href="SignUp.php">Signup</a></p>
                </div>
            </form>
        </div>
        
        
    </body>
</html>