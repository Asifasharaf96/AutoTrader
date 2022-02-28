<?php
include './user/include/connect.php';
$vid = $_GET['vid'];

?>

<!DOCTYPE html>

<html lang="zxx">

<head>
    <title>Contact Us</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Infinitude Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
    <!--/home -->
    <div id="home" class="inner-w3pvt-page">
        <div class="overlay-innerpage">
            <!--/top-nav -->
            <div class="top_w3pvt_main container">
                <!--/header -->
                <header class="nav_w3pvt text-center">
                    <!-- nav -->
                    <nav class="wthree-w3ls">
                        <div id="logo">
                            <h1> <a class="navbar-brand px-0 mx-0" href="index.php">Auto Trader
                            </h1>
                        </div>

                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mr-auto">
                            <li><a href="index.php">Home</a></li>


                            <li><a href="logi.php">Login</a></li>
                            <li><a href="./user/user_reg.php">Register</a>
                            <li><a href="about.php">About Us</a></li>


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

                <!--/breadcrumb-->
                <div class="inner-w3pvt-page-info">
                    <ol class="breadcrumb d-flex">
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>

                </div>
                <!--//breadcrumb-->
            </div>
            <!-- //top-nav -->
        </div>
    </div>
    <!-- //home -->

    <!-- Contact -->
    <section class="about-info py-5 px-lg-5">
        <div class="content-w3ls-inn px-lg-5">
            <div class="container py-md-5 py-3">
                <div class="px-lg-5">
                    <h3 class="tittle-w3ls mb-lg-5 mb-4"><span class="pink"> Vehicle's Details</span> </h3>

                    <div class="contact-hny-form mt-lg-5 mt-3">

                        <div class="table-responsive">

                            <?php
                            $select = "SELECT * FROM `vehreg` WHERE `vid`=$vid;";
                            $res = mysqli_query($conn, $select);
                            ?>
                            <div class="row11">

                                <?php
                                while ($row = mysqli_fetch_array($res)) {

                                ?>
                                    <left>
                                        <div class="col-32">

                                            <form method="post" name="buynow">
                                                <input type="hidden" name="vid" value="<?php echo $row[0] ?>">
                                                <img style="width: 350px;height: 250px; object-fit: fill;" src="./uploads/<?php echo $row['image']; ?>">
                                        </div>

                                        <table style="margin : 50px ;" height="70%" width="80%" border="0">
                                            <tbody>
                                                <tr>
                                                    <!--  <td colspan="4"><strong><?php echo $row[2]; ?></strong></td> -->
                                                </tr>
                                                <tr>
                                                    <td colspan="4"><strong><?php echo $row[8]; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"><strong><?php echo $row[9]; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="20%"><strong>Price : </strong></td>
                                                    <td width="20%"><strong><?php echo $row['price']; ?></strong></td>
                                                    <td width="20%"><strong>KM Driven : <?php echo $row[6]; ?> </strong></td>
                                                    <td width="20%"><strong></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="20%"><strong>Year : </strong></td>
                                                    <td width="20%"><strong><?php echo $row[3]; ?></strong></td>
                                                    <td width="30%"><strong>Owners : <?php echo $row[7]; ?> </strong></td>
                                                    <td width="10%"><strong></strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Fuel : </td>
                                                    <td><strong><?php echo $row[4]; ?></td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Location:</strong></td>
                                                    <td colspan="3"><strong><?php echo $row[13]; ?>,<?php echo $row[12]; ?>,<?php echo $row[11]; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Contact : </strong></td>
                                                    <td colspan="3"><strong><?php echo $row[15]; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        </form>
                                        <div style="padding:30px;">
                                            <table>
                                                <tr>
                                                    <td><a href="./include/click_action.php"><button class="btn btn-primary"><strong>REQUEST</strong></button></a></td>

                                                    <td width="100px"></td>
                                                    <td> <a href="./include/click_action.php"><button class="btn btn-primary"><strong>ADD TO WISHLIST</strong></button></a></td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                        </div>
                            </div>

                        </div>
                    </div>
                </div>
    </section>

    <!--
                        
                        <section class="news-letter-w3pvt py-5">
                            <div class="container contact-form mx-auto text-left">
                                <h3 class="title-w3ls two text-left mb-3">Newsletter </h3>
                                <form method="post" action="#" class="w3ls-frm">
                                    <div class="row subscribe-sec">
                                        <p class="news-para col-lg-3">Start working together?</p>
                                        <div class="col-lg-6 con-gd">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email here..." name="email" required>

                                        </div>
                                        <div class="col-lg-3 con-gd">
                                            <button type="submit" class="btn more black more">Subscribe</button>
                                        </div>

                                    </div>

                                </form>-->
    </div>
    </section>
    <!-- //news-letter -->

    <!-- footer -->
<?php }
                                include './include/footer.php' ?>
</body>

</html>