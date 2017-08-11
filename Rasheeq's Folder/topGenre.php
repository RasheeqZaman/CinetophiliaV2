<!DOCTYPE html>
<html>
  <head>
    <title>Top Action Movies</title>
    <link rel="stylesheet" type="text/css" href="CSS/stylesTopActionV2.css">
    <link rel="stylesheet" href="CSS/navbar.css">
  </head>
<body>


  <?php include 'navbar.php';?>
  <?php include 'config.php';?>

  <h2 style="background-color: #B8312F; border-radius:0 15px 15px 0;">Top 50 Action Movies</h2>

<table>
  <tr>
    <th>Rank</th>
    <th>Ratings</th>
    <th>Movie</th>
    <th>Total Reviews</th>
  </tr>
  <?php
            $query = "select m.title, m.rating, mhg.genre_id, g.genre_type, count(rrm.reviewer_id) as total_review from movies as m inner join movies_has_genre as mhg on m.ID = mhg.movies_id inner join genre as g on g.genre_id = mhg.genre_id inner join reviewers_review_movies as rrm on m.id = rrm.movie_id where g.genre_id = 1 group by (m.id) order by rating desc";
            $players_query_result = mysqli_query($conn,$query) or die(mysql_error());
            $i = 0;
            if(mysqli_num_rows($players_query_result) > 0 )
            {
                while ($row = mysqli_fetch_array($players_query_result))
                {$i++;
                
  ?>

  <tr>
    <td><?php echo $i ?>.</td>
    <td><?php echo $row['rating']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['total_review']; ?></td>
  </tr>
  
  <?php
            }
          }
  ?>

  <!--
  <tr>
    <td>2</td>
    <td>97.5%</td>
    <td>Life Is Beautiful</td>
    <td>1200</td>
  </tr>

  <tr>
            <td>3</td>
            <td>98%</td>
            <td>Moonlight</td><td>1200</td>
          </tr>
          <tr>
            <td>4</td><td>96%</td><td>The Jungle Book</td><td>1280</td>
          </tr>
          <tr>
            <td>5</td><td>92%</td><td>La La Land</td><td>1100</td>
          </tr>
          <tr>
            <td>6</td><td>93%</td><td>Finding Dory</td><td>200</td>
          </tr>
          <tr>
            <td>7</td><td>91%</td><td>Moana</td><td>1250</td>
          </tr>

          <tr>
            <td>8</td><td>97%</td><td>Zootapia</td><td>1300</td>
          </tr>
-->
</table>
<?php include 'close.php'; ?>
</body>
</html>