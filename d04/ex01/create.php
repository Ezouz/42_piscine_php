<?php
$check = false;
if ($_POST['login'] == "" || $_POST['passwd'] == "" || $_POST['submit'] != "OK")
	echo "ERROR\n";
elseif (isset($_POST['login']) && isset($_POST['passwd']) && $_POST['submit'] == "OK")
{
	if (!file_exists("private/"))
		mkdir("private/", 0777);
	if (file_exists("private/passwd"))
	{
		$array = unserialize(file_get_contents("private/passwd"));
		foreach ($array as $tab)
		{
			if ($tab['login'] == $_POST['login'])
				$check = true;
		}
	}
	if ($check == false)
	{
		$tab['login'] = $_POST['login'];
		$tab['passwd'] = hash(whirlpool, $_POST['passwd']);
		$array[] = $tab;
		file_put_contents("private/passwd", serialize($array));
		echo "OK\n";
	}
	else
		echo "ERROR\n";
}
?>
