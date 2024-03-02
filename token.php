<?php
    $tokens = array();

    function randomString() {
        $characters = "abcdefghjiklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $character_length = strlen($characters);
        $random_string = "";
        for ($i = 0 ; $i < 10; $i ++) {
            $random_string .= $characters[random_int(0, $character_length - 1)];
        }
        return $random_string;
    }

    function generate($user){
        global $tokens;
        $token = randomString();
        if (isset($tokens[$user])) {
            if (count($tokens[$user]) == 10) {
                array_shift($tokens[$user]);
            }
            array_push($tokens[$user], $token);
        } else {
            $tokens[$user] = array($token);
        }
        return $token;
    }
    function verify_token($user, $token) {
        global $tokens;
        if (isset($tokens[$user]) && in_array($token, $tokens[$user])) {
            $index = array_search($token, $tokens[$user]);
            unset($tokens[$user][$index]);
            return true;
        } else {
            return false;
        }
    }

    for ($i = 0;$i < 11;$i++) {
        $token = generate('kevin');
        echo "Token ke-$i : $token\n";
    }

    // $token = $tokens['kevin'][3];
    $token = 'asdasdsas';
    if (verify_token('kevin', $token)) {
        echo "Verified!";
    } else {
        echo "Tidak Verified!";
    }
?>