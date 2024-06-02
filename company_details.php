<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
include("connect.php");

// Check if company_id parameter is set
if(isset($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $company_id = mysqli_real_escape_string($con, $_GET['id']);

    // Fetch company details from the database based on company_id
    $sql = "SELECT * FROM company_details WHERE id = '$company_id'";
    $result = mysqli_query($con, $sql);

    // Check if company exists
    if(mysqli_num_rows($result) > 0) {
        $company = mysqli_fetch_assoc($result);
        // Now $company contains all details of the specific company
    } else {
        // Company not found, handle error or redirect
        // For example:
        header('location:drives.php');
        exit; // Stop further execution
    }
} else {
    // Redirect if company_id parameter is not set
    header('location:drives.php');
    exit; // Stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company['comp_name']; ?> Details</title>
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
<button class="company_back_btn"><a href="drives.php"><i class="fa-solid fa-circle-chevron-left" style="color: white;"></i></a></button>
<section class="company" style="background-color: white;">
    <div class="company_header">
   <div class="company_header__img">
   <img src="images/comp-img-3.jpeg" alt="">
   </div>
   <div class="company_header__heading">
   <h1><?php echo $company['comp_name']; ?></h1>
   <h3><i class="fa-solid fa-sack-dollar" style="color: #74c4e3;"></i> <?php echo $company['package']; ?></h3>
    <h3><i class="fa-regular fa-calendar-days" style="color: #74c4e3;"></i> <?php echo $company['drive_date']; ?></h3>
    <h3><i class="fa-solid fa-location-dot" style="color: #74c4e3;"></i> <?php echo $company['location']; ?></h3>
   </div>
    </div>
<div class="company_role">
    <h1>Job Roles going to be recruted</h1>
    <ul>
    <?php
    if (!empty($company['job_role'])) {
        $role_array = explode("^", $company['job_role']);
        foreach ($role_array as $role) {
            echo "<li><i class='fa-solid fa-arrows-turn-right' style='color: #74c4e3;'></i>$role</li>";
        }
    }
    ?>
    </ul>

</div>
<div class="requirements">
    <h1>Requirements for Drive</h1>
    <ul>
    <?php
    if (!empty($company['skills'])) {
        $skill_array = explode("^", $company['skills']);
        foreach ($skill_array as $skill) {
            echo "<li><i class='fa-solid fa-caret-right' style='color: #74c4e3;'></i>$skill</li>";
           
        }
    }
    ?>
    </ul>
</div>
<div class="company_rounds">
    <h1>Drive Rounds</h1>
    <ul>
    <?php
    // Check if the 'rounds_details' column is not empty
    if (!empty($company['Rounds'])) {
        // Explode the string of rounds details into an array
        $rounds_array = explode("^", $company['Rounds']);
        foreach ($rounds_array as $round) {
            // Split each round into two parts by ":"
            $round_parts = explode(":", $round);
            // Check if the round has two parts
            if (count($round_parts) == 2) {
                // Output the round details
                echo "<li>";
                echo "<h4>{$round_parts[0]}:</h4>"; // First part in h1
                // Split the second part into multiple parts by "&"
                $details_parts = explode("&", $round_parts[1]);
                echo "<ul>";
                foreach ($details_parts as $detail) {
                    echo "<li><i class='fa-solid fa-feather-pointed' style='color: #74c4e3;'></i> $detail</li>"; // Output each detail as a list item
                }
                echo "</ul>";
                echo "</li>";
            }
        }
    }
    ?>
    </ul>
</div>
<div class="company_package">
<h1>Package Details</h1>
    <ul>
    <?php
    // Check if the 'package_details' column is not empty
    if (!empty($company['package_details'])) {
        // Explode the string of package details into an array
        $package_array = explode("^", $company['package_details']);
        foreach ($package_array as $package) {
            if (isset($package) && strpos($package, ":") !== false) {
                $package_parts = explode(":", $package);

                echo "<h4>{$package_parts[0]}</h4>";
                echo "<ul>";
                $second_parts = explode("*", $package_parts[1]);
                foreach ($second_parts as $part) {
                    echo "<li><i class='fa-solid fa-hand-holding-dollar' style='color: #74c4e3;'></i> {$part}</li>";
                }
                echo "</ul>";
            }
            else{
                echo "<li><i class='fa-solid fa-hand-holding-dollar' style='color: #74c4e3;'></i> {$package}</li>";
                
            }
        }
    }
    ?>
    </ul>
</div>
<div class="company_experience">
    <h1>Previous Year Student Experience</h1>
    <ul>
    <?php
    if (!empty($company['experience'])) {
        $experience_array = explode("^", $company['experience']);
        foreach ($experience_array as $exp) {
            $exp_parts = explode("#", $exp);
            echo "<h3>{$exp_parts[0]}</h3>";
            echo "<h4>Quetions:</h4>";
            echo "<ul>";
            $exp_parts_lists=explode("!", $exp_parts[1]);
            foreach ($exp_parts_lists as $part) {
                echo "<li><i class='fa-solid fa-clipboard-question' style='color: #74c4e3;'></i> {$part}</li>";
            }
            echo "</ul>";  
        }
    }
  
   ?>
    </ul>
</div>
<div class="company_desc">
    <h1>About The Company - <?php echo $company['comp_name']; ?></h1>
<p> <?php echo $company['about_com']; ?></p>
</div>
</section>

</body>
</html>
