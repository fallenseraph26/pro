
<?php
    include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admission Form</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <style>
        body{
            font-size: 20px;
        }
        .form-control{
            font-size:15px;
        }
        .con{
            background-image:url("add.png");
            padding-top:5%;
            padding-bottom:5%;
            padding-left:5%;
        }
        .container_decor{
            background-color: rgba(114, 120, 115,0.8);
            padding:15px;
            z-index:10;
            
        }
        #submit{
            font-size:15px;
        }
        </style>
    </head>
    <body>
    <div class="container-fluid con">
    <div class="row">
    <div class="col-xs-9 col-xs-offset-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-8 container_decor">
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
              <h1>Admission Form</h1>
              <div class="form-group">
                  <label for="firstname">First Name:</label>
                  <input type="text"  class="form-control" id="firstname" name="firstname" value="<?= $f_name; ?>">
                  <span class="error"><?= $f_nameerror; ?> </span>
              </div>
              <div class="form-group">
                  <label for="firstname">Last Name:</label>
                  <input type="text"  class="form-control" name="lastname" id="lastname" value="<?= $l_name; ?>">
                  <span class="error"><?= $l_nameerror; ?> </span>
              </div>

              <div class="form-group">
                  <label for="bday">D.O.B:</label>
                  <input type="date" name="bday" id='bday' value="<?= $dob; ?>">
                  <span class="error"><?= $doberror; ?> </span>
              </div>
  
              <div class="form-group">
                  <label for="gender">Gender:</label> <br>
                  <label>
                      <input type="radio" name="gender" id="gender" value="male"> Male <br>
                      <input type="radio" name="gender" id="gender" value="female"> Female <br>
                      <input type="radio" name="gender" id="gender" value="other"> Other
                  </label>
              </div>

              <div class="form-group">
                <label for="contact">Contact No.:</label>
                <input type="number" name="contact" id="contact" value="<?= $phone;?>">
                <span class="error"><?= $phoneerror; ?> </span>
              </div>

              <div class="form-group-lg">
                  <label for="address">Address:</label>
                  <input type="text"  class="form-control" id="address" name="address" value="<?= $add;?>">
                  <span class="error"><?= $adderror; ?> </span>
              </div>

              <div class="form-group">
                  <label for="file">Upload Picture:</label>
                  <input type="file" class="form-control-file" name="file" aria-describedby="fileHelp">
              </div>

              <div class="form-group">
                <label for="course">Select Course:</label> <br>
                <label>
                      <input type="radio" name="course" id="course[ ]" value="Gymnastic"> Gymnastic
                  </label>
                  <label>		  
                      <input type="radio" name="course" id="course[ ]" value="Martialarts"> Martial arts
                  </label> 
                  <label>		  
                      <input type="radio" name="course" id="course[ ]" value="Wushu"> Wushu
                  </label>
              </div>
            
              <div class="form-group">
                <label for="course">Select Course timing:</label> <br>
                <input type="time" name="usr_time" id='usr_time'>
            </div>
              <button type="submit" name="submit" id="submit" value="Upload Image" class="btn btn-primary btn-block">Submit</button>
          </form>
          </div>
      </div>
      </div>
    </div>
    </div>
    </div>

    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </body>

</html>