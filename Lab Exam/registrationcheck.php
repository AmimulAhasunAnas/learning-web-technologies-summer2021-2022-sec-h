<?php
session_start();

$UserID = $_REQUEST['userid'];
$Password = $_REQUEST['password'];
$ConfirmPassword = $_REQUEST['cpassword'];
$Name = $_REQUEST['username'];
$UserType = isset($_REQUEST['usertype'])?$_REQUEST['usertype']:"";

if(!isset($UserID) || !isset($Password) || !isset($ConfirmPassword) || !isset($Name) || !isset($UserType) || $Password != $ConfirmPassword)
{
	echo "Invalid Input!";
}
else{
$file = fopen($UserID.$Name.".txt", "w");

if($UserType == "User") {$UserType = "User";}
else{$UserType = "Admin";}

fwrite($file, $Password."\n".$UserType);
fclose($file);

echo "<h1>Sign Up Done! </h1><br>";
?>

<html>
<head>
	<title>Registration Check</title>
</head>
<body>
    <a href="signin.html">Sign In</a>
</body>
</html>

<?php
}
?>