<?php 
class Circle implements Shape {
	private $radius;

	public function __construct($radius){
		$this -> radius = $radius;
	}

	// calculate area of the circles
	public function calcArea(){
		return $this -> radius * $this -> radius * pi();
	}
} 





 ?>