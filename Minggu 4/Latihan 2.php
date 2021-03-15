<?php 
abstract class itemProduk {
	private $nama, $ukuran, $warna ;

	abstract public function nama();
	abstract public function ukuran();
	abstract public function warna();
}

class topi extends itemProduk {
	public $model;
}

class celana extends itemProduk {
	public $tipe, $model;
}

class baju extends itemProduk {
	public $tipe;
}

 ?>