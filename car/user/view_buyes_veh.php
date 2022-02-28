<?php
session_start();

if (isset($_SESSION["autotrader_user"]) != session_id()) {
    header("Location:../index.php");
    die();
} else {
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    include 'include/connect.php';

    $iid = $_SESSION["id"];
    $s1 = "SELECT * FROM userreg where id='$iid'";
    $res1 = mysqli_query($conn, $s1);
    while ($r1 = mysqli_fetch_array($res1)) {
        $img = $r1["image"];
    }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>Buyer's List</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
    </head>

    <body>
        <!-- Sidenav -->
        <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            <div class="scrollbar-inner">
                <!-- Brand -->
                <div class="sidenav-header  align-items-center">
                    <a class="navbar-brand" href="user_home.php">
                        <img src="assets/img/brand/a.jpg" class="navbar-brand-img" alt="...">
                    </a>
                </div>
                <div class="navbar-inner">
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                        <!-- Nav items -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="user_home.php">
                                    <i class="ni ni-tv-2 text-primary"></i>
                                    <span class="nav-link-text">Home</span>
                                </a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php">
                                    <i class="ni ni-single-02 text-yellow"></i>
                                    <span class="nav-link-text">Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item">
                                <a class="nav-link" href="veh_filter.php">
                                    <i class="ni ni-bullet-list-67 text-violet"></i>
                                    <span class="nav-link-text">Filter</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vehicle_reg_for_sell.php">
                                    <i class="ni ni-shop text-red"></i>
                                    <span class="nav-link-text">Sell a vehicle</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                    <i class="ni ni-folder-17 text-default"></i>
                                    <span class="menu-title">Vehicle</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="ui-basic">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link" href="view_vehicles_need_to_sell.php"><i class="ni ni-pin-3 text-primary"></i>View Vehicles Needed To Sell</a></li>
                                        <li class="nav-item"> <a class="nav-link" href="view_selled_veh.php"><i class="ni ni-bullet-list-67 text-default"></i>View Selled Vehicles</a></li>
                                        <li class="nav-item"> <a class="nav-link" href="view_buyes_veh.php"><i class="ni ni-bullet-list-67 text-teal"></i>View Buyed Vehicles</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="request_view.php">
                                    <i class="ni ni-active-40 text-pink"></i>
                                    <span class="nav-link-text">Requests</span>
                                </a>
                            </li>
                            <?php
                            $sqlc = "SELECT COUNT(*) FROM `request` WHERE vehowner = '$username';";
                            $resc = mysqli_query($conn, $sqlc) or die(mysqli_error($conn));
                            while ($rowc = mysqli_fetch_array($resc)) {
                                $count = $rowc[0];

                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="notification.php">
                                        <i class="ni ni-notification-70 text-green"></i>
                                        <span class="nav-link-text">Notifications
                                            <?php
                                            if ($count != 0) {
                                            ?>
                                                <label style="color:#000000;font-weight:bold"><?php echo $count; ?></label>
                                        <?php
                                            }
                                        }
                                        ?>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="wishlist.php">
                                        <i class="ni ni-favourite-28 text-red"></i>
                                        <span class="nav-link-text">Wishlist</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="feedback.php">
                                        <i class="ni ni-email-83 text-cyan"></i>
                                        <span class="nav-link-text">Review</span>
                                    </a>
                                </li>
                        </ul>
                        <!-- Divider -->
                        <hr class="my-3">
                        <!-- Heading -->

                        <!-- Navigation -->

                    </div>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- Topnav -->
            <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Search form -->

                        <!-- Navbar links -->
                        <ul class="navbar-nav align-items-center  ml-md-auto ">
                            <li class="nav-item d-xl-none">
                                <!-- Sidenav toggler -->
                                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item d-sm-none">
                                <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                    <i class="ni ni-zoom-split-in"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">


                            </li>

                        </ul>
                        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img src="../uploads/<?php echo $img; ?>" class="rounded-circle" style="border:1; width: 50px; height: 35px; object-fit: fill;">
                                        </span>
                                        <div class="media-body  ml-2  d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold">
                                                <h1 style="color:white"><?php echo strtok($_SESSION["name"], ' '); ?></h1>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome!</h6>
                                    </div>

                                    <div class="dropdown-divider"></div>
                                    <a href="logout.php" class="dropdown-item">
                                        <i class="ni ni-user-run"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header -->
            <!-- Header -->
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">
                                <h6 class="h2 text-white d-inline-block mb-0"></h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <h3 class="mb-0">Vehicles Bought</h3>
                            </div>
                            <!-- Light table -->
                            <div class="table-responsive">
                                <?php
                                if (isset($_POST['submit'])) {
                                    $vid = $_POST['vid'];
                                    $username = $_POST['username'];
                                }
                                $sql8 = "SELECT count(*) FROM `buyedveh` where userbuyed='$username'";
                                $res8 = mysqli_query($conn, $sql8);
                                while ($row8 = mysqli_fetch_array($res8)) {
                                    $c8 = $row8[0];
                                }
                                if ($c8 > 0) {
                                ?>
                                    <form action="delveh.php" method="post">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" class="sort">Image</th>
                                                    <th scope="col" class="sort">Brand</th>
                                                    <th scope="col" class="sort">Year</th>
                                                    <th scope="col" class="sort">Fuel</th>
                                                    <th scope="col" class="sort">transmission</th>

                                                    <th scope="col" class="sort">Ad Title</th>
                                                    <th scope="col" class="sort">Price</th>
                                                    <th scope="col" class="sort">Contact</th>
                                                </tr>
                                            </thead>
                                            <?php

                                            $sql = "SELECT * FROM `buyedveh` where userbuyed='$username'";
                                            $res = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                                <tbody class="list">
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="name mb-0 text-sm"><img src="../uploads/<?php echo $row['image']; ?>" height="65" width="90" alt="No Image"></span>
                                                                </div>
                                                            </div>
                                                        </th>

                                                        <th scope="row">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="name mb-0 text-sm"><?php echo $row['1']; ?></span>
                                                                </div>
                                                            </div>
                                                        </th>

                                                        <th scope="row">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="name mb-0 text-sm"><?php echo $row['2']; ?></span>
                                                                </div>
                                                            </div>
                                                        </th>

                                                        <th scope="row">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="name mb-0 text-sm"><?php echo $row['3']; ?></span>
                                                                </div>
                                                            </div>
                                                        </th>

                                                        <th scope="row">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="name mb-0 text-sm"><?php echo $row['4']; ?></span>
                                                                </div>
                                                            </div>
                                                        </th>

                                                        <th scope="row">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="name mb-0 text-sm"><?php echo $row['5']; ?></span>

                                                                </div>
                                                            </div>
                                                        </th>

                                                        <th scope="row">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="name mb-0 text-sm"><?php echo $row['6']; ?></span>

                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">
                                                                    <span class="name mb-0 text-sm"><?php echo $row['7']; ?></span>

                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th scope="row">
                                                            <div class="media align-items-center">
                                                                <div class="media-body">


                                                                </div>
                                                            </div>
                                                        </th>

                                                    </tr>
                                                </tbody>
                                            <?php
                                            }
                                        } else {
                                            ?><h4 style="margin: 50px 50px;" style="color:#11469c;">Record Not Found...</h4>
                                    <?php
                                        }
                                    }
                                    ?>
                                        </table>
                                    </form>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer py-4">
                                <nav aria-label="...">
                                    <ul class="pagination justify-content-end mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">
                                                <i class="fas fa-angle-left"></i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dark table -->
                <div class="row">
                    <div class="col">
                        <div class="card bg-default shadow">


                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <?php include './include/footer.php'; }?>
            </div>
        </div>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Argon JS -->
        <script src="assets/js/argon.js?v=1.2.0"></script>
    </body>

    </html>