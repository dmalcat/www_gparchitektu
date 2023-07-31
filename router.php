<?php
//hezké URL - funkčnost zajišťuje .htaccess

$route = str_replace(str_replace("/router.php", "", $_SERVER['PHP_SELF']), "", $_SERVER['REQUEST_URI']);

    if (preg_match('/o-nas/', $route)):
    require('o-nas.php');      
    
    
    elseif (preg_match('/novinky/', $route)):
    require('novinky.php');   
    
    //detail novinky
    elseif (preg_match('/novinka/', $route)):
    require('novinka.php');
    
    //detail spolupráce
    elseif (preg_match('/spoluprace/', $route)):
    require('spoluprace.php');

    elseif (preg_match('/grand-prix-architektu/', $route)):
        require('gpa.php');

    elseif (preg_match('/grand-prix-architekt-2020/', $route)):
        require('gpa-detail-2020.php');
    
        elseif (preg_match('/grand-prix-architekt-2021/', $route)):
        require('gpa-detail-2021.php');

    elseif (preg_match('/grand-prix-architekt-2022/', $route)):
        require('gpa-detail-2022.php');
    
    elseif (preg_match('/grand-prix-architekt-2023/', $route)):
        require('gpa-detail-2023.php');
       
    elseif (preg_match('/grand-prix-festival/', $route)): 
        require('grand-prix-festival.php');  
    
    elseif (preg_match('/clenstvi/', $route)): 
        require('clenstvi.php');
    
    elseif (preg_match('/partnerstvi/', $route)): 
        require('partnerstvi.php');

    elseif (preg_match('/uia/', $route)):
        require('./uia.php');
    
    elseif (preg_match('/kontakty/', $route)):
        require('./kontakty.php');
    
    elseif (preg_match('/celozivotni-ceny/', $route)):
        require('./celozivotni-ceny.php');
    
    elseif (preg_match('/styleguide/', $route)):
        require('./styleguide.php');

    elseif (preg_match('/galerie-galavacer-predavani/', $route)):
        require('./components/galleries/galavecer.php');

    elseif (preg_match('/galerie-galavacer-neformalni/', $route)):
        require('./components/galleries/neformalni.php');

    elseif (preg_match('/galerie-porota/', $route)):
        require('./components/galleries/porota.php');

    elseif (preg_match('/galerie-vernisaz/', $route)):
        require('./components/galleries/vernisaz.php');

    elseif (preg_match('/galerie-video/', $route)):
        require('./components/galleries/video.php');

    elseif (preg_match('/galerie-galavacer-2022/', $route)):
        require('./components/galleries/2022/galavecer.php');

    elseif (preg_match('/galerie-festival-2022/', $route)):
        require('./components/galleries/2022/festival.php');
    
    elseif (preg_match('/galerie-galavecer-2022-joze-plecinka-spanelsky-sal/', $route)):
            require('./components/galleries/2022/joze-plecinka-spanelsky-sal.php');
    
    elseif (preg_match('/galerie-2022-manes-tiskova-konference/', $route)):
        require('./components/galleries/2022/manes-konference.php');

    elseif (preg_match('/galerie-2022-krest-alfabet/', $route)):
        require('./components/galleries/2022/krest-alfabet.php');

    elseif (preg_match('/galerie-2022-predavani-cen-joze-plecinka-s-prezidentem/', $route)):
        require('./components/galleries/2022/joze-plecinka-prezident.php');
    
    elseif (preg_match('/galerie-2022-robert-konieczny-prednaska/', $route)):
        require('./components/galleries/2022/robert-konieczny-prednaska.php');

    elseif (preg_match('/galerie-2022-porota-v-praze/', $route)):
        require('./components/galleries/2022/porota.php');

    // PDFs
    elseif (preg_match('/katalog-pdf/', $route)):
        require('./components/downloads/catalog-pdf.php');

    elseif (preg_match('/vysledky-pdf/', $route)):
        require('./components/downloads/vysledky-pdf.php');

    elseif (preg_match('/shortlist-pdf/', $route)):
        require('./components/downloads/shortlist-pdf.php');

    elseif (preg_match('/projekty-pdf/', $route)):
        require('./components/downloads/projekty-pdf.php');

    elseif (preg_match('/vyhlaseni-rocniku-2022/', $route)):
        require('./components/downloads/2022/vyhlaseni-rocniku.php');

    elseif (preg_match('/prodlouzeni-terminu-prihlaseni-do-souteze-2022/', $route)):
        require('./components/downloads/2022/prodlouzeni-terminu-prihlaseni-do-souteze.php');

    elseif (preg_match('/shortlist-2022-pdf/', $route)):
        require('./components/downloads/2022/shortlist.php');

    elseif (preg_match('/vysledky-2022-pdf/', $route)):
        require('./components/downloads/2022/vysledky-pdf.php');
    
    elseif (preg_match('/prodlouzeni-terminu-prihlaseni-2023/', $route)):
        require('./components/downloads/2023/vyhlaseni-rocniku.php');


    endif;
?>    
    
