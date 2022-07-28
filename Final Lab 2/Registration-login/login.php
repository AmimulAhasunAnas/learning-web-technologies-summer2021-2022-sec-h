<?php
$UserID = $_REQUEST['userid'];
$Password = $_REQUEST['password'];
$IsFound = false;

if(empty($UserID) || empty($Password)){
	echo "Null Input";
}else{
	$file = fopen("../Data/myfile.txt", "r");
	if($file){
		while (($line = fgets($file)) != false) {
			$array = explode("-", $line);
			//echo $line;
			if(strcmp($UserID, $array[1]) == 0){
				if(strcmp($Password , $array[2]) == 0){
					header('location: ../Home/home.php?username='.$array[0]);
					setcookie("status",true,time()+3600,"/");
				}else{
					echo "Incorrect Password";
				}

				$IsFound = true;
				break;
			}
		}
		if(!$IsFound){ echo "User Not Found";}
	}	
}


?>