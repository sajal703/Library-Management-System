<?php
include '_navbar.php';
include 'loader.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Circulation</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        font-family:Georgia, 'Times New Roman', Times, serif;
        text-decoration: none;
        border: none;
    }
    .heading{
        margin-top: 3%;
        text-align: center;
        font-size: 35px;
    }
    .contain{
        display: flex;
        width: 80%;
        margin: 2% 0 2% 5%;
        font-size: 200%;
        padding: 2% 0% 2% 5%;
    }
    .text{display: flex; width: 300%; }
    .input{
        width: 60%;
        margin-bottom: 2%;
        border-radius: 3px;
        font-size: x-large;
        padding-left: 1%;
        border: 2px solid black;
        margin-left: 2%;
        border-radius: 10px;
    } 
    .input:hover{
        background-color: azure;
        border-radius:5px ;
        transition: all 0.5s;
        border: 2px solid black;
    }
    .subm{ display: flex; width: 100%; margin-left: 100%;}
    .button{
        display: flex;
        background-color: blue;
        color: white ;
        width: 33%;
        font-size: 80%;
        padding: 0.5%;
        border-radius: 7px;
        margin: 1% 0 1% 2%;
        padding: 2%;
        border: 2px solid black;
    }
    .button:hover{
        background-color: navy;
        border-radius:3px ;
        transition-duration: 0.5s;
        border: 2px solid black;
    }
    .gen{
        padding-left: 7%;
        width: 100%;
        margin-bottom: 2%;
        margin-left: 2%;
    }
    .gen_sub{
        background-color: blue;
        color: white ;
        width: 15%;
        font-size: 147%;
        padding: 0.5%;
        border-radius: 7px;
        margin-left:34% ;
        margin-top: 3%;
        border: 2px solid black;
    }
    .gen_sub:hover{
        background-color: navy;
        border: 1px solid skyblue;
        border-radius:3px ;
        transition-duration: 0.5s;
        border: 2px solid black;
    }
    table{ width: 80%;}
    table,th,tr,td{
        border:1px solid;
        margin-top: 5%;
        margin-left: 10%;
        background-color: rgb(204, 204, 255);
        color: darkblue;
        font-size: 20px;
        text-align: center;
    }
    #back{
        position: absolute;
        z-index: -1;
        height: 110vh;
        width: 100%;
    } 
    h2{
        color: white;
    }

</style>
<body>
<div class="img">
        <img src="lib3dark.jpg" alt="" id="back">
    </div>
    <div class="main">
        <h2 style="color: white;" class="heading">Book check-in check-out</h2>
        <div class="contain">
            <form method="post" action="<?php   echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    
                <p style="color: white;" class="text">Barcode No:- <input type="text" name="student_id" class="input" required></p>
                <div class="subm">
                    <input type="submit" name="in_time" value="Check-In" class="button">
                    <input type="submit" name="out_time" value="Check-Out" class="button">
                </div>
            </form>
        </div>
    </div> 



    <div class="gen">
        <h2>Generate Reports :-</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"class="table">
            <input type="submit" name="generate_report" value="Generate" class="gen_sub">
        </form>
    </div>

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname); 
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['in_time'])) {
        $barcode= $_POST['barcode'];
        $sql = "UPDATE books SET in_time = NOW() WHERE barcode = '$barcode'";
        if ($conn->query($sql) === TRUE) {
            echo "<p><center> <font color=yellow> Check-In successfully </center></p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['out_time'])) {
        $barcode = $_POST['barcode'];
        $sql = "UPDATE books SET out_time = NOW() WHERE barcode = '$barcode'";
        if ($conn->query($sql) === TRUE) {
            echo "<p><center> <font color=green>Check-Out successfully </center></p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['generate_report'])) {
        // Generate report
        $sql = "SELECT * FROM books";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table><th>Title</th><th>Author<th>Barcode</th><th>In Time</th><th>Out Time</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "</td><td>" . $row["title"] ."</td><td>" . $row["author"] . "</td><td>" . $row["barcode"] . "</td><td>" . $row["in_time"] . "</td><td>" . $row["out_time"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
}
?>