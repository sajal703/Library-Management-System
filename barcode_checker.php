<?php
include '_navbar.php';
include 'loader.php';
$host = 'localhost';
$db = 'books'; 
$user = 'root';  
$password = '';  
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$barcode = '';
$message = '';
$bookDetails = null;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $barcode = trim($_POST['barcode']);
    if (!empty($barcode)) {
        $stmt = $conn->prepare("SELECT * FROM books WHERE barcode = ?");
        $stmt->bind_param("s", $barcode);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $bookDetails = $result->fetch_assoc();
        } else {
            $message = "No book found with the given barcode.";
        }
        $stmt->close();
    } else {
        $message = "Please enter a barcode.";
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode Checker</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: auto;
            font-family:Georgia, 'Times New Roman', Times, serif;
            overflow: hidden;
        }
        .contain{
            width: 80%;
            height: 700px;
            margin: 5% 0 0 10%;
            padding: 20px;
        }
        h1{
            font-size: 300%;
            margin-top: 3%;
            margin-bottom: 3%;
            text-align: center;
            color:aliceblue;
        }
        form{
            margin-bottom: 3%;
            margin-top: 5%;
            display: flex;
        }
        label{
            font-size: 200%;
            width: 15%;
            color:aliceblue;
            margin-left: 3%;
        }
        #barcode{
            width: 60%;
            height: 35px;
            border-radius: 8px;
            padding-left: 1%;
            font-size: 120%;
        }
        #barcode:hover{
            background-color: beige;
            transition: all 0.5s ;

        }
        button{
            width: 12%;
            height: 35px;
            font-size: 120%;
            border-radius: 8px;
            margin-left: 1%;
            background-color: blue;
            color: aliceblue;
        }
        button:hover{
            background-color: navy;
            border-radius: 5%;
            transition: all 0.5s ;
            color: azure;
        }
    </style>
</head>
<body>
    <div class="contain">
        <h1>Barcode Checker</h1>
        <form method="POST" action="">
            <label for="barcode">Enter Barcode:</label>
            <input type="text" id="barcode" name="barcode" value="<?php echo htmlspecialchars($barcode); ?>">
            <button type="submit">Check</button>
        </form>
        
        <?php if ($message): ?>
            <p style="color: cyan; text-align:center; margin-top:3%; font-size:130%"><?php  echo htmlspecialchars($message); ?></p>
        <?php endif; ?>
        <?php if ($bookDetails): ?>
            <h2 style="text-align:center; font-size:200%; margin-top:2%;color: skyblue; "><u>Book Details</u></h2>
            <p style="padding-left:20%; font-size:170%; margin-top:2%; color: whitesmoke; "><strong>Title:</strong> <?php echo htmlspecialchars($bookDetails['title']); ?></p>
            <p style="padding-left:20%; font-size:170%; margin-top:2%; color: whitesmoke; "><strong>Author:</strong> <?php echo htmlspecialchars($bookDetails['author']); ?></p>
            <p style="padding-left:20%; font-size:170%; margin-top:2%; color: whitesmoke; "><strong>Status:</strong> <?php echo htmlspecialchars($bookDetails['status']); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>