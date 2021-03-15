<?php 
abstract class Car {
	// abstract class can have properties
	protected $tankVolume;

	// abstract classes can have non abstract method
	public function setTankVolume($volume){
		$this->tankVolume = $volume;
	}

	// abstract method
	abstract public function calcNumMilesOnFullTank();
}

 ?>