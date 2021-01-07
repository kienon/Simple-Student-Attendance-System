<!DOCTYPE html>
<html>
<h1>Attendance Management System</h1>
<hr>
<head>
    <style>
        table, th, td {
        border: 0px solid black;
        }
    </style>
</head>
<body>

<h2>Manage Attendance</h2>
<form action="includes/addattendance.php" method="POST">
Student Name: <input type = "text" placeholder="Student Name" name="sname"> </br>
Matric Number: <input type = "text" placeholder="Matric number" name="mnum"> </br>
Status: <select name="stat"> 
  <option value="1">Attend</option>
  <option value="2">Absent</option>
  <option value="3">Absent with reason</option>
</select> </br>
<button type = "submit" name = "submit">Add Student</button>
</form>

<h2>Search Student</h2>
<form action="includes/getattendance.php" method="POST">
Matric Number: <input type = "text" placeholder="Matric Number" name="search"> </br>
<button type = "submit" name = "submit-search">Search Student</button>
</form>

<h2>Student Attendance</h2>
<table>
<tr><td><form action='addition/countattendance.php'>
<button type='submit'>Count</button>
</form></td> 

<td><form action='addition/avgattendance.php'>
<button type='submit'>Average</button>
</form></td></tr> </table>

</body>
</html>