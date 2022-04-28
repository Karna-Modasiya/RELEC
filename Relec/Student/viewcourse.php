<?php
    session_start();
    include_once('../dbconfig.php');
    if($_SESSION['email'] == "" || $_SESSION['type'] != "Student")
    {
        session_unset();
        session_destroy();
        header('location: ../login-user.php');
    }
    if($_SESSION['csid']=="")     
        $_SESSION['csid']=$_POST['cid'];
    if(isset($_POST['wishlist'])){
        $email = $_SESSION['email'];
        $cid = $_SESSION['id'];
        $sql = "INSERT INTO `wishlist` (`id`, `email`, `cid`, `dt`) VALUES (NULL, '$email', '$cid', current_timestamp())";
        $res = $conn->query($sql);
        if(!$res){
            $errors['wishlist'] = "Wishlist not added";
        }
    }
    if(isset($_POST['buylist'])){
        $email = $_SESSION['email'];
        $cid = $_SESSION['id'];
        $sql = "INSERT INTO `wishlist` (`cid`, `email`, `bought`, `dt`) VALUES ('$cid', '$email', '1', current_timestamp())";
        $res = $conn->query($sql);
        if(!$res){
            $errors['wishlist'] = "Course Not bought";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course</title>

    <!-- /* GOOGLE FONTS (MONTSERRAT) */ -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- rel="stylesheet"> -->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="./CSS/viewcourse.css">

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
                <li><a href="./Courses.php">Courses</a></li>
                <li><a href="./Wishlist.php">Wishlist</a></li>
                <li class="active"><a href="./Mycourse.php">My Courses</a></li>
                <li><a href="./logout.php">Logout</a></li>
            </ul>
            <!-- <div class="btn"> -->
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
            <!-- </div> -->
        </div>
    </nav>

    <section class="course">
        <?php
            $id = $_SESSION['csid'];
            $sql1 = "SELECT * FROM `course` WHERE `cid`='$id'";
            $res = $conn->query($sql1);
            if ($res->num_rows>0) {
                while ($row =  $res->fetch_assoc()) {
                    ?>
                    <div class="container">
                        <div class="course__video" data-aos="fade-up">
                        <?php
                            if ($row['url'] =="") {
                           ?>
                            <video src="<?=$row['video_loca']?>" controls></video> 
                            <?php
                        }
                        else{
                            ?>
                            <iframe height="600px" width="100%" src="<?=$row['url']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <?php
                        }?> 
                        </div>
                        <div class="container__course" data-aos="fade-right">
                            <div class="course__left">
                                <h3 class="py-2">Course Description</h3>
                                <div><?=$row['desc']?></div>
                            </div>
                            <div class="course__right" data-aos="fade-left">
                                <h3 class="py-2">Course Learning</h3>
                                <div><?=$row['learning']?></div>    
                            </div>
                        </div>
                    </div>
                        <?php
                    }
                }
            ?>
            
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
    <script src="../JS/index.js"></script>
</body>

</html>