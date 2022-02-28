 <?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    include('user/include/db.php');

    if (isset($_POST["login"])) {
        $obj = new db();
        $sql = "SELECT * FROM `userreg` where username='$username' and password='$password'";
        $res = $obj->exe($sql);

        if ($row = mysqli_fetch_array($res)) {

            $usertype = $row["usertype"];
            $id = $row["id"];
            $name = $row["name"];

            if ($row["usertype"] == "admin") {
                $_SESSION["autotrader_admin"]=session_id();
               // echo session_id();
                $_SESSION["username"] = $username;
                $_SESSION["id"] = $id;
                $_SESSION["name"] = $name;
                header("Location:admin/admin_home.php");
            } else if ($row["usertype"] == "user") {
                $_SESSION["autotrader_user"] = session_id();
                $_SESSION["username"] = $username;
                $_SESSION["id"] = $id;
                $_SESSION["name"] = $name;
                header("Location:user/user_home.php");
            }
        } else {
    ?>
         <script>
             alert('Invalid login');
             window.location = "index.php";
         </script>
     <?php
        }
    }
    if ($username == "") {
        ?>
     <script>
         alert('Please Enter an Email Address');
         window.location = "logi.php";
     </script>
     <?php
    } else {
        if (isset($_POST["fpassword"])) {
            $obj1 = new db();
            $sql1 = "SELECT * FROM `userreg` where username='$username';";
            $res1 = $obj1->exe($sql1);



            if ($row1 = mysqli_fetch_array($res1)) {

                $usertype = $row1["usertype"];
                $id = $row1["id"];
                $name = $row1["name"];
                if ($usertype == "user") {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $_SESSION["autotrader"] = session_id();
                    $_SESSION["username"] = $username;
                    $_SESSION["id"] = $id;
                    $_SESSION['name'] = $name;
                    header("Location:./include/rec.php");
                }
                if ($usertype == "admin") {
        ?>
                 <script>
                     alert('Cannot Update Admin Password');
                     window.location = "./logi.php";
                 </script>
             <?php
                }
            } else {
                ?>
             <script>
                 alert('Username is not Found');
                 window.location = "./logi.php";
             </script>
 <?php
            }
        }
    }
    ?>