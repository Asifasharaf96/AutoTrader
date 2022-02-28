<?php
session_start();
if (isset($_SESSION['username'])) {

  include 'include/connect.php';

  $iid = $_SESSION["id"];
  $s1 = "SELECT username FROM userreg where id='$iid'";
  $res1 = mysqli_query($conn, $s1);

  while ($row = mysqli_fetch_array($res1)) {


?>
    <!DOCTYPE html>

    <html lang="en" dir="ltr">

    <head>
      <meta charset="UTF-8">
      <title> Vehicle Registration Form </title>
      <link rel="stylesheet" href="css/css_style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
        textarea {
          width: 100%;
          height: 120px;
          padding: 8px 8px;
          box-shadow: none;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
          background-color: #ffffff;
          font-size: 16px;
          resize: none;
        }

        select {
          width: 100%;
          height: 50px;
          padding: 8px 8px;
          box-shadow: none;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
          background-color: #ffffff;
          font-size: 16px;
          resize: none;
        }

        textarea:focus,
        select:focus {
          outline: none;
        }
      </style>
    </head>
    <script type="text/javascript">
      function val() {
        var name = document.veh.name.value;

        var brand = document.veh.brand.value;
        var fuel = document.veh.fuel.value;
        var trans = document.veh.transmission.value;
        var year = document.veh.year.value;
        var km = document.veh.kmdriven.value;
        var adtitle = document.veh.adtitle.value;
        var des = document.veh.description.value;
        var price = document.veh.price.value;
        var no = document.veh.noofowner.value;
        var mob = document.veh.contact.value;
        var state = document.veh.state.value;
        var district = document.veh.district.value;
        var image = document.veh.image.value;
        var city = document.veh.city.value;



        if (brand == "") {
          alert("Please Select a Brand");
          document.veh.brand.focus();
          return false;
        }

        if (fuel == "") {
          alert("Please Select a Fuel Option");
          document.veh.fuel.focus();
          return false;
        }

        if (trans == "") {
          alert("Please  Select a Transmission Option");
          document.veh.trans.focus();
          return false;
        }

        if (year == "") {
          alert("Enter a Valid Date");
          document.veh.year.focus();
          return false;
        }

        var regkm = /^(0|[1-9]\d*)$/;
        if (regkm.test(km) === false) {
          alert("Please Enter a Valid KM");
          document.veh.km.focus();
          return false;
        }

        var regno = /^(0|[1-9]\d*)$/;
        if (regkm.test(no) === false) {
          alert("Please Enter the Number of Owners");
          document.veh.no.focus();
          return false;
        }

        if (adtitle == "") {
          alert("Please Enter a Ad Title");
          document.veh.adtitle.focus();
          return false;
        }
        if (des == "") {
          alert("Please Enter a Valid Description");
          document.veh.des.focus();
          return false;
        }


        var regp = /^(0|[1-9]\d*)$/;
        if (regp.test(price) === false) {
          alert("Please Enter a Valid Price");
          document.veh.price.focus();
          return false;
        }
        if (state == "") {
          alert("Please Select a State");
          document.veh.state.focus();
          return false;
        }
        if (district == "") {
          alert("Please Select a District");
          document.veh.district.focus();
          return false;
        }

        var regcity = /^[a-zA-Z\s]+$/;
        if (regcity.test(city) === false) {
          alert("Please Enter a Valid City ");
          document.veh.city.focus();
          return false;
        }

        if (image == "") {
          alert("Please Select a Image");
          document.veh.image.focus();
          return false;
        }

        var regmob = /^[789]\d{9}$/;
        if (regmob.test(mob) === false) {
          alert("Please Enter a Valid Mobile Number");
          document.veh.contact.focus();
          return false;
        }
        return true;
      }
    </script>

    <body>
      <form name="veh" enctype="multipart/form-data" method="post" action="vehicle_reg_sql.php">
        <div class="container">
          <div class="title">ENTER VEHICLE DETAILS</div>
          <div class="content">

            <div class="user-details">
              <div class="input-box">
                <span class="details">BRAND</span>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <!-- Vehicle Brand Selector List -->
                <?php include './include/veh_brand.php' ?>

              </div>
              <div class="input-box">
                <span class="details">DATE</span>
                <input type="date" name="year" required>
              </div>

              <div class="input-box">
                <span class="details">FUEL</span>

                <select name="fuel" id="dropdown-content" required>
                  <option value="">-SELECT-</option>
                  <option value="CNG & Hybrid">CNG & Hybrid</option>
                  <option value="DIESEL">DIESEL</option>
                  <option value="ELECTRIC">ELECTRIC</option>
                  <option value="LPG">LPG</option>
                  <option value="PETROL">PETROL</option>
                </select>

              </div>

              <div class="radio-details" required>
                <input type="radio" name="transmission" value="Automatic" id="dot-1">
                <input type="radio" name="transmission" value="Manuel" id="dot-2">

                <span class="radio-title">TRANSMISSION</span>
                <div class="category">
                  <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="radio">Automatic</span>
                  </label>
                  <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="radio">Manuel</span>
                  </label>
                </div>
              </div>

              <div class="input-box">
                <span class="details">KM DRIVEN</span>
                <input type="number" min="1" max="1000000" name="kmdriven" required>
              </div>
              <div class="input-box">
                <span class="details">NO OF OWNERS</span>
                <input type="number" min="1" max="3" name="noofowner" required>
              </div>
              <div class="input-box">
                <span class="details">AD TITLE</span>
                <input type="text" name="adtitle" required>
              </div>
              <div class="input-box">
                <span class="details">DESCRIPTION</span>
                <textarea name="description" name="description" rows="4" cols="50" required></textarea>
              </div>

              <div class="input-box">
                <span class="details">SET A PRICE</span>
                <input type="number" name="price" min="1000" required>
              </div>

              <div class="input-box">
                <span class="details">STATE</span>
                <select name="state" id="inputState" required>
                  <option value="">Select State</option>
                  <option value="Andra Pradesh">Andra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madya Pradesh">Madya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Orissa">Orissa</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttaranchal">Uttaranchal</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="West Bengal">West Bengal</option>
                  <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                  <option value="Daman and Diu">Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Lakshadeep">Lakshadeep</option>
                  <option value="Pondicherry">Pondicherry</option>
                </select>
              </div>

              <div class="input-box">
                <span class="details">DISTRICT</span>
                <select name="district" id="inputDistrict" required>
                  <option value="">Select District</option>
                </select>
              </div>

              <div class="input-box">
                <span class="details">CITY</span>
                <input type="text" name="city" required>
              </div>

              <div class="input-b">
                <span class="details">IMAGE OF VEHICLE</span>
                <input type="file" name="image" />

              </div>
              <div class="input-box">
                <span class="details">Mobile Number</span>
                <input type="number" name="contact" required>
              </div>

              <div class="input-box">

                <input type="hidden" name="username" value="<?php echo $row['username']; ?>" required>
              </div>
            </div>


            <div class="button">
              <input type="submit" name="submit" onclick="return val();" value="Register">
            </div>
      </form>
      </div>
      <!--  <a href="user_home.php">Home</a>-->
      </div>
      </form>
    </body>

    </html>
<?php
  }
}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="./javascript/script_dis.js"></script>