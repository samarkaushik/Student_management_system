

<?php


session_start();

if(isset($_SESSION['uid'])){
    
}else{

    header('location:../index.php');
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
echo " ";




$sid= $_GET['sid'];
$sql="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con, $sql);
$data=mysqli_fetch_assoc($run)
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

<form method="POST" action="updatedata.php">
    <table border="2">
<tr>
    <th> Roll No</th>
    <td>
     <input type="text"  name="rollno" value=<?php echo $data['rollno']; ?>  required>  
    </td>
</tr>
<tr>
<th> Full Name</th>
    <td>
     <input type="text"  name=" name" value=<?php echo $data['name']; ?>  required>  
    </td>
</tr>
<tr>
<th> city</th>
    <td>
     <input type="text"  name="city" value=<?php echo $data['city']; ?>  required>  
    </td>
</tr>

<tr>
<th> Parents Name</th>
    <td>
     <input type="text"  name="parents" value=<?php echo $data['parents']; ?>  required>  
    </td>
</tr>
<tr>
<th>standard</th>
    <td>
     <input type="text"  name="stndrd" value=<?php echo $data['stndrd']; ?>  required>  
    </td>
</tr>

<tr>
    <td colspan="2">
    <input type="hidden" name="sid" value="<?php echo $data['id'] ; ?>" />
<input type="submit" name="submit" value="submit"></td>
</tr>
    </table>

</form>

</div>

  

</body>
</html>

