#!/usr/bin/php
<?PHP
$fd = fopen("/var/run/utmpx", "r");
$i = 0;
while ($line = fread($fd, 628))
{
	if (feof($fd))
		continue ;
	$debine[$i] = unpack("a256usr_s/a4id_s/a32line_s/i1pid_s/i1type_s/l2tv_s/a256host_s/l16pad_s", $line);
	$i++;
}
fclose($fd);
$t = 0;
date_default_timezone_set('Europe/Amsterdam');
while ($t < $i)
{
	if ($debine[$t][type_s] == "7")
	{
		echo $debine[$t][usr_s]." ".$debine[$t][line_s]."  ".date('F d H:i', $debine[$t][tv_s1])."\n";
	}
	$t++;
}
?>
