<?php

class NightsWatch implements IFighter
{
	private $army = array();
	public function recruit($s)
	{
		$this->army[] = $s;
	}
	function fight()
	{
		foreach ($this->army as $s) {
			if (method_exists(get_class($s), 'fight'))
				$s->fight();
		}
	}
}
?>
