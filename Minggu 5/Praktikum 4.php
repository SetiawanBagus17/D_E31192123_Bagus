<?php 
include("Praktikum 2.php");
include("Praktikum 3.php");

class Rectangle implements Shape {
	private $width;
	private $height;

	public function __construct($width,$height){
		$this -> width = $width;
		$this -> height = $height;
	}

	// calculate the area of rectangle
	public function calcArea() {
		return $this -> width * $this -> height ;
	}
}

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo $circ -> calcArea();
echo "<br>";
echo $rect -> calcArea();

 ?>