#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$tab = array_diff(explode(" ", $argv[1]), [""]);
	if (count($tab) !== 0)
	{
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
		}
	echo "\n";
	}
}
?>
