  <!DOCTYPE html>
  <html lang="en">




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
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];

        $sql1 = "SELECT * FROM `selledveh` WHERE `dateselled` BETWEEN '$start_date' and '$end_date';";
        $res1 = mysqli_query($conn, $sql1);
        $count = mysqli_num_rows($res1);

    ?>


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


              <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <p class="card-title mb-2">SELLED VEHICLE'S</p>
                              <div class="table-responsive">
                                  <br>
                                  <br>

                                  <?php
                                    if ($count == 0) {
                                    ?><h6 style="color:#11469c;">Record Not Found...</h6>
                                  <?php

                                    } else
                                    ?>
                                  <script>
                                      function printPage(id) {

                                          var html = '' +
                                              '<style type="text/css">' +
                                              'table , table tr {' +
                                              'border:1px solid #000;' +
                                              '}' +
                                              '</style>';
                                          html += "<table>";
                                          html += document.getElementById(id).innerHTML;
                                          html += "</table>";
                                          var printWin = window.open('', '');
                                          printWin.document.write(html);
                                          printWin.document.close();
                                          printWin.focus();
                                          printWin.print();
                                          printWin.close();
                                      }
                                  </script>
                                  <?php

                                if ($count != 0) { ?>
                                      <table id="area-print" class="display expandable-table" style="width:100%">
                                          <thead>
                                              <tr>
                                                  <th>Image</th>
                                                  <th>Title</th>
                                                  <th>Brand</th>
                                                  <th>Year</th>
                                                  <th>Fuel</th>
                                                  <th>Transmision</th>
                                                  <th>KM Driven</th>
                                                  <th>Selled Price</th>
                                                  <th>Seller's Username</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                                while ($r2 = mysqli_fetch_array($res1)) {
                                                ?>



                                                  <tr>
                                                      <td>
                                                          <span>
                                                              <img style="object-fit: fill;width: 100px;height: 70px;" src="../uploads/<?php echo $r2['image']; ?>" alt="No Image">
                                                          </span>
                                                      </td>
                                                      <td class="font-weight-bold"><?php echo $r2[1]; ?></td>
                                                      <td><?php echo $r2[6]; ?></td>
                                                      <td><?php echo $r2[2]; ?></td>
                                                      <td><?php echo $r2[3]; ?></td>
                                                      <td><?php echo $r2[4]; ?></td>
                                                      <td><?php echo $r2[5]; ?></td>

                                                      <td><?php echo $r2[7]; ?></td>
                                                      <td class="font-weight-bold"><?php echo $r2[9]; ?></td>
                                                  </tr>

                                              <?php

                                                }
                                                ?>
                                          </tbody>


                                      </table>
                                      <br>
                                      <button onclick="printPage('area-print');" type="button" class="btn btn-primary"> Print
                                          <i class="ti-printer btn-icon-append"></i>
                                      </button>
                                     
                                  <?php
                                }
                                    ?>
                              </div>

                          </div>

                      </div>
                  </div>


                  <div class="col-md-5 grid-margin stretch-card">
                      <div class="card">

                      </div>
                  </div>

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
    }}

    ?>