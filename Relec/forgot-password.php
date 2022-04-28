<?php
    session_start();
    session_unset();
    include_once('./dbconfig.php'); 
    $errors = array();
    //if user click continue button in forgot password form
    if(isset($_POST['femail'])){
        $email = $_POST['Email'];
        $check_email = "SELECT * FROM `users` WHERE `email` = '$email'";
        $res = $conn->query($check_email);
        if($res->num_rows > 0)
        {
            $fetch = $res->fetch_assoc();
            $email = $fetch['email'];
            $otp = rand(999999, 111111);
            $subject = "Password Reset Code";
            $message = "<h4><br>\tYour One Time Password (OTP) for Password Reset in RELEC is <b style='color: blue;'>$otp</b>.</h4><br>
            <h4>Do not share this OTP with anyone.<br><br>Team RELEC</h4>";
            $from = "info@relec.tech";
            $headers = "Content-Type: text/html; charset=UTF-8\r\nFrom: RELEC ". $from;
            if(mail($email, $subject, $message, $headers)){
                $info = "We've sent a password reset otp to your email - $email";
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $fetch['name'];
                $_SESSION['info'] = $info;
                $_SESSION['otp'] = $otp;
                header('location: reset-code.php');
            }
            else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }
        else{
            $errors['email'] = "This user does not exist!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

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
    <link rel="stylesheet" href="./CSS/Otp.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="container nav_container">
            <a href="#">
                <h2>RELEC</h3>
            </a>
            <ul class="nav_menu">
                <li><a href="./default.php">Home</a></li>
                <li><a href="./About.php">About </a></li>
                <li><a href="./Courses.php">Courses</a></li>
                <li><a href="./Contact.php">Contact</a></li>>
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
                <div class="aside_image">
                    <img src="./Images/kingdom-logged-out.png">
                </div>
            </aside>
            <form class="contact__form" action="./forgot-password.php" method="post" data-aos="fade-left">
                <h2 class="text-center">Forgot Password</h2>
                <?php
                if (count($errors) > 0) {
                    ?>
                <div class="alert alert-danger text-center">
                    <?php
                    foreach ($errors as $error) {
                        echo $error;
                        echo "<br>";
                    } ?>
                </div>
                <?php
                    }
                ?>
                <input type="email" name="Email" placeholder="Enter Email" required>
                <div style="margin: auto; margin-top: 2rem;">
                    <button type="submit" class="cbtn" name="femail">Next</button>
                </div>
                <a class="text-center mt-5" href="./login-user.php">go to Login</a>
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
                    </p> class="uil uil-phone-alt mx-2"></i> 8905416360
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