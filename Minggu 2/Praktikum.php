<?php 
class car {
	// properties
	public $comp;
	public $color;
	public $hasSunRoof = true;

	// method = hello
	public function hello(){
		return "Beep I am a <i>".$this->comp."</i>, and I am <i>".$this->color; 
	}
} 

// Create Object di class
$bmw = new car();
$mercedes = new car();

// Set value dari class properties
$bmw->color = "Blue";
$bmw->comp = "BMW";
$mercedes->comp = "Mercedes Benz";

//call hello method untuk $bmw object
echo $bmw->hello();


 ?>