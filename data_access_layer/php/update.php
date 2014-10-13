<!DOCTYPE html>
<html lang="en">
	<body>
		<?php
			require 'connection.php';
			$userName = mysqli_real_escape_string($con, $_POST['userName']);
			$newMAC = mysqli_real_escape_string($con, $_POST['newMAC']);
			$newEmail = mysqli_real_escape_string($con, $_POST['newEmail']);
			$newPassword = mysqli_real_escape_string($con, $_POST['newPassword']);

			$sql="SELECT userName FROM lecturers where userName LIKE '$userName'";
			if ($result = mysqli_query($con,$sql)) {
				$userNameFromDb = mysqli_fetch_array($result)['userName']; 
				if($userNameFromDb == $userName){
					echo "<h2>user exist...!</h2>";
			
					$sql1 = mysqli_query($con,"UPDATE lecturers SET mac='$newMAC' WHERE userName='$userName'");
					$sql2 = mysqli_query($con,"UPDATE lecturers SET email='$newEmail' WHERE userName='$userName'");
					$sql3 = mysqli_query($con,"UPDATE lecturers SET password='$newPassword' WHERE userName='$userName'");

					if ($sql1 && $sql2 && $sql3)
						echo "<h2>Successfully updated...!/<h2>";
					else
						die('Error: ' . mysqli_error($con));
				}else
					echo "<h2>User already doesn't exist. Check the username and try again...!</h2>";
			}else
				die('Error: ' . mysqli_error($con));
				
			mysqli_close($con);

		?>
	</body>
</html>