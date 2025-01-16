<?php
include '_navbar.php';
include 'loader.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        font-family:Georgia, 'Times New Roman', Times, serif;
        text-decoration: none;
    }
    .heading1{
        margin-top: 3%;
        text-align: center;
        font-size: 35px;
    }
    .regis{
        margin: 4% 0 5% 0;
    }
    .heading2{
        text-align: center;
        margin-bottom: 3%;
        font-size: 30px;
    } 
    .text{
        padding: 1% 2% 2% 8%;
        font-size: 148%;
        width: 16%;
    }
    .input{
        width:60%;
        margin-bottom: 2%;
        border-radius: 3px;
    }
    .submit{
        background-color: blue;
        color: white ;
        width: 13%;
        font-size: 147%;
        padding: 0.5%;
        border-radius: 7px;
        margin-left:44% ;
    }
    .submit:hover{
        background-color: navy;
        border: 2px solid skyblue;
        border-radius:3px ;
        transition-duration: 0.5s;
    }
    .name ,.s_id{
        display: flex;
    }
    .gen{
        padding-left: 7%;
        width: 100%;
        margin-bottom: 2%;
    }
    .gen_sub{
        background-color: blueviolet;
        color: white ;
        width: 15%;
        font-size: 147%;
        padding: 0.5%;
        border-radius: 7px;
        margin-left:38% ;
        margin-top: 3%;
    }
    .gen_sub:hover{
        background-color: navy;
        border: 1px solid skyblue;
        border-radius:3px ;
        transition-duration: 0.5s;
    }
    table{width: 80%;}
    table,th,tr,td
    {
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
        height: 150vh;
        width: 100%;
    } 
</style>
<body>
<div class="img">
        <img src="lib3dark.jpg" alt="" id="back">
    </div>
    <div class="register">
        <h1 style="color: white;" class="heading1">Student Registration System</h1>
        <div class="regis">
            <h2 style="color: white;" class="heading2">Register New Student</h2>  
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div style="color: white;" class="name"><p class="text">Name:</p> <input type="text" name="name" class="input"><br></div>
                <div style="color: white;" class="s_id"><p class="text">Student ID:</p> <input type="text" name="student_id" class="input"><br></div>
                <input type="submit" name="register" value="Register" class="submit" >
            </form>
        </div>
    </div>
    <div style="color: white;" class="gen">
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
$dbname = "stureg";

$conn = new mysqli($servername, $username, $password, $dbname); 
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $student_id = $_POST['student_id'];
        $sql = "INSERT INTO students (name, student_id) VALUES ('$name', '$student_id')";
        if ($conn->query($sql) === TRUE) {
            echo "<p><center> <font color=green>New record created successfully</center></p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['generate_report'])) {
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><th>Name</th><th>Student ID</th><th>In Time</th><th>Out Time</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo  "</td><td>" . $row["name"] . "</td><td>" . $row["student_id"] . "</td><td>" . $row["in_time"] . "</td><td>" . $row["out_time"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
}
?>