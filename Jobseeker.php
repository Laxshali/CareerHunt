<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Registration</title>
    <link rel="stylesheet" href="css/jobstyle.css">
    <link rel="stylesheet" href="css/stylecommon.css">
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
        <h2>Job Seeker Registration</h2>
        <form action="php/jobseeker.php" method="POST">
            
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="text">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            
            <div class="form-group">
                <label for="qualification">Highest Qualification:</label>
                <select id="qualification" name="qualification" required>
                    <option value="">Select</option>
                    <option value="highschool">High School</option>
                    <option value="bachelors">Bachelor's Degree</option>
                    <option value="masters">Master's Degree</option>
                    <option value="phd">PhD</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="experience">Years of Experience:</label>
                <input type="number" id="experience" name="experience" min="0" max="50" required>
            </div>
            
            <div class="form-group">
                <label for="skills">Skills:</label>
                <textarea id="skills" name="skills" rows="4" placeholder="List your skills here..." required></textarea>
            </div>
            
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>