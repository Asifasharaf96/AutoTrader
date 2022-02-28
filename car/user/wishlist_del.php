<?php
 include 'include/db.php';
$obj = new db();
$wid = $_POST['wid'];

$delete = "DELETE FROM `wishlist` WHERE `wid` = $wid;";
$obj->exe($delete);
?>
<script>
  alert("Vehicle Removed From Wishlist");
  window.location = "wishlist.php";
</script>