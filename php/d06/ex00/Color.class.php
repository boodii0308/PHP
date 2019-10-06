<?php
	class Color{
		public $red;
		public $blue;
		public $green;

		static $verbose = FALSE;

		public function __construct($array)
		{
			if (array_key_exists('rgb',$array))
			{
				$color = intval($array['rgb'], 10);
				$this->blue = $color & 255;
				$this->green = ($color >> 8) & 255;
				$this->red = ($color >> 16) & 255;
			}
			else
			{
				$this->blue = intval($array['blue'], 10);
				$this->green = intval($array['green'], 10);
				$this->red = intval($array['red'], 10);
			}
			if (self::$verbose)
			{
				print_r($this." constructed.\n");
			}
		}
		public function __destruct(){
			if (self::$verbose)
				print_r($this." destructed.\n");
		}
		public function __toString(){
			$returnstr = sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
			return($returnstr);
		}
		public function add($rhs){
			$new = new Color(array('blue' => $rhs->blue + $this->blue,
			'green' => $rhs->green + $this->green,
			'red' => $rhs->red + $this->red));
			return ($new);
		}
		public function sub($rhs){
			$new = new Color( array('blue' => $this->blue - $rhs->blue,
			'green' => $this->green - $rhs->green,
			'red' => $this->red - $rhs->red));
			return ($new);
		}
		public function mult($f){
			$new = new Color( array('blue' => $this->blue * $f,
			'green' => $this->green * $f,
			'red' => $this->red * $f));
			return ($new);
		}
		public static function doc(){
			if (file_exists("./Color.doc.txt"))
			{
				$doc = file_get_contents("./Color.doc.txt");
				echo $doc;
			}
			else
				echo "Couldn't find a file\n";
		}
	}
?>

