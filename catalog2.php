<?php
include '_navbar.php';
include 'loader.php';
if(isset($_POST['submit'])){
    $server="localhost";
    $username="root";
    $password="";
    $database="catalog";
    $conn = mysqli_connect($server, $username, $password, $database);
    if(!$conn){
        die("Connection failed due to: " . mysqli_connect_error());
    }
    $bookname = $_POST["bookname"];
    $publisher = $_POST["publisher"];
    $authorname = $_POST["authorname"];
    $publishdate = $_POST["publishdate"];
    $price = $_POST["price"];
    $barcode = $_POST["barcode"];
    $quantity = $_POST["quantity"];
    $sql = "INSERT INTO `books`(`bookname`, `publisher`, `authorname`, `publishdate`, `price`, `barcode`, `quantity`) VALUES ('$bookname', '$publisher', '$authorname', '$publish_date', '$price', '$barcode', '$quantity')";
    $result = mysqli_query($conn, $sql);
    if($result == true){
        header("location:catalog2.php");
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
    <link rel="stylesheet" href="catalog.css">
    <link rel="stylesheet" href="front_page.css">
    <title>Add Catalog</title>
    <style>
        label{
            color: white;
        }

        #back{
        position: absolute;
        z-index: -1;
        height: 110vh;
        width: 100%;
    } 
    </style>
</head>
<body>
<div class="img">
        <img src="lib3dark.jpg" alt="" id="back">
    </div>
    <br><br>
    <div style="color: white;" class="container"><p>Book Details</p>
    <form id="contain" action="catalog..php" method="post">
    <div class="contain1">
        <div id="con" class="form-group col-md-5">
            <label for="bookname">Book Name :-</label>
            <input type="text" class="Form-control" id="bookname" name="bookname" placeholder="  Book Name" required>
        </div>
        <div id="con" class="form-group col-md-5">
            <label for="publisher">Publisher :-</label>
            <input type="text" class="Form-control" id="publisher" name="publisher" placeholder="  Publisher" required>
        </div>
        <div id="con" class="form-group col-md-5">
            <label for="authorname">Author Name :-</label>
            <input type="text" class="Form-control" id="authorname" name="authorname" placeholder="  Author Name" required>
        </div>
        <div id="con" class="form-group col-md-5">
            <label for="publishdate">Publish Date :-</label>
            <input type="date" class="Form-control" id="publishdate" name="publishdate" placeholder="  Publish Date" required>
        </div>
        <div id="con" class="form-group col-md-5">
            <label for="price">Price :-</label>
            <input type="text" class="Form-control" id="price" name="price" placeholder="  Price" required>
        </div>
        <div id="con" class="form-group col-md-5">
            <label for="barcode">Barcode :-</label>
            <input type="number" class="Form-control" id="barcode" name="barcode" placeholder="  Barcode" required>
        </div>
        <div id="con" class="form-group col-md-5">
            <label for="quantity">Quantity :-</label>
            <input type="text" class="Form-control" id="quantity" name="quantity" placeholder="  Quantity" required>
        </div>
    </div>
        <br>
        <div id="btn1"class="form-group col-md-5">
            <input type="submit" name="submit" id="btn" class="btn btn-primary" onclick="return mess();" >
        </div>
        <script type="text/javascript">
            function mess(){
                alert("your record is saved");
                return true;
            }
            </script>
    </form>
</div>
</body>
</html>