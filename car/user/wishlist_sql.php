<?php

session_start();
if (isset($_SESSION['username'])) {

    $conn = mysqli_connect('localhost', 'root', '', 'car');

    $username = $_SESSION['username'];
    $vid = $_GET['vvid'];

    

        $sql1 = "SELECT * FROM vehreg WHERE vid = $vid;";

        $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
        while ($row1 = mysqli_fetch_array($res1)) {
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
            $userbuyed = $row1['username'];
            $city = $row1['city'];
            $district = $row1['district'];
            $state = $row1['state'];
        }
    
    $sql22 = "INSERT INTO `wishlist`(`vid`,`brand`, `year`, `kmdriven`, `adtitle`, `description`, `city`, `district`, `state`, `price`, `image`, `username`) VALUES ($vid,'$brand','$year','$kmdriven','$adtitle','$description','$city','$district','$state','$price','$image','$username');";

    $sql2 = "SELECT count(*) FROM wishlist WHERE vid = $vid and username='$username'";
    $res2 = mysqli_query($conn, $sql2);

    while ($row2 = mysqli_fetch_array($res2)) {
        $count = $row2[0];
    }

    if ($count == 0) 
    {
        if (mysqli_query($conn, $sql22)) {
        ?> <script>
            alert('Vehicle Added to Wishlist');
            window.location = "user_home.php";
        </script>
        <?php
        }
    }
        else

        
        {
            ?>

            <script>
                alert(' Vehicle Already Exist in Wishlist');
                window.location = "user_home.php";
            </script>
<?php
        }
    
}

?>