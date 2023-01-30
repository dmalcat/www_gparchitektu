<?php

    date_default_timezone_set("Europe/Prague");
    
    // localhost environment
    $whitelist = array(
        '127.0.0.1',
        '::1'
    );

    // base path workaround for assets
    if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
        $assetsPath = './'; 
    } else {
        $assetsPath = '../'; 
    }


    $doc_root = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    $base_dir = __DIR__;
    $protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    $domain = $_SERVER['SERVER_NAME'];
    $base_url = preg_replace("!^${doc_root}!", '', $base_dir);
    $port = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
    $baseurl = "${protocol}://${domain}${disp_port}${base_url}";
//    echo $baseurl;
?>