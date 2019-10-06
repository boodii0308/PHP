#!/usr/bin/php
<?php
	while(1)
	{
		echo "Enter a number: ";
		$lol = fgets(STDIN);
		if (feof(STDIN))
		{
			echo "\n";
			exit();
		}
		if (is_numeric($lol))
		{
			if ($lol % 2 == 0)
				echo "The number $lol is even\n";
			else
				echo "The number $lol is odd\n";
		}
		else
		{
			echo "'".$lol."' is not a number\n";
		}
	}
?>
