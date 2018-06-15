<?PHP
function ft_split($str)
{
	$i = 0;
	$tab = explode(' ', $str);
	$tab2 = array();
	foreach ($tab as $elem)
	{
		if ($elem || $elem == '0')
		{
			$tab2[$i] = $elem;
			$i += 1;
		}
	}
	sort($tab2);
	return $tab2;
}
?>
