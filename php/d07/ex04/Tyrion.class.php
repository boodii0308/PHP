<?php
class Tyrion
{
public function sleepWith($who)
{
	if ($who instanceof Jaime)
		print("Not event if I'm drunk !" .PHP_EOL);
	else if ($who instanceof Sansa)
		print("Let's do this." .PHP_EOL);
	else if ($who instanceof Cersei)
		print("Not event if I'm drunk !" .PHP_EOL);
	}
}
?>
