<?php


session_start();

if(isset($_SESSION['uid'])){
    
}else{

    header('location:../index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <link rel="stylesheet" href="CSS/addstu.css">
    <title>Student Management system</title>

</head>

<body>
<div class="adm" align="center">
<h4 style="float:left"><a href="admindash.php">Back to DASHBOARD</a>
<h4><a href="logout.php">Logout</a></h4>
<h1>WELCOME TO ADMIN DASHBOARD </h1>
</div>
<div class="dashboard" align="center">

<form method="POST" action="addstu.php">
    <table border="2">
<tr>
    <th> Roll No</th>
    <td>
     <input type="text"  name="rollno" placeholder="Enter roll no" required>  
    </td>
</tr>
<tr>
<th> Full Name</th>
    <td>
     <input type="text"  name=" name" placeholder="Enter roll no" required>  
    </td>
</tr>
<tr>
<th> city</th>
    <td>
     <input type="text"  name="city" placeholder="Enter roll no" required>  
    </td>
</tr>

<tr>
<th> Parents Name</th>
    <td>
     <input type="text"  name="parents" placeholder="Enter roll no" required>  
    </td>
</tr>
<tr>
<th>standard</th>
    <td>
     <input type="text"  name="stndrd" placeholder="Enter roll no" required>  
    </td>
</tr>

<tr>
    <td colspan="2">
<input type="submit" name="submit" value="submit"></td>
</tr>
    </table>

</form>

</div>

  

</body>
</html>


<?php
if(isset($_POST['submit'])){
$server="localhost";
$username="root";
$password="";
$database="adminlogin";

$con= mysqli_connect($server, $username , $password, $database);

if(!$con){
echo "success failed";

}
echo " ";


$rollno = $_POST['rollno'];
$name = $_POST['name'];
$city=   $_POST['city'];
$parents=$_POST['parents'];
$stndrd=$_POST['stndrd'];


$qry ="INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `parents`, `stndrd`) VALUES (NULL,'$rollno','$name','$city','$parents','$stndrd')";

$run=mysqli_query($con,$qry);

if($run == true){
    ?>
    <script>
        alert("inserted succefully");
        </script>

        <?php
}


$con->close();
}
?>