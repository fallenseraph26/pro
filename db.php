<?php
include("connection.php");

if(isset($_POST['submit'])){
    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $file_size=$_FILES['file']['size'];
    $file_tem_loc=$_FILES['file']['tmp_name'];
    $file_store="student/".$file_name;

    move_uploaded_file($file_tem_loc,$file_store);
}
$f_name = $l_name = $phone = $add = $dob  = $gender = $course = "";
$f_nameerror = $l_nameerror = $phoneerror = $adderror = $doberror = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["firstname"])){
        $f_nameerror = "first name is required";
    }
    else{
        $f_name = test_input($_POST["firstname"]);
        if(!preg_match("/^[a-zA-Z]*$/", $f_name)){
            $f_nameerror = "only characters are allowed";
        }
    }
    if(empty($_POST["lastname"])){
        $l_nameerror = "Last name is required";
    }
    else{
        $l_name = test_input($_POST["lastname"]);
        if(!preg_match("/^[a-z()A-Z]*$/", $l_name)){
            $l_nameerror = "only characters are allowed";
        }
    }
    if(empty($_POST["address"])){
        $adderror = "Address is required";
    }
    else{
        $add = test_input($_POST["address"]);
        if(!preg_match("/^[0-9()a-zA-Z]*$/", $add)){
            $adderror = "No special symbols allowed";
        }
    }
    if(empty($_POST["contact"])){
        $phoneerror = "Contact field must not be kept blank";
    }
    else{
        $phone= test_input($_POST["contact"]);
        if(!preg_match("/^[0-9]{10}+$/", $phone)){
            $phoneerror = "Contact should not be more than 10 characters";
        }
    } 
    if(empty($_POST["bday"]))
    {
        $doberror = "Date of birth field must not be kept blank";
    }
    else{
        $dob = test_input($_POST["bday"]);
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
        if($diff->format('%y%') <5)
        {
            $doberror = "You are too young";
        }
    
    }
    if(empty($_POST["gender"]))
    {
        $doberror = "Date of birth field must not be kept blank";
    }
    else{
        $gender = test_input($_POST["gender"]);
 
       
        if($diff->format('%y%') <5)
        {
            $doberror = "You are too young";
        }
    
    }
    if(empty($_POST["course"]))
    {
        $courseerror = "Date of birth field must not be kept blank";
    }
    else{
        $course = test_input($_POST["course"]);
      
        if($diff->format('%y%') <5)
        {
            $doberror = "You are too young";
        }
    
    }
    

$photo="student/".$file_name;
$f_name = $_POST['firstname'];
$l_name = $_POST['lastname'];
$dob = $_POST['bday'];
$phone = $_POST['contact'];
$add = $_POST['address'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$time = $_POST['usr_time'];



$db = "insert into form(photo,f_name,l_name,dob,gender,phone,address,course,usr_time) values ('$photo','$f_name','$l_name','$dob','$gender','$phone','$add','$course','$time')";
$db = mysqli_query($conn,$db)
or die(mysqli_error($conn));


}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?> 