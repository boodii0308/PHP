<?php
	$x = array();
	$b = array();
	$s = $_SERVER["QUERY_STRING"];
	$b = explode('&', $s);
	foreach ($b as $l)
	{
		$x = explode('=', $l);
		foreach ($x as $q)
		{
			$t =str_replace(array( '\'', '"', ',' , ';', '<', '>'),'', $q);
			if ($q == end($x))
				echo ($t);
			else
				echo ($t.": ");
		}
		echo ("\n");
	}
?>
