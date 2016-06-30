<?php

echo "<h1>Well, this is the hello page! </h1>";
echo "<p>What is your name?</p>";
$url = $_SERVER['REQUEST_URI'];
	$string = substr($url, 11);
	$ideaid = substr($url, 18, 15);

	echo $string."<br>";
	echo "Idea id is: ".$ideaid;

	echo "<br>";

	$i = rand(1, 10);

	echo "Score is: ".$i;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
<form action="index.php">
	<input type="text" name="user_name">
	<input type="button" value="submit" name="submit">
</form>
</body>
</html>