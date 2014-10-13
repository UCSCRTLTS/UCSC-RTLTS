<!DOCTYPE html>
<html lang="en">
	<body>
		<?php
			require 'connection.php';
			if($result = mysqli_query($con,"SELECT userName,firstName,lastName,email FROM lecturers")){
				echo "<table><tr><td><h2>Username</h2></td><td><h2>Name</h2></td><td><h2>E-mail</h2></td></tr>";
				while($row = mysqli_fetch_array($result)) {
					echo "<tr><td>".$row['userName']."</td><td>".$row['firstName']." ".$row['lastName']."</td><td>".$row['email']."</td></tr>";
					//echo "<br>";
				}
				echo "</table>";
			}else
				die('Error: ' . mysqli_error($con));
			mysqli_close($con);
		?>
	</body>
</html>