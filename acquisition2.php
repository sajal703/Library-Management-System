<!-- Add the  -->
<?php
include '_navbar.php';
include 'loader.php';
if(isset($_POST['submit'])){
    $server="localhost";
    $username="root";
    $password="";
    $database="acquisition";
    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn){
        die("Connection failed due to: " . mysqli_connect_error());
    }
    $Sno = $_POST["Sno"];
    $Owner = $_POST["Owner"];
    $Library = $_POST["Library"];
    $Amount = $_POST["Amount"];
    $Ordered = $_POST["Ordered"];
    $Total_available = $_POST["Total_available"];
    $sql = "INSERT INTO `acquisition` (`Sno`, `Owner`, `Library`, `Amount`, `Ordered`, `Total available`) VALUES ('$Sno', '$Owner', '$Library', '$Amount', '$Ordered', '$Total_available')";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        header("location:acquisition2.php");
        exit;
    }
else{
    echo " ERROR!: $sql <br> " . mysqli_error($conn);
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Acquisition</title>
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
        position:absolute;
        z-index: -1;
        height: 100vh;
        width: 100%;
    }
    </style>
</head>
<body>
<div class="img">
        <img src="lib3dark.jpg" alt="" id="back">
    </div>
<h1>Acquisition</h1>
    <div class="container">
    <form action="acquisition2.php" method="post">

    <div class="form-group col-md-5">
        <label for="Sno">SNo  :-</label>
        <input type="text" class="Form-control" id="Sno" name="Sno" placeholder="  SNo.">
    </div>

    <div class="form-group col-md-5">
        <label for="owner">Owner  :-</label>
        <input type="text" class="Form-control" id="owner" name="Owner" placeholder="  Owner" required>
    </div>

    <div class="form-group col-md-5">
        <label for="Library">Library  :-</label>
        <input type="text" class="Form-control" id="Library" name="Library" placeholder="  Library" required>
    </div>

    <div class="form-group col-md-5">
        <label for="Amount">Amount  :-</label>
        <input type="text" class="Form-control" id="Amount" name="Amount" placeholder="  Amount">
    </div>

    <div class="form-group col-md-5">
        <label for="Ordered">Ordered  :-</label>
        <input type="text" class="Form-control" id="Ordered" name="Ordered" placeholder="  Ordered">
    </div>

    <div class="form-group col-md-5">
        <label for="Total_available">Total Available  :-</label>
        <input type="text" class="Form-control" id="Total_available" name="Total_available" placeholder="  Total available">
    </div>

    <br>
    <div class="form-group col-md-5" id="btn1">
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