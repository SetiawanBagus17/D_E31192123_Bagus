<?php 
// Parent class
class Car {
	// $model property is private, thus it can be accessed
	// only from inside the class  
	private $model;

	// public setter method
	public function setModel($model){
		$this->model = $model;
	}
} 

// The child class
class SportsCar extends Car {
	// tries to get the private property that belong to the parent class
	public function hello(){
		return "Beep I am a <i>" . $this->model . "</i><br />";
	}
}

// Create an instances from child class 
$sportscar1 = new SportsCar();
// Set value of class property
$sportscar1 -> setModel('Mercedes Benz');



 ?>