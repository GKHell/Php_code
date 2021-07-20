

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="MyCss.css">
</head>
<body>
		<?php

			// $a = 10; //variable

			// $a = 50;
			// echo "value of a : $a<hr>";
			// define("A", 300);  //constant 1
			// // A = 400;
			// echo "value of A : ".A."<hr>";

			// const CODE = 130;  // constant 2
			// echo "value of CODE : ".CODE;


			echo "LINE ".__LINE__."<br>";
			echo "FILE ".__FILE__."<br>";
			function Say()
			{

					echo "<i style=color:blue;>FUNCTION ".__FUNCTION__."<br>";
						// code...
			}
			say();

			//---------------------
			class Code{
				function tell()
				{
						echo "METHOD ".__METHOD__."<br>";
						echo "<i style=color:red;>class ".__CLASS__."<br>";


				}
			}

			$obj = new Code();
			$obj->tell();
				?>
</body>
</html>