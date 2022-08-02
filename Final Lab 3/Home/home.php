<?php
if(isset($_COOKIE['status'])){
session_start();
?>
<html>
<head>
	<title>Home</title>
</head>
<body>
<h1>Welcome Home, <?php echo $_SESSION['username']; ?></h1>

<a href="../Home/Demo.php">Notice</a>|
<a href="../Home/Demo.php">Study Content</a>|
<a href="../Home/Demo.php">Student Information</a>|
<a href="../Home/Demo.php">Drop Request</a>|<br>
<br>
<a href="../Home/Demo.php">Check Grade</a>|
<a href="../Home/Demo.php">Consulting Hour</a>|
<a href="../Home/Demo.php">Evaluate Grade</a>|<br>
<br>
<a href="../Home/Demo.php">University Facility</a>|
<a href="../Home/Demo.php">Apply Leave</a>|
<a href="../Home/Demo.php">Administration Informaion</a>|
<a href="../Home/Demo.php">Logout</a>
</body>
</html>
<?php
}else{
echo "Login again!";
}
?>
