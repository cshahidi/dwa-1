<!DOCTYPE html>

<html>

<head>

	<?php
		// String
		$hour = date('G');	
		
		# For testing purposes, 
		# we can hard code the hour
		$hour = 20;
				
		if($hour >= 20) {
			$color = "black";
		}
		else {
			$color = "blue";
		}	
			
	?>
	
	<style type='text/css'>
	
		body {
			background-color: <?=$color?>;
		}	
			
	</style>
	
	
</head>


<body>

	
	
</body>



</html>