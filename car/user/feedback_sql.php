<?php
session_start();
if (isset($_SESSION['username'])) {
   include 'include/connect.php';

   $name = $_POST['name'];
   $message = $_POST['message'];
   $username = $_SESSION['username'];

   $sql1 = "INSERT INTO `feedback` (`name`,`message`, `username`) VALUES ('$name','$message', '$username');";
   if (mysqli_query($conn, $sql1)) {
   }
}
?>
<script>
   alert('Your Review Submitted Successfully');
   window.location = "user_home.php";
</script>