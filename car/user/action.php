<?php
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  require_once './include/config.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = "SELECT adtitle FROM vehreg WHERE adtitle LIKE :adtitle and username!='$username'";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['adtitle' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
?>
        <a href="details1.php?id=<?php echo $row['adtitle'] ?>" class="list-group-item list-group-item-action border-1 text-black">
          <?php echo $row['adtitle'] ?>
        </a>
<?php
      }
    } else {
      echo '<p class="list-group-item border-1">Not Found</p>';
    }
  }
}
?>