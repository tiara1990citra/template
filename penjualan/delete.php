<?php

    include '../koreksi.php';

    $sql = 'DELETE FROM penjualan WHERE id_penjualan=' .$_GET['id'];

    $koneksi->query($sql);
    header('locatiaon:tabelpenjualan.php');

?>