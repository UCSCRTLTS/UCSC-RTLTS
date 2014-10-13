<!DOCTYPE html>
<html lang="en">
	<body>
		<?php
			require 'connection.php';
			$userName = mysqli_real_escape_string($con, $_POST['userName']);
			$sql="SELECT userName FROM lecturers where userName LIKE '$userName'";
			if ($result = mysqli_query($con,$sql)) {
				$userNameFromDb = mysqli_fetch_array($result)['userName']; 
				
				if($userNameFromDb == $userName){
					echo "<h2>user exist...!</h2>";
					$query = "DELETE FROM lecturers WHERE userName='$userName'";
					if (mysqli_query($con,$query))
						echo "<h2>Successfully deleted...!</h2>";
					else
						die('Error: ' . mysqli_error($con));
				}else
				 echo "<h2>User already doesn't exist. Check the username and try again...!</h2>";
			}
			mysqli_close($con);
		?>
	</body>
</html>