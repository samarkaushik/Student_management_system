

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

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/updatestu.css">
    <title>Document</title>
</head>
<body>
<div class="adm" align="center">
<h4 style="float:left"><a href="admindash.php">Back to DASHBOARD</a>
<h4><a href="logout.php">Logout</a></h4>
<h1>WELCOME TO ADMIN DASHBOARD </h1>


<table align="center">
<form action="updatestudent.php" method="post">
    <tr>
        <th>
            Enter standard
        </th>
        <td>
<input type="number" name="stndrd" placeholder="enter standrd" required="required"/>
        </td>
   
        <th>
            Enter  student Name
        </th>
        <td>
<input type="text" name="name" placeholder="enter student name" required="required"/>
        </td>

        <td colspan="2">
<input type="submit" name="submit" value="submit">
<td>
    </tr>
    </form>

</table>


<table align="center" width="80%" border="2">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Rollno</th>
        <th>Edit</th> 
    </tr>

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
 
    


$stndrd= $_POST['stndrd'];
$name = $_POST['name'];

    $qry="SELECT * FROM `student` WHERE `stndrd`='$stndrd' AND  `name` LIKE '%$name%'";
 $run=mysqli_query($con , $qry);

 if(mysqli_num_rows($run)<1){
     echo "<tr><td colspan='4'>now records found</td></tr>";
 }else{
     $count=0;
    while($data=mysqli_fetch_assoc($run)){
        $count++;

        ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><a href="updateform.php?sid=<?php echo $data['id'] ;?>">Edit</a></td> 
    </tr>
    
    <?php
    }
 }
     
    
 }


?>

    
</table>
</div> 
</body>
</html>



