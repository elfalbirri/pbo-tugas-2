<?php
class Komik {
    public $judul = "judul", 
    $pengarang = "pengarang", 
    $tahun = "tahun", 
    $deskripsi = "deskripsi", 
    $beli = "beli",
    $jual = "jual";

    public function __construct($judul, $pengarang, $tahun, $deskripsi, $beli, $jual)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahun = $tahun;
        $this->deskripsi = $deskripsi;
        $this->beli = $beli;
        $this->jual = $jual;
    }

    public function getLabel(){
        return"$this->judul, $this->pengarang, $this->tahun, $this->deskripsi, $this->beli, $this->jual";
    }


}

$komik1 = new Komik("Dear J", "L Lullaby", "2018", "Novel Fanfiction yang menceritakan tentang kehidupan cinta seorang lelaki bisu", 125000, 100000);
$komik2 = new Komik("Werevamp", "Pinkishdelight", "2018", "Novel Fanfiction bergenre fantasi yang menceritakan tentang seorang vampire yang ingin menjadi manusia", 69000, 552000);
$komik3 = new Komik("Bukan Dylan", "Naya A", "2018", "Novel Fanfiction bergenre romance yang menceritakan tentang kisah cinta SMA", 55000, 44000);


echo "Novel 1 : " . $komik1->getLabel();
echo "<br>";
echo "Novel 2 : " . $komik2->getLabel();
echo "<br>";
echo "Novel 3 : " . $komik3->getLabel();


