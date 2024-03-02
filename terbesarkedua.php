<?php
    function terbesarKedua($arr) {
        $terbesar = $arr[0];
        $terbesar2 = $arr[0];
        foreach($arr as $elemen) {
            if ($elemen > $terbesar) {
                $terbesar2 = $terbesar;
                $terbesar = $elemen;
            } elseif ($elemen > $terbesar2) {
                $terbesar2 = $elemen;
            }
        }
        return $terbesar2;
    }

    $nilai = array(1,3,2,6,5);
    echo terbesarKedua($nilai);
?>