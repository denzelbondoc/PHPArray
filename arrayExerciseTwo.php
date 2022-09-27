<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Largest Cities in the World</title>
</head>
<body>
	<?php
		//Print separated by commas

		$city = array();
		$city = array("Tokyo", "Mexico City", "New York City", "Mumbai", 
			"Seoul","Shanghai", "Lagos","Buenos Aires" , "Cairo", "London");

			for($i = 0; $i < count($city);$i++)
			{
				print($city[$i]);
				print(", ");
			}

			//Sorted list in Unordered List
			sort($city);
			print("<ul>");
				for($i = 0; $i < count($city);$i++)
			{
				print("<li>".$city[$i]."</li>");
			}
				
			print("</ul>");

			//Add cities
			array_push($city,"Los Angeles", "Calcuta", "Osaka", "Beijing");
			sort($city);
			print("<ul>");
				for($i = 0; $i < count($city);$i++)
			{
				print("<li>".$city[$i]."</li>");
			}
				
			print("</ul>");
	?>
</body>
</html>