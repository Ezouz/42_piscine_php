#!/usr/bin/php
<?PHP
function get_img($im, $save_dir)
{
	$ch = curl_init($im);
	$img_name = basename($im);
	$save_loc = $save_dir.$img_name;
	$fp = fopen($save_loc, 'wb');
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
	fclose($fp);
}

if ($argc == 2)
{
	$c = curl_init("$argv[1]");
	curl_setopt($c, CURLOPT_URL, "$argv[1]");
	curl_setopt($c, CURLOPT_HEADER, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	if (($url = curl_exec($c)) === FALSE)
		exit (0);
	preg_match_all('/img.+src=[\""\']([^\""\']+)/i', $url, $match);
	if (substr($argv[1], -1) == '/')
		$save_dir = preg_replace('#(https?:\/\/)#i',"",$argv[1]);
	else
		$save_dir = preg_replace('#(https?:\/\/)#i',"",$argv[1])."/";
	if (!file_exists($save_dir))
		if (!mkdir($save_dir, 0777))
			exit (0);
	foreach ($match[1] as $uimg)
	{
		if (!preg_match('#(www.*[\/])#Ui', $uimg, $match2))
		{
			if (!preg_match('#(https?:\/\/)#Ui', $uimg, $match2))
			{
				$uimg = preg_replace('#^\/#m', "", $uimg);
				if (preg_match('#(https?:\/\/|www\.)?[a-zA-Z0-9-_\.\/\?=&]+\.([a-z]{2,3}\/)#U', $uimg))
				{
					$uimg = preg_replace('#^\/#m', "https://", $uimg);
					get_img($uimg, $save_dir);
				}
				else
				{
					$dom = preg_replace('#((https?:\/\/)?)#i', "", $save_dir);
					$nuimg = $dom.$uimg;
					get_img($nuimg, $save_dir);
				}
			}
			else
				get_img($uimg, $save_dir);
		}
		else
			get_img($uimg, $save_dir);
	}
	curl_close($c);
}
?>
