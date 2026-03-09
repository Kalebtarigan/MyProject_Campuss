<!--
Nama        : Kaleb Ari Suranta Tarigan
NIM         : 41425036
Prodi       : D-IV TRPL
 -->

<?php
// class asrama sebagai turunan dari hunian dan mengimplementasikan aktivitas
class asrama extends hunian implements aktivitas {
    //Menetapkan variabel nama dan pembina asrama serta menggunakan moddifier karena unik dan hanya dimiliki oleh class asrama
    private $dorm_name;      
    private $pembina_asrama;   

    //nilai awal variabel
    public function __construct($dorm_name, $pembina_asrama, $kamar, $kamar_mandi, $taman) {
        parent::__construct($kamar, $kamar_mandi, $taman); // memanggil variabel attribut pada kelas induk
        $this->dorm_name = $dorm_name;                     
        $this->pembina_asrama = $pembina_asrama;            
    }

    // aktivitas menampilkan informasi hunian
    public function infoHunian() {
        return "Asrama {$this->dorm_name} dipimpin oleh {$this->pembina_asrama}<br>";
    }
    ggghgvhgvhgvh

    // aktivitas bangun tidur
    public function bangunTidur() {
        return "Mahasiswa dan dosen bangun tidur di asrama<br>";
    }

    // aktivitas bersih- bersih di asrama
    public function bersihBersih() {
        return "Mahasiswa dan dosen membersihkan kamar asrama<br>";
    }

    // aktivitas mandi di asrama
    public function mandi() {
        return "Mahasiswa dan dosen dapat mandi di kamar mandi asrama<br>";
    }

    //  aktivitas mencuci di asrama
    public function mencuci() {
        return "Mahasiswa dan dosen dapat mencuci pakaian di asrama<br>";
    }
}
?>