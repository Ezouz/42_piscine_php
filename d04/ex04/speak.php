<?php
session_start();	
date_default_timezone_set("Europe/Paris");
?>
<?php
if ($_SESSION['loggued_on_user'] != "")
{
	echo '<html><head></head><body><form action="speak.php">Message: <input type="text" name="msg"><input type="submit" name="submit" value="OK"/>';
	if (file_exists("private/chat"))
	{
		$fd = fopen("private/chat", "a+");
		flock($fd, LOCK_EX);
		$array = unserialize(file_get_contents("private/chat"));
	}
	if ($_POST['submit'] == "OK")
	{
		$tab['login'] = $_SESSION['loggued_on_user'];
		$tab['time'] = date('H:i');
		$tab['msg'] = $_POST['msg'];
		$array[] = $tab;
		file_put_contents("private/chat", serialize($array));
		if ($fd)
			fclose($fd);
	}
	echo '</form></body></html>';
}
else
	echo "ERROR\n";
?>
