<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Display</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
<section class="navbar">
        <h1 class="navbar__head">Placify</h1>
        <div>
            <ul class="navbar__list">
                <li><a href="studentDisp.php" style="text-decoration: none;">Student</a></li>
                <li><a href="drivesDisp.php"  style="text-decoration: none;">Drives</a></li>
                <li><a href="trainingDisp.php"  style="text-decoration: none;">Training</a></li>
                <li><a href="../logout.php" style="text-decoration: none;background-color:white;color:#74c4e3;border-radius: 5px; padding: 6px;">Logout</a></li>

            </ul>
        </div>
    </section>
    <div class="Add__btn">
        <button><a href="studentAdd.php">Add Student</a></button>
    </div>
    <div class="table_data">
    <table class="table">
        <thead >
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Operations</th>
        </tr>
        </thead>
       <tbody>
        <?php
        $sql="Select * from `users`";
        $result=mysqli_query($con,$sql);
        if($result){
            // $row=mysqli_fetch_assoc($result);
            
            while( $row=mysqli_fetch_assoc($result)){
                echo '<tr><td>'.$row['username'].'</td><td>'.$row['password'].'</td>
                <td>
                <button><a href="updateStudent.php?updateid='.$row['ID'].'">Update</a></button>
                <button style="background-color: red; margin-left: 1.5px;"><a href="deleteStudent.php?deleteid='.$row['ID'].'">Delete</a></button>
            </td>
                </tr>';
            }
        }
        ?>
       
       </tbody>
    </table>
    </div>
  
</body>
</html>