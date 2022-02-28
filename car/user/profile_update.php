<?php

include 'include/connect.php';


$name = $_POST['name'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$locality = $_POST['locality'];
$district = $_POST['district'];
$state = $_POST['state'];
$city = $_POST['city'];
$dob = $_POST['dob'];
$id = $_POST['id'];
$mob = $_POST['mob'];

if (isset($_POST['submit'])) {
    $sql = "UPDATE `userreg` SET `name`='$name',`address`='$address',`locality`='$locality',`district`='$district',`state`='$state',`city`='$city',`dob`='$dob',`gender`='$gender',`dob`='$dob',`mob`='$mob' WHERE `id`=$id;";
    if (mysqli_query($conn, $sql)) {
?>
        <script>
            alert('User Profile Updated Successfully');
            window.location = "profile.php";
        </script>
    <?php
    } else {

    ?>
        <script>
            alert('Error ...');
            window.location = "profile.php";
        </script>
<?php
    }
}
?>