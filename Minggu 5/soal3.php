<?php
    function prima ($n){
        for($x=2;$x<$n;$x++){
           if($n%$x==0){
                return 0;
            }
        }
       return 1;
    }

    echo "BILANGAN PRIMA PADA ANGKA 1 - 50 ADALAH: <br> <br>";

    for($i=2;$i<=50;$i++){
        $a=prima($i);
        if($a==1){
            echo "{$i} ";
        }
    }

    
 ?>