<?php
include("connect.php");
$id=$_GET['updateid'];
$sql="Select * from `users` where ID=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="update `users` set ID='$id',username='$username',password='$password' where ID='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data Inserted";
        header('location:studentDisp.php');
    }
    else{
        die(mysqli_error($concon));
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
<style>
      body{
        background-image: url('../images/admin-bg-2.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .container_con{
        top: 100px;
    }
    .container form input{
        width: 130%;
    }
    .container button{
        margin-left: 25px;
    }
   </style>
</head>
<body>
     
<div class="container">
        <div class="container_con">
        <div class="container__header">
            <h1>Add Student</h1>
        </div>
  
    <div class="container__form">
    <form method="post">
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" id="username" value=<?php echo $row['username'] ?>>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="text" name="password" id="password"  value=<?php echo $row['password'] ?>>
        <br>
        <button type="submit" name="submit" class="button">Update</button>
        
    </form>
    </div>
        </div>
      
    </div>

    
   
</body>
</html>