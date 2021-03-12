<?php 
class kendaraan {
	public $jenis_kendaraan;
	public $jumlah_roda;
	public $merk;
	public $bahan_bakar;
	public $harga;
	public $tahun_pembuatan;

	public function subsidi($bahan_bakar,$tahun_pembuatan){
		if ($bahan_bakar == "Premium" && $tahun_pembuatan < "2005") {
			return "Mendapat Subsidi";
		} else {
			return "Tidak Mendapat Subsidi";
		}
	}
}

$beat = new kendaraan();
$beat -> bahan_bakar = "Premium";
$beat -> tahun_pembuatan = "2010";

echo $beat -> bahan_bakar;
echo "<br>";
echo $beat -> tahun_pembuatan;
echo "<br>";
echo $beat -> subsidi($beat -> bahan_bakar, $beat -> tahun_pembuatan);

 ?>