<?php
  
    $name = "Risma";
    $kkn = "Jawa Timur";
    $provinces = array(
        "Lampung",
        "Riau",
        "Jambi",
        "Bengkulu",
        "Makassar",
        "Kendari",
        "Gorontalo",
        "Samarinda",
        "Papua",
        "Nusa Tenggara Barat",
    );

    for ($i = 0; $i < strlen($name); $i++) {
        $isFound = false;
        foreach ($provinces as $province) {
            if (strtolower($name[$i]) == strtolower($province[$i])) {
                $kkn = $province;
                $isFound = true;
                break;
            }
        }

        if ($isFound) {
            break;
        }
    }

    echo "Anda ditempatkan di " . $kkn;

?>