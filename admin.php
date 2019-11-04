<html>
<head>
<title>ADMIN</title>
<H1 align="center">STUDENT DATABASE<H1>
<style>
td{
    text-align:center;
}
html {
   
  background: black url(superkick.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color: white;
}
</style>
</head>
<body>
<?php
include "db.php";
$query="SELECT * FROM form";
$data2=mysqli_query($conn,$query);
$total=mysqli_num_rows($data2);

if($total!=0)
{
?>

<table align="center" border="1px" style="width:1000px; line-height:40px;">
    <tr>
        <th>ID</th>
        <th>Photograph</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Course</th>
        <th>Timing</th>
    </tr>

    <?php
    while($result=mysqli_fetch_assoc($data2))
    {
        echo "<tr>
                <td>".$result['id']."</td>
                <td> <a href='print.php?id=".$result['id']."' target='_blank'><img src='{$result['photo']}' width='50px' height='70px'></a></td>
                <td>".$result['f_name']."</td>
                <td>".$result['l_name']."</td>
                <td>".$result['dob']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['address']."</td>
                <td>".$result['course']."</td>
                <td>".$result['usr_time']."</td>
             </tr>";
         
    }

}
else
{
    echo"No Table found";
}
?>
</table>
</body>
</html>
