<?php

    function randomString() {
        $characters = "abcdefghjiklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $character_length = strlen($characters);
        $random_string = "";
        for ($i = 0 ; $i < 10; $i ++) {
            $random_string .= $characters[random_int(0, $character_length - 1)];
        }
        return $random_string;
    }

    function randomInt() {
        $characters = "abcdefghjiklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $character_length = strlen($characters);
        $random_string = "";
        for ($i = 0 ; $i < 10; $i ++) {
            $random_string .= $characters[random_int(0, $character_length - 1)];
        }
        return $random_string;
    }

    class Siswa {
        public $nrp;
        public $nama;
        public $daftarNilai;

        public function __construct($nrp, $nama, $daftarNilai)
        {
            $this->nrp = $nrp;
            $this->nama = $nama;
            $this->daftarNilai = $daftarNilai;    
        }
    }
    class Nilai {
        public $mapel;
        public $nilai;

        public function __construct($mapel, $nilai)
        {
            $this->mapel = $mapel;
            $this->nilai = $nilai;
        }
    }

    $siswaBaru = new Siswa('48414', 'kevin',array());
    $siswaBaru->daftarNilai[] = new Nilai('Inggris', 100);;

    $siswa_random = array();
    $mapel = array("Inggris", "Indonesia", "Jepang");

    for ($i = 0; $i < 10;$i++) {
        $nrp = randomInt();
        $nama = randomString();
        $daftarNilai = array();

        for($j = 0; $j < 3;$j++) {
            $mapelRandom = $mapel[array_rand($mapel)];
            $nilaiRandom = rand(0, 100);
            $nilai = new Nilai($mapelRandom, $nilaiRandom);
            $daftarNilai[] = $nilai;
        }
        $siswa = new Siswa($nrp, $nama, $daftarNilai);
        $siswa_random[] = $siswa;
    }

    echo print_r($siswa_random);
?>