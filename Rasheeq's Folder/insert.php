
  <?php 
  			include 'config.php';

			$sql = "INSERT INTO reviewers (user_name, email, password)
			VALUES ('".$_GET["name"]."', '".$_GET["email"]."', '".$_GET["password"]."')";

			if ($conn->query($sql) === TRUE) {
				echo '<script language="javascript">';
  				echo 'alert("Account Successfully Created!!")';
  				echo '</script>';
  				exit;
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
	
  			include 'close.php'; 
  ?>