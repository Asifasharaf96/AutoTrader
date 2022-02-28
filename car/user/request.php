<?php
session_start();
 if (isset($_SESSION['username'])) {
$vid = $_POST['vid'];
$username = $_SESSION['username'];
                            
$conn = mysqli_connect('localhost', 'root', '', 'car');
$vid=$_POST['vid'];

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
    $vehowner = $row1['username'];

}


/*
$sql2 = "INSERT INTO `buyedveh` (`brand`, `year`, `fuel`, `transmission`, `kmdriven`, `adtitle`, `price`, `contact`, `userbuyed`,`image`) VALUES ('$brand', '$year', '$fuel', '$transmission', '$kmdriven', '$adtitle', '$price', '$contact', '$userbuyed','$image');";
if (mysqli_query($conn, $sql2)) {
}

$sql4 = "INSERT INTO `buyedveh` (`image`) VALUES ('$image') where `brand` = '$brand', `year`= '$year', `fuel` = '$fuel', `transmission` = '$transmission', `kmdriven`='$kmdriven', `adtitle`='$adtitle', `price`='$price', `contact`='$contact', `userbuyed`='$userbuyed'; ";
if (mysqli_query($conn, $sql4)) {
}

$sql3 = "DELETE FROM `vehreg` WHERE `vehreg`.`vid` = $vid;";
if (mysqli_query($conn, $sql3)) {
}
*/

    $sql5 ="INSERT INTO `request` (`vid`,`adtitle`, `brand`, `year`, `kmdriven`, `description`, `price`, `image`,`vehreq`,`vehowner`) VALUES ($vid,'$adtitle', '$brand', '$year', '$kmdriven', '$description', '$price', '$image','$username','$vehowner');";
    if (mysqli_query($conn, $sql5))  
    {
        ?>
        <script>
        alert(' Vehicle Requested');
        window.location = "user_home.php";
        </script>
        <?php 
    }
    else 
    {
    ?>
        <script>
        alert('Vehicle already requested');
        window.location = "user_home.php";
        </script>
        <?php 
    }
}                    
?>
