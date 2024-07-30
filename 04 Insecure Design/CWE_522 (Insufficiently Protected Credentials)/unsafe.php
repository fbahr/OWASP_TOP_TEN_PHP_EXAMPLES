<?php

$nonce = $_GET['nonce'] ?? '';
if ($nonce === "0917b13a9091915d54b6336f45909539cce452b3661b21f386418a257883b30a") {
        $credentials = json_decode(file_get_contents('credentials.json'), true);
        $user  = $_GET['user']  ?? '';
        $pass  = $_GET['pass']  ?? '';
        if ($user !== '' and $pass !== '') {
            $credentials[$user] = $pass;
            file_put_contents('credentials.json', json_encode($credentials));
            print("Password for $user set to $pass!");
        }
        else {
                print_r($credentials);
        }
}
