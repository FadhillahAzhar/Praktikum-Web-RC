<?php
    include "config.php";
    $sql=$kon->query("select * from mahasiswa where nim='".$_POST['nim']."'");
    $n=$sql->num_rows;
    if($n>0){
        $kon->query("UPDATE mahasiswa SET nama='".$_POST['nama']."',prodi='".$_POST['prodi']."',angkatan='".$_POST['angkatan']."' where nim='".$_POST['nim']."'");
    }
    
    
?>