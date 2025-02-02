<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Registration</title>
    <link rel="stylesheet" href="css/stylecommon.css">
    <link rel="stylesheet" href="css/jobstyle.css">
    
</head>
<body>
  <header>
    <nav>
        <label class="logo">CAREERHUNT</label>
            <!-- <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="AboutNew.html">About Us</a></li>
                <li><a href="loginNew.html">Login</a></li>
                <li><a class="active" href="Jobseeker.html">Profile</a></li>
                <li><a href="FeedbackRate.html">Feedback</a></li>
                <li><a href="contactnew.html">Contact us</a></li>
            </ul> -->
    </nav>
</header>

    <div class="container">
        <h2>Employer Registration</h2>
        <form action="php/employer.php" method="POST">
            
            <div class="form-group">
                <label for="companyname">Company Name:</label>
                <input type="text" id="companyname" name="companyname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            
            <div class="form-group">
                <label for="post">Vacant post name:</label>
                <input type="text" id="post" name="post" required>
            </div>
            
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" min="0" max="50" required>
            </div>
            <div class="form-group">
                <label for="details">Other details:</label>
                <textarea id="details" name="details" rows="3" placeholder="Any other details here..." required></textarea>
            </div>
            
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>