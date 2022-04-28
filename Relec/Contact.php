<?php
session_start();
session_unset();
session_destroy();
include_once('./dbconfig.php');

if (isset($_POST['msg'])) {
    $fname = $_POST['Firstname'];
    $lname = $_POST['Lastname'];
    $email = $_POST['Email'];
    $msg = $_POST['Message'];
    $sql = "INSERT INTO `contact` (`fid`, `fname`, `lname`, `email`, `msg`, `dt`) VALUES (NULL, '$fname', '$lname', '$email', '$msg', current_timestamp())";
    $res1 = $conn->query($sql);
    $from = "info@relec.tech";
    $fromName="Team RELEC";
    $subject="Contact to RELEC";
    $headers = "Content-Type: text/html; charset=UTF-8\r\nFrom: RELEC ". $from;
    $message="<h4> Dear $fname,<br><br>\tThank you for Connecting with RELEC.</h4>
    <h4>Your Message or Suggestions will be reviewed and replied as soon as possible.</h4><br> 
    <h4>Team RELEC</h4>";
    if(mail($email, $subject, $message, $headers)){
        $from = "info@relec.tech";
        $fromName="Team RELEC";
        $subject="Contact to RELEC";
        $email1="relec.tech@gmail.com";
        $headers = "Content-Type: text/html; charset=UTF-8\r\nFrom: RELEC ". $from;
        $message="<h4> Dear karan,<br><br>\tSome Person Contacted RELEC throught contact form below are details of form.</h4>
        <h4>Name : $fname $lname</h4><h4>Email : $email</h4><h4>Message : $msg</h4><br>";
        if(mail($email1, $subject, $message, $headers)){
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- /* GOOGLE FONTS (MONTSERRAT) */ -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- rel="stylesheet"> -->
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/Contact.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <nav>
        <div class="container nav_container">
            <a href="#">
                <h2>RELEC</h3>
            </a>
            <ul class="nav_menu">
                <li><a href="./default.php">Home</a></li>
                <li><a href="./About.php">About </a></li>
                <li><a href="./Courses.php">Courses</a></li>
                <li class="active"><a href="./Contact.php">Contact</a></li>
                <div class="btn">
                    <a href="./login-user.php" class="btn btn-light text-dark login">Login</a>
                </div> 
            </ul>
            <!-- <div class="btn"> -->
                <button id="open-menu-btn"><i class="uil uil-bars"></i></button> 
                <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
            <!-- </div> -->
        </div>

    </nav>

    <section class="ctn">
        <div class="container container__contact">
            <aside class="contact_aside" data-aos="fade-right">
                <div class="aside_image aimg">
                    <img src="./Images/5.png">
                </div>
                <h2>Contact Us</h2>
                <ul class="contact_details">
                    <li>
                        <h6><i class="uil uil-phone"></i></h6>
                        <h6>1234567890</h6 >
                    </li>
                    <li>
                        <h6><i class="uil uil-envelope"></i></h6>
                        <h6>relectech@gmail.com</h6>
                    <li>
                        <h6><i class="uil uil-location-point"></i></h6>
                        <h6>abc</h6>
                    </li>
                </ul>
                <ul class="contact_socials">
                    <li><a href="https://facebook.com"><i class="uil uil-facebook-f"></i></a></li>
                    <li><a href="https://instagram.com"><i class="uil uil-instagram"></i></a></li>
                    <li><a href="https://twitter.com"><i class="uil uil-twitter"></i></a> </li>
                    <li><a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a></li>
                </ul>
            </aside>
            <form class="contact__form" data-aos="fade-left" action="./Contact.php" method="post">
                <div class="form__name">
                    <input type="text" name="Firstname" placeholder="First Name" required data-aos="fade-right">
                    <input type="text" name="Lastname" placeholder="Last Name" required data-aos="fade-right">
                </div>
                <input type="email" name="Email" placeholder="Your Email Address" required data-aos="fade-right">
                <textarea name="Message" rows="3" placeholder="Message" required data-aos="fade-right"></textarea>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="cbtn" data-aos="zoom-in" name="msg">Send Message</button>
                </div>
            </form>
        </div>
    </section>



   <!-- Footer Section -->
   <footer class="container-fluid text-center text-white">
        <!-- Grid container -->
        <div class="footer1 row">
            <div class="col-md-2 py-4">
                <!-- <img src="./Images/logo.jpg" alt="" style="width: 50px; height: 50px;"> -->
                <a class="fs-4 px-2" style="color: white; text-decoration: none;" href="#"><b
                        style="letter-spacing: 0.1rem;">RELEC</b></a>
            </div>
            <!-- Section: Social media -->
            <div class="col-md-10 Social">
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-2" target="blank"
                    href="https://www.instagram.com/" role="button"><i
                        class="uil uil-instagram"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-2" target="blank"
                    href="https://twitter.com/" role="button"><i class="uil uil-twitter-alt"></i></a>

                <!-- Linkdnin -->
                <a class="btn btn-outline-light btn-floating m-2" target="blank"
                    href="https://in.linkedin.com/" role="button"><i
                        class="uil uil-linkedin-alt"></i></a>

                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-2" target="blank"
                    href="https://m.facebook.com/" role="button"><i
                        class="uil uil-facebook-f"></i></a>

            </div>
            <!-- Section: Social media -->
        </div>
        <div class="footer2">
            <!-- Section: Links -->
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <!-- <div class="row"> -->
                <!-- Links -->
                <div class="raw contact">
                    <p class="col-md-3"><i class="uil uil-location-pin-alt mx-2"></i>
                    abc
                    </p>
                    <p class="col-md-4">
                        <i class="uil uil-envelope-alt mx-2"></i>
                        relectech@gmail.com
                    </p>
                    <p class="col-md-2">
                        <i class="uil uil-phone-alt mx-2"></i> 1234567890
                    </p>
                    <!--Grid column-->
                    <div class="col-md-3">
                        <p class="text-uppercase fs-5">Links</p>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="./default.php" class="text-white">Home</a>
                            </li>
                            <li>
                                <a href="./About.php" class="text-white">About</a>
                            </li>
                            <li>
                                <a href="./Courses.php" class="text-white">Courses</a>
                            </li>
                            <li>
                                <a href="./Contact.php" class="text-white">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!-- </div> -->
                <!--Grid column-->
            </div>
            <!--Grid row-->
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="footer3 text-center row p-3">
            <div class="col-12">
                <b>© 2022 Copyright: RELEC</b>
            </div>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- End of Footer Section -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    <script src="./JS/index.js"></script>
</body>

</html>