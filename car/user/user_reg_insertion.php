<?php
$conn = mysqli_connect('localhost', 'root', '', 'car');

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$mob = $_POST['mob'];

$sql = "INSERT INTO `userreg` (`name`, `username`,`mob`, `password`, `cpassword`) VALUES ('$name','$username','$mob','$password','$cpassword')";
if (mysqli_query($conn, $sql)) {
?>
    <script>
        alert('User Registered Successfully');
        window.location = "../logi.php";
    </script>
<?php

} else 
{
?>
    <script>
        alert('Username is already exist...');
        window.location = "./user_reg.php";
    </script>
<?php
}
