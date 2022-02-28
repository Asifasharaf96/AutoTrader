<?php
session_start();
include 'include/connect.php';
if (isset($_SESSION['username'])) {
    $iid = $_SESSION["id"];


    if (isset($_POST["submit"])) {
        $y = $_FILES['image']['name'];
        $r = $_FILES['image']['tmp_name'];
        move_uploaded_file($r, "../uploads/" . $y);
    }
    if ($y != "") {
        $sql = "UPDATE `userreg` SET `image`='$y' WHERE `id`=$iid;";
        if (mysqli_query($conn, $sql)) {
?>
            <script>
                alert('User Profile Image Updated Successfully');
                window.location = "profile.php";
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert('No Picture Selected');
            window.location = "profile.php";
        </script>
<?php
    }
}
?>