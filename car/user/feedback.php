<?php
session_start();

if (isset($_SESSION["autotrader_user"]) != session_id()) {
  header("Location:../index.php");
  die();
} else {
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  include 'include/connect.php';
?>
  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style_feed.css">

    <title>FeedBack Form</title>
  </head>

  <script type="text/javascript">
    function val() {
      var name = document.feedback.name.value;
      var email = document.feedback.email.value;
      var msg = document.feedback.message.value;

      var regex = /^[a-zA-Z\s]+$/;
      if (regex.test(name) === false) {
        alert("Please Enter your Name ");
        return false;
      }
      if (msg == "") {
        alert("Please Enter Your Feedback");
        document.feedback.message.focus();
        return false;
      }

      return true;
    }
  </script>

  <body>


    <div class="content">

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">


            <div class="row justify-content-center">
              <div class="col-md-6">

                <h3 class="heading mb-4">Let's talk about everything!</h3>
                <p>Your FeedBack is Valuable!</p>

                <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


              </div>
              <div class="col-md-6">

                <form class="mb-5" method="post" id="contactForm" name="feedback" action="feedback_sql.php">
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required>
                    </div>
                  </div>
             

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message" required></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <input type="submit" onclick="return val();" value="SUBMIT" name="send" class="btn btn-primary rounded-0 py-2 px-4">
                      <br><br><br><br>
                      <a href="user_home.php" style="color: #fff;">
                        <p style="color: 	#0000FF; font-size:12px">HOME</p>
                      </a>
                      <span class="submitting"></span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>




    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>


  </body>

  </html>
<?php
}}
?>