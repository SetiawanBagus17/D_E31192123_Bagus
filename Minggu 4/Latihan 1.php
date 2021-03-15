<?php 
class mobilLengkap{
	public function nontonTV(){
		return "menampilkan tv dihidupkan, tv mencari channel, tv menampilkan gambar";
	}
}

class mobilBMW extends mobilLengkap{

}

class MobilBMWberaksi {
    public function nontonTV(){
        return "Tv dihidupkan, Tv Mencari Chanel, Tv Menampilkan gambar";
    }

    public function HidupkanMobil(){
        return "Kunci diputar kedepan, Mesin melakukan starter, Mobil menyala";
    }

    public function MatikanMobil(){
        return "Kunci diputar kebelakang, Mesin mati, Mobil mati";
    }

    public function ubahGigi(){
        return "Koplik diinjak, Persneling diubah, Gigi mobil berganti";
    }
}


 ?>