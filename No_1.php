<?php

    $name = "Risma";
    $nameLength = strlen($name);

    if ($nameLength == date('d') - 2) {
        echo "Berhasil";
    }
    elseif ($nameLength == date('d') - 1) {
        echo "Sedikit Lagi";
    }
    else {
        echo "Coba Lagi";
    }
    
?>