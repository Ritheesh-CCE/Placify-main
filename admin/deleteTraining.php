<?php
include("connect.php");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `training` where id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        // echo "Deleted Successfully";
        header('location:trainingDisp.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>