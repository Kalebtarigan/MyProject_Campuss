<!--
Nama        : Kaleb Ari Suranta Tarigan
NIM         : 41425036
Prodi       : D-IV TRPL
 -->
 <?php
// Membuat abstract class bernama hunian
abstract class hunian {
    //mendeklarasikan atribut beserta modifiernya
    //Disini saya memakai protected karena saya telah mengetahui alurnya bahwa beberapa attribut ini akan diwariskan pada sub class nya yakni asrama dan studio sehingga menurut saya yang paling tepat ialah protected
    protected $kamar;        
    protected $kamar_mandi;  
    protected $taman;        

    //nilai awal suatu attribut 
    public function __construct($kamar, $kamar_mandi, $taman) {
        $this->kamar = $kamar;               
        $this->kamar_mandi = $kamar_mandi;   
        $this->taman = $taman;              
    }
    public function detailHunian() {
        $statusTaman = $this->taman ? "Memiliki taman" : "Tidak memiliki taman";

        return "Jumlah kamar: {$this->kamar}<br>
                Jumlah kamar mandi: {$this->kamar_mandi}<br>
                {$statusTaman}<br>";
    }
    
}
?>