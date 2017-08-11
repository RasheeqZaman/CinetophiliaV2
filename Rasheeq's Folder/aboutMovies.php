<!DOCTYPE html>
<html>
<head>
	<title>About Movies</title>
	<link rel="stylesheet"  href="CSS/stylesAboutMoviesV2.css">
	<link rel="stylesheet" href="CSS/navbar.css">
</head>

<body>
<!--
	<header>
    <h1>Cinetophilia</h1>
    <ul>
  		<li><a href="UpcomingV2.html">Upcoming</a></li>
  		<li>
        <div class="dropdown">
            <button class="dropbtn" onclick="location.href='topRatedMoviesV2.html'">Top Rated</button>
            <div class="dropdown-content">
                <a href="topActionV2.html">Action</a>
            </div>
          </div>
      </li>
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
  		<li><a href="contact.asp">Reviewers</a></li>
  		<li><a href="homeV2.html">Home</a></li>
	</ul>
  </header>
-->
	
  <?php include 'navbar.php';?>
  <?php include 'config.php';?>

	<div class="wrap">
	<div class="Trailers">
		<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/39udgGPyYMg?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
	</div>
	<div class="showtimes">
		<h2 style="background-color: #B8312F; border-radius:0 15px 15px 0;">Showtimes</h2>
		<p>Enter your location to see where Spider-Man: Homecoming is playing near you </p>
	  	<div class="search">
      		<input type="text" class="searchTerm" placeholder="Enter Your Location and ZIP"/>
     		<input type="submit" class="searchButton" value="Submit">
     	</div>
	</div>
	<div class="photos">
		<h2 style="background-color: #B8312F; border-radius:0 15px 15px 0;">Spider Man : Home Coming Photo's</h2>
		<div><img src="img/movie/img12.jpg", style="width: 100%"></div>
		<div><img src="img/movie/img13.jpg",, style="width: 100%"></div>
		<div><img src="img/movie/img14.jpg",, style="width: 100%"></div>
	</div>
	<div class="info">
		<h2 style="background-color: #B8312F; border-radius:0 15px 15px 0;">Movie Info</h2>
		<p>A young Peter Parker/Spider-Man (Tom Holland), who made his sensational debut in Captain America: Civil War, begins to navigate his newfound identity as the web-slinging super hero in Spider-Man: Homecoming. Thrilled by his experience with the Avengers, Peter returns home, where he lives with his Aunt May (Marisa Tomei), under the watchful eye of his new mentor Tony Stark (Robert Downey, Jr.). Peter tries to fall back into his normal daily routine--distracted by thoughts of proving himself to be more than just your friendly neighborhood Spider-Man--but when the Vulture (Michael Keaton) emerges as a new villain, everything that Peter holds most important will be threatened.<br><br>
        <b>More:</b><br>
        Rating:	PG-13 (for sci-fi action violence, some language and brief suggestive comments)<br>
        Genre:	Action & Adventure, Drama, Science Fiction & Fantasy<br>
        Directed By:	Jon Watts<br>
        Written By:	Jonathan M. Goldstein, John Francis Daley, Christopher Ford, Chris McKenna, Erik Sommers<br>
        In Theaters:	Jul 7, 2017  Wide<br>
        Box Office:	$117,027,503<br>
        Studio:	Sony Pictures </p>
	</div>
	<div class="cast">
	<h2 style="background-color: #B8312F; border-radius:0 15px 15px 0;">Cast</h2>
    <img src="img/movie/img15.jpg", style="width: 40%"><a class="cast" href="#">Tom Holland</a>
	<img src="img/movie/img16.jpg", style="width: 40%"><a class="cast" href="#">Donald Glover</a>	
	</div>
	<div class="top review">
	<h2 style="background-color: #B8312F; border-radius:0 15px 15px 0;">Top Review</h2>
	<p>
	<b>Monchuri</b>
	<p>An utter gas, a fast and very funny superflick that inserts Spidey into the larger Marvel Cinematic Universe without ever losing sight of what makes him unique and beloved.</p></p>
		
	</div>
	</div>
	
  <?php include 'close.php'; ?>

</body>
</html>