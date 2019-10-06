#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$i = 0;
		$s = 0;
		while ($i < strlen($argv[1]) && $argv[1][$i] != '\0')
		{
			while (($argv[1][$i] == ' ' || $argv[1][$i] == '\t') && $argv[1][$i] != '\0')
			{
				$i++;
				if ($i == strlen($argv[1]))
				{
					echo ("\n");
					return ;
				}
				if ($argv[1][$i] != ' ' && $argv[1][$i] != '\t' && $argv[1][$i] != '\0' && $s == 1)
					echo " ";
			}
			if ($argv[1][$i] != ' ' && $argv[1][$i] != '\t' && $argv[1][$i] != '\0')
			{
				echo ($argv[1][$i]);
				$s = 1;
			}
			$i++;
		}
		echo ("\n");
	}

?>
