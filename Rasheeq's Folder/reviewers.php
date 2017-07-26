<!DOCTYPE html>
<html>

<head>

	<title>Reviewers</title>

	
	<link rel="stylesheet" href="CSS/cinetophiliaTheme.css">
	<link rel="stylesheet" href="CSS/stylesReviewers.css">

</head>

<body>

	<?php include 'navbar.php';?>

	<h2>Top Reviewers</h2>

	<table>
		<colgroup>
       		<col span="1" style="width: 30%;">
       		<col span="1" style="width: 70%;">
    	</colgroup>
		<tr valign="Top">
			<td rowspan="2" align="right">
				<div class="userpic" style="background-image: url(img/user/1.jpg);"></div>
			</td>
			<td>
				<h3>Nahid Pranto</h3>
				<?php include 'starRating.php';?>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<h4>Spider-Man:Homecoming</h4>
					</tr>
					<tr>
						<p>I really loved this film</p>
					</tr>
					<tr>
						<h4>Aynabaji</h4>
					</tr>
					<tr>
						<p>Awesome film!</p>
					</tr>
					<tr>
						<h4>Captain America:Civil War</h4>
					</tr>
					<tr>
						<p>Nice movie :)</p>
					</tr>
				</table>
			</td>
		</tr>

		<tr valign="Top">
			<td rowspan="2" align="right">
				<div class="userpic" style="background-image: url(img/user/2.jpg);"></div>
			</td>
			<td>
				<h3>Afrina Zahan Mithila</h3>
				<?php include 'starRating.php';?>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<h4>Spider-Man:Homecoming</h4>
					</tr>
					<tr>
						<p>I really loved this film</p>
					</tr>
					<tr>
						<h4>Aynabaji</h4>
					</tr>
					<tr>
						<p>Awesome film!</p>
					</tr>
					<tr>
						<h4>Captain America:Civil War</h4>
					</tr>
					<tr>
						<p>Nice movie :)</p>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<h2>Your Review</h2>

	<select>
  		<option value="mv1">Spider-Man:Homecoming</option>
  		<option value="mv2">Aynabaji</option>
  		<option value="mv3">Captain America:Civil War</option>
	</select>
	<textarea rows="10" cols="80" class="searchTerm" placeholder="Write your Review here"></textarea>
    <input type="submit" class="searchButton" value="Submit">


</body>

</html>