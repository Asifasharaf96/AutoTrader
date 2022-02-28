<?php
session_start();
if (isset($_SESSION['username'])) {

$conn = mysqli_connect('localhost', 'root', '', 'car');

$username = $_SESSION['username'];

$rid=$_POST['rid'];



if(isset($_POST['remove']))
{ 
    
    $sql = "DELETE FROM `request` WHERE `request`.`rid` = $rid;";
    if (mysqli_query($conn, $sql)) {
    }

    ?>
    <script>
    alert('Request For Vehicle is Removed');
    window.location = "request_view.php";
    </script>
    <?php
}
else {
    ?>
    <script>
    alert('Request For Vehicle is Not Removed');
    window.location = "request_view.php";
    </script>
    <?php
}

}
?>