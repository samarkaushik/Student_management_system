
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

$id= $_REQUEST['sid'];


$qry="DELETE FROM `student` WHERE  `id`='$id' ;";

$run=mysqli_query($con,$qry);

if($run == true){
    ?>
    <script>
        alert("Data deleted succefully");
        window.open('delet.php','_self');

        </script>

        <?php
}


$con->close();

?>