#!/usr/bin/php
<?php
if ($argc == 4)
{
	$a = intval($argv[1]);
	$op = trim($argv[2]);
	$b = intval($argv[3]);
	if ($op == "+")
		echo ($a + $b)."\n";
	elseif ($op == "-")
		echo ($a - $b)."\n";
	elseif ($op == "*")
		echo ($a * $b)."\n";
	elseif ($op == "/")
		echo ($a / $b)."\n";
	elseif ($op == "%")
		echo ($a % $b)."\n";
}
else
	echo "Incorrect Parameters\n";
?>
