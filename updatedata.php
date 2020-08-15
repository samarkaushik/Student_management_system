
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
$id =$_POST['sid'];



$qry="UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `parents` = '$parents', `stndrd` = '$stndrd' WHERE `student`.`id` = $id;";

$run=mysqli_query($con,$qry);

if($run == true){
    ?>
    <script>
        alert("Data updatedsuccefully");
        window.open('updateform.php ?sid=<?php echo $id;?>' , '_self');

        </script>

        <?php
}


$con->close();
}
?>