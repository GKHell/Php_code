

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="MyCss.css">
</head>
<body>
		<?php  

			$a = 7;
			$b = 2;

			$c = $a+$b;
			echo "$a + $b = $c<br>";

			$c = $a-$b;
			echo "$a - $b = $c<br>";

			$c = $a*$b;
			echo "$a * $b = $c<br>";

			$c = $a/$b;
			echo "$a - $b = $c<br>";

			$c = $a%$b;
			echo "$a % $b = $c<br>";

			$c = $a**$b;
			echo "$a ** $b = $c<br>";


			$i = 10;
			$i++;
			echo "<i style='color:red'>new value : $i.<br>";

			$i--;//10
			$i--;//9
			echo "new value : $i<br>";
		?>
</body>
</html>