<?php
class Jaime
	{
		public function sleepWith($who)
		{
			if ($who instanceof Tyrion)
			print("Not event if I'm drunk !" .PHP_EOL);
			else if ($who instanceof Sansa)
				print("Let's do this." .PHP_EOL);
			else if ($who instanceof Cersei)
				print("With pleasure, but only in a tower in Winterfell, them." .PHP_EOL);
		}
	}
?>
