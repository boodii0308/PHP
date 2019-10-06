<?php

$i = 0;
$ar = array();
$tmp = array();
if ($argc > 1) {
	foreach ($argv as $lol)
	{
		$tmp = explode(" ", $lol, str_word_count($lol));
		foreach ($tmp as $s)
		{
			$ar[$i] = $s;
			$i++;
		}
	}
	sort($ar);
	foreach ($ar as $as){
		echo($as."\n");
	}
}
?>
