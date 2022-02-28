<?php

include 'include/connect.php';
session_start();

if (isset($_SESSION['username'])) {

$iid = $_SESSION["id"];

$brand = $_POST['brand'];
$year = $_POST['year'];
$fuel = $_POST['fuel'];
$transmission = $_POST['transmission'];
$kmdriven = $_POST['kmdriven'];
$noofowner = $_POST['noofowner'];
$adtitle = $_POST['adtitle'];
$description = $_POST['description'];
$price = $_POST['price'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$contact = $_POST['contact'];
$username = $_POST['username'];
echo $username;

$sql1="SELECT * FROM `userreg` where username='$username'";
$res1 = mysqli_query($conn, $sql1);
while($row1=mysqli_fetch_array($res1))
{
    $sellername = $row1['name'];
    $sellermob = $row1['mob'];
}
echo $sellermob;
echo $sellername;
if (isset($_POST["submit"])) 
{
    $y = $_FILES['image']['name'];
    $r = $_FILES['image']['tmp_name'];
    move_uploaded_file($r, "../uploads/" . $y);
}

$sql = "INSERT INTO `vehreg`(`id`, `brand`, `year`, `fuel`, `transmission`, `kmdriven`, `noofowner`, `adtitle`, `description`, `price`, `state`, `district`, `city`, `image`, `contact`, `username`, `sellername`, `sellermob`) VALUES ($iid,'$brand','$year','$fuel','$transmission','$kmdriven','$noofowner','$adtitle','$description','$price','$state','$district','$city','$y','$contact','$username','$sellername','$sellermob')";
$res = mysqli_query($conn, $sql);
}
?>
<script>
   alert(' Vehicle Details Successfully Added');
   window.location = "user_home.php";
</script>