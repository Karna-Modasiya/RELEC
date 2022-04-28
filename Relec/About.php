<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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
    <link rel="stylesheet" href="./CSS/About.css">

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
                <li class="active"><a href="./About.php">About </a></li>
                <li><a href="./Courses.php">Courses</a></li>
                <li><a href="./Contact.php">Contact</a></li>
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

    <header>
        <div class="container container__header">
            <div class="header__left aimg" data-aos="fade-right">
                <img src="./Images/6.png" alt="">
                <!-- <video src="./Images/3.mp4"></video> -->
            </div>
            <div class="header__right" data-aos="fade-left">
                <h1><b>Let’s build the future of education together</b></h1>
                <p>Committed to educating and nurturing all students so they may grow towards responsible global citizenship.</p>
            </div>
        </div>
    </header>

    <section class="teams">
        <h2>Team</h2>
        <div class="container container__team">
            <article class="team__member" data-aos="fade-right">
                <div class="team__image">
                    <img src="./Images/dummy-profile.png" alt="">
                </div>
                <div class="team__info">
                    <h4>Person 1</h4>
                    <p>Leader</p>
                </div>
            </article>
            <article class="team__member" data-aos="fade-right">
                <div class="team__image">
                    <img src="./Images/dummy-profile.png" alt="">
                </div>
                <div class="team__info">
                    <h4>Person 2</h4>
                    <p>Team Member</p>
                </div>
            </article>
            <article class="team__member" data-aos="fade-left">
                <div class="team__image">
                    <img src="./Images/dummy-profile.png" alt="">
                </div>
                <div class="team__info">
                    <h4>Person 3</h4>
                    <p>Team Member</p>
                </div>
            </article>
            <article class="team__member" data-aos="fade-left">
                <div class="team__image">
                    <img src="./Images/dummy-profile.png" alt="">
                </div>
                <div class="team__info">
                    <h4>Person 4</h4>
                    <p>Team Member</p>
                </div>
            </article>
            <article class="team__member" data-aos="fade-right">
                <div class="team__image">
                    <img src="./Images/dummy-profile.png" alt="">
                </div>
                <div class="team__info">
                    <h4>Person 5</h4>
                    <p>Team Member</p>
                </div>
            </article>
        </div>
    </section>

    <section class="professors">
        <h2>Instructors</h2>
        <div class="container container__professors">
            <article class="prof__member" data-aos="fade-right">
                <div class="prof__image">
                    <img src="./Images/profile-female.png" alt="">
                </div>
                <div class="prof__info">
                    <h4>Professor</h4>
                    <p>TOC</p>
                </div>
            </article>
            <article class="prof__member" data-aos="fade-right">
                <div class="prof__image">
                    <img src="./Images/profile-female.png" alt="">
                </div>
                <div class="prof__info">
                    <h4>Professor</h4>
                    <p>IOT</p>
                </div>
            </article>
            <article class="prof__member" data-aos="fade-left">
                <div class="prof__image">
                    <img src="./Images/profile-female.png" alt="">
                </div>
                <div class="prof__info">
                    <h4>Professor</h4>
                    <p>MPI</p>
                </div>
            </article>
            <article class="prof__member" data-aos="fade-left">
                <div class="prof__image">
                    <img src="./Images/dummy-profile.png" alt="">
                </div>
                <div class="prof__info">
                    <h4>Professor</h4>
                    <p>Web programming</p>
                </div>
            </article>
            <article class="prof__member" data-aos="fade-right">
                <div class="prof__image">
                    <img src="./Images/profile-female.png" alt="">
                </div>
                <div class="prof__info">
                    <h4>Professor</h4>
                    <p>Data Mining</p>
                </div>
            </article>
            <article class="prof__member" data-aos="fade-right">
                <div class="prof__image">
                    <img src="./Images/profile-female.png" alt="">
                </div>
                <div class="prof__info">
                    <h4>Professor</h4>
                    <p>Web AJP</p>
                </div>
            </article>
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