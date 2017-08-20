<!DOCTYPE html>
<html>
<head>
  
  <title></title>

  <link rel="stylesheet" href="CSS/navbar.css">

</head>
<body>
<header>
      <h1>Cinetophilia</h1>
      <ul>
        <li><a href="Signupandlogin.php">Login</a></li>
        <li><a href="upcoming.php">Upcoming</a></li>
        <li>
          <div class="dropdown">
              <button class="dropbtn" onclick="location.href='topRated.php'">Top Rated</button>
              <div class="dropdown-content">
                  <a href="topGenre.php">Action</a>
              </div>
          </div>
        </li>
        <!--
        <li>
          <div class="dropdown">
            <button class="dropbtn">Discover</button>
            <div class="dropdown-content">
                <a href="#">Horror</a>
                <a href="#">Action</a>
                <a href="#">Comedy</a>
            </div>
          </div>
        </li>
        -->
        <li><a href="reviewers.php">Reviewers</a></li>
        <li><a href="home.php">Home</a></li>
      </ul>
</header>
</body>
</html>