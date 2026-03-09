<!--
Nama        : Kaleb Ari Suranta Tarigan
NIM         : 41425036
Prodi       : D-IV TRPL
 -->

<?php 

class Mahasiswa { //Membuat kelas Mahasiswa 
    //Membuat modifier dan attribut 
    private $nim;
    public $nama;
    public $tanggal_lahir;
    public $jeniskelamin;
    public $prodi;
    public $matkul;
    public $email;
    private $ipk;

    //Variabel awal dari nilai attribut
    public function __construct($nim, $nama, $tanggal_lahir, $jeniskelamin, $prodi, $matkul, $email){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tanggal_lahir;
        $this->jeniskelamin = $jeniskelamin;
        $this->prodi = $prodi;
        $this->matkul = $matkul;
        $this->email = $email;
        //Nilai awal untuk ipk adalah nol
        $this->ipk = 0;
    }

    //Mengambil data IPK
    public function getIpk(){
        //mengembalikan nilai ipk
        return $this->ipk;
    }

    //Membuat Ipk dapat berubah
    public function setIpk($ipk){
        //Nilai Ipk nantinya akan berubah dengan nilai pada variabel ipk
        $this->ipk = $ipk;
    }
}

//Membuat kelas dosen
class Dosen {
    //Membuat method untuk dosen yakni mampu mengubah ipk(meningkatkan dan menurunkan nilai ipk siswa)
    public function ubahIpk(Mahasiswa $mhs, $ipk){
        //memanggil nilai ipk yang ada pada variabel mahasiswa
        $mhs->setIpk($ipk);
    }
}
//Mendeklarasikan variabel baru untuk menggantikan data kelas mahasiswa
$mhs = new Mahasiswa(
    "41425036",
    "Kaleb Ari Suranta Tarigan",
    "2004-01-01",
    "Laki-laki",
    "D-IV TRPL",
    "OOP",
    "kalebtarigan@email.com"
);
//membuat variabel dosen untuk menggantikan kelas dosen/ memuat data dosen 
$dosen = new Dosen();

//variabel dosen mengubah nilai ipk mahasiswa dimana diambil mahasiswa dan ditetapkan nilainya
$dosen->ubahIpk($mhs, 3.5);

//Menampilkan output ke user
echo "<h2>Relasi Mahasiswa dan Dosen</h2>";
//Memanggil nama dari variabel mhs
echo "Nama: " . $mhs->nama . "<br>";
echo "IPK sebelumnya : 3,3<br>";
//dosen mengambil ipk yang ada pada mahasiswa setelah diganti pada line 62
echo "IPK setelah dinaikkan oleh dosen: " . $mhs->getIpk();

?>