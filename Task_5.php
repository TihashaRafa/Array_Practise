<?php

function generatePassword($length) {
    $chars = 'TiashaRafa!*&()@#$123457893';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[random_int(0, strlen($chars) - 1)];
    }
    return $password;
}

$password = generatePassword(12);
echo $password;

// output
// i9f)T&&13@*2
