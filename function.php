<?php

function showdetails($standrd , $rollno){



    $server="localhost";
    $username="root";
    $password="";
    $database="adminlogin";
    
    $con= mysqli_connect($server, $username , $password, $database);
    
    if(!$con){
    echo "success failed";
    
    }
    echo " ";





$qry="SELECT * FROM `student` WHERE  `rollno` ='$rollno' AND `stndrd`='$standrd '";

$run=mysqli_query($con,$qry);

if(mysqli_num_rows($run)> 0){

$data=  mysqli_fetch_assoc($run);
?>

<table border="1"  align="center" style="width:80%; margin-top:30px ; text-color:white" ;>

    <tr>
        <th colspan="3">STUDENT DETAILS</th>
    </tr>
    <tr>
        <th>Roll No</th>
        <td> <?php echo $data['rollno'] ?></td>
    </tr>

    <tr>
        <th>Name</th>
        <td> <?php echo $data['name'] ?></td>
    </tr>

    <tr>
        <th>City</th>
        <td> <?php echo $data['city'] ?></td>
    </tr>

    <tr>
        <th>parents</th>
        <td> <?php echo $data['parents'] ?></td>
    </tr>
    <tr>
        <th>Roll No</th>
        <td> <?php echo $data['stndrd'] ?></td>
    </tr>
</table>


<?php

}else{
echo "<script>alert('No student found');</script>";




}
}

?>