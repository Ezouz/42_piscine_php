<?php
function auth($login, $passwd)
{
	$pass = hash(whirlpool, $passwd);
	if (file_exists("../ex01/private/passwd"))
	{
		$array = unserialize(file_get_contents("../ex01/private/passwd"));
		foreach ($array as $tab)
		{
			if ($tab['login'] == $login && $tab['passwd'] == $pass)
				return (true);
		}
	}
	return (false);
}
