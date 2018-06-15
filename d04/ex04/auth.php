<?php
function auth($login, $passwd)
{
	$pass = hash(whirlpool, $passwd);
	if (file_exists("private/passwd"))
	{
		$array = unserialize(file_get_contents("private/passwd"));
		foreach ($array as $tab)
		{
			if ($tab['login'] == $login && $tab['passwd'] == $pass)
				return (true);
		}
	}
	return (false);
}
