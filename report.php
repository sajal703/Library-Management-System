<?php
// include '_navbar.php';
include 'loader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: Georgia, 'Times New Roman', Times, serif;
            overflow: hidden;
            text-decoration: none;
        }
        .he{
            margin: 2% 0 2% 5%;
            font-weight: 800;
        }
        .main{
            margin-top: 1%;
            display: flex;

        }
        .guided{
            width: 50%;            
            height: 710px;
            padding: 2% 0 2% 6.5%;
            
        }
        .lists{
            width: 50%;            
            height: 710px;
            padding: 2% 0 2% 6.5%;
        }
        li{
            list-style:disc;
            padding: 0 0 1.9% 7%;
            font-size: 22px;
        }
        .sub_heading{
            font-size: 28px;
            padding-bottom: 2%;
            
        }
        .g2{
            margin-top: 4%;
        }
        a{
            color: green;
        }
    </style>
</head>
<body>
    <h1 class="he">Reports</h1>
    <div class="main">
        <div class="guided">
            <div class="g1">
                <h2 class="sub_heading">Guided reports</h2>
                <li><a href="report3.php">Create reports</a></li>
                <li><a href="Report2.php">Saved reports</a></li>
            </div>
            <div class="g2">
                <h2 class="sub_heading">Statistics wizrds</h2>
                <li><a href="acquisition.php">Acquistions</a></li>
                <li><a href="patrons..php">Patrons</a></li>
                <li><a href="catalog..php">Catalog</a></li>
                <li><a href="front-in-out.php">Circulation</a></li>
                <li><a href="periodic..php">Periodic</a></li>
            </div>
        </div>
        <div class="lists">
            <div class="g1">
                <h2 class="sub_heading">Top lists</h2>
                <li><a href="#">Patrons with the most checkouts</a></li>
                <li><a href="#"> Most-circlated items</a></li>
            </div>
            <div class="g2"></div>
                <h2 class="sub_heading">Inactive</h2>
                <li><a href="#">Patrons who haven't checked out</a></li>
                <li><a href="#">Items With no checkouts</a></li>
            </div>
        </div>
    </div>
</body>
</html>