<!--
Nama        : Kaleb Ari Suranta Tarigan
NIM         : 41425036
Prodi       : D-IV TRPL
 -->
 
 <?php
// memanggil semua file yang akan ditampilkan
require_once "mahasiswa_dosen.php";
require_once "aktivitas.php";
require_once "hunian.php";
require_once "asrama.php";
require_once "studio.php";


// Membuat variabel asrama yang memuat kelas asrama beserta data kelasnya
$asrama = new Asrama(
    "Louis Pasteur",
    "Pak Yakob",
    2,
    1,
    true
);

// membuat variabel studio yang memuat kelas studio beserta data studio
$studio = new Studio(
    "Studio Dosen IT Del",
    1,
    1,
    false
);

//Menampilkan Informasi Hunian dan aktivitas
echo "<h2>Informasi Hunian dan Aktivitas</h2>";

//membuatnya dalam bentuk unlist/point list
echo "<ul>";
//Memanggi  data satu persatu dari file lainnya
echo "<li>" . $asrama->infoHunian() . "</li>";
echo "<li>" . $asrama->bangunTidur() . "</li>";
echo "<li>" . $asrama->bersihBersih() . "</li>";
echo "<li>" . $asrama->mandi() . "</li>";
echo "<li>" . $asrama->mencuci() . "</li>";
echo "<li>" . $asrama->detailHunian() . "</li>";
echo "</ul>";

echo "<h2>Studio Dosen</h2>";
echo "<ul>";
echo "<li>" . $studio->infoHunian() . "</li>";
echo "<li>" . $studio->bangunTidur() . "</li>";
echo "<li>" . $studio->bersihBersih() . "</li>";
echo "<li>" . $studio->mencuci() . "</li>";
echo "<li>" . $studio->detailHunian() . "</li>";
echo "</ul>";
?>
