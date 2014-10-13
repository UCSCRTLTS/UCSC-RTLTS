<?php
require 'connection.php';


$result = mysqli_query($con,"SELECT * FROM lecturers");

echo "<table border='1'>
<tr>
<th>Users</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['userName'] . "</td>";
  echo "</tr>";
}

echo "</table>";



mysqli_close($con);
?>


