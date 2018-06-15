<?php
if ($_GET['action'] == "set")
	setcookie($_GET['name'], $_GET['value'], time() + 3600, null, null, false, true);
elseif ($_GET['action'] == "get")
{
	echo $_COOKIE[$_GET['name']];
	if ($_COOKIE[$_GET['name']])
		echo "\n";
}
elseif ($_GET['action'] == "del")
{
	unset($_COOKIE);
	setcookie("cook.txt");
}
?>
