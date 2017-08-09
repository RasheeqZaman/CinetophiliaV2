<!DOCTYPE html>
<html>

<head>
	<title>Upcoming</title>
	<link rel="stylesheet" href="CSS/cinetophiliaTheme.css">
	<link rel="stylesheet" href="CSS/stylesUpcoming.css">
</head>

<body>
	<?php include 'navbar.php';?>
  	<?php include 'config.php';?>

	<div class="UpcomingTable">
	<h2 style="background-color: #B8312F; border-radius:0 15px 15px 0;">Upcoming Movies</h2>
		<table>
			<tr>
				<th></th>
				<th>Movie Name</th>
				<th>Abouts</th>
				<th>Release Date</th>
				<th>Ratings</th>
			</tr>

			<?php
      			$query = "SELECT * FROM movies";
        		$players_query_result = mysqli_query($conn,$query) or die(mysql_error());
        		if(mysqli_num_rows($players_query_result) > 0)
        		{
          			while ($row = mysqli_fetch_array($players_query_result))
          			{
    		?>

			<tr>
				<td><img src="img/movie/<?php echo $row['image_id']; ?>"></td>
				<td width="20%"><?php echo $row['Title']; ?></td>
				<td width="50%", class="hovering"><p>
				<?php 
					$string = strip_tags($row['details']);
					if (strlen($string) > 400) {    
						$stringCut = substr($string, 0, 500);
						$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="/this/story">Read More</a>'; 
					}
					echo $string;
				?></p></td>
				<td width="10%"><?php echo $row['Release_date']; ?></td>
				<td width="10%"><?php echo $row['Rating']; ?></td></tr>

			<?php
          			}
        		}
    		?>
			<!--
			<tr>
				<td><img src="img/movie/img3.jpg"></td>
				<td width="20%">Cars 3</td>
				<td width="50%", class="hovering"><p>Lightning McQueen sets out to prove to a new generation of racers that he's still the best race car in the world </p><a href="#">(see more..)</a></td>
				<td width="10%">16/07/2017</td>
				<td width="10%">89%</td></tr>
			-->
		</table>
	</div>
</body>

</html>