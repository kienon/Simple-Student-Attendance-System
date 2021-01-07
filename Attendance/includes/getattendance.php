<?php
$db_host = "localhost";
$db_username = "student";
$db_pass = "student123";
$db_name = "studentattendancesystem";
$conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name) or
die ("could not connect to MySQL");

if(isset($_POST['submit-search'])){
	$search = mysqli_real_escape_string($conn, $_POST['search']);
	$sql = "SELECT * FROM ATTENDANCE WHERE MATRIC_NUM='$search';";
	$result = mysqli_query($conn, $sql);
	$resultCheck= mysqli_num_rows($result);
	
	if($resultCheck > 0){
		$row = mysqli_fetch_assoc($result);
		
		$sn = $row['STUDENT_NAME'];
		$mn = $row['MATRIC_NUM'];
		$st = $row['STATUS'];
		
		echo "<h2> Attendance Details </h2>";
		echo "<form action='updateattendance.php' method='POST'>";

		echo "Student Name: <input type = 'text' value={$sn} name='sname'></br>
		      Matric Number: <input type = 'text' value={$mn} name='mnum'></br>
		      Status: <input type = 'text' value={$st} name='stat'> </br>";
		echo "<button type = 'submit' name = 'submit-update'>Update Attendance</button> ";
		echo "<button type = 'submit' name = 'submit-delete'>Delete Attendance</button>";
		echo "</form>";
		
	}else{
		echo "<script type ='text/javascript'>alert('There are no result matching your search');
		location = '../index.php?search=failed'</script>";
	}
}

?>