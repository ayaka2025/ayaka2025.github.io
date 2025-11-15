<?php
	$num1 = 49;
	$num2 = 7;
	$ans = $num1 / $num2;		//$num1と$num2の値で割り算
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
	<?php
		echo '$num1 = ' , $num1 , '、$num2 = ' , $num2 , '<br>';
		echo $num1 , ' / ' , $num2 , ' = ' , $ans , '<br>';
		$num2 = $num2 + 1;		//$num2の値に1を足した結果を$num2に再代入
		echo '$num2 + 1 = ' , $num2;
	?>
	</body>
</html>

