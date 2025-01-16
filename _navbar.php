<!-- Full Navbar File -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front_page.css">
    <link rel="icon" href="nacc a+.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .search{
            color: white;    
        }
        .pt{
            padding-left: 2.5%;
        }
    </style>
</head>
<body>
<header>
<div class="navbar">
    <div class="navdiv">
        <div class="navlogo">
            <ul>
                <li><a href="front-in-out.php">Circulation</a></li>
                <li><a href="patrons..php">Patrons</a></li>
            </ul>
        </div>
        <ul>
            <!-- <li><a><?php echo $_SESSION['username'] ?></a></li> -->
            <li><a href="#"><div class="dropdown">
                <!-- <butt class="dropbtn">Central Library</butt> -->
              </div></a>
              <li class="nav-item">
                  <i class="fa-solid fa-arrow-right-from-bracket" style="color:white"></i>
                  <a class="nav-link" href="logout.php">Logout</a>
              </li>
        </ul>
    </div>
</div>
<div class="nav_con">
     <a href="#"><img src="real1.jpg"></a> 
<div class="dropdown">    
    <div class="search">
        <p. class="pt">Enter patron card number or partial name.</p.><br>
        <input type="search" id="search" placeholder="  Search">
        <button>Search</button>
        <ul id="result"></ul>
</div>
        <div class="nav_2">
            <li><a href="front-in-out.php" class="nav_2_con">Check out</a></li>
            <li><a href="front-in-out.php" class="nav_2_con">check in</a></li>
            <li><a href="patrons..php" class="nav_2_con">Search Patrons</a></li>
            <li><a href="catalog..php" class="nav_2_con">Search the catalog</a></li>
        </div>
    </div>
</div>
<div class="down_nav">
    <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
    </li>
</div>
</header>
</body>
</html>