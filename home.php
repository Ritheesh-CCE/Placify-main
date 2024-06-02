<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
include("connect.php");   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <div class="image">
        <img src="./images/front photo.png">
            </div>
            <div class="quote">
                <h1>Do what you love,love what you do</h1>
            </div>
            <div class="quote2">
            <h4>Remember, perseverance, dedication, and a positive attitude are key ingredients for success in any placement endeavor. Good luck!</h4>
            </div>
            <div class="team">
                <h2>Placement team</h2>
                </div>
                <div class="container">
                    <div class="staff">
                        <img src="images/srini sir.jpg" alt="">
                        <div class="staff__details">
                            <h4> Head - Placement and Training</h4>
                            <h5>Mr.R.Srinivasan</h5>
                        </div>
                        </div>
                        <div class="staff">
                            <img src="images/po.png" alt="">
                            <div class="staff__details">
                                <h4> Placement Officer</h4>
                                <h5>Dr.Arun Jeganathan</h5>
                            </div>
                            </div>
                            <div class="staff">
                                <img src="images/jude.png" alt="">
                                <div class="staff__details">
                                    <h4> Soft Skills Trainer</h4>
                                    <h5>Mr.L.D.Aloysius Jude</h5>
                                </div>
                                </div>
                                <div class="staff">
                                    <img src="images/kalai.png" alt="">
                                    <div class="staff__details">
                                        <h4>Aptitude Trainer</h4>
                                        <h5>Ms.M.Kalaiselvi</h5>
                                    </div>
                                    </div>
                                    <div class="staff">
                                        <img src="images/oviya mam.png" alt="">
                                        <div class="staff__details">
                                            <h4> Soft Skills Trainer</h4>
                                            <h5>Ms.M.Oviya</h5>
                                        </div>
                                        </div>
                </div>
            <div class="companies">
                <h2>Top companies visited</h2>
            </div>
            <div class="company__photo">
            <img src="./images/mcs.png">
            <img src="./images/amz.png" >
            <img src="./images/zoho.png" >
            <img src="./images/palo.png">
            <img src="./images/cat.png" >
            </div>
            <div class="top__packages">
                <h2>Top packages</h2>
                </div>
                <div class="container2">
                        <div class="packages">
                            <h3>41 LPA</h3>
                                <div class="packages__cmpy">
                            <img src="images/auto.png" alt="">
                            </div>
                            </div>
                            <div class="packages">
                                <h3>40 LPA</h3>
                                    <div class="packages__cmpy">
                                <img src="images/amz.png" alt="">
                                </div>
                                </div>
                                <div class="packages">
                                    <h3>27 LPA</h3>
                                        <div class="packages__cmpy">
                                    <img src="./images/justpay.png" alt="">
                                    </div>
                                    </div>
                                    <div class="packages">
                                        <h3>25 LPA</h3>
                                            <div class="packages__cmpy">
                                        <img src="./images/wells.png" alt="">
                                        </div>
                                        </div>
                                        <div class="packages">
                                            <h3>18 LPA</h3>
                                                <div class="packages__cmpy">
                                            <img src="./images/shopup.png" alt="">
                                            </div>
                                            </div>
                                        </div>
            <footer>
                <div class="FT">
                  <div class="ft">
                    <h5><b>Address</b></h5>
                    <p>Kondampatti (post),<br>
                       Vadasithur (via), Kinathukadavu,<br>
                       Coimbatore – 641 202,<br>
                       Tamil Nadu.
                    </p>
                  </div>
                  <div class="ft">
                    <h5>Email</h5>
                    <p>placements.sece.ac.in</p>
                  </div>
                  <div class="ft">
                    <h5>Phone</h5>
                    <p>+91 4259 200300</p>
                    <p>+91 73736 17171</p>
                  </div>
                  <div class="ft">
                    <p>Crafted by placify teams</p>
                    <p>@Copyright, Sri Eshwar College of Engineering. All Right Reserved.</p>
                  </div>
                </div>
              </footer>
              
</body>
</html>



