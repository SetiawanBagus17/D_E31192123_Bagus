<?php 
class car {
	
	public $tank;
	
	// Add gallon of fuel to the tank when we fill it
	public function fill($float){
		$this->tank += $float;
		
		return $this;
	}

	// Substract gallons of fuel from the tank as we ride the car
	public function ride ($float){
		$miles = $float;
		$gallons = $miles / 50;
		$this->tank -= ($gallons);

		return $this;
	}
}

// Create new object from car class
$bmw = new car();

// Add 10 gallons of fuels, then ride 40 miles
// and get the number of gallon in the tank
$tank = $bmw -> fill(10) -> ride(40) -> tank;

// printout
echo "The number of gallon left in the tank : " . $tank . " gal.";

 ?>