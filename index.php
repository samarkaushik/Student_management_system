<?php
session_start();
if(isset($_SESSION['uid'])){

    header('location:admindash.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background-color:black">

    <h1 style="color: beige; text-align: center;">LOGIN FORM</h1>
    
  

    <div class="row" style="padding-top:100px;">
        <div class="col-4"> <img  src="CSS/login.jpg"></div>
        <div class="col-4">
            <form action="index.php" method="post">
                <label class="log"> Username</label>
                <input type="text" name="name"><br><br>
                <label class=log for="pwd">Password:</label>
                <input type="password"  name="pass" id="pwd"><br><br>
                <input type="submit" name="login">
              </form>
              
        </div>
       
      </div>
   <script src="index.js"></script>
  
</body>
</html>






<?php

$server="localhost";
$username="root";
$password="";
$database="adminlogin";

$con= mysqli_connect($server, $username , $password, $database);

if(!$con){
echo "success failed";

}


if(isset($_POST['login'])){


$name = $_POST['name'];
$pass = $_POST['pass'];

$qry="SELECT * FROM `adminlogin` WHERE `name`='$name' AND `Pass`='$pass'";

$result=mysqli_query($con , $qry);


$count=mysqli_num_rows($result);

if($count == 1) {

   $data= mysqli_fetch_assoc($result);
   $id=$data['id'];
  

 
   $_SESSION['uid']= $id;
   
   header("location:admindash.php");

 }else {

    ?>


    <script>

        alert('"Your Login Name or Password is invalid"')
     window.open('index.php','_self');
        </script>

    <?php
    
 }






$con->close();
}
?>