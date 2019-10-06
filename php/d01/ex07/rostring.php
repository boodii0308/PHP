#!/usr/bin/php
<?php

$i = 0;
$tmp = array();
if ($argc > 1)
{
	$s = preg_replace('/\\s+/',' ', $argv[1]);
	$tmp = explode(" ", $s);
	$nu = count($tmp);
	foreach ($tmp as $s)
	{
		if ($i == 0)
			$ar = $s;
		else
			echo $s." ";
		$i++;
	}
	echo $ar."\n";
}
?>
