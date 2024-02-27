<?php 

    include "../koreksi.php";

    $jajan = "INSERT INTO pasok(id_pasok,id_distributor,id_buku,jumlah,tanggal) values(
    '" . $_POST['id_pasok'] . "',   
    '" . $_POST['id_distribusi'] . "',   
    '" . $_POST['id_buku'] . "',   
    '" . $_POST['jumlah'] . "',
    '" . $_POST['tanggal'] . "'
   )";
   
   $koneksi->query($jajan);

?>