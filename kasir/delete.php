<?php

    include '../koreksi.php';

    $sql = 'DELETE FROM kasir WHERE id_kasir=' .$_GET['id'];

    $koneksi->query($sql);
    header('locatiaon:tabelpenjualan.php');

?>