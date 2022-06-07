<?php
$elements = [2,8,9,11,13];
$searchItem = 9;

for ($i=0; $i<5; $i++){ 
	if($elements[$i] == $searchItem) {echo "Number Found"; break;}
    if($i == 4) {echo "Number not Found"; break;}
}

?>