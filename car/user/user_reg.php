<?php session_start();
?>


</html>
<title>Registration Form</title>
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
    background-image: url("./styles/images/banner4.jpg");

    /* Full height */
    height: 100%;
    width: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<script type="text/javascript">
  function val() {
    var name = document.reg.name.value;
    var mob = document.reg.mob.value;
    var email = document.reg.username.value;
    var pwd = document.reg.password.value;
    var cpwd = document.reg.cpassword.value;

    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(name) === false) {
      alert("Please Enter your Name ");
      return false;
    }


    var regemail = /@gmail\.com$/;
    if (regemail.test(email) === false) {
      alert("Please enter a valid email address ");
      return false;
    }

    var regmob = /^[789]\d{9}$/;
    if (regmob.test(mob) === false) {
      alert("Please Enter a Valid Mobile Number");
      return false;
    }

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

    if (pwd != cpwd) {
      alert("Password And Confirm Password Should Be Same");
      return false;
    }
    return true;
  }

  function showPassword() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    }
  }


  function hidePassword() {
    var x = document.getElementById("myInput");
    if (x.type === "text") {
      x.type = "password";
    }
  }

  function cshowPassword() {
    var x = document.getElementById("myInput1");
    if (x.type === "password") {
      x.type = "text";
    }
  }


  function chidePassword() {
    var x = document.getElementById("myInput1");
    if (x.type === "text") {
      x.type = "password";
    }
  }
</script>

<body>
  <div class="bg">
    <form name="reg" method="post" action="user_reg_insertion.php" onsubmit="return validateForm()">
      <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100">
            <form class="login100-form validate-form">

              <span class="login100-form-title p-b-48">
                SIGN UP
              </span>

              <div class="wrap-input100 validate-input" data-validate="">
                <input class="input100" type="text" minlength="5" name="name" placeholder="Enter Full Name" required>

              </div>

              <div class="wrap-input100 validate-input" data-validate="Valid email is: a@gmail.com">
                <input class="input100" type="email" name="username" placeholder="Enter Email" required>

              </div>

              <div class="wrap-input100 validate-input" data-validate="">
                <input class="input100" type="text" name="mob" placeholder="Enter Mob Number" required>
              </div>

              <div class="wrap-input100 validate-input" data-validate="Enter password">
                <span class="btn-show-pass">
                  <i class="zmdi zmdi-eye" onmouseenter="showPassword()" onmouseleave="hidePassword()"></i>
                </span>
                <input class="input100" type="password" placeholder="Enter Password" name="password" id="myInput" required>
              </div>

              <div class="wrap-input100 validate-input" data-validate="Confirm password">
                <span class="btn-show-pass">
                  <i class="zmdi zmdi-eye" onmouseenter="cshowPassword()" onmouseleave="chidePassword()"></i>
                </span>
                <input class="input100" type="password" name="cpassword" placeholder="Confirm Password" id="myInput1" required>
              </div>

              <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                  <div class="login100-form-bgbtn"></div>
                  <button name="login" onclick="return val();" class="login100-form-btn">
                    REGISTER
                  </button>
                </div>
              </div>

              <div class="text-center p-t-50">
                <span class="txt1">
                  Have a Account ?
                </span>
                <a class="txt2" href="..\logi.php">
                  Sign In
                </a>
              </div>

            </form>
          </div>
        </div>
      </div>

      <div id="dropDownSelect1"></div>

    </form>
  </div>

  <!--===============================================================================================-->

  <!--===============================================================================================-->
  <script src="../styles/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="../styles/vendor/bootstrap/js/popper.js"></script>
  <script src="../styles/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->

  <!--===============================================================================================-->

  <!--===============================================================================================-->

  <!--===============================================================================================-->

</body>