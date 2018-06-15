#!/usr/bin/php
<?PHP
function secd_call($param)
{
	$param[0] = strtoupper($param[0]);
	return ($param[0]);
}

function first_call($param)
{
	$txt = preg_replace_callback('#(>.*?<)#si', secd_call, $param[0]);
	$txt = preg_replace_callback('#(?<=title=["\'])[^"\']+#si', secd_call, $txt);
	return ($txt);
}

if ($argc > 1)
{
	$file = file_get_contents($argv[1]);
	$file = preg_replace_callback('#(<a .*?>)(.*?)(<.*?\/a>)#si', first_call, $file);
	echo $file;
}
?>
