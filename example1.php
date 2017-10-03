<!DOCTYPE html>
<html>
<head>
	<title>Day 2 - Session 1</title>
</head>
<body>
	<?php
		$n = 20;
	echo "n = ".$n."<br>";
	
	for ($i = 1; $i <= $n; $i++) {
		if ($i % 3 == 0){
			echo $i." ";
		}
	}
	// nếu n > 10 thì in ra n
	if($n>10){
		echo "<br>".$n;
	}
	//nếu n >25 thì in ra n
	do{
		echo "<br>".$n;
	}while ($n>25);
	?>
</body>
</html>