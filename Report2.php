<?php
include '_navbar.php';
include 'loader.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Report</title>
    <style>
        table{
            background-color: rgb(204, 204, 255);
            padding:10px;
            width: 100%;
        }
        th{
            border: 1px solid black ;
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
        }
        td{
            border: 1px solid rgb(141, 66, 97) ;
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
        }
        h1{
            color: white;
            font-size: 50px;
            text-align: center;
        }
        th{
            color:rgb(141, 66, 97);
            font-weight: bold;
            font-size: 20px;
        }
        tr{
            color: black;
        }
        h2{
            text-align: center;
            color: white;
        }
        #back{
        position: absolute;
        z-index: -1;
        height: 110vh;
        width: 100%;
    } 
    p{
        text-align: center;
        color: white;
        size: 20px;
    }
    </style>
</head>
<body>
<div class="img">
        <img src="lib3dark.jpg" alt="" id="back">
    </div>
    <br><br>
<a href="report3.php" style="color: black;">
<div class="report" style="color:black">
<h2>Create Report</h2>
</div>
    <br><br>
    <h1>Saved Report</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Card Number</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Transaction</th>
                <th>Amount</th>
                <th>Barcode</th>
                <th>Title</th>
                <th>Author</th>
                <th>Branch</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "report";
            $conn = mysqli_connect($server, $username, $password, $database);
            if(!$conn){
                die("connection failed due to".mysqli_connect_error());
            }
            $sql = "SELECT * FROM report";
            $result = mysqli_query($conn,$sql);
            if(!$result){
                die("connection failed due to".mysqli_error($conn));
            }
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['Date']; ?></td>
                    <td><?php echo $row['Card Number']; ?></td>
                    <td><?php echo $row['Last Name']; ?></td>
                    <td><?php echo $row['First Name']; ?></td>
                    <td><?php echo $row['Transaction']; ?></td>
                    <td><?php echo $row['Amount']; ?></td>
                    <td><?php echo $row['Barcode']; ?></td>
                    <td><?php echo $row['Title']; ?></td>
                    <td><?php echo $row['Author']; ?></td>
                    <td><?php echo $row['Branch']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <p>Table:Sonali Singh has given the table structure</p>
</body>
</html>