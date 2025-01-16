<?php
include '_navbar.php';
include 'loader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrons Details</title>
    <style>
        table{
            background-color: rgb(204, 204, 2558);
            padding:10px;
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
            /* color: rgb(234, 174, 198); */
            font-size: 50px;
            color: white;
            /* text-shadow: 0 0 6px rgb(234, 174, 198); */
            text-align: center;
        }
        th{
            color:rgb(141, 66, 97);
            font-weight: bold;
            font-size: 20px;
        }
        #back{
        position: absolute;
        z-index: -1;
        height: 150vh;
        width: 100%;
    }
    p{
        color: white;
        text-align: center;
        size: 20px;
    }
    h3{
        color: white;
    }
    </style>
</head>
<body>
<div class="img">
        <img src="lib3dark.jpg" alt="" id="back">
    </div>
<div class="container">
    <a href="patrons2.php" style="color: black;">
        <div class="patrons" style="color:black">
            <h3>Add Patrons (STUDENT)</h3>
        </div></a>
    <br><br><br><br>
    <h1>PATRONS LIST</h1>
    <table>
        <thead>
            <tr>
                <th>Surname</th>
                <th>FName</th>
                <th>dob</th>
                <th>Initials</th>
                <th>Other Name</th>
                <th>Gender</th>
                <th>Street Number</th>
                <th>Address</th>
                <th>Address2</th>
                <th>City</th>
                <th>State</th>
                <th>Pincode</th>
                <th>Country</th>
                <th>Primary Number</th>
                <th>Secondary Number</th>
                <th>Primary Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $server="localhost";
            $username="root";
            $password="";
            $database="patrons";
            $conn = mysqli_connect($server, $username, $password, $database);
            if(!$conn){
                die("Connection failed due to: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM students";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("connection failed due to".mysqli_connect_error());
            }
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['Surname']; ?></td>
                    <td><?php echo $row['FName']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['Initials']; ?></td>
                    <td><?php echo $row['OtherName']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['StreetNumber']; ?></td>
                    <td><?php echo $row['Address']; ?></td>
                    <td><?php echo $row['Address2']; ?></td>
                    <td><?php echo $row['City']; ?></td>
                    <td><?php echo $row['State']; ?></td>
                    <td><?php echo $row['Pincode']; ?></td>
                    <td><?php echo $row['Country']; ?></td>
                    <td><?php echo $row['PrimaryNumber']; ?></td>
                    <td><?php echo $row['SecondaryNumber']; ?></td>
                    <td><?php echo $row['Primaryemail']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
    <div class="container">
    <a href="patrons3.php" style="color: black;">
        <div class="patrons" style="color:black">
            <h3>Add Patrons (TEACHING)</h3>
        </div></a>
    <br>
    <table>
        <thead>
            <tr>
                <th>Surname</th>
                <th>FName</th>
                <th>dob</th>
                <th>Branch</th>
                <th>Post</th>
                <th>Gender</th>
                <th>Street Number</th>
                <th>Address</th>
                <th>Address2</th>
                <th>City</th>
                <th>Pincode</th>
                <th>Primary Number</th>
                <th>Secondary Number</th>
                <th>Primary Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $server="localhost";
            $username="root";
            $password="";
            $database="patrons";
            $conn = mysqli_connect($server, $username, $password, $database);
            if(!$conn){
                die("Connection failed due to: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM teaching";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("connection failed due to".mysqli_connect_error());
            }
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['Surname']; ?></td>
                    <td><?php echo $row['FName']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['Branch']; ?></td>
                    <td><?php echo $row['Post']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['StreetNumber']; ?></td>
                    <td><?php echo $row['Address']; ?></td>
                    <td><?php echo $row['Address2']; ?></td>
                    <td><?php echo $row['City']; ?></td>
                    <td><?php echo $row['Pincode']; ?></td>
                    <td><?php echo $row['PrimaryNumber']; ?></td>
                    <td><?php echo $row['SecondaryNumber']; ?></td>
                    <td><?php echo $row['Primaryemail']; ?></td>
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