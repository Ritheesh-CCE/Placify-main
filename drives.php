<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
include("connect.php");
$sql = "SELECT * FROM company_details";
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
    <section class="drives_header">
        <div class="drives_img">
            <img src="images/drives-ban-new-2.jpg" alt="">
        </div>
        <h1>Upcoming Drives</h1>
    </section>
    <section class="drives">
        <?php
        // Loop through each company and display its details
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="drives__container">
            <div class="drives__s1">
                <h1><?php echo $row['comp_name']; ?></h1>
            </div>
            <div>
                <div class="drives__s2">
                    <div class="drives__s2__details">
                        <h3><i class="fa-solid fa-sack-dollar" style="color: #74c4e3;"></i> <?php echo $row['package']; ?></h3>
                        <h3><i class="fa-regular fa-calendar-days" style="color: #74c4e3;"></i> <?php echo $row['drive_date']; ?></h3>
                        <h3><i class="fa-solid fa-location-dot" style="color: #74c4e3;"></i> <?php echo $row['location']; ?></h3>
                    </div>
                    <div class="drives__s2__descript">
                        <p><?php echo $row['short_decript']; ?></p>
                    </div>
                    <a href="company_details.php?id=<?php echo $row['id']; ?>" class="drives__s2__btn">View More</a>
                </div>
            </div>
            </div>
            <?php
        }
        ?>
    </section>
</body>
</html>