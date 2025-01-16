<?php
include '_navbar.php';
include 'loader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periodic</title>
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
            font-size: 28px;
        }
        td{
            border: 1px solid rgb(141, 66, 97) ;
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
            font-size: 20px;
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
        height: 75vh;
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
<div class="container">
        <a href="periodic2.php" style="color: black;">
            <div class="periodic" style="color:black">
                <!-- <i class="fa-solid fa-newspaper"></i> -->
                <h2>Add Periodic</h2>
            </div>
        </a>
    <br><br><br>
    <h1>LIST OF PERIODIC</h1>
    <table>
        <thead>
            <tr>
                <th>SNo.</th>
                <th>Magzine</th>
                <th>Newspaper</th>
                <th>Nowel</th>
                <th>Comics</th>
                <th>Arrival</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "periodic";
            $conn = mysqli_connect($server, $username, $password, $database);
            if(!$conn){
                die("connection failed due to".mysqli_connect_error());
            }
            $sql = "SELECT * FROM periodic";
            $result = mysqli_query($conn,$sql);
            if(!$result){
                die("connection failed due to".mysqli_error($conn));
            }
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['SNo.']; ?></td>
                    <td><?php echo $row['Magzine']; ?></td>
                    <td><?php echo $row['Newspaper']; ?></td>
                    <td><?php echo $row['Nowel']; ?></td>
                    <td><?php echo $row['Comics']; ?></td>
                    <td><?php echo $row['Arrival']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <p>Table:Sonali Singh has given the table structure</p>
</body>
</html>