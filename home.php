


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <link rel="stylesheet" href="CSS/home.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title>Student Management system</title>
</head>
<body style="background-color:#9a1f40">

   
    <h5 align="right"><a href="index.php">Admin Login</a></h5>
    <h1>WELCOME TO MANAGEMENT SYSTEM</h1>
    
    <form method="post" action="home.php">
    <table align="center" border="3">
        <tr>
            <td align="center" colspan="2" class="ro" >Student Information</td>
        </tr>
        <tr>
            <td  align="left"  class="ro" >
                choose standard
            </td>
            <td>
                <select name="standrd" required>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    <option value="7">7th</option>
                    <option value="8">8th</option>
                    <option value="9">9th</option>
                    <option value="10">10th</option>
                    <option value="11">11th</option>
                    <option value="12">12th</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="left" class="ro">
                Enter Roll no
            </td>
            <td>
                <input type="text" name="rollno" required>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <button type="submit" name="submit" class="btn btn-dark">show details</button></td>
            
        </tr>
    </table>
</form>


</body>
</html>




<?php

if(isset($_POST['submit'])){

    $standrd=$_POST['standrd'];
    $rollno=$_POST['rollno'];


$server="localhost";
$username="root";
$password="";
$database="adminlogin";

$con= mysqli_connect($server, $username , $password, $database);

if(!$con){
echo "success failed";

}
echo " ";


include('function.php');
showdetails($standrd, $rollno);


}
?>