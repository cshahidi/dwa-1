<!DOCTYPE html>

<html>

<head>

	<?php
	$contestants['Susan']  = "";
	$contestants['Cruz']   = "";
	$contestants['Vivian'] = "";
	
	$winning_number = rand(1,3);
	
	foreach($contestants as $key=> $contestant) {
		
		$random_number = rand(1,3);
		
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

	<? foreach($contestants as $key => $winner_or_loser): ?>
		<?=$key?> is a <?=$winner_or_loser?><br>
	<? endforeach; ?>	
	
</body>

</html>