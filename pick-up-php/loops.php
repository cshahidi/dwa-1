<!DOCTYPE html>

<html>

<head>

	<?
	$boxes = "";
	
	for($i = 1; $i <= 1000; $i++) {
		$boxes = $boxes."<div style='width:50px; height:50px; background-color:red; margin:4px; float:left'></div>";
	}
	?>

</head>


<body>

	<?=$boxes?>	
	
</body>

</html>