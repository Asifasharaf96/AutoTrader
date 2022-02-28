<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="../styles/images/icons/favicon.ico" />
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../styles/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../styles/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../styles/vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../styles/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../styles/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../styles/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../styles/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../styles/css/util.css">
<link rel="stylesheet" type="text/css" href="../styles/css/main.css">
<!--===============================================================================================-->

<style>
    .bg {
        /* The image used */
        /* background-image: url("./styles/images/banner4.jpg");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<script type="text/javascript" language="javascript">
    function val() {

        var email = document.reg.username.value;


        if (email == "") {
            alert("Please Enter your Email Address");
            document.reg.username.focus();
            return false;
        }

        var regemail = /@gmail\.com$/;
        if (regemail.test(email) === false) {
            alert("Please Enter a Valid Email Address ");
            document.login.username.focus();
            return false;
        }



    }
</script>


<?php
session_start();
if (isset($_SESSION['username'])) {
    include '../user/include/connect.php';
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM userreg where username ='$username'";
    $res = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($res)) {
    }

?>


    <body>
        <div class="bg">

            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <form action="userdataController.php" method="post" name="reg" class="login100-form validate-form">

                            <span class="login100-form-title p-b-48">
                                <h4></h4>
                            </span>



                            <div class="wrap-input100 validate-input" data-validate="Enter Your Email Id">
                                <span class="btn-show-pass">
                                    <i class="zmdi zmdi-eye"></i>
                                </span>
                                <input class="input100" type="text" name="username" required>

                                <span class="focus-input100" data-placeholder="Enter Your Email Id"></span>
                            </div>


                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button onclick="return val();" name="rbtn" class="login100-form-btn">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>

                            <div class="text-center p-t-50">

                                <span class="txt1">
                                    Don’t have an account?
                                </span>
                        </form>
                        <a class="txt2" href="../logi.php">
                            Sign In
                        </a>
                    </div>


                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>

        </form>
        </div>

        <!--===============================================================================================-->
        <script src="../styles/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="../styles/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="../styles/vendor/bootstrap/js/popper.js"></script>
        <script src="../styles/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="../styles/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="../styles/vendor/daterangepicker/moment.min.js"></script>
        <script src="../styles/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="../styles/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="../styles/js/main.js"></script>

    </body>
<?php
} ?>