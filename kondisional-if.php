<?php
    $suhu=36.7;

    if($suhu > 38){
        echo " kamu tidak boleh masuk";
    } else if($suhu == 38){
        echo "kamu hati-hati";
    } 
    else{
        echo "kamu boleh masuk";
    }