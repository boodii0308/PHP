<?php
require_once('../ex01/Vertex.class.php');

class Vector{
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0;

	static $verbose = FALSE;
	public function getX() {return ($this->_x);}
	public function getY() {return ($this->_y);}
	public function getZ() {return ($this->_z);}
	public function getW() {return ($this->_w);}

	public function __construct($vec)
	{

		if (array_key_exists('orig', $vec))
		{
			$orig = $vec['orig'];
		}
		else
		{
			$orig = new Vertex( array( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0, 'w' => 1.0));
		}
		if (array_key_exists('dest', $vec))
		{
			$dest = $vec['dest'];
		}
		$this->_x = $dest->getX() - $orig->getX();
		$this->_y = $dest->getY() - $orig->getY();
		$this->_z = $dest->getZ() - $orig->getZ();
		$this->_w = 0;
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
		$returnstr = sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )",$this->_x, $this->_y, $this->_z, $this->_w);
		return ($returnstr);
	}

	public static function doc(){
		if (file_exists("./Vector.doc.txt"))
		{
			$doc = file_get_contents("./Vector.doc.txt");
			echo $doc."\n";
		}
		else
			echo "Couldn't find a file\n";
	}

	public function magnitude(){
		return (sqrt(pow($this->_x, 2) + pow($this->_y, 2) + pow($this->_z, 2)));
	}

	public function normalize(){
		$mag = $this->magnitude();
		$new = new Vector( array('dest' => new Vertex( array( 'x' => $this->_x / $mag,
		'y' => $this->_y / $mag,
		'z' => $this->_z / $mag,
		'w' => $this->_w))));
		return ($new);
	}
	public function add($rhs){
		$new = new Vector( array('dest' => new Vertex( array('x' => $this->_x + $rhs->getX(),
		'y' => $this->_y + $rhs->getY(),
		'z' => $this->_z + $rhs->getZ(),
		'w' => $this->_w))));
		return ($new);

	}

	public function sub($rhs){
		$new = new Vector( array('dest' => new Vertex( array('x' => $this->_x - $rhs->getX(),
		'y' => $this->_y - $rhs->getY(),
		'z' => $this->_z - $rhs->getZ(),
		'w' => $this->_w))));
		return ($new);
	}

	public function opposite(){
		$new = new Vector( array('dest' => new Vertex( array('x' => $this->_x * -1,
		'y' => $this->_y * -1,
		'z' => $this->_z * -1,
		'w' => $this->_w))));
		return ($new);
	}

	public function scalarProduct($k){
		$new = new Vector( array('dest' => new Vertex( array('x' => $this->_x * $k,
		'y' => $this->_y * $k,
		'z' => $this->_z * $k,
		'w' => $this->_w))));
		return ($new);
	}

	public function dotProduct($rhs){
		$new = ($this->_x * $rhs->getX()) + ($this->_y * $rhs->getY()) + ($this->_z * $rhs->getZ());
		return ($new);
	}

	public function cos($rhs){
		$new = $this->dotProduct($rhs);
		return ($new / ($rhs->magnitude()) / ($this->magnitude()));
	}
	public function crossProduct($rhs){
		$x = ($this->_y * $rhs->getZ()) - ($this->_z * $rhs->getY());
		$y = ($this->_z * $rhs->getX()) - ($this->_x * $rhs->getZ());
		$z = ($this->_x * $rhs->getY()) - ($this->_y * $rhs->getX());
		$new = new Vector( array('dest' => new Vertex( array('x' => $x,'y' => $y,'z' => $z,'w' => 0))));
		return ($new);
	}
}
?>

