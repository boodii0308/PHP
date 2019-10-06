#!/usr/bin/php
<?php

function cmp($a, $b)
{
	$j = 0;
	while ($a[$j] == $b[$j])
		$j++;

	if (($a[$j] >= 'A' && $a[$j] <= 'Z') && ($b[$j] >= ' ' && $b[$j] <= '@'))
		return (-1);

	else if (($a[$j] >= 'a' && $a[$j] <= 'z' ) &&
		($b[$j] >= ' ' && $b[$j] <= '@') || ($b[$j] >= '[' && $b[$j] <= '`'))
		 return (-1);

	else if (($a[$j] >= '0' && $a[$j] <= '9') &&
		(($b[$j] >= 'a' && $b[$j] <= 'z') || ($b[$j] >= 'A' && $b[$j] <= 'Z')))
		return (1);

	else if (($a[$j] >= '0' && $a[$j] <= '9') &&
	(($b[$j] >= ' ' && $b[$j] <= '/') || ($b[$j] >= '[' && $b[$j] <= '`')))
		return(-1);

	else if (($a[$j] >= ' ' && $a[$j] <= '@') &&
	(($b[$j] >= 'a' && $b[$j] <= 'z') || ($b[$j] >= 'A' && $b[$j] <= 'Z') || ($b[$j] >= '0' && $b[$j] <= '9')))
		return(1);

	else if (($a[$j] >= '[' && $a[$j] <= '`') &&
		($b[$j] >= 'a' && $b[$j] <= 'z'))
			return(1);
	else if (($a[$j] >= 'a' && $a[$j] <= 'z') && ($b[$j] >= 'A' && $b[$j] <= 'Z'))
		return ((int)$a[$j] - 32 <= (int)$b[$j]) ? 1 : -1;
	else if (($a[$j] >= 'A' && $a[$j] <= 'Z') && ($b[$j] >= 'a' && $b[$j] <= 'z'))
		return ((int)$a[$j] + 32 <= (int)$b[$j]) ? 1 : -1;
	else
		return ($a <= $b) ? -1 : 1;
}
$i = 0;
$b = 1;
$ar = array();
$tmp = array();
if ($argc > 1) {
	while ($b < $argc)
	{
		$lol = preg_replace('/\\s+/',' ', $argv[$b]);
		$tmp = array_filter(explode(" ", $lol));
		foreach ($tmp as $s)
		{
			$ar[$i] = $s;
			$i++;
		}
		$b++;
	}
	usort($ar, 'cmp');
	foreach ($ar as $as){
		echo($as."\n");
	}
}
?>
