<!-- How many books have been acquired from the history -->
<?php
include '_navbar.php';
include 'loader.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acquisition</title>
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
        height: 90vh;
        width: 99.9%;
        margin-left: -10;
    }
    p{
        color: white;
        text-align: center;
        size: 20px;
    }
    </style>
</head>
<body>
<div class="img">
        <img src="lib3dark.jpg" alt="" id="back">
    </div>
    <br><br>
<div class="container">
        <a href="acquisition2.php" style="color: black;">
            <div class="acquisition" style="color:black">
                <h2>Order Acquisition</h2>
            </div>
        </a>
    <br><br><br>
    <h1>Acquisition History</h1>
    <table>
        <thead>
            <tr>
                <th>Sno.</th>
                <th>Owner</th>
                <th>Library</th>
                <th>Amount</th>
                <th>Ordered</th>
                <th>Total available</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "acquisition";
            $conn = mysqli_connect($server, $username, $password, $database);
            if(!$conn){
                die("connection failed due to".mysqli_connect_error());
            }
            $sql = "SELECT * FROM acquisition";
            $result = mysqli_query($conn,$sql);

            if(!$result){
                die("connection failed due to".mysqli_error($conn));
            }
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['Sno']; ?></td>
                    <td><?php echo $row['Owner']; ?></td>
                    <td><?php echo $row['Library']; ?></td>
                    <td><?php echo $row['Amount']; ?></td>
                    <td><?php echo $row['Ordered']; ?></td>
                    <td><?php echo $row['Total available']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <p>  Table:Sonali Singh has given the table structure</p>
</body>
</html>