<?php
include '_navbar.php';
include 'loader.php';
if(isset($_POST['submit'])){
    $server="localhost";
    $username="root";
    $password="";
    $database="report";
    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn){
        die("Connection failed due to: " . mysqli_connect_error());
    }
    $Date = $_POST["Date"];
    $Card_Number = $_POST["Card_Number"];
    $Last_Name = $_POST["Last_Name"];
    $First_Name = $_POST["First_Name"];
    $Transaction = $_POST["Transaction"];
    $Barcode = $_POST["Barcode"];
    $Title = $_POST["Title"];
    $Author = $_POST["Author"];
    $Branch = $_POST["Branch"];
    $sql = "INSERT INTO `report` (`Date`, `Card Number`, `Last Name`, `First Name`, `Transaction`, `Barcode`, `Title`, `Author`, `Branch`) VALUES ('$Date', '$Card_Number', '$Last_Name', '$First_Name', '$Transaction', '$Barcode', '$Title', '$Author', '$Branch')";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        header("location:report3.php");
        exit;
    }
else{
    echo " ERROR!: $sql <br> $conn->error";
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Report</title>
    <style>
    *{
      padding: 0;
      margin: 0;
      border: none;
      font-style: none;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    h1{
        text-align: center;
        padding-top: 1%;
        font-weight: bolder;
        font-size: 50px;
        height: 10%;
        width: 100%;
        color: white;
    }
    label{
      font-size: 28px;
      padding-left: 20%;
      margin-bottom: 1%;
      width: 20%;
      height: 30px;
      color: white;
    }
    .col-md-5{
      display: flex;
    }
    .container{
        margin-top: 5%;
    }
    .form-group{
        margin-bottom: 1%;
    }
    .Form-control{
      height: 30px;
      border-radius: 5px;
      border: 0.3px solid black;
      width: 35%;
      background-color: aliceblue;
      margin-bottom: 1%;
    }
    #btn1{
    margin-top: 2%;
    align-content: center;
    justify-content: center;
    text-align: center;
    margin-bottom: 50px;
    }
    #btn{
    border: 1px solid black;
    height: 0.5%;
    width: 12%;
    background-color: blue;
    color: white;
    font-size: 40px;
    border-radius: 40px; 
    }
    #btn:hover{
        background-color:blueviolet;
        border: 1px solid black;
        transition: 0.3s linear ;
        color: black;
        border-radius: 10px;
    }
    #back{
        position: absolute;
        z-index: -1;
        height: 150vh;
        width: 100%;
    }
    </style>
</head>
<body>
    <div class="img">
        <img src="lib3dark.jpg" alt="" id="back">
    </div>
<h1>Create Report</h1>
    <div class="container">
    <form action="report3.php" method="post">
    <div class="form-group col-md-5">
        <label for="Date">Date  :-</label>
        <input type="date" class="Form-control" id="Date" name="Date" placeholder="  Date">
    </div>
    <div class="form-group col-md-5">
        <label for="Card_Number">Card Number  :-</label>
        <input type="number" class="Form-control" id="Card_Number" name="Card_Number" placeholder="  Card Number">
    </div>
    <div class="form-group col-md-5">
        <label for="Last_Name">Last Name  :-</label>
        <input type="text" class="Form-control" id="Last_Name" name="Last_Name" placeholder="  Last Name">
    </div>
    <div class="form-group col-md-5">
        <label for="First_Name">First Name  :-</label>
        <input type="text" class="Form-control" id="First_Name" name="First_Name" placeholder="  First Name">
    </div>
    <div class="form-group col-md-5">
        <label for="Transaction">Transaction  :-</label>
        <input type="text" class="Form-control" id="Transaction" name="Transaction" placeholder="  Transaction">
    </div>
    <div class="form-group col-md-5">
        <label for="Amount">Amount  :-</label>
        <input type="number" class="Form-control" id="Amount" name="Amount" placeholder="  Amount">
    </div>
    <div class="form-group col-md-5">
        <label for="Barcode">Barcode  :-</label>
        <input type="text" class="Form-control" id="Barcode" name="Barcode" placeholder="  Barcode">
    </div>
    <div class="form-group col-md-5">
        <label for="Title">Title  :-</label>
        <input type="text" class="Form-control" id="Title" name="Title" placeholder="  Title">
    </div>
    <div class="form-group col-md-5">
        <label for="Author">Author  :-</label>
        <input type="text" class="Form-control" id="Author" name="Author" placeholder="  Author">
    </div>
    <div class="form-group col-md-5">
        <label for="Branch">Branch  :-</label>
        <input type="text" class="Form-control" id="Branch" name="Branch" placeholder="  Branch">
    </div>
    <br>
    <div class="from-group col-md-5" id="btn1">
        <button type="submit" name="submit" id="btn"class="btn btn-primary" onclick="return mess();">Save</button>
    </div>
        <script type="text/javascript">
            function mess(){
                alert("your record is saved");
                return true;
            }
        </script>
    </form>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>