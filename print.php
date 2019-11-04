<?php
include("db.php")
?>
<?php
$id = $_GET['id'];
$query2 ="SELECT * FROM form WHERE id=$id";
$data=mysqli_query($conn,$query2);
$print=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admission Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <style>

        .button {
                background-color: skyblue;
                border: none;
                color: white;
                padding: 5px 220px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                margin: 4px 2px;
                cursor: pointer;
                }
        .form-control{
            font-size:15px;
        }
        body {
            border-style: solid;
            border-width: 5px;
            border-color: black;
            font-size:20px;
        }
        .con{
            background-image:url("add.png");
            padding-top:5%;
            padding-bottom:5%;
            padding-left:5%;
        }
        .container_decor{
            background-color: rgba(191, 225, 252,0.8);
            padding:15px;
            z-index:10;
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
            <form action="admin.php" method="get">

             <div class="form-group">
             <h1><center>Admission Form</center></h1><br><br>
             <?php echo "<img src='{$print['photo']}' width='200px' height='250px'>";?>
             </div>
             <div class="form-group">
                <b> <label  > First Name:   <?php echo $print['f_name'];?></label>
                <label   style="position:absolute;right:50px"> Last Name:  <?php echo $print['l_name'];?></label></b>
             </div >          
            
              <br/>
              <div class="form-group">
               <b><label   for="bday"> D.O.B:   <?php echo $print['dob'];?></label>
               <label   for="gender" style="position:absolute;right:50px"> Gender:     <?php echo $print['gender'];?></label><br/></b>
              </div>
              <br/>
              <div class="form-group-lg">
            <b><label  > Contact Number:    <?php echo $print['phone'];?></label></b>
              </div>
              <br/>
              <div class="form-group-lg">
                <b><p> Address:   </p></b>
                  <b><label   for="address"><?php echo $print['address'];?></label></b><br>  
              </div>
               <br/>
               <br/>
              <div class="form-group">
              <b>
              <label   for="course"> Course:    <?php echo $print['course'];?></label>
              <label   for="course" style="position:absolute;right:50px"> Course timing:   <?php echo $print['usr_time'];?></label>
              </div></b>
              <br/>
              
            <br/><br/><br/><br/>
            <div class="form-group">
                <b><p style="position:absolute;right:50px">_________________________</p></b>
                </div><br>
                <div class="form-group">
                <b><p style="position:absolute;right:50px">Signature of applicant</p></b><br><br>
            </div>
            <div>
            <input class="button" type="button" value="Print this page" onClick="window.print()">
            </div>
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