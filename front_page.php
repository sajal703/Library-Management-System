<?php
session_start();
include '_navbar.php';
include 'loader.php';
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="front_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="icon" href="nacc a+.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        
    </style>
</head>
<body>
    <ul>
    <!-- <li><a><?php echo $_SESSION['username'] ?></a></li> -->
    </ul>
    <div class="main">
        <div class="contain">
            <div class="1st">
                <a href="front-in-out.php" style="color: black;">
                <div class="circulation">
                <i class="fa-solid fa-arrows-left-right"></i>
                    <h3>Circulation</h3>
                </div></a>     
                <a href="periodic..php" style="color: black;">
                <div class="serial">
                    <i class="fa-solid fa-newspaper"></i>
                    <h3>Periodic</h3>
                </div></a>
            </div>
            <div class="2nd">
                <a href="patrons..php" style="color: black;">
                <div class="patrons">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <h3>Patrons</h3>
                </div></a>
                <a href="acquisition.php" style="color: black;">
                <div class="acquisitions">
                    <i class="fa-solid fa-gift"></i>
                    <h3>Acquisitions</h3>
                </div></a>
            </div>
            <div class="3rd">
                <a href="in-out.php" style="color: black;">
                <div class="advance_search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <h3>Student Registration</h3>
                </div></a>
                <a href="report.php" style="color: black;">
                <div class="reports">
                    <i class="fa-solid fa-chart-pie"></i>
                    <h3>Reports</h3>
                </div></a>
            </div>
            <div class="4th">
                <a href="catalog..php" style="color: black;">
                <div class="cataloging">
                    <i class="fa-solid fa-tag"></i>
                    <h3>Cataloging</h3>
                </div></a>
            </div>
            <div class="5th">
                <a href="barcode_checker.php" style="color: black;">
                <div class="check_barcode">
                    <i class="fa-solid fa-link"></i>
                    <h3>Check Barcode</h3>
                </div></a>
        </div>
    </div>
    </script>
</body>
</html>