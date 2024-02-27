<?php 

    include "../koreksi.PHP";

    $jajan = "INSERT INTO kasir(id_kasir,nama,alamat,telepon,status,username,password,akses)values (
        '".$_POST['id_kasir']."',   
        '".$_POST['nama']."',        
        '".$_POST['alamat']."',      
        '".$_POST['telepon']."',     
        '".$_POST['status']."',      
        '".$_POST['username']."',    
        '".$_POST['password']."',    
        '".$_POST['akses']."' 
    )";

    $koneksi->query($jajan);
?>