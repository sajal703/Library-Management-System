<?php
include '_navbar.php';
include 'loader.php';
if(isset($_POST['submit'])){
    $server="localhost";
    $username="root";
    $password="";
    $database="periodic";
    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn){
        die("Connection failed due to: " . mysqli_connect_error());
    }
    $sno = $_POST["sno"];
    $magzine = $_POST["magzine"];
    $newspaper = $_POST["newspaper"];
    $nowel = $_POST["nowel"];
    $comics = $_POST["comics"];
    $arrival = $_POST["arrival"];
    $sql = "INSERT INTO `periodic` (`SNo.`, `Magzine`, `Newspaper`, `Nowel`, `Comics`, `Arrival`) VALUES ('$sno', '$magzine', '$newspaper', '$nowel', '$comics', '$arrival')";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        header("location:periodic2.php");
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
    <title>Add periodic</title>
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
    }
    .col-md-5{
      display: flex;
      color: white;
    }
    .container{
        margin-top: 2%;
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
        background-color:navy;
        border: 1px solid black;
        transition: 0.3s linear ;
        color: black;
        border-radius: 10px;
        color: aliceblue;
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
<h1>Periodics</h1>
    <div class="container">
    <form action="periodic2.php" method="post">
    <div class="form-group col-md-5">
        <label for="sno">SNo.  :-</label>
        <input type="text" class="Form-control" id="sno" name="sno" placeholder="  SNo.">
    </div>
    <div class="form-group col-md-5">
        <label for="magzine">Magzine  :-</label>
        <input type="text" class="Form-control" id="magzine" name="magzine" placeholder="  Magzine">
    </div>
    <div class="form-group col-md-5">
        <label for="newspaper">Newspaper  :-</label>
        <input type="text" class="Form-control" id="newspaper" name="newspaper" placeholder="  Newspaper">
    </div>
    <div class="form-group col-md-5">
        <label for="nowel">Novel  :-</label>
        <input type="text" class="Form-control" id="nowel" name="nowel" placeholder="  Nowel">
    </div>
    <div class="form-group col-md-5">
        <label for="comics">Comics  :-</label>
        <input type="text" class="Form-control" id="comics" name="comics" placeholder="  Comics">
    </div>
    <div class="form-group col-md-5">
        <label for="arrival">Arrival  :-</label>
        <input type="text" class="Form-control" id="arrival" name="arrival" placeholder="  Arrival" required>
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