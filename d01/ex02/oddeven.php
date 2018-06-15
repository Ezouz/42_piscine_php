#!/usr/bin/php
<?PHP
while (!feof(STDIN))
{
	echo "Entrez un nombre: ";
	$input = trim(fgets(STDIN));
	if (is_numeric($input))
	{
		$lc = (substr("$input", -1));
		if (($lc % 2) == 0)
			echo "Le chiffre $input est Pair\n";
		else
			echo "Le chiffre $input est Impair\n";
	}
	else
		if ($input)
			echo "'$input' n'est pas un chiffre\n";
}
echo "^D\n";
exit (0);
?>
