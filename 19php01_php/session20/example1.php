<link rel="stylesheet" type="text/css" href="css/style.css">
<?php 
	echo "<h1>Hello world!</h1>";
?>
<p>Hi man!</p>
<?php
	$userName = 'admin';
	echo $userName;
	//document.write(userName);
	/*
		document.write(userName);
	*/
	$x = 7;
	$y = 8;
	echo "<br>";
	echo $x + $y;
	echo "<br>";
	echo $x - $y;
	echo "<br>";
	echo $x * $y;
	echo "<br>";
	echo $x / $y;

	/*
		* sumNumber function
		* Description: Summary 2 number
		* Created by CanhLH
		* Created 2019-05-25
	*/
	function sumNumber($a, $b) {
		return $a + $b;
	}

	echo "<br>";
	echo sumNumber(22, 98);

	echo "<br>";
	$i = 5;
	if ($i % 2) {
		echo "i la so le";
	} else {
		echo "i la so chan";
	}

	echo "<br>";
	for ($i = 1; $i <= 10; $i++) {
		echo $i;
		echo "<br>";
	}
	echo "<br>";
	$n = 5;
	while ($n < 10) {
		echo $n;
		$n++;
		echo "<br>";
	}

	echo "<br>";
	$m = 5;
	do {
		echo $m;
		$m++;
		echo "<br>";
	} while ($m < 10);
?>
<!-- BT:
1. Hiển thị các số trong khoảng (200, 250) mà chia hết cho 3
2. Vẽ bàn cờ vua bằng vòng lặp for -->
<?php 
	for($i = 0; $i< 8; $i++) {
		for($j = 0; $j< 8; $j++) {
			if (($i + $j) % 2) {
				echo "<div class='red'></div>";
			} else {
				echo "<div class='black'></div>";
			}
		}
		echo "<p class='line'></p>";
	}
?>