<?php

    function tambah($x,$y){
        $total=$x+$y;
        echo $total;
    }

    function kurang($x,$y){
        $total=$x-$y;
        echo $total;
    }

    function kali($x,$y){
        $total=$x*$y;
        echo $total;
    }

    function bagi($x,$y){
        $total=$x/$y;
        echo $total;
    }

    function modulo($x,$y){
        $total=$x%$y;
        echo $total;
    }

    $a=10;
    $b=5;

    echo "Bilangan 1 = {$a}";
    echo "<br><br> Bilangan 2 = {$b}";

    echo "<br><br>PENJUMLAHAN";
    echo "<br> Operator: +";
    echo "<br>Hasil: ";
    tambah($a,$b);

    echo "<br><br>PENGURANGAN";
    echo "<br> Operator: -";
    echo "<br>Hasil: ";
    kurang($a,$b);

    echo "<br><br>PERKALIAN";
    echo "<br> Operator: *";
    echo "<br>Hasil: ";
    kali($a,$b);

    echo "<br><br>PEMBAGIAN";
    echo "<br> Operator: /";
    echo "<br>Hasil: ";
    bagi($a,$b);

    echo "<br><br>MODULUS";
    echo "<br> Operator: %";
    echo "<br>Hasil: ";
    modulo($a,$b);
?>