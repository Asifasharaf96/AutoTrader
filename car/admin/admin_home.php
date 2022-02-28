<?php
session_start();

if(isset($_SESSION["autotrader_admin"])!=session_id())
{
  header("Location:../index.php");
  die();  
}
else
{
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
                <h3 class="font-weight-bold">Welcome <?php echo $r1['name'] ?></h3>
                <h6 class="font-weight-normal mb-0">All systems are running smoothly! <span class="text-primary"></span></h6>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card tale-bg">
              <div class="card-people mt-auto">
                <img src="images/dashboard/people.svg" alt="people">
                <div class="weather-info">
                  <div class="d-flex">
                    <div>
                      <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                    </div>
                    <div class="ml-2">
                      <h4 class="location font-weight-normal">Bangalore</h4>
                      <h6 class="font-weight-normal">India</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php
      }

      $sql1 = "SELECT COUNT(*) FROM userreg WHERE usertype='user';";
      $result1 = mysqli_query($conn, $sql1);
      while ($row11 = mysqli_fetch_array($result1)) {
        $count1 = $row11[0];
      }
        ?>

        <div class="col-md-6 grid-margin transparent">
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body">
                  <a style="color: white;" href="user_details.php">
                    <p class="mb-4">Number of Users</p>
                    <p class="fs-30 mb-2"><?php echo $count1; ?></p>
                    <p></p>
                  </a>
                </div>
              </div>
            </div>
            <?php
            $sql2 = "SELECT COUNT(*) FROM vehreg;";
            $result2 = mysqli_query($conn, $sql2);
            while ($row2 = mysqli_fetch_array($result2)) {
              $count2 = $row2[0];
            }
            ?>
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-dark-blue">
                <div class="card-body">
                  <a style="color: white;" href="veh_on_sale.php">
                    <p class="mb-4">Total Vehicle</p>
                    <p class="fs-30 mb-2"><?php echo $count2; ?></p>
                    <p></p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <?php
          $sql3 = "SELECT COUNT(*) FROM selledveh;";
          $result3 = mysqli_query($conn, $sql3);
          while ($row3 = mysqli_fetch_array($result3)) {
            $count3 = $row3[0];
          }
          ?>
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-blue">
                <div class="card-body">
                  <a style="color: white;" href="selled_veh.php">
                    <p class="mb-4">SOLD</p>
                    <p class="fs-30 mb-2"><?php echo $count3; ?></p>
                    <p></p>
                  </a>
                </div>
              </div>
            </div>
            <?php
            $sql4 = "SELECT COUNT(*) FROM buyedveh;";
            $result4 = mysqli_query($conn, $sql4);
            while ($row4 = mysqli_fetch_array($result4)) {
              $count4 = $row4[0];
            }
            ?>
            <div class="col-md-6 stretch-card transparent">
              <div class="card card-light-danger">
                <div class="card-body">
                  <a style="color: white;" href="buyed_veh.php">
                    <p class="mb-4">BOUGHT</p>
                    <p class="fs-30 mb-2"><?php echo $count4; ?></p>
                    <p></p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
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
}}
  ?>