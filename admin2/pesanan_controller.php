<?php

include_once 'koneksi.php';
include_once 'models/Pesanan.php';


//step pertama yaitu menangkap request form
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];
$pelanggan_id = $_POST['pelanggan_id'];
$ket = $_POST['ket'];


//menangkapan form diatas dijadikan array
$data = [
    $tanggal,
    $total,
    $pelanggan_id,
    $ket,
   
];

$model = new Pesanan();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    case 'ubah':
        $data[] = $_POST['idx']; $model->ubah($data);break;
    default:
    header('Location:index.php?url=pesanan');
    break;
}
header('Location:index.php?url=pesanan');

?>