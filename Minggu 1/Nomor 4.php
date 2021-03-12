<?php 
class mahasiswa {
	public $nama;
	public $nim;
	public $program_studi;
	public $angkatan;
	public $ukt;

	public function setNama($x){
		$this->nama = $x;
	}

	public function setNim($x){
		$this->nim = $x;
	}

	public function setProgramstudi($x){
		$this->program_studi = $x;
	}

	public function setAngkatan($x){
		$this->angkatan = $x;
	}

	public function setUkt($x){
		$this->ukt = $x;
	}

	public function getNama(){
		return $this->nama;
	}

	public function getNim(){
		return $this->nim;
	}

	public function getProgramstudi(){
		return $this->program_studi;
	}

	public function getAngkatan(){
		return $this->angkatan;
	}

	public function getUkt(){
		return $this->ukt;
	}
}

$mahasiswa1 = new mahasiswa();
$mahasiswa1->setNama("Bagus Setiawan");
$mahasiswa1->setNim("E31192123");
$mahasiswa1->setProgramstudi("Manajemen Informatika");
$mahasiswa1->setAngkatan(2019);
$mahasiswa1->setUkt(3000000);

echo "Informasi Mahasiswa";
echo "<br>";
echo "Nama : ".$mahasiswa1->getNama();
echo "<br>";
echo "NIM : ".$mahasiswa1->getNim();
echo "<br>";
echo "Program Studi : ".$mahasiswa1->getProgramstudi();
echo "<br>";
echo "Angkatan : ".$mahasiswa1->getAngkatan();
echo "<br>";
echo "UKT : ".$mahasiswa1->getUkt();
echo "<br>";

 ?>