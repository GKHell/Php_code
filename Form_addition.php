
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="MyCss.css">
</head>
<body>

		<form action="">
			
			<input type="number" name="n1">
			<input type="number" name="n2">

			<button type="submit" name="add">+</button>

		</form>	
		<?php 

			if(isset($_GET["add"]))
			{
				$a = $_GET['n1'];
				$b = $_GET['n2'];
			
				echo "<p style='color:red;'>$a + $b = ".$a+$b;
				 

			}
		?>
</body>
</html>