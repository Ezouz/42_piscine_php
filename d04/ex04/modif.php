<?php
header('location: index.html');
$check = false;
$i = 0;
if ($_POST['login'] == "" || $_POST['oldpw'] == "" || $_POST['newpw'] == "" || $_POST['submit'] != "OK")
	echo "ERROR\n";
elseif (isset($_POST['login']) && isset($_POST['newpw']) && isset($_POST['oldpw']) && $_POST['submit'] == "OK")
{
	if (file_exists("private/passwd"))
	{
		$array = unserialize(file_get_contents("private/passwd"));
		foreach ($array as $tab)
		{
			if ($tab['login'] == $_POST['login'])
			{
				if ($tab['passwd'] == hash(whirlpool, $_POST['oldpw']))
					$check = true;
				else
					echo "ERROR\n";
				$c = $i;
			}
			$i++;
		}
	}
	if ($check == true)
	{
		$array[$c]['passwd'] = hash(whirlpool, $_POST['newpw']);
		file_put_contents("private/passwd", serialize($array));
		echo "OK\n";
	}
}
else
	echo "ERROR\n";

?>
