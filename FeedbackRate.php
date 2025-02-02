<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback & Rating Page</title>
    <link rel="stylesheet" href="css/FeedbackRate.css">
</head>
<body>

    <header>
        <nav>
            <label class="logo">CAREERHUNT</label>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="AboutNew.php">About Us</a></li>
                <li><a href="loginNew.php">Login</a></li>
                <li><a href="Profile.php">Profile</a></li>
                <li><a class="active" href="FeedbackRate.php">Feedback</a></li>
                <li><a href="contactnew.php">ContactUs</a></li>
                
            </ul>
        </nav>
    </header>

    
    <section id="feedback">
        <h1>Feedback</h1>
        
       
        <!-- <div class="rating">
            <h2>Rate our Service</h2>
            <div class="stars">
                <input type="radio" id="star1" name="rating" value="1"><label for="star1">★</label>
                <input type="radio" id="star2" name="rating" value="2"><label for="star2">★</label>
                <input type="radio" id="star3" name="rating" value="3"><label for="star3">★</label>
                <input type="radio" id="star4" name="rating" value="4"><label for="star4">★</label>
                <input type="radio" id="star5" name="rating" value="5"><label for="star5">★</label>
            </div>
        </div> -->

        
        <form action="php/feedback.php" method="POST">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="2" required></textarea>

            <button type="submit">Submit Feedback</button>
        </form>
    </section>

</body>
</html>
