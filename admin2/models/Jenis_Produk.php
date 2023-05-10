<?php

class JenisProduk {
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function JenisProduk(){
        $sql = "SELECT * FROM jenis_produk";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function ubah($data){
        $sql = "UPDATE jenis_produk SET nama=?, ket=?
        WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    
    public function hapus($id){
        $sql = "DELETE FROM jenis_produk WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
    

}



?>