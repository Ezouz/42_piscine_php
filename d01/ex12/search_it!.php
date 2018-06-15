#!/usr/bin/php
<?php
if ($argc > 2)
{
	$i = 2;
	while ($argv[$i])
	{
		if (preg_match("/$argv[1]/", $argv[$i]))
		{
			$res = explode(":", $argv[$i]);
		}
		$i++;
	}
	if ($res[0] == $argv[1] && (!($res[2])))
		echo $res[1]."\n";
}
?>
