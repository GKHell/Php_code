

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="MyCss.css">
</head>
<body>
	<?php

		$var = "Hello"; //string
		echo "\$var = "; 
		var_dump($var);
		echo "<hr>";


		$var = 132; //integer
		echo "\$var = ";
		var_dump($var);
		echo "<hr>";


		$var = 3.4115; //float
		echo "\$var = ";
		var_dump($var);
		echo "<hr>";

		$var = True;
		echo "\$var = ";
		var_dump($var);
		echo "<hr>";

		$var = array(1,2,43,56,56,'A');
		echo "\$var = ";
		var_dump($var);
		echo "<hr>";

		class Code{

		}
		$obj = new Code();

		$var = $obj;
		echo "\$var = ";
		var_dump($var);
		echo "<hr>";

		$var = null;
		echo "\$var = ";
		var_dump($var);
		echo "<hr>";


		var_dump('xyz');

		echo "He'll'o \"ph\np\" .";
	?>
</body>
</html>