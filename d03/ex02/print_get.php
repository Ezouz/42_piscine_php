<?php
foreach ($_GET as $key => $value)
{
	$URL = $key.': '.$value."\n";
   	echo $URL;
}
?>
