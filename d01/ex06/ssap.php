#!/usr/bin/php
<?php
function ft_split($str)
{
	$tab2 = array_diff(explode(" ", $str), [""]);
	sort($tab2);
	return $tab2;
}

$result_tab = array();
foreach ($argv as $arg)
{
	if ($arg != $argv[0])
	{
		$tab = ft_split($arg);
		$result_tab = array_merge($result_tab, $tab);
	}
}
sort($result_tab);
foreach ($result_tab as $elem)
{
	echo $elem;
	echo "\n";
}
?>
