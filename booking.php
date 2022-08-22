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
    <link rel="stylesheet" href="booking.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&family=Poppins:wght@200;300;400;600;700&family=Rubik+Wet+Paint&family=Ubuntu:ital,wght@1,300&family=Vazirmatn:wght@200&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/8e9baaeb12.js" crossorigin="anonymous"></script>
</head>

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

    <section class="booking1">
        <div class="container">
            <div class="container-time">
                <h2 class="heading">Time Open</h2>
                <h3 class="heading-days">Monday to Sunday</h3>
                <p> 6:00 AM-1:00 PM </p>
                <p> 3:00 PM-9:00 PM </p>

                <hr>

                <h4 class="heading-phone">Call us : +91-9634977817, +91-9760600739</h4>
            </div>

            <div class="container-form">
                <form action="bookingForm.php" method="post" enctype="multipart/form-data">
                    <h2 class="heading heading-yellow">Vehicle Booking</h2>
                    <div class="form-field">
                        <p> Your Name : </p>
                        <input type="text" placeholder="Enter Your Name" name="name" required>
                    </div>
                    <div class="form-field">
                        <p> Email : </p>
                        <input type="email" placeholder="Enter Your Email" name="email" required>
                    </div>
                    <div class="form-field">
                        <p> Phone : </p>
                        <input type="number" placeholder="Enter Phone No"name="phone" required>
                    </div>
                    <div class="form-field">
                        <p> Uplode Driving Lisence : </p>
                        <input class="image" type="file" name="dl_img" id="dl" placeholder="Uplode Driving Licence"
                            required>
                    </div>
                    <div class="form-field">
                        <p> Date of Booking from : </p>
                        <input type="date" name="booking_from">
                    </div>
                    <div class="form-field">
                        <p> Date of Booking to: </p>
                        <input type="date" name="booking_to">
                    </div>
                    <div class="form-field">
                        <p> Time to get Vehicle : </p>
                        <input type="time" name="time">
                    </div>
                    <div class="form-field">
                        <p> Type of Vehicle You Need : </p>
                        <select name="select" name="vehicle_type">
                            <option value="Scooty">Scooty</option>
                            <option value="Bike">Bike</option>
                            <option value="Car">Car</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <p> Quantity : </p>
                        <select name="select" name="quantity">
                            <option >1</option>
                            <option >2</option>
                            <option >3</option>
                            <option >4</option>
                            <option >5</option>
                            <option >6</option>
                            <option >7</option>
                        </select>
                    </div>
                    <button type="submit" class="bbttnn">Confirm</button>
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
            <a href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fmail.google.com&service=mail&ec=GAlAFw&flowName=GlifWebSignIn&flowEntry=AddSession"
                target="_blank">
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