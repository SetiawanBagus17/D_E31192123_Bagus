<?php 
class kendaraan {
	public $jenis_kendaraan;
	public $jumlah_roda;
	public $merk;
	public $bahan_bakar;
	public $harga;
	public $tahun_pembuatan;

	public function hargaSecond(){
		$harga = $this->harga;
		if ($this->tahun_pembuatan > "2010") {
			$harga = $harga * 0.8;
			return $harga;
		}
	}
}

$beat = new kendaraan();
$beat -> tahun_pembuatan = "2012";
$beat -> harga = 100000;

echo $beat -> hargaSecond();


 ?>