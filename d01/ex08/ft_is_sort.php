<?php
function    ft_is_sort($tab)
{
	$tem1 = $tab;
	$tem2 = $tab;
	sort($tem1, SORT_REGULAR);
	rsort($tem2, SORT_REGULAR);
	$diff1 = array_diff_assoc($tab, $tem1);
	$diff2 = array_diff_assoc($tab, $tem2);
	return (count($diff1) > 0 && count($diff2)) ? 0 : 1;
}
?>
