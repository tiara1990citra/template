<?php 

    include "../koreksi.php";

    $jajan = "INSERT INTO penjualan(id_penjualan,id_buku,id_kasir,jumlah,total,tanggal) values(
    '" . $_POST['id_penjualan'] . "',   
    '" . $_POST['id_buku'] . "',   
    '" . $_POST['id_kasir'] . "',   
    '" . $_POST['jumlah'] . "',
    '" . $_POST['total'] . "',
    '" . $_POST['tanggal'] . "'
   )";
   
   $koneksi->query($jajan);

?>