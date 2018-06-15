<?php
session_start();
if ($_SESSION['loggued_on_user'])
{
	$_SESSION = array();
	unset($_SESSION);
}
?>
