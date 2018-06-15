<?php
session_start();
include("auth.php");
?>
<?php 
if (auth($_POST['login'], $_POST['passwd']) == true)
{
	$_SESSION['loggued_on_user'] = $_POST['login'];

	echo '<html><head></head><body>'."\n";
	echo '<iframe src="chat.php" width="100%" height="550px"></iframe>'."\n";
	echo '<iframe src="speak.php" width="100%" height="50px"></iframe>'."\n";
	echo '</body></html>';
}
else
{
	$_SESSION['loggued_on_user'] = "";
	echo "ERROR\n";
}
?>
