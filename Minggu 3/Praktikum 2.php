<?php 
class car {
	// public methods & properties
	private $model;

	public function getModel(){
		return "The car model is " . $this -> model;
	}
}

$mercedes = new car();
// akses property dari dalam class
$mercedes -> model = "Mercedes Benz";
// akses property dari luar class
echo $mercedes -> getModel();

 ?>