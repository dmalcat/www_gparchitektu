<?php 
    
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
?>