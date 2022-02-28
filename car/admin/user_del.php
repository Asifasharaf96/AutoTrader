<?php
include '../user/include/connect.php';
$id = $_POST['id'];

$sql = "UPDATE `userreg` SET `status`= 0 WHERE `id`=$id;";

if (mysqli_query($conn, $sql)) {
?>
    <script type="text/javascript">
        alert('User Removed successfully !!! ');
        window.location = "user_details.php";
    </script>
<?php
}
?>