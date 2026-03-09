<!--
Nama        : Kaleb Ari Suranta Tarigan
NIM         : 41425036
Prodi       : D-IV TRPL
 -->
 
 <?php
// kelas studio merupakkan turunan  dari hunian 
//kelas studio menetapkan aktivitas didalam studio yang merupakan bagian dari hunian
class Studio extends Hunian implements Aktivitas {
    //Menetapkan nama studio , karena pasti unik maka saya memilih modifier private
    private $nama_studio; 

    // nilai awal variabel yang ada 
    public function __construct($nama_studio, $kamar, $kamar_mandi, $taman) {
        parent::__construct($kamar, $kamar_mandi, $taman); // memanggil constructor induk
        $this->nama_studio = $nama_studio;                  // mengisi nama studio
    }

    // method untuk meyimpan informasi studio
    public function infoHunian() {
        return "Studio dosen bernama {$this->nama_studio}<br>";
    }

    // aktivitas bangun tidur di studio
    public function bangunTidur() {
        return "Dosen bangun tidur di Studio<br>";
    }

    // aktivitas bersih-bersih di studio
    public function bersihBersih() {
        return "Dosen membersihkan Studio<br>";
    }

    // aktivitas mandi di studio
    public function mandi() {
        return "Dosen mandi di Studio<br>";
    }

    // aktivitas mencuci di studio
    public function mencuci() {
        return "Sosen mencuci pakaian di Studio<br>";
    }
}
?>