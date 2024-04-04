<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">





  <title>code clinic</title>

</head>

<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-3">
    <a class="navbar-brand" href="../">Code Clinic</a>
  </nav>

  </nav>
  <div class="container">
    <h2 class="text-center">Patient Intake Form</h2>





    <form class="d-flex flex-wrap">
      <div class="col-md-6 col-sm-12">
        <h6 class="text-muted">Patient</h6>
        <hr>
        <div class="form-row">
          <div class="col-md-6 font-weight-bold ">
            <label for="fname">First name:</label>
            <input type="text" class="form-control" id="fname" required>

          </div>
          <div class="col-md-6 font-weight-bold">
            <label for="lname">Last name:</label>
            <input type="text" class="form-control" id="lname" required>
          </div>

        </div>


        <h6 class="text-muted mt-3">Date of Birth</h6>
        <hr class="mt-1">
        <div class="form-row">
          <div class="col-md-5 font-weight-bold">
            <label for="month">Month:</label>
            <select class="form-control" name="month" id="month">
              <?php

              $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December',);

              foreach ($months as $month) {
                echo '<option value="' . $month . '">' . $month . '</option>';
              }

              ?>
            </select>
          </div>
          <div class="col-md-3 font-weight-bold">
            <label for="day">Day:</label>
            <select class="form-control" name="bday" id="sel">
              <?php
              $x = 1;
              while ($x <= 31) {
                echo '<option value="' . $x . '">' . $x . '</option>';
                $x++;
              }
              ?>

            </select>
          </div>
          <div class="col-md-4 font-weight-bold">
            <label for="year">Year:</label>
            <select class="form-control" name="year" id="sel">
              <?php
              $year = date('Y');
              while ($year >= 1900) {
                echo '<option value="' . $year . '">' . $year . '</option>';
                $year--;
              }
              ?>
            </select>
          </div>


          <div class="col-md-12">
            <h6 class="text-muted mt-3">Self Identification</h6>
            <hr>
            <div class="form-row">
              <div class="col-md-4 font-weight-bold">
                <label for="Ethnicity">Ethnicity:</label>
                <select name="ethnicity" id="sel" class="form-control">
                  <option value="">Not Hispanic</option>
                  <option value="">Hispanic</option>
                </select>

              </div>

              <div class="col-md-4 font-weight-bold">
                <label for="race">Race:</label>
                <select name="race" id="race" class="form-control">
                  <option value="">African American</option>
                  <option value="">Alaskan Native</option>
                  <option value="">American Indian</option>
                  <option value="">Asian</option>
                  <option value="">Caucasian</option>
                  <option value="">Native Hawaiian</option>
                  <option value="">Pacific Islander</option>
                </select>
              </div>

              <div class="col-md-4 font-weight-bold">
                <label for="gender">Gender:</label>
                <select name="gender" id="sel" class="form-control">
                  <option value="">Female</option>
                  <option value="">Male</option>
                  <option value="">Other</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <h6 class="text-muted">Address</h6>
        <hr>
        <div class="form-row ">
          <div class="col-md-8 font-weight-bold">
            <label for="st">Street:</label>
            <input type="text" name="address" id="sel" class="form-control">
          </div>

          <div class="col-md-4 font-weight-bold">
            <label for="unit">Unit:</label>
            <input type="text" name="address" id="sel" class="form-control">
          </div>
        </div>
        <!--2nd row-->
        <div class="form-row ">
          <div class="col-md-6 font-weight-bold mt-4">
            <label for="city">City:</label>
            <input type="text" name="address" id="sel" class="form-control">
          </div>


          <div class="col-md-4 font-weight-bold mt-4">
            <label for="state">State:</label>
            <select name="state" id="state" class="form-control">

              <option value="Alabama">Alabama</option>
              <option value="Alaska">Alaska</option>
              <option value="Arizona">Arizona</option>
              <option value="Arkansas">Arkansas</option>
              <option value="California">California</option>
              <option value="Colorado">Colorado</option>
              <option value="Connecticut">Connecticut</option>
              <option value="Delaware">Delaware</option>
              <option value="District Of Columbia">District Of Columbia</option>
              <option value="Florida">Florida</option>
              <option value="Georgia">Georgia</option>
              <option value="Hawaii">Hawaii</option>
              <option value="Idaho">Idaho</option>
              <option value="Illinois">Illinois</option>
              <option value="Indiana">Indiana</option>
              <option value="Iowa">Iowa</option>
              <option value="Kansas">Kansas</option>
              <option value="Kentucky">Kentucky</option>
              <option value="Louisiana">Louisiana</option>
              <option value="Maine">Maine</option>
              <option value="Maryland">Maryland</option>
              <option value="Massachusetts">Massachusetts</option>
              <option value="Michigan">Michigan</option>
              <option value="Minnesota">Minnesota</option>
              <option value="Mississippi">Mississippi</option>
              <option value="Missouri">Missouri</option>
              <option value="Montana">Montana</option>
              <option value="Nebraska">Nebraska</option>
              <option value="Nevada">Nevada</option>
              <option value="New Hampshire">New Hampshire</option>
              <option value="New Jersey">New Jersey</option>
              <option value="New Mexico">New Mexico</option>
              <option value="New York">New York</option>
              <option value="North Carolina">North Carolina</option>
              <option value="North Dakota">North Dakota</option>
              <option value="Ohio">Ohio</option>
              <option value="Oklahoma">Oklahoma</option>
              <option value="Oregon">Oregon</option>
              <option value="Pennsylvania">Pennsylvania</option>
              <option value="Rhode Island">Rhode Island</option>
              <option value="South Carolina">South Carolina</option>
              <option value="South Dakota">South Dakota</option>
              <option value="Tennessee">Tennessee</option>
              <option value="Texas">Texas</option>
              <option value="Utah">Utah</option>
              <option value="Vermont">Vermont</option>
              <option value="Virginia">Virginia</option>
              <option value="Washington">Washington</option>
              <option value="West Virginia">West Virginia</option>
              <option value="Wisconsin">Wisconsin</option>
              <option value="Wyoming">Wyoming</option>
            </select>
          </div>
          <div class="col-md-2 font-weight-bold mt-4">
            <label for="city">Zip Code:</label>
            <input type="text" name="address" id="sel" class="form-control">
          </div>
          <div class="col-md-12 font-weight-bold">

            <h6 class="text-muted mt-3">Contact Info</h6>
            <hr>
            <div class="form-row">
              <div class="col-md-6 font-weight-bold">
                <label for="tel">Telephone:</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-6 font-weight-bold">
                <label for="">Email:</label>
                <input type="email" class="form-control">
              </div>

              <div class="col-md-12 font-weight-bold">
                <h6 class="text-muted mt-3">Family History</h6>
                <hr>
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="marital">Marital Status:</label>
                    <select name="marital" id="marital" class="form-control">
                      <option value="">Married</option>
                      <option value="">Single</option>
                      <option value="">Seperated</option>
                      <option value="">Divorced</option>
                      <option value="">Widowed</option>
                    </select>
                  </div>
                  <div class="col-md-6 font-weight-bold">
                    <label for="children">Number of Children:</label>
                    <input type="number" class="form-control" id="numberofchildren" min="0" max="15" name="numberofchildren" required>
                  </div>
                </div>


              </div>


            </div>
          </div>
    </form>
  </div>
  <div class="row bg-dark p-2 d-flex justify-content-center fixed-bottom">
    <form action="thankyou.php">
      <button class="btn-success btn btn-large">Register</button>
    </form>
  </div>


  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>