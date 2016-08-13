<?php
$string = "This is a new Chat!!";
$find = "a";
$search = strpos($string,$find);

if($search === FALSE){
	echo "Not Found";
}else{
	echo "String Found " . $search;
}
?>