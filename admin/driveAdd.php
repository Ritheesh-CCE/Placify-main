<?php
include("connect.php");
if (isset($_POST['submit'])){
    $comp_name=$_POST['comp_name'];
    $package=$_POST['package'];
    $job_role=$_POST['job_role'];
    $location=$_POST['location'];
    $short_decript=$_POST['short_decript'];
    $package_details=$_POST['package_details'];
    $skills=$_POST['skills'];
    $Rounds=$_POST['Rounds'];
    $about_com=$_POST['about_com'];
    $drive_date=$_POST['drive_date'];
    $experience=$_POST['experience'];

    $sql="insert into `company_details` (comp_name,package,job_role,location,short_decript,package_details,skills,Rounds,about_com,drive_date,experience) values('$comp_name','$package','$job_role','$location','$short_decript','$package_details','$skills','$Rounds','$about_com','$drive_date','$experience')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:drivesDisp.php');
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
    <title>Document</title>
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
        /* background-repeat: no-repeat;    */
        background-size: cover;
    }
   </style>
</head>
<body>
    <div class="container">
        <div class="container_con">
        <div class="container__header">
            <h1>Add Drives</h1>
        </div>
  
    <div class="container__form">
    <form action="" method="post">
        <label for="comp_name">Company Name</label>
        <br>
        <input type="text" name="comp_name">
        <br>
        <label for="package">Package</label>
        <br>
        <input type="text" name="package">
        <br>
        <label for="job_role">Job Role</label>
        <br>
        <input type="text" name="job_role">
        <br>
        <label for="location">Location</label>
        <br>
        <input type="text" name="location">
        <br>
        <label for="drive_date">Drive Date</label>
        <br>
        <input type="text" name="drive_date">
        <br>
        <label for="short_decript">Short Description</label>
        <br>
        <textarea name="short_decript" id="" cols="30" rows="5"></textarea>
        <br>
        <label for="package_details">Package Details</label>
        <br>
        <textarea name="package_details" id="" cols="30" rows="5"></textarea>
        <br>
        <label for="skills">Requirements</label>
        <br>
        <textarea name="skills" id="" cols="30" rows="5"></textarea>
        <br>
        <label for="Rounds">Rounds Details</label>
        <br>
        <textarea name="Rounds" id="" cols="30" rows="5"></textarea>
        <br>
        <label for="about_com">About Company</label>
        <br>
        <textarea name="about_com" id="" cols="30" rows="5"></textarea>
        <br>
        <label for="experience">Student Experience</label>
        <br>
        <textarea name="experience" id="" cols="30" rows="5"></textarea>
        <br>
        <button type="submit" name="submit" class="button">Add</button>
       
</form>
    </div>
        </div>
      
    </div>

</body>
</html>