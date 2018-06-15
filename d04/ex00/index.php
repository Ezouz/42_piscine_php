<?PHP
session_start();
if ($_GET['submit'] == "OK")
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
$log = isset($_SESSION['login']) ? $_SESSION['login'] : "";
$pwd = isset($_SESSION['passwd']) ? $_SESSION['passwd'] : "";
?>
<html><body>
<form method="get" target="index.php" >
	Identifiant: <input type="text" name="login" value="<?= $log;?>" />
	<br />
	Mot de passe: <input type="password" name="passwd" value="<?= $pwd;?>" />
	<input type="submit" name="submit" value="OK" />
</form>
</body></html>
