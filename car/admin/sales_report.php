<?php
session_start();

if (isset($_SESSION["autotrader_admin"]) != session_id()) {
    header("Location:../index.php");
    die();
} else {
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    include '../user/include/connect.php';
    $iid = $_SESSION["id"];
    $s1 = "SELECT * FROM userreg where id='$iid'";
    $res1 = mysqli_query($conn, $s1);
    while ($r1 = mysqli_fetch_array($res1)) {
?>

        <!DOCTYPE html>
        <html lang="en">

        <?php include './include/header.php' ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                <h3 class="font-weight-bold">Welcome Admin</h3>
                                <h6 class="font-weight-normal mb-0">All systems are running smoothly! </h6>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="justify-content-end d-flex">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    function val()
                    {
                        var sdate = document.sale.start_date.value;
                        var edate = document.sale.end_date.value;

                        if(sdate > edate)
                        {
                            alert('Start Date must be less than End Date');
                            return false;
                        }
                    }

                </script>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-2">Sale's Reports</p>
                                <div class="table-responsive">
                                    <form class="form-horizontal" name="sale" action="sales_rep_view.php" method="post">
                                        <br>
                                        <label>Start Date</label>
                                        <input type="date" class="form-control" name="start_date" required>
                                        <br>
                                        <label>End Date</label>
                                        <input type="date" class="form-control" name="end_date" required>
                                        <br>
                                        <input type="submit" class="btn btn-primary" onclick="return val();" value="SUBMIT">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--
            <div class="col-md-5 grid-margin stretch-card">
              <div class="card">
            
              </div>
            </div>
          -->
                </div>
                <div class="row">
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card">

                        </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include './include/footer.php' ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <script src="js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
        </body>

        </html>
<?php
    }
}}
?>