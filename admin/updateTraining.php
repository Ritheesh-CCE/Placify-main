<?php
include("connect.php");
$id = $_GET['updateid'];
$sql = "SELECT * FROM `training` WHERE id=?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
$topic = $row['topics'];
$name = $row['training_name'];
$dates = $row['date'];
$days = $row['day'];
if (isset($_POST['submit'])) {
    $training_name = $_POST['training_name'];
    $date = $_POST['date'];
    $day = $_POST['day'];
    $topics = $_POST['topics'];

    $sql = "UPDATE `training` SET training_name=?, date=?, day=?, topics=? WHERE id=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssssi", $training_name, $date, $day, $topics, $id);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        header('location:trainingDisp.php');
    } else {
        die(mysqli_error($con));
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
        background-repeat: no-repeat;
        background-size: cover;
    }
   </style>
</head>
<body>
<div class="container">
        <div class="container_con">
        <div class="container__header">
            <h1>Update Training</h1>
        </div>
  
    <div class="container__form">
<form action="" method="post">
<label for="training_name">Training Name</label>
<br>
        <input type="text" name="training_name" id="" value="<?php echo $name ?>">
        <br>
        <label for="date">Date</label>
        <br>
        <input type="text" name="date" value="<?php echo $dates ?>">
        <br>
        <label for="day">Day</label>
        <br>
        <input type="text"  name="day" value="<?php echo $days ?>">
        <br>
        <label for="topics">Topics</label>
        <br>
        <textarea name="topics" id="" rows="5" cols="30"><?php echo $topic ?></textarea>
        <br>
        <button type="submit" name="submit" class="button">Update</button>
       
</form>
</div>
        </div>
      
    </div>
</body>
</html>