<?php
$db_host = "localhost";
$db_username = "student";
$db_pass = "student123";
$db_name = "studentattendancesystem";
$conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name) or
die ("could not connect to MySQL");


$sname = $_POST['sname'];
$mnum = $_POST['mnum'];
$stat = $_POST['stat'];

$sql = "INSERT INTO ATTENDANCE (STUDENT_NAME,MATRIC_NUM,STATUS)
VALUES('$sname','$mnum','$stat');";


mysqli_query($conn, $sql);

header("Location: ../index.php?add=success");

?>