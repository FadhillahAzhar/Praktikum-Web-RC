<?php
    include "config.php";
    $sql=$kon->query("select * from mahasiswa where nim='".$_POST['nim']."'");
    $kon->query("INSERT INTO mahasiswa(nim,nama,prodi,angkatan) VALUES('".$_POST['nim']."','".$_POST['nama']."','".$_POST['prodi']."','".$_POST['angkatan']."')");
    
?>