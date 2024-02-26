<?php 

    $koneksi = new mysqli("localhost","root","","toko_buku");

    if($koneksi -> connect_error){
        die("connection failed".$koneksi->connect_error);
    }
    
?>