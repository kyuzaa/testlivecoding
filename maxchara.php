<?php
    function getMax($kata) {
        $karakterBerurutan = "";
        $frekuensiBerurutan = 0;

        $karakterSekarang = "";
        $frekuensiSekarang = 0;

        for($i = 0; $i < strlen($kata);$i++) {
            $karakter = $kata[$i];
            if ($karakter == $karakterSekarang) {
                $frekuensiSekarang++;
            } else {
                if ($frekuensiSekarang > $frekuensiBerurutan) {
                    $karakterBerurutan = $karakterSekarang;
                    $frekuensiBerurutan = $frekuensiSekarang;
                }
                $karakterSekarang = $karakter;
                $frekuensiSekarang = 1;
            }
        }
        if ($frekuensiSekarang > $frekuensiBerurutan) {
            $karakterBerurutan = $karakterSekarang;
            $frekuensiBerurutan = $frekuensiSekarang;
        }

        echo $karakterBerurutan . " " . $frekuensiBerurutan . "x";
    }

    getMax("Wellcome");
?>