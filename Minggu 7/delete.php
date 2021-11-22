<?php
    include "config.php";
    $sql=("DELETE FROM mahasiswa WHERE nim='$_GET[nim]'");
    mysqli_query($kon,$sql);
?>