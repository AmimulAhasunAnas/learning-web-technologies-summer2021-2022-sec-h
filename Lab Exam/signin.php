<?php
$UserID = $_REQUEST['userid'];
$Password = $_REQUEST['password'];


if(!isset($UserID) || !isset($Password))
{
	echo "Invalid Input. Try Again!";
}
else{

if(false){
setcookie('status','true',time()+3600,'/');
header('location: admin.php');

}else{

setcookie('status','true',time()+3600,'/');
header('location: user.php');

}

}

?>