<?php
session_start();
if (file_exists("private/chat"))
{
	$chatab = unserialize(file_get_contents("private/chat"));
	foreach ($chatab as $chat)
	{
		echo "[".$chat['time']."]"." <b>".$chat['login']."</b>: ".$chat['msg']."</br>";
		echo "\n";
	}
}
?>
