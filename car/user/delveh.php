<?php
include './include/connect.php';

$vid = $_POST['vid'];
$username = $_POST['username'];



$sql = "SELECT `wid` FROM `wishlist` WHERE `username`='$username' and `vid` = $vid;";
$res = mysqli_query($conn, $sql);


$delete = "DELETE FROM `wishlist` WHERE `vid`=$vid;";
if (mysqli_query($conn, $delete)) {
}
$delete2 = "DELETE FROM `request` WHERE `vid` = $vid;";
if (mysqli_query($conn, $delete2)) {
}

  $delete1 = "DELETE FROM `vehreg` WHERE `vid` = $vid and `username`='$username'";
  if (mysqli_query($conn, $delete1)) {
?>
    <script>
      alert("Sucessfully Deleted");
      window.location = "view_vehicles_need_to_sell.php";
    </script>
  <?php
  } else {

    echo "cannot";
  }

?>