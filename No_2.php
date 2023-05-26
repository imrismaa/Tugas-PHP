<?php
  
    $member = array (
        array ("nama" => "Risma Saputri", "NIM" => "21835"),
        array ("nama" => "Amanda Farliana Setyasari", "NIM" => "21836"),
        array ("nama" => "Aminah Nurul Huda", "NIM" => "21837"),
        array ("nama" => "Salwa Jasmine A'aliyah", "NIM" => "21838"),
        array ("nama" => "Nita Putri Naila", "NIM" => "21839"),
    );

    foreach ($member as $data) {
        $name = $data["nama"];
        $nim = $data["NIM"];

        if ($nim % 2 == 0) {
            echo $name  . " <i>as back-end developer.</i><br>";
        }
        else {
            echo $name  . " <i>as front-end developer.</i><br>";
        }
    }

?>