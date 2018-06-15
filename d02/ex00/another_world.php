#!/usr/bin/php
<?PHP
$tab = preg_split('/(\s)|(\t)/', $argv[1], -1, PREG_SPLIT_NO_EMPTY);
$i = 0;
foreach ($tab as $elem)
{
	echo "$elem";
	$i++;
	if ($i < count($tab))
		echo " ";
	else if ($i == count($tab))
		echo "\n";
}
?>
