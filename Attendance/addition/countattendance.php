<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
        border: 0.5px solid black;
        }
    </style>
</head>

<?php
$db_host = "localhost";
$db_username = "student";
$db_pass = "student123";
$db_name = "studentattendancesystem";
$conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name) or
die ("could not connect to MySQL");

$sql = "SELECT attendance.STATUS, COUNT(NO)
        FROM attendance
        GROUP BY attendance.STATUS
		HAVING COUNT(NO)>1
		ORDER BY COUNT(NO) DESC;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<h2> The Count of Student Attendance </h2>";
	echo "<h3>1 = Attend | 2 = Absent | 3 = Absent with Exception</h3><br>";
	echo "<table>
			<tr>
			<th>Status</th>
			<th>Total Student</th>
			</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
				<td>".$row["STATUS"]."</td>
				<td>".$row["COUNT(NO)"]."</td>
				</tr>";
		}echo "</table>";
		echo "<form action='../index.php'><br>
          <button type='submit'>Return </button><br>
          </form>";
	}else{
		echo "Something went wrong!";
	}
?>
</html>