<?php
$login=0;
$invaild=0;
include("connect.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql ="Select * from `users` where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $login=1;
            session_start();
            $_SESSION['username']=$username;
        }
        else{
            $invaild=1;
        }
    }
    if($login==1){
        if($username=='admin'){
            header("location:admin/studentDisp.php");
        }
        else{
            header("location:home.php");
        }
       
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<section>
            <div class="form-box">
                <div class="form-value">
                    <form action="login.php" method="post">
                        <h2>Login</h2>
                        <div class="inputbox"> <ion-icon name="person-outline"></ion-icon> <input type="text" name="username" autocomplete="off" required>
                            <label>Username</label>
                        </div>
                        <div class="inputbox"> <ion-icon name="lock-closed-outline"></ion-icon> <input type="password" name="password"
                                required> <label>Password</label> </div>
                        <button>Log In</button>
                    </form>
                </div>
            </div>
        </section> 
    <!-- <section class="login">
        <div class="login__s1">
        <form action="login.php" method="post" class="form">
            <h1>Placify</h1>
        <div class="username">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="password">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="btn_div">
            <button type="submit"  class="btn">Login</button>
        </div>
    </form>
        </div>
        <div class="login__s2"  style="width: 100%;height:100%">
           <img src="college-img.png" alt="">
        </div>
    </section> -->

</body>


<!-- <body>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form>
                        <h2>Login</h2>
                        <div class="inputbox"> <ion-icon name="mail-outline"></ion-icon> <input type="email" required>
                            <label>Username</label>
                        </div>
                        <div class="inputbox"> <ion-icon name="lock-closed-outline"></ion-icon> <input type="password"
                                required> <label>Password</label> </div>
                        <div class="forget"> <label><input type="checkbox">Remember Me</label> <a href="#">Forgot
                                Password</a> </div> <button>Log In</button>
                        <div class="register">
                            <p>Don't have an account? <a href="#">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section> 
    </body> -->

</html>