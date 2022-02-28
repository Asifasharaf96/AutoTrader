<?php
session_start();
if (isset($_SESSION['username'])) {

$conn = mysqli_connect('localhost', 'root', '', 'car');

$username = $_SESSION['username'];
$vid=$_POST['vid'];
$rid=$_POST['rid'];
$user=$_POST['user'];

$sql1 = "SELECT * FROM vehreg WHERE vid = $vid;";
$res1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
while($row1 = mysqli_fetch_array($res1))
{
    $image = $row1['image'];
    $brand = $row1['brand'];
    $year = $row1['year'];
    $fuel = $row1['fuel'];
    $description = $row1['description'];
    $transmission = $row1['transmission'];
    $kmdriven = $row1['kmdriven'];
    $adtitle = $row1['adtitle'];
    $price = $row1['price'];
    $contact = $row1['contact'];
    $userbuyed = $row1['username'];
}


if(isset($_POST['accept']))
{

    $sql2 = "INSERT INTO `buyedveh` (`brand`, `year`, `fuel`, `transmission`, `adtitle`, `price`, `contact`, `image`, `userbuyed`) VALUES ('$brand', '$year', '$fuel', '$transmission', '$adtitle', '$price', '$contact', '$image', '$user');";
    if (mysqli_query($conn, $sql2)) {
    }

    $sql4 = "INSERT INTO `buyedveh` (`image`) VALUES ('$image') where `brand` = '$brand', `year`= '$year', `fuel` = '$fuel', `transmission` = '$transmission', `kmdriven`='$kmdriven', `adtitle`='$adtitle', `price`='$price', `contact`='$contact', `userbuyed`='$user'; ";
    if (mysqli_query($conn, $sql4)) {
    }


   $sql22 = "INSERT INTO `selledveh` (`brand`, `year`, `fuel`, `transmission`,`kmdriven`, `adtitle`, `price`, `contact`, `image`, `userbuyed`) VALUES ('$brand', '$year', '$fuel', '$transmission','$kmdriven','$adtitle', '$price', '$contact', '$image', '$username');";
    if (mysqli_query($conn, $sql22)) {
    }

    $sql12 = "DELETE FROM `wishlist` WHERE `vid` = $vid;";
    if (mysqli_query($conn, $sql12)) {
    }
    
    $sql5 = "DELETE FROM `request` WHERE `request`.`rid` = $rid;";
    if (mysqli_query($conn, $sql5)) {
    }

     $sql311 = "DELETE FROM `vehreg` WHERE `vehreg`.`vid` = $vid and `username`='$userbuyed';";
    if (mysqli_query($conn, $sql311)) {
    }
    ?>
    <script>
    alert(' Vehicle Selled Successfully');
    window.location = "notification.php";
    </script>
    <?php
}
else if(isset($_POST['reject']))
{
    $sql6 = "DELETE FROM `request` WHERE `request`.`rid` = $rid;";
    if (mysqli_query($conn, $sql6)) {
    }
  ?>
    <script>
    alert(' Vehicle Request Rejected');
    window.location = "notification.php";
    </script>
    <?php
}
}
?>