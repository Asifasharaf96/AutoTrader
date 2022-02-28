<?php
session_start();
include '../user/include/connect.php';
$username = $_SESSION['username'];
$c_date = date("d/m/Y");
$errors = array();
error_reporting(0);


//when user clicks forgot password button

if (isset($_POST['rbtn'])) {
  $user = $_POST['username'];
  $username = $_SESSION['username'];
  $query = "SELECT * FROM userreg WHERE  `username` = '$username';";
  $res = mysqli_query($conn, $query);
  if ($user == $username) {
    if ($res) {

      $username = $_SESSION['username'];
      $rand = $_SESSION['rand'] = rand(100000, 900000);
      $subject = "Reset Password";
      $body = "Hi, Your One Time Password (OTP) to reset your password is: $rand";
      $sender_email = "From: autotrader31@gmail.com";
      if (mail($username, $subject, $body, $sender_email)) {
        echo ("<script LANGUAGE='JavaScript'>
      window.alert('Verification code has sent to your registered email');
      window.location.href='otp.php';
      </script>");
      } else {
        echo ("<script LANGUAGE='JavaScript'>
      window.alert('Email Sending failed');
      window.location.href='rec.php';
      </script>");
      }
    }
  } else {
?>
    <script>
      alert('Entered Email Id is Incorrect');
      window.location.href = 'rec.php';
    </script>
  <?php
  }
}

//when user submit recovery email id

if (isset($_POST['vbtn'])) {
  $code = $_POST['code'];
  $rand = $_SESSION['rand'];
  if ($code == $rand) {
    echo ("<script LANGUAGE='JavaScript'>
        alert('Verification Success!!');
        window.location.href='forgot_pass.php';
        </script>");
  } else {
    echo ("<script LANGUAGE='JavaScript'>
        alert('Enter correct otp!!');
        window.location.href='otp.php';
        </script>");
  }
}

if (isset($_POST['sbtn'])) {
  $username = $_SESSION['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];


  $query = "UPDATE `userreg` SET `password`='$password',`cpassword`='$cpassword' WHERE `username`='$username';";

  if (mysqli_query($conn, $query)) {
  ?>
    <script>
      alert('Password Updated');
      window.location.href = '../logi.php';
    </script>
  <?php
  } else {
  ?>
    <script>
      alert('Password Not Updated');
      window.location.href = '../logi.php';
    </script>
<?php
  }
}
?>