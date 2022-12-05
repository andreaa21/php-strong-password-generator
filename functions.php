<?php
if (isset($_GET['length'])) {
    $psw_length = $_GET['length'];
} else {
    $psw_length = null;
}


function getPassword($length)
{
    $chars = 'abcdefghijklmnopqrstuvxwyzABCDEFGHJKLMNOPQRSTUVXWYZ0123456789(!?&%$<>^+-*/()[]{}@#_=))';
    $psw = '';

    for ($i = 0; $i < $length; $i++) {

        $randomChar = rand(0, strlen($chars) - 1);
        $psw .= substr($chars, $randomChar, 1);
    }

    return $psw;
}
