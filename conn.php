<?php

if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    $servername = "localhost";
    $username = "root";
    $password = 'david';
    $dbname = "obecarchit";
} else {
    $servername = "uvdb55.active24.cz";
    $username = "obecarchit";
    $password = 'jjOFS45uSK';
    $dbname = "obecarchit";
}

var_dump($servername);

?>