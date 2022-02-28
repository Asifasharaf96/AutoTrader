<!DOCTYPE html>
<html lang="zxx">
<?php
include './user/include/connect.php';
?>

<head>
    <title>Home Page</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Infinitude Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->

</head>

<body>
    <!-- home -->
    <div id="home">
        <!--/top-nav -->
        <div class="top_w3pvt_main container">
            <!--/header -->
            <header class="nav_w3pvt text-center ">
                <!-- nav -->
                <nav class="wthree-w3ls">
                    <div id="logo">
                        <h1> <a class="navbar-brand px-0 mx-0" href="index.php">Auto Trader
                            </a>
                        </h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mr-auto">
                        <li class="active"><a href="index.php">Home</a></li>

                        <li><a href="logi.php">Login</a></li>
                        <li><a href="./user/user_reg.php">Register</a></li>
                        <li><a href="about.php">About us</a></li>

                        <li class="social-icons ml-lg-3"><a href="#" class="p-0 social-icon"><span class="fa fa-facebook-official" aria-hidden="true"></span>
                                <div class="tooltip">Facebook</div>
                            </a> </li>

                        <li class="social-icons"><a href="#" class="p-0 social-icon"><span class="fa fa-instagram" aria-hidden="true"></span>
                                <div class="tooltip">Instagram</div>
                            </a> </li>
                    </ul>
                </nav>
                <!-- //nav -->
            </header>
            <!--//header -->
        </div>
        <!-- //top-nav -->
        <!-- banner slider -->
        <div id="homepage-slider" class="st-slider">
            <input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
            <input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
            <div class="images">
                <div class="images-inner">
                    <div class="image-slide">
                        <div class="banner-w3pvt-1">
                            <div class="overlay-w3ls">

                            </div>

                        </div>
                    </div>
                    <div class="image-slide">
                        <div class="banner-w3pvt-2">
                            <div class="overlay-w3ls">

                            </div>
                        </div>
                    </div>
                    <div class="image-slide">
                        <div class="banner-w3pvt-3">
                            <div class="overlay-w3ls">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="labels">
                <div class="fake-radio">
                    <label for="slide1" class="radio-btn"></label>
                    <label for="slide2" class="radio-btn"></label>
                    <label for="slide3" class="radio-btn"></label>
                </div>
            </div>
            <!-- banner-hny-info -->
            <div class="banner-hny-info">
                <h3>AUTO TRADER
                </h3>

                <div class="top-buttons mx-auto text-center mt-md-5 mt-3">
                    <a href="./user/user_reg.php" class="btn more mr-2">Register</a>
                    <a href="about.php" class="btn">About Us</a>
                </div>

             <!--   <?php
                $sql1 = "SELECT COUNT(*) FROM vehreg;";
                $result1 = mysqli_query($conn, $sql1);
                while ($row1 = mysqli_fetch_array($result1)) {
                    $veh = $row1[0];
                }

                $sql2 = "SELECT COUNT(*) FROM selledveh;";
                $result2 = mysqli_query($conn, $sql2);
                while ($row2 = mysqli_fetch_array($result2)) {
                    $sal = $row2[0];
                }
                $sql3 = "SELECT COUNT(*) FROM userreg WHERE usertype='user';";
                $result3 = mysqli_query($conn, $sql3);
                while ($row3 = mysqli_fetch_array($result3)) {
                    $user = $row3[0];
                }
                ?>

                <div class="d-flex hny-stats-inf">
                    <div class="col-md-4 stats_w3pvt_counter_grid mt-3">
                        <div class="d-md-flex justify-content-center">
                            <h5 class="counter"><?php echo $veh ?></h5>
                            <p class="para-w3pvt">Vehicles</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 stats_w3pvt_counter_grid mt-3">
                        <div class="d-md-flex justify-content-center">
                            <h5 class="counter"><?php echo $sal ?></h5>
                            <p class="para-w3pvt">Sales</p>
                        </div>
                    </div>
                    <div class="col-md-4 stats_w3pvt_counter_grid mt-3">
                        <div class="d-md-flex justify-content-center">
                            <h5 class="counter"><?php echo $user ?></h5>
                            <p class="para-w3pvt">Clients</p>
                        </div>
                    </div>
                </div>
            -->

            </div>
            <!-- //banner-hny-info -->
        </div>
        <!-- //banner slider -->
    </div>
    <!-- //banner -->


    <!-- /projects -->
    <section class="projects py-5" id="gallery">
        <div class="container py-md-5">

            <h3 class="tittle-w3ls text-left mb-5"><span class="pink">VEHICLE'S</span></h3>
            <div class="row news-grids mt-md-5 mt-4 text-center">

                <?php
                $sql = "SELECT * FROM vehreg;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {

                ?>


                    <div class="col-md-4 gal-img">
                        <a href="details_veh.php?vid=<?php echo $row['vid']; ?>"><img style="width: 350px;height: 250px; object-fit: fill;" src="./uploads/<?php echo $row['image']; ?>" alt="w3pvt" class="img-fluid"></a>
                        <div class="gal-info">
                            <h5><?php echo $row['adtitle'] ?><span class="decription"><?php echo $row['description']; ?></span></h5>
                        </div>
                    </div>

                <?php } ?>
            </div>

        </div>


        <!-- //popup -->
        </div>
    </section>


<?php include './include/footer.php' ?>
    <!-- //copyright -->
</body>

</html>