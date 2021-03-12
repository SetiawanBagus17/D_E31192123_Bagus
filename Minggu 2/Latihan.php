<?php 
class laptop {
	public $pemilik;
	public $merk;

	public function setPemilik($p){
		$this->pemilik = $p;
	}
	public function setMerk($m){
		$this->merk = $m;
	}

	public function hidupkanLaptop(){
		return "Hidupkan Laptop " . $this->merk . " milik " . $this->pemilik;
	}
	public function matikanLaptop(){
		return "Matikan Laptop " . $this->merk . " milik " . $this->pemilik;
	}
	public function restartlaptop(){
		return "Matikan Laptop " . $this->merk . " milik " . $this->pemilik . ". " . "Hidupkan Laptop " . $this->merk . " milik " . $this->pemilik;	
	}
}

$laptop1 = new laptop();
$laptop1 -> setPemilik("A");
$laptop1 -> setMerk("Asus");

$laptop2 = new laptop();
$laptop2 -> setPemilik("B");
$laptop2 -> setMerk("Acer");

$laptop3 = new laptop();
$laptop3 -> setPemilik("C");
$laptop3 -> setMerk("Lenovo");

echo $laptop1 -> hidupkanLaptop();
echo "<br>";
echo $laptop2 -> matikanLaptop();
echo "<br>";
echo $laptop3 -> restartlaptop(); 

 ?>