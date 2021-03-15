<?php 
class tablet {
	public $merk, $camera, $memory;

	public function setMerk($merk){
		$this->merk = $merk;
	}
	public function setCamera($camera){
		$this->camera = $camera;
	}
	public function setMemory($memory){
		$this->memory = $memory;
	}

	public function getMerk(){
		return $this->merk;
	}
	public function getCamera(){
		return $this->camera;
	}
	public function getMemory(){
		return $this->memory;
	}

}

class handphone extends tablet {

}

$handphone_baru = new handphone();
$handphone_baru->setMerk("Samsung");
$handphone_baru->setMemory("8 GB");
$handphone_baru->setCamera("64 MP");

echo $handphone_baru->getMerk();
echo "<br>";
echo $handphone_baru->getMemory();
echo "<br>";
echo $handphone_baru->getCamera();


 ?>