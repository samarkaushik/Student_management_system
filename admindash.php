<?php


session_start();

if(isset($_SESSION['uid'])){
{
echo "";

}

?>



<?php

$server="localhost";
$username="root";
$password="";
$database="adminlogin";

$con= mysqli_connect($server, $username , $password, $database);

if(!$con){
echo "success failed";

}
echo "success";
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <link rel="stylesheet" href="CSS/admindash.css">
    <title>Student Management system</title>

</head>


<body style="background-color:yellow">
    <div class="adm" align="center">
        
    <h4><a href="logout.php">Logout</a></h4>
   
    <h1>WELCOME TO ADMIN DASHBOARD </h1>
   


</div>


<div class="dashboard" align="center">
<table>
<tr>
    <td>1</td>
    <td><a href="addstu.php">Add Student Details</a></td>
</tr>
<tr>
    <td>2</td>
    <td><a href="delet.php">Delete Student Details</a></td>
</tr>
<tr>
    <td>3</td>
    <td><a href="updatestudent.php">Update Student Details</a></td>
</tr>
</table>
</div>
  

</body>
</html>