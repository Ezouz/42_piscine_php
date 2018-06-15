#!/usr/bin/php
<?php
$result_tab = array();
$alpha = array();
$digit = array();
$asc = array();

function ft_tri($c1, $c2)
{
	if (ctype_alpha($c1))
	{
		if (ctype_alpha($c2))
			return (strcmp($c1, $c2));
		if (ctype_digit($c2))
			return -1;
		else
			return -1;
	}	
	elseif (ctype_digit($c1))
	{
		if (ctype_digit($c2))
			return (strcmp($c1, $c2));
		if (ctype_alpha($c2))
			return 1;
		else
			return -1;
	}
	else
	{
		if (ctype_alpha($c2))
			return 1;
		if (ctype_digit($c2))
			return 1;
		else
			return (strcmp($c1, $c2));
	}
}

function ft_cmp($s1, $s2)
{
	$c = 0;
	$s1 = strtolower($s1);
	$s2 = strtolower($s2);
	while (($s1[$c] AND $s2[$c]) OR $s1[$c] == '0' OR $s2[$c] == '0')
	{
		if ($s1[$c] == $s2[$c])
			$c++;
		if ($s1[$c] != $s2[$c])
		{
			$ret = ft_tri($s1[$c], $s2[$c]); 
			break ;
		}
	}		
	return ($ret);
}

function sort_tab($tab)
{
	$i = 0;
	while ($tab[$i + 1] OR $tab[$i + 1] == '0' OR $tab[$i] == '0')
	{
		if (ft_cmp($tab[$i], $tab[$i + 1]) > 0)
		{
			$tmp = $tab[$i + 1];
			$tab[$i + 1] = $tab[$i];
			$tab[$i] = $tmp;
			$i = 0;
		}
		else
			$i++;
	}
	return ($tab);
}

if ($argc > 1)
{
	$tab = array();
	$cut = array();
	foreach ($argv as $arg)
	{
		if ($arg != $argv[0])
		{
			$cut = preg_split('/(\s)/', $arg, -1, PREG_SPLIT_NO_EMPTY);
			$tab = array_merge($tab, $cut);
		}
	}
	$new_tab = sort_tab($tab);
	foreach ($new_tab as $elem)
	{
		echo $elem;
		echo "\n";
	}
}
?>
