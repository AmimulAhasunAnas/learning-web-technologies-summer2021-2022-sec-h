<?php
$Username = $_REQUEST['username'];
$UserID = $_REQUEST['userid'];
$Password = $_REQUEST['password'];


if(empty($Username)||empty($UserID)||empty($Password)){
	echo "Null Input";
}
else{
$file = fopen("../Data/myfile.txt", "a");

fwrite($file,ucfirst(strtolower($Username))."-".$UserID."-".$Password."-"."\n");
fclose($file);
header("location: login.html");
}
?>