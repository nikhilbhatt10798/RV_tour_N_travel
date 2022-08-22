<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Ventures-Ride Safe and Visit all the uttrakhand</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&family=Poppins:wght@200;300;400;600;700&family=Rubik+Wet+Paint&family=Ubuntu:ital,wght@1,300&family=Vazirmatn:wght@200&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/8e9baaeb12.js" crossorigin="anonymous"></script>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="img/66.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html" target="_blank">BLOG</a>
                    </li>
                    <li><a href="services.html" target="_blank">SERVICES</a></li>
                    <li><a href="contact.php" target="_blank"> CONTACT </a></li>
                    <li><a href="booking.php" target="_blank"> BOOKING </a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        
    </section>

<!--------------------------------------Contact Us----------------------------------------->
<section class="location">
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27578.565138301532!2d78.7719403325371!3d30.227931536200874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3909a58434d2979d%3A0x854f99d49c9387e7!2sSrinagar%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1656139447162!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>Srinagar Garhwal , Pauri</h5>
                    <p>Uttarakhand , 246174</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+91-9634977817 , +91-9760600739</h5>
                    <p>Monday to Saturday, 6AM to 9PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>venturesride444@gmail.com</h5>
                    <p>Email us for query</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form action="contactForm.php" method="POST">
                <input type="text" name="uname" placeholder="Enter your name" required>
                <input type="phone" name="phone" placeholder="Enter your Phone Number" required>
                <input type="email" name="email" placeholder="Enter your Email ID" required>
                <input type="text" name="subject" placeholder="Enter Subject" required>
                <textarea rows="8" name="message" placeholder="message" required></textarea>
                <button type="submit" name="submit" value="submit" class="hero-btn red-btn">Send Message</button>
            </form>
            <?php
            if(isset($_SESSION['msg'])){
                if($_SESSION['msg']=='done'){
            ?>
            <div>
                Submited Successfully!
                </div>

            <?php
                }
                else if($_SESSION['msg']=='not done'){
                    echo '   <div>
                    NOT Submited Successfully!
                    </div>';
                }
            }
                unset($_SESSION['msg']);
            ?>
        </div>
    </div>

</section>
    <!---------footer------->
    <section class="footer">
        <h4>About us</h4>
        <p>Ride Ventures - Bike Rental
            Srinagar Garhwal Based Bike Rental Company.<br>
            Renting Bikes and Scooters All Over Uttarakhand.
            Thousands Of Booking Served.<br>
            Ride Safe and Responsibily.</p>
        <div class="icons">
            <a href="https://www.facebook.com/Ride-Ventures-107709503920173" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>

            <a href="https://twitter.com/i/flow/login" target="_blank">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/ride.ventures/" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://wa.me/c/916395726624" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fmail.google.com&service=mail&ec=GAlAFw&flowName=GlifWebSignIn&flowEntry=AddSession" target="_blank">
                <i class="fa-solid fa-envelope"></i>
        </div>
        </a>
        <p class="ride">Made with <i id="heart" class="fa-solid fa-heart"> RIDE VENTURES</i></p>
    </section>



   
    <!---------Javascript for toogle menu------->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

</body>

</html>