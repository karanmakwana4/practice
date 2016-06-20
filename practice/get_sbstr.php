<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php
    $string = "This is a strpos() test";
    $pos = strpos($string, "This");
    if ($pos === false) {
     print "Not Found";
    } else {
        print "Found!\n";
    }
?>