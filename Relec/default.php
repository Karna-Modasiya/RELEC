<?php
session_start();
session_unset();
session_destroy();
include_once('./dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
    <style>
        .cart {
        display: flex;
        flex-direction: column;
    }

    .cbtn {
        margin: 0.5rem;
        text-align: center;
    }

    .cbtn:hover {
        cursor: pointer;
    }
    </style>

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
                <li class="active"><a href="./default.php" aria-current="page" >Home</a></li>
                <li><a href="./About.php">About </a></li>
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
            <div class="header__left" data-aos="fade-right">
                <h1><b>Grow your Skills to Advance your Career Skills</b></h1>
                <p>A learning community dedicated to building respectful and responsible citizens and empowering all learners.</p>
            </div>
            <div class="header__right aimg" data-aos="fade-left">
                <img src="./Images/4.svg" alt="">
                <!-- <video src="./Images/3.mp4"></video> -->
            </div>
        </div>
    </header>

    <section class="categories">
        <div class="container container__categories">
            <div class="categories__left" data-aos="fade-right">
                <h1>Categories</h1>
                <p>Here is the list of courses that relec offers. After completing these courses students will gain the skills and project-based experience needed for entry into development careers.</p>
            </div>
            <div class="categories__right">
                <article class="cat" data-aos="fade-up">
                    <span class="cat__icon"><i class="uil uil-monitor-heart-rate"></i></span>
                    <h5>TOC</h5>
                    <p>From Learning to development</p>
                </article>
                <article class="cat" data-aos="fade-up">
                    <span class="cat__icon"><i class="uil uil-robot"></i></span>
                    <h5>IOT</h5>
                    <p>From Learning to development</p>
                </article>
                <article class="cat" data-aos="fade-up">
                    <span class="cat__icon"><i class="uil uil-clapper-board"></i></span>
                    <h5>MPI</h5>
                    <p>From Learning to development</p>
                </article>
                <article class="cat" data-aos="fade-up">
                    <span class="cat__icon"><i class="uil uil-window"></i></span>
                    <h5>Web programming</h5>
                    <p>From Learning to development</p>
                </article>
                <article class="cat" data-aos="fade-up">
                    <span class="cat__icon"><i class="uil uil-servers"></i></span>
                    <h5>Data Mining</h5>
                    <p>From Learning to development</p>
                </article>
                <article class="cat" data-aos="fade-up">
                    <span class="cat__icon"><i class="uil uil-programming-language"></i></span>
                    <h5>AJP</h5>
                    <p>From Learning to development</p>
                </article>
            </div>
        </div>
    </section>

    <section class="courses">
        <h2>Popular Courses</h2>
        <div class="container container__courses">
        <?php
                $sql = "SELECT * FROM `course` LIMIT 3";
                $res = $conn->query($sql);
                if($res->num_rows>0)
                {
                    while($row = $res->fetch_assoc())
                    {
                        ?>
            <article class="cs" data-aos="fade-right">
                <div class="course__image">
                    <img src="data:image/jpg;charset=utf8;base64,<?=base64_encode($row['img'])?>" alt="">
                </div>
                <div class="courses__info">
                    <h4><?=$row['name']?></h4>
                    <h6>Author :<?=$row['author']?></h6>
                    <div class="desc mb-2"><?=$row['desc']?></div>
                    <div class="cart">
                        <a href="./login-user.php" class="cbtn">More Details</a>
                    </div>
                </div>
            </article>
            <?php
                    }
                }
                else{
                    $errors['noitem'] = "You haven't added any courses";
                }
            ?>
        </div>
        <div class="csbtn">
            <a href="./Courses.php" class="cbtn" data-aos="zoom-in">More Courses</a>
        </div>
    </section>

    <section class="instructor">
        <div class="container container__instructor">
            <div class="ins__left aimg">
                <img src="./Images/1.png" data-aos="fade-up" alt="" srcset="">
            </div>
            <div class="ins__right" data-aos="fade-up">
                <h3>Become An Instructor</h3>
                <p>Instructors from around the world teach millions of students on Relec. We provide the tools and skills to teach what you love.</p>
                <a href="./signup-user.php" class="cbtn" data-aos="zoom-in">Start Teaching</a>
            </div>
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