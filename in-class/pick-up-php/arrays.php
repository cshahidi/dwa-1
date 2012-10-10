<!DOCTYPE html>

<html>

<head>

	<?php
	
	# What did we get from the form?
	print_r($_POST);
	
	$contestants = "";
		
	$winning_number = rand(1,sizeof($contestants));
	
	foreach($_POST as $key => $winner_or_loser) {
		
		$random_number = rand(1,sizeof($contestants));
		
		if($random_number == $winning_number) {
			$contestants[$key] = "Winner";
		}
		else {
			$contestants[$key] = "Loser";
		}
		
	}
	
	
	?>

</head>


<body>

	<form method='POST' action='arrays.php'>
		
		<input type='text' name='contestant1'><br>
		<input type='text' name='contestant2'><br>
		<input type='text' name='contestant3'><br>
	
		<input type='Submit'>
	
	</form>

	<? foreach($contestants as $key => $winner_or_loser): ?>
		<?=$_POST[$key]?> is a <?=$winner_or_loser?><br>
	<? endforeach; ?>	
	
</body>

</html>