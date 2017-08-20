<!DOCTYPE html>
<html>
<head>
	<title>Signup and login</title>
	<link rel="stylesheet" href="CSS/stylesSignUp.css">

</head>
<body>

	
  <?php include 'navbar.php';?>
  <?php include 'config.php';?>


	<div class="box">
  <div id="header">
  <div id="cont-lock"><i class="material-icons lock">SignUp</i></div>
  </div> 
   <form action="" method="post">
    <div class="group">      
      <input class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Username</label>
    </div>
    <div class="group">      
      <input class="inputMaterial" type="email" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Enter Email</label>
    </div>
      <div class="group">      
      <input class="inputMaterial" type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
    </div>
    <div class="group">      
      <input class="inputMaterial" type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Confirm Password</label>
    </div>
    <button id="buttonlogintoregister" type="submit">Signup</button>
  </form>
  <div id="footer-box"><p class="footer-text"></div>
</div>
	
  <div class="box">
  <div id="header">
  <div id="cont-lock"><i class="material-icons lock">Login</i></div>
  </div> 
   <form action="" method="post">
    <div class="group">      
      <input class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Username</label>
    </div>
      <div class="group">      
      <input class="inputMaterial" type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
    </div>
    <button id="buttonlogintoregister" type="submit">Login</button>
  </form>
  <div id="footer-box"><p class="footer-text">Not a member?<span class="sign-up"> Sign up now</span></p></div>
</div>



  <?php include 'close.php'; ?>

</body>
</html>