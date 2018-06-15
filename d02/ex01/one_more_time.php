#!/usr/bin/php
<?PHP
if ($argc == 1)
	exit ;
$d1 = array("lundi" => "monday",
	"mardi" => "tuesday",
	"mercredi" => "wednesday",
	"jeudi" => "thursday",
	"vendredi" => "friday",
	"samedi" => "satursday",
	"dimanche" => "sunday");
$d2 = array("Lundi" => "Monday",
	"Mardi" => "Tuesday",
	"Mercredi" => "Wednesday",
	"Jeudi" => "Thursday",
	"Vendredi" => "Friday",
	"Samedi" => "Satursday",
	"Dimanche" => "Sunday");
$m1 = array("janvier" => "january",
	"fevrier" => "february",
	"mars" => "march",
	"avril" => "april",
	"mai" => "may",
	"juin" => "june",
	"juillet" => "july",
	"aout" => "august",
	"septembre" => "september",
	"octobre" => "october",
	"novembre" => "november",
	"decembre" => "december");
$m2 = array("Janvier" => "January",
	"Fevrier" => "February",
	"Mars" => "March",
	"Avril" => "April",
	"Mai" => "May",
	"Juin" => "June",
	"Juillet" => "July",
	"Aout" => "August",
	"Septembre" => "September",
	"Octobre" => "October",
	"Novembre" => "November",
	"Decembre" => "December");
$mul = array(0,);
$err = 0;
$rd = '#^[L|l]undi$|^[M|m]ardi$|^[M|m]ercredi$|^[J|j]eudi$|^[V|v]endredi$|^[S|s]amedi$|^[D|d]imanche$#';
$rm = '#^[J|j]anvier$|^[F|f]evrier$|^[M|m]ars$|^[A|a](vril$|out$)|^[M|m]ai$|^[J|j](uin$|uillet$)|^([S|s]ept|[N|n]ov|[D|d]ec)embre$|^[O|o]ctobre$#';
date_default_timezone_set('Europe/Amsterdam');
$tab = preg_split('/\s/', $argv[1]);
if (preg_match($rd, $tab[0]))
{
	$tmp = '#^'.$tab[0].'$#';
	foreach($d1 as $key => $value)
		if (preg_match($tmp, $key))
			$mul[0] = $value;
	if ($mul[0] == 0)
		foreach($d2 as $key => $value)
			if (preg_match($tmp, $key))
				$mul[0] = $value;
	$err+=1;
}
if (preg_match('#^([1-9]|[1|2][0-9]|3[0|1])$#', $tab[1]))
{
	$mul[1] = $tab[1];
	$err+=1;
}
if (preg_match($rm, $tab[2]))
{
	$tmp = '#^'.$tab[2].'$#';
	foreach($m1 as $key => $value)
		if (preg_match($tmp, $key))
			$mul[2] = $value;
	if ($mul[2] == 0)
		foreach($m2 as $key => $value)
			if (preg_match($tmp, $key))
				$mul[2] = $value;
	$err+=1;
}
if (preg_match('#^[0-9]{4}$#', $tab[3]))
{
	if ($tab[3] >= 1970)
		$err+=1;
	$mul[3] = $tab[3];
}
if (preg_match('#^[0-2][0-9]:[0-5][0-9]:[0-5][0-9]$#', $tab[4]))
{
	$err+=1;
	$mul[4] = $tab[4];
}
if ($err != 5)
{
	echo "Wrong Format\n";
	exit (0);
}
$conv = implode(' ', $mul);
echo strtotime($conv)."\n";
?>
