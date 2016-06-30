<?php
	echo "<p>Hello this is the data: </p>";
	//echo $_SERVER['REQUEST_URI'];
	$url = $_SERVER['REQUEST_URI'];
	$string = substr($url, 13);
	$ideaid = substr($url, 19, 15);

	echo $string."<br>";
	echo "Idea id is: ".$ideaid;

	echo "<br>";

	$i = rand(1, 10);

	echo "Score is: ".$i;

?>
<!DOCTYPE html>
<html>
<head>
	<title>JSON</title>
</head>
<body>
</body>
</html>