<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
include("connect.php");
$sql = "SELECT * FROM training";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
<style>
    body{
        background-color: rgba(0, 0, 0, 0.1);
    }
</style>
</head>
<body>
        <!-- Navbar -->
        <section class="navbar">
        <h1 class="navbar__head">Placify</h1>
        <div>
            <ul class="navbar__list">
                <li><a href="home.php" style="text-decoration: none;">Home</a></li>
                <li><a href="drives.php"  style="text-decoration: none;">Drives</a></li>
                <li><a href="training.php"  style="text-decoration: none;">Training</a></li>
                <li><a href="logout.php" style="text-decoration: none;background-color:white;color:#74c4e3;border-radius: 5px; padding: 6px;">Logout</a></li>
            </ul>
        </div>
    </section>
    <section class="training-header">
        <div class="training-header_details">
            <img src="images/training-ban-new-1.jpg" alt="">
            <h1>UpComing Training</h1>
        </div>
    </section>
  <section class="training">
    
    <div class="trainings">
         
    <?php
            // Loop through each training and display its details
            while ($training = mysqli_fetch_assoc($result)) {
            ?>
            <div class="training-details">
                <h1 class="training-details__heading"><?php echo $training['training_name']; ?></h1>
                <div class="training-details__dates">
                    <h3><i class='fa-solid fa-calendar-days' style='color: #74c4e3;'></i> <?php echo  $training['date'];?></h3>
                    <h3><?php echo $training['day']; ?></h3>
                </div>
                <div class="training-details__topics">
                    <h3>Topics Covered:</h3>
                    <ul>
                        <?php
                        // Split the topics by ^
                        $topics = explode("^", $training['topics']);
                        foreach ($topics as $topic) {
                            // Split each topic further by :
                            $topic_parts = explode(":", $topic);
                            ?>
                           
                                <h4><?php echo $topic_parts[0]; ?></h4>
                                <?php
                                if (isset($topic_parts[1])) {
                                    // Output the second part as a list item
                                    echo "<li><i class='fa-solid fa-graduation-cap' style='color: #74c4e3;'></i>  {$topic_parts[1]}</li>";
                                }
                                ?>
                            
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
            }
            ?>
    </div>
  </section>
</body>
</html>