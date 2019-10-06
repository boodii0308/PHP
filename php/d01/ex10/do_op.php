#!/usr/bin/php
<?php
	if ($argc != 4) {
	echo "Incorrect Parameters\n";
	exit();
	}
	$s = trim($argv[2], " \t");
	if($s = '*')
	{
		echo (intval(trim($argv[1])) * intval(trim($argv[3])));
	}
	if($s = "/")
	{
		echo intval(trim($argv[1], "\t")) / intval(trim($argv[3], "\t"));
	}
	if($s = "+")
	{
		echo intval(trim($argv[1], "\t")) + intval(trim($argv[3], "\t"));
	}
	if($s = "-")
	{
		echo intval(trim($argv[1], "\t")) - intval(trim($argv[3], "\t"));
	}
	if($s = "%")
	{
		echo intval(trim($argv[1])) % intval(trim($argv[3]));
	}
	echo "\n";
?>
