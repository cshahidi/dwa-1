<!DOCTYPE html>

<html>

<head>

	<?php
	
		$square = 4 * 4;
		
		# String
		$name = "Susan"; 
		
		# Int 
		$age = 42;
		
		# Float
		$weight = 250.43;
		
		# Boolean
		$logged_in = FALSE;
		
		$quarter = .25;
		$dime    = .10;
		$nickle  = .05;
		
		$total = (4 * $quarter) + (5 * $dime) + (3 * $nickle);
		
	?>

</head>

<body>

	Total change: <?=$total?>

	The square of 4 is <?=$square?>
	
</body>

</html>