<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="css/contactstyle.css">
        <link rel="stylesheet" href="css/stylecommon.css">
    </head>

    <body>
        <nav>
            <label class="logo">CAREERHUNT</label>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="AboutNew.php">About Us</a></li>
                <li><a href="loginNew.php">Login</a></li>
                <li><a href="Profile.php">Profile</a></li>
                <li><a href="FeedbackRate.php">Feedback</a></li>
                <li><a class="active" href="contactnew.php">Contact us</a></li>
            </ul>
        </nav>
        <section class="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <div class="contact-wrapper">
                    <div class="contact-form">
                        <h3>Send us message</h3>
                        <form action="php/contactus.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Your name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Your message"></textarea>
                            </div>

                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <p><i class="fas fa-phone"></i>076-2316876</p>
                        <p><i class="fas fa-envelope"></i>shalini16@gmail.com</p>
                        <p><i class="fas fa-map-marker-alt"></i>No16, Pointpedro, Jaffna</p>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>