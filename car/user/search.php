<div style="margin-top: 20px;">

  <form action="" method="post">
    <div class="input-group mb-1">
      <input type="text" style="border-radius:3px;width: 300px;" class="form-control" name="search" id="search" placeholder="Search...." aria-describedby="button-addon2">
      <div class="input-group-append">
        

        <?php
        include 'include/connect.php';
        $username = $_SESSION['username'];
        $iid = $_SESSION["id"];
        $select = "SELECT * FROM `vehreg` where username!='$username';";
        $res = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_array($res)) {
        ?>
          <input type="hidden" name="vid" value="<?php echo $row['vid']; ?>" />
          <input type="hidden" name="id1" value="<?php echo $row['id']; ?>" />
        <?php
        }
        ?>
      </div>
    </div>
  </form>


  <div class="input-group mb-3">
    <div style="margin: 0px 0px 50px 0px; min-width: 300px; height:20px;">
      <div class="list-group" id="show-list">
        <!-- Here autocomplete list will be display -->
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./javascript/script.js"></script>
  </div>
</div>