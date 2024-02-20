<?php 

include 'koreksi.php';
$sql ='delete from toko_buku where alamat='.$_GET['alamat'];
$koneksi->query($sql);
header('locatiaon:tabel.php');
?>