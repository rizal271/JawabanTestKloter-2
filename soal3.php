<?php

    $value = 7;

    function cetak($value){
        for ($i=0; $i < $value; $i++){
            $cek_i = $i % 2;

            for ($j=0; $j < $value; $j++){
                $cek_j = $j % 2;
                if($cek_i == 0){
                    if($cek_j == 0){
                        echo "= *";
                    }else if($cek_j == 1){
                        echo "&nbsp;";
                    }
                }else if($cek_i == 1){
                    if($cek_j == 0){
                        echo "&nbsp;";
                    }else if($cek_j == 1){
                        echo "*";
                    }
                }    
                }
            echo '<br>';
            }
    }
    echo "--- panjang --- <br>";
    echo cetak($value);
?>