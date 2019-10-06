<?php
	require_once('../ex00/Color.class.php');

	class Vertex{
		private $_x;
		private $_y;
        private $_z;
        private $_color;
        private $_w = 1;
		static $verbose = FALSE;
		public function getX() {return ($this->_x);}
		public function getY() {return ($this->_y);}
		public function getZ() {return ($this->_z);}
		public function getW() {return ($this->_w);}
		public function getColor() {return ($this->_color);}
		public function setX($x) { $this->_x = $x; }
		public function setY($y) { $this->_y = $y; }
		public function setZ($z) { $this->_z = $z; }
		public function setW($w) { $this->_w = $w; }
		public function setColor($color) { $this->_color = $color; }
		public function __construct($ver)
		{
			if (array_key_exists('x',$ver) && array_key_exists('y',$ver) && array_key_exists('z',$ver)){
				$this->_x = $ver['x'];
				$this->_y = $ver['y'];
				$this->_z = $ver['z'];
			}
			if (array_key_exists('w', $ver))
			{
				$this->_w = $ver['w'];
			}
			if (array_key_exists('color', $ver))
			{
				$this->_color = $ver['color'];
			}
			else
				$this->_color = new Color( array('red' => 255, 'green' => 255, 'blue' => 255));
			if (self::$verbose)
			{
				printf($this. " constructed\n");
			}
		}
		public function __destruct(){
			if (self::$verbose)
				printf($this." destructed\n");
		}
		public function __toString(){
			if (self::$verbose){
				$returnstr = sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f Color( red: %3d, green: %3d, blue: %3d ) )",
				$this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
			}
			else
			{
				$returnstr = sprintf("Vertex( x: %.2f, z: %.2f, y: %.2f, w: %.2f )", $this->_z, $this->_y, $this->_x, $this->_w);
			}
			return($returnstr);
		}

		public static function doc(){
			if (file_exists("./Vertex.doc.txt"))
			{
				$doc = file_get_contents("./Vertex.doc.txt");
				echo $doc."\n";
			}
			else
				echo "Couldn't find a file\n";
		}
	}
?>

