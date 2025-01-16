<?php
include '_navbar.php';
include 'loader.php';
if(isset($_POST['submit'])){
    $server="localhost";
    $username="root";
    $password="";
    $database="patrons";
    $conn= mysqli_connect($server, $username, $password, $database);
    if(!$conn){
      die("connection failed due to".mysqli_connect_error());
   }
    $Surname = $_POST["Surname"];
    $FName = $_POST["FName"];
    $dob = $_POST['dob'];
    $Initials = $_POST['Initials'];
    $OtherName = $_POST['OtherName'];
    $Gender = $_POST['Gender'];
    $StreetNumber = $_POST['StreetNumber'];
    $Address = $_POST['Address'];
    $Address2 = $_POST['Address2'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Pincode = $_POST['Pincode'];
    $Country = $_POST['Country'];
    $PrimaryNumber = $_POST['PrimaryNumber'];
    $SecondaryNumber = $_POST['SecondaryNumber'];
    $Primaryemail = $_POST['Primaryemail'];
    $sql = "INSERT INTO `patrons`.`students` (`Surname`, `FName`, `dob`, `Initials`, `Other_Name`, `Gender`, `StreetNumber`, `Address`, `Address2`, `City`, `State`, `Pincode`, `Country`, `PrimaryNumber`, `SecondaryNumber`, `Primaryemail`) VALUES ('$Surname', '$FName', '$dob', '$Initials', '$OtherName', '$Gender', '$StreetNumber', '$Address', '$Address2', '$City','$State', '$Pincode', '$Country', '$PrimaryNumber', '$SecondaryNumber', '$Primaryemail')";
    $result = mysqli_query($conn, $sql);
    if ($result == true) {
        header("location:patrons2.php");
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
    <title>Add Patrons</title>
    <style>
    *{
      padding: 0;
      margin: 0;
      border: none;
      font-style: none;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    h4{
      margin-top: 2%;
      text-align: center;
      font-size: 50px;
      height: 10%;
      font-weight: bold;
      color: white;
    }
    p{
      text-align: center;
      font-size: 30px;
      font-weight: bold;
      color: white;
    }
    .container1{
      margin-top: 2%;
    }
    label{
      font-size: 25px;
      padding-left: 20%;
      margin-bottom: 1%;
      width: 20%;
      margin-top: 2%;
      height: 30px;
    
    }
    .form-control{
      height: 30px;
      border-radius: 5px;
      border: 0.3px solid black;
      width: 35%;
      background-color: aliceblue;
      margin-bottom: 1%;
    }
    .container2{
      margin-top: 2%;
    }
    .container3{
      margin-top: 2%;
    }
    .col-md-5{
      display: flex;
    }
    .col-md-4{
      display: flex;
    }
    #fots{
      font-size: x-large;
      padding-left: 20%;
      width: 20%;
      margin-top: 1%;
    }
    
    .form-check{
      margin: 1%;
    }
    
    .form-check-label{
      display: flex;
    }
    .form-control{
      margin-top: 2%;
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
      width: 10%;
      background-color: blue;
      color: white;
      font-size: 40px;
      border-radius: 5px; 
    }
  </style> 
</head>

<body>
<div class="contain">
  <h4 class="text-center"> Add Patron (Student)</h4>
  <br><br>
  <div id="left-side">
    <div class="container1"><p>Patrons Identity</p>
    <br><br><br><br>
    <form action="patrons..php" method="post">
      <div class="form-group col-md-5" id="qt">
        <label style="color: white;" for="Surname">Surname :-</label>
        <input type="text" class="form-control" id="Surname" name="Surname" placeholder=" Surname">
      </div>
      <div class="form-group col-md-5" id="qt">
        <label style="color: white;" for="FName" required>First Name :-</label>
        <input type="text" class="form-control" id="FName" name="FName" placeholder="  First Name" required>
      </div>
      <div class="form-group col-md-5" id="qt">
        <label style="color: white;" for="dob" >Date of Birth :-</label><br>
        <input type="date" class="form-control" id="dob" name="dob">
      </div>
      <div class="form-group col-md-5" id="qt">
        <label style="color: white;" for="Initials">Initials :-</label>
        <input type="text" class="form-control" id="Initials" name="Initials" placeholder="  Initials">
      </div>
      <div class="form-group col-md-5">
        <label style="color: white;" for="OtherName">Other Name :-</label>
        <input type="text" class="form-control" id="OtherName" name="OtherName" placeholder="  Other Name">
      </div>
      <div class="col-md-5" required>
        <div id="fots" style="color: white;">Gender :-</div>
        <div class="form-check">
        <label style="color: white;" class="form-check-label" for="Gender">
          <input class="form-check-input" type="radio" name="Gender" id="Gender" value="Male">Male
          </label>
        </div>
        <div class="form-check">
        <label style="color: white;" class="form-check-label" for="Gender">
          <input class="form-check-input" type="radio" name="Gender" id="Gender" value="Female">Female
          </label>
        </div>
        <div class="form-check">
        <label style="color: white;" class="form-check-label" for="Gender">
          <input class="form-check-input" type="radio" name="Gender" id="Gender" value="Not Specified">Other
          </label>
      </div>
    </div>
  </div>
  <br><br>
  <div id="Right-side">
    <div class="container2"><p>Main Address</p>
      <br><br>
      <div class="form-group col-md-5">
        <label style="color: white;" for="StreetNumber">Street Number :-</label>
        <input type="text" class="form-control" id="StreetNumber" name="StreetNumber" placeholder="  Street" >
      </div>
      <div class="form-group col-md-5">
        <label style="color: white;" for="Address">Address :-</label>
        <input type="text" class="form-control" id="Address" name="Address" placeholder="  Address" >
      </div>
      <div class="form-group col-md-5">
        <label style="color: white;" for="Address2">Address 2 :-</label>
        <input type="text" class="form-control" id="Address2" name="Address2" placeholder="  Address 2">
      </div>
      <div class="form-group col-md-5">
        <label style="color: white;" for="City">City :-</label>
        <input type="text" class="form-control" id="City" name="City" placeholder="  City" required>
      </div>
      <div class="form-group col-md-5">
        <label style="color: white;" for="State">State :-</label>
        <input type="text" class="form-control" id="State" name="State" placeholder="  State" >
      </div>
      <div class="form-group col-md-5">
        <label style="color: white;" for="Pincode">Pin code :-</label>
        <input type="number" class="form-control" id="Pincode" name="Pincode" placeholder="  Pin code" >
      </div>
      <div class="form-group col-md-5">
        <label style="color: white;" for="Country">Country :-</label>
        <input type="text" class="form-control" id="Country" name="Country" placeholder="  Country" >
      </div>
    </div>
    <div class="container3"><p>Contact</p>
      <div class="form-group col-md-4">
        <label style="color: white;" for="PrimaryNumber">Primary Number :-</label>
        <input type="text" class="form-control" id="PrimaryNumber" name="PrimaryNumber" placeholder="  Number" >
      </div>
      <div class="form-group col-md-4">
        <label style="color: white;" for="SecondaryNumber">Secondary Number :-</label>
        <input type="text" class="form-control" id="SecondaryNumber" name="SecondaryNumber" placeholder="  Other Number">
      </div>
      <div class="form-group col-md-4">
        <label style="color: white;" for="Primaryemail">Primary Email :-</label>
        <input type="email" class="form-control" id="Primaryemail" name="Primaryemail" placeholder="  Email" >
      </div>
    </div>
    <br>
    <div class="form-group col-md-5" id="btn1">
      <button type="submit" name="submit" class="btn btn-primary" id="btn" onclick="return mess();" >Save</button>
    </div>
    <script type="text/javascript">
      function mess(){
        alert("your record is saved");
        return true;
      }
    </script>
  </div>
</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>