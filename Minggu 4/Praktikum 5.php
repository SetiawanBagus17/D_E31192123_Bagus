<?php 
// The parent class has hello method that return "beep"
class Car {
	public function hello(){
		return "Beep";
	}
}

// THe child class has hello method that return "halo"
class SportsCar extends Car {
	public function hello(){
		return "Halo";
	}
}

// Create a new object
$sportscar1 = new SportsCar();

// Get the result of hello method
echo $sportscar1 -> hello();

 ?>