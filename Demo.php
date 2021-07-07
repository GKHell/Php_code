
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="MyCss.css">
</head>
<body>

	<?php

		// phpcredits(CREDITS_GENERAL);

		$data = array("100"=>array("name"=>"maharshi","subject"=>"PHP","timepass"=>"game"),
					  "101"=>array("name"=>"Dhruval","subject"=>"Python","timepass"=>"pakistani"),
					  "103"=>array("name"=>"Vidit","subject"=>"Java","timepass"=>"loe"),
				);

		 foreach ($data as $roll => $subData) {
		 	 
		 	 echo "<b style='color:blue;'>$roll </b> ";
		 	 foreach($subData as $ar=>$value)
		 	 {
		 	 	echo " $ar : <i style='color:red;'>$value</i>";
		 	 }
		 	 echo "<br>";
		 }

	?>
	<?php?>
</body>
</html>