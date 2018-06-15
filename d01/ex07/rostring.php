#!/usr/bin/php
<?php
if ($argc > 1)
{
	$tab = array();
	$tab = preg_split('/(\s)/', $argv[1], -1, PREG_SPLIT_NO_EMPTY); 
	$tab[count($tab)] = $tab[0];
	unset($tab[0]);
	$i = count($tab);
	while ($i > 0)
	{
		foreach ($tab as $elem)
		{
			echo $elem;
			$i--;
			if ($i != 0)
				echo " ";
		}
		echo "\n";
	}
}
?>
