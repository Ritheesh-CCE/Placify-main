<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='placify';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($con){
    // echo "Connectio successful";
    echo "";
}
else{
    die(mysqli_error($concon));
}
?>