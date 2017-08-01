<!DOCTYPE html>
<html>
<head>
	<title>Cinetophilia</title>

  <link rel="stylesheet" href="CSS/stylesHome.css">
  <link rel="stylesheet" href="CSS/cinetophiliaTheme.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

  <?php include 'navbar.php';?>
  
  <!--
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=650634355146855";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  
  <div class="fb-login-button" data-max-rows="2" data-size="large" data-button-type="continue_with" data-show-faces="true" data-auto-logout-link="true" data-use-continue-as="true"></div>
  -->
  

  
  <div class="slideshow-container">
    	<div class="text">Now Showing</div>
  		<div class="mySlides fade">
    		<img src="img/movie/img1.jpg" style="width:100%">
  		</div>

  		<div class="mySlides fade">
    		<img src="img/movie/img2.jpg" style="width:100%">
  		</div>

  		<div class="mySlides fade">
    		<img src="img/movie/img3.jpg" style="width:100%">
  		</div>

  		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
 		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>

  
	<div style="text-align:center">
  		<span class="dot" onclick="currentSlide(1)"></span> 
  		<span class="dot" onclick="currentSlide(2)"></span> 
  		<span class="dot" onclick="currentSlide(3)"></span> 
	</div>



	<div>
		<h2 style="background-color: #B8312F; border-radius: 0px 15px 15px 0px;">Weekend Box Office</h2>
		<div class="container" style="background-image: url(img/movie/img1.jpg);"></div>
		<div class="container" style="background-image: url(img/movie/img2.jpg);" onclick="location.href='About Movies.html'"></div>
		<div class="container" style="background-image: url(img/movie/img3.jpg);"></div>
		<div class="container" style="background-image: url(img/movie/img4.png);"></div>
		<div class="container" style="background-image: url(img/movie/img5.jpg);"></div>
	</div>




	<div>
		<h2 style="background-color: #B8312F; border-radius: 0px 15px 15px 0px;">Reviewer's Pick<br/> of the Day</h2>
		<div class="containerlarge" style="background-image: url(img/movie/img2.jpg);"></div>
		<h3>Spider-Man:Homecoming</h3>
		<h4>Action	|	Sci-Fi	|	Comedy</h4>
		<p>Spider-Man (Tom Holland) learns the ropes of being a superhero under the tutelage of Tony Stark (Robert Downey Jr.), all while juggling his responsibilities as high schooler Peter Parker. Eager to prove to Stark that he's ready to join the Avengers, Parker soon gets tangled up with a sinister new villain known as the Vulture (Michael Keaton). Zendaya, Donald Glover, and Marisa Tomei co-star. Directed by Jon Watts (Cop Car).Spider-Man (Tom Holland) learns the ropes of being a superhero under the tutelage of Tony Stark (Robert Downey Jr.), all while juggling his responsibilities as high schooler Peter Parker. Eager to prove to Stark that he's ready to join the Avengers, Parker soon gets tangled up with a sinister new villain known as the Vulture (Michael Keaton). Zendaya, Donald Glover, and Marisa Tomei co-star. Directed by Jon Watts (Cop Car).</p>
	</div>



	<script src="JS/scriptHomeV2.js"></script>
</body>
</html>