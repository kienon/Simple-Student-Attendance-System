<?php
$db_host = "localhost";
$db_username = "student";
$db_pass = "student123";
$db_name = "studentattendancesystem";
$conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name) or
die ("could not connect to MySQL");

if(isset ($_POST['submit-update'])){
	
	
	$sn = mysqli_real_escape_string($conn, $_POST['sname']);
	$mn = mysqli_real_escape_string($conn, $_POST['mnum']);
	$st = mysqli_real_escape_string($conn, $_POST['stat']);
	
	$sql = "UPDATE ATTENDANCE SET STUDENT_NAME='$sn',
	STATUS='$st' WHERE MATRIC_NUM='$mn';";
	$result = mysqli_query ($conn, $sql);
	if($result > 0) {
		echo "<script type='text/javascript'>alert('Record updated successfully');
		location = '../index.php?update=success'</script>";
	}
	else{
		echo"<script typr='text/javascript'>alert('Error updating record');
		locaton = '../index.php?update=failed'</script>";
	}
	
}

else{
	
	if(isset($_POST['submit-delete'])){
		$mn = mysqli_real_escape_string($conn, $_POST['mnum']);
		$sql = "DELETE FROM ATTENDANCE WHERE MATRIC_NUM='$mn';";
		$result = mysqli_query($conn, $sql);
		if($result > 0)
			echo "<script type='text/javascript'>alert('Record deleted successfully');
			location = '../index.php?delete=success'</script>";
	else
		echo "<script type='text/javascript'alert('Error deleting record');
		location = '../index.php?delete=failed'<script>";
	}
	
}

?>