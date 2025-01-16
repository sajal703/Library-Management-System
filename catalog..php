<?php
include '_navbar.php';
include 'loader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog Details</title>
    <style>
        table{
            background-color: rgb(204, 204, 255);
            padding:10px;
            width: 100%;
        }
        th{
            border: 1px solid rgb(141, 66, 97) ;
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
            font-size: 50px;
            color: white;
            text-align: center;
        }
        th{
            color:rgb(141, 66, 97);
            font-weight: bold;
            font-size: 20px;
        }
        h2{
            text-align: center;
            color: white;
        }
        #back{
        position: absolute;
        z-index: -1;
        height: 150vh;
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
    <a href="catalog2.php" style="color: black;">
        <div class="catalog" style="color:black">
            <h2>Add Catalog</h2>
        </div></a>
<div class="container">
    <br><br>
    <h1>CATALOG LIST</h1>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Book Name</th>
                <th>Publisher</th>
                <th>Author Name</th>
                <th>Publish Date</th>
                <th>Price</th>
                <th>Barcode</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $server="localhost";
            $username="root";
            $password="";
            $database="catalog";

            $conn = mysqli_connect($server, $username, $password, $database);

            if(!$conn){
                die("Connection failed due to: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM books";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("connection failed due to".mysqli_connect_error());
            }

            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['bookname']; ?></td>
                    <td><?php echo $row['publisher']; ?></td>
                    <td><?php echo $row['authorname']; ?></td>
                    <td><?php echo $row['publishdate']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['barcode']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<p>Table:Sonali Singh has given the table structure</p>
</body>
</html>