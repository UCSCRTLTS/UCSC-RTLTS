<!DOCTYPE html>
<html lang="en">
	<body>
		<?php
			$con=mysqli_connect("localhost","root","","rtlts-admin");
			// Check connection
			if (mysqli_connect_errno()) {
			  echo "<h2>Failed to connect to MySQL: </h2>" . mysqli_connect_error();
			}else
				echo "<h2>Successfully connected...!</h2>";
			$userName = mysqli_real_escape_string($con, $_POST['userName']);
			$password = mysqli_real_escape_string($con, $_POST['password']);

			$sql="SELECT password FROM admin where userName='$userName'";

			if ($result = mysqli_query($con,$sql)) {
				$passwordInDb = mysqli_fetch_array($result)['password']; 
				//$userNameInDb = mysqli_fetch_array($result)['userName']; 
				
			  if($passwordInDb == $password){
				echo "<h2>login success...!</h2>";
				echo "<h2>Hello ".$userName."...!</h2>";
			  }else
				echo "<h2>login failed...!</h2>";
			}
			else
				die('Error: ' . mysqli_error($con));
			mysqli_close($con);

		?>
	</body>
</html>