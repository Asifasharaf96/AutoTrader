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
    <script type="text/javascript">
        function val() {

          
            var pwd = document.reg.password.value;
            var cpwd = document.reg.cpassword.value;



            var regpwd = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
            if (regpwd.test(pwd) === false) {
                alert("Please Enter a Password with at least one number, one lowercase and one uppercase letter , at least six characters");
                document.reg.password.focus();
                return false;
            }
            if (cpwd == "") {
                alert("Please Enter Confirm  Password");
                document.login.password.focus();
                return false;
            }
            if (pwd!= cpwd) {
                alert("Password And Confirm Password Should Be Same");
                return false;
            }
            return true;
        }
    </script>

    <body>
        <div class="bg">
            <form method="post" name="reg" action="userdataController.php">
                <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                            <form class="login100-form validate-form">

                                <span class="login100-form-title p-b-48">
                                    <h4>Enter your New Password</h4>
                                </span>

                          

                                <div class="wrap-input100 validate-input" data-validate="Enter New Password">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye"></i>
                                    </span>
                                    <input class="input100" type="password" name="password" required>

                                    <span class="focus-input100" data-placeholder="New Password"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Confirm New Password">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye"></i>
                                    </span>
                                    <input class="input100" type="password" name="cpassword" required>

                                    <span class="focus-input100" data-placeholder="Confirm Password"></span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button onclick="return val();" name="sbtn" class="login100-form-btn">
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