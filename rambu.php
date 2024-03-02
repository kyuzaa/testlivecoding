<?php
    $warna = array("Merah", "Kuning", "Hijau");
    $indeks = 0;

    function lampu() {
        global $warna, $indeks;
        $getWarna = $warna[$indeks];
        $indeks = ($indeks+1) % 3;
        return $getWarna;
    }

    for ($i = 0;$i < 5; $i ++) {
        echo lampu() . "\n";
    }
?>