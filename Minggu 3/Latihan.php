<?php 
class kalkulator {

	private $angka1;
	private $angka2;
	private $angka3;
	public $simpan = 0;

	public function setAngka1($x){
		$this->angka1 = $x;
	}
	public function setAngka2($x){
		$this->angka2 = $x;
	}
	public function setAngka3($x){
		$this->angka3 = $x;
	}

	public function getAngka1(){
		return $this->angka1;
	}
	public function getAngka2(){
		return $this->angka2;
	}
	public function getAngka3(){
		return $this->angka3;
	}

	public function tambah($x,$y){
		$hasil = $x + $y;
		return $hasil;
	}
	public function kurang($x,$y){
		$hasil = $x - $y;
		return $hasil;
	}
	public function kali($x,$y){
		$hasil = $x * $y;
		return $hasil;
	}
	public function bagi($x,$y){
		$hasil = $x / $y;
		return $hasil;
	}
}

$bil1 = new kalkulator();
$bil1 -> setAngka1(2);

$bil2 = new kalkulator();
$bil2 -> setAngka2(5);

$bil3 = new kalkulator();
$bil3 -> setAngka3(10);

$tempatSimpan = new kalkulator();
$tempatSimpan->simpan;

echo "<b>Kalkulator sederhana</b>";
echo "<br>";
echo "Bilangan 1 = " . $bil1->getAngka1();
echo "<br>";
echo "Bilangan 2 = " . $bil2->getAngka2();
echo "<br>";
echo "Bilangan 3 = " . $bil3->getAngka3();
echo "<br>";
echo "<br>";
echo "1. Penjumlahan bilangan 1 dan 2 : ";
echo $bil1->getAngka1() . " + ". $bil2->getAngka2() . " = " . $tempatSimpan->tambah($bil1->getAngka1(),$bil2->getAngka2());
echo "<br>";
echo "2. Pengurangan bilangan 3 dan 1 : ";
echo $bil3->getAngka3() . " - ". $bil1->getAngka1() . " = " . $tempatSimpan->kurang($bil3->getAngka3(),$bil1->getAngka1());
echo "<br>";
echo "3. Perkalian bilangan 2 dan 3 : ";
echo $bil2->getAngka2() . " * ". $bil3->getAngka3() . " = " . $tempatSimpan->kali($bil2->getAngka2(),$bil3->getAngka3());
echo "<br>";
echo "4. Pembagian bilangan 3 dan 1 : ";
echo $bil3->getAngka3() . " / ". $bil1->getAngka1() . " = " . $tempatSimpan->bagi($bil3->getAngka3(),$bil1->getAngka1());

 ?>