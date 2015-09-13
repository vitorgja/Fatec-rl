<html>
<head>
	<title>MERDA!</title>
</head>
</body>
<h1>Porra!</h1>
<h1>Porra!</h1>
<h1>Porra!</h1><h1>Porra!</h1>
<?php

echo "<h1>Porra!</h1>";


foreach(array( $key => $value)){
	echo $key." = ".$value."<br>"
}

switch($_SERVER['REQUEST_METHOD'])
{
	case 'GET': $the_request = &$_GET; break;
	case 'POST': $the_request = &$_POST; break;
	default:
}

?>

</body>
</html>