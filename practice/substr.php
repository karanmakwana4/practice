<?php
$string = "Hii, I am Dulal";

//check condition
if(strpos($string, "Dulal") !== FALSE){
	if(preg_match('/Dulal/', $string)){
	echo "Found";
}else{
	echo "Not";
}
}

?>