<?php 
// the parent class
class Car {
	// private property inside the class
	private $model;

	// public setter method
	public function setModel($model){
		$this->model = $model;
	}

	public function hello(){
		return "Beep I am a <i>" . $this->model . "</i><br />";
	}
} 

class SportsCar extends Car {
	// No code in child class
}

// Create an instances from child class 
$sportscar1 = new SportsCar();

// Set value of class property
// For the aim we use a method that we created in the parent
$sportscar1 -> setModel('Mercedes Benz');

// Use another method that the child class inherited from the parent class
echo $sportscar1 -> hello();


 ?>