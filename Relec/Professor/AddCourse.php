<?php
    session_start();
    include_once('../dbconfig.php');
    $errors = array();
    $_SESSION['csid'] = "";
    if($_SESSION['email'] == "" || $_SESSION['type'] != "Professor")
    {
        session_unset();
        session_destroy();
        header('location: ../login-user.php');
    }

    // If file upload form is submitted 
    if (isset($_POST["addcourse"])) {
        $name = $_POST['Name'];
        $author = $_SESSION['name'];
        $author_email = $_SESSION['email'];
        $price = $_POST['Price'];
        $desc =  $_POST['Desc'];
        $url =  $_POST['Url'];
        $desc = str_replace("'"," ",$desc);
        $learning = $_POST['Learn'];
        $learning = str_replace("'"," ",$learning);
        if (!empty($_FILES['Video']['name'])) {
            $filename = $_FILES['Video']['name'];
            $target_dir = "../Videos/";
            $target_file = $target_dir.$filename;
            
            // Select file type
            $extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            
            // Check extension
                if (move_uploaded_file($_FILES['Video']['tmp_name'], $target_file)) {
                }
                else{
                    $errors['fmove'] = "File Not Stored";
                    }
            }
        if (!empty($_FILES["Image"]["name"])) {
            // Getting file name
            $filename = $_FILES['Image']['name'];
            
            // Valid extension
            $valid_ext = array('png','jpeg','jpg');
            
            // file extension
            $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);
            
            // Check extension
            if (in_array($file_extension, $valid_ext)) {
                // Compress Image
                $img = file_get_contents($_FILES['Image']['tmp_name']);
                $imgContent = addslashes($img);
            }
        }
        if (count($errors) === 0) {
            // Insert image content into database
            if($target_file!="")
            {
                $q = "INSERT INTO `course` (`cid`, `name`, `author_email`, `author`, `video_name`, `video_loca`,`url`,`img`, `desc`, `rating`, `learning`, `price`, `dt`, `mdt`) VALUES (NULL, '$name', '$author', '$filename', '$target_file','', '$imgContent', '$desc', '5', '$learning', '$price', current_timestamp(), NULL);";
            }
            else{
                $q = "INSERT INTO `course` (`cid`, `name`, `author_email`, `author`, `video_name`, `video_loca`,`url`,`img`, `desc`, `rating`, `learning`, `price`, `dt`, `mdt`) VALUES (NULL, '$name','$author_email','$author', '', '','$url', '$imgContent', '$desc', '5', '$learning', '$price', current_timestamp(), NULL);";
            }
            $insert = $conn->query($q);
            if ($insert) {
                $info = "Course added Succesfully";
            } 
            else {
                $errors['issue'] = "There is some issue due to which media not added";
            }
        }
        else{
            $errors['filed'] = "Please check thumbnail and video extension";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>

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
    <link rel="stylesheet" href="./CSS/addform.css">
    <style>
        .container__courses{
            padding: 0rem;
        }
        #urldiv{
            display: none;
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
                <li><a href="./Mycourse.php">My Courses</a></li>
                <li class="active"><a href="./AddCourse.php">Add Course</a></li>
                <li><a href="./logout.php">Logout</a></li>
            </ul>
            <!-- <div class="btn"> -->
                <button id="open-menu-btn"><i class="uil uil-bars"></i></button> 
                <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
            <!-- </div> -->
        </div>

    </nav>
    
    <section class="addcourse">
        <div class="container container__addcourse" data-aos="fade-right">
            <h2>Add Course</h2>
            <form class="add__form" action="./AddCourse.php" method="post"  enctype='multipart/form-data'>
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
                <input type="text" name="Name" placeholder="Course Name" required>
                <div class="desc">
                    <label for="Desc">Course Description</label>
                    <textarea name="Desc" id ="Desc" class="tinymce" rows="3" placeholder="Couse Description"></textarea>
                </div>
                <div class="learning">
                    <label for="Learn">Course Learning</label>
                    <textarea name="Learn" id ="Learning" class="tinymce" rows="3" placeholder="Couse Description"></textarea>
                </div>
                <label for="type">Video type</label>
                <select name="Type" id="type" onchange="vidchange();">
                    <option value="Video">Video</option>
                    <option value="Url">Url</option>
                </select>
                <div id="viddiv">
                    <label for="Video">Course Video</label>
                    <input type="file" name="Video" id="Video" onchange="validatevid();" required>
                </div>
                <div id="urldiv">
                    <label for="Url">Course Url</label>
                    <input type="text" name="Url" id="Url">
                </div>
                <div id="imgdiv">     
                    <label for="Learn">Course Thumbnail</label>
                    <input type="file" name="Image" id="Image" onchange="validateimg();" required>
                </div>

                <input type="number" name="Price" id="Price" placeholder="Price of Course" required>
                
                <div class="d-flex justify-content-center">
                    <button type="submit" class="cbtn" name="addcourse">Add Course</button>
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
                                <a href="./Home.php" class="text-white">Home</a>
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

    <script type="text/javascript" src="../JS/jquery.min.js"></script>
    <script type="text/javascript" src="../tinymce/jquery.tinymce.min.js"></script>
    <script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="../JS/addcourse.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    <script src="../JS/index.js"></script>
</body>

</html>