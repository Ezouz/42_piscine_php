#!/usr/bin/php
<?php
if ($argc == 2)
{
	if (preg_match('#^([ ]+)?[+|-]?[0-9]+([ ]+)?[\+\/\-\*\%]([ ]+)?[+|-]?[0-9]+([ ]+)?$#', $argv[1]))
	{
		preg_match('#.+?[+|-]?[0-9]+#', $argv[1], $n1);
		preg_match('#[\+\/\-\*\%]{1}[ ]*([+|-]?[0-9]+)$#', $argv[1], $n2);
		$op = $n2[0][0];
	}
	else
		echo "Syntax Error\n";
	if ($op == "+")
		echo ($n1[0] + $n2[1])."\n";
	elseif ($op == "-")
		echo ($n1[0] - $n2[1])."\n";
	elseif ($op == "*")
		echo ($n1[0] * $n2[1])."\n";
	elseif ($op == "/")
		echo ($n1[0] / $n2[1])."\n";
	elseif ($op == "%")
		echo ($n1[0] % $n2[1])."\n";
}
else
	echo "Syntax Error\n";
?>
