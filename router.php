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

    elseif (preg_match('/grand-prix-architekt-1993/', $route)):
        require('gpa-detail-1993.php');
    
        elseif (preg_match('/grand-prix-architekt-1994/', $route)):
        require('gpa-detail-1994.php');
    
    elseif (preg_match('/grand-prix-architekt-1995/', $route)):
        require('gpa-detail-1995.php');

    elseif (preg_match('/grand-prix-architekt-1996/', $route)):
        require('gpa-detail-1996.php');

    elseif (preg_match('/grand-prix-architekt-1997/', $route)):
        require('gpa-detail-1997.php');
    
    elseif (preg_match('/grand-prix-architekt-1998/', $route)):
        require('gpa-detail-1998.php');

    elseif (preg_match('/grand-prix-architekt-1999/', $route)):
        require('gpa-detail-1999.php');
    
    elseif (preg_match('/grand-prix-architekt-2000/', $route)):
        require('gpa-detail-2000.php');

    elseif (preg_match('/grand-prix-architekt-2001/', $route)):
        require('gpa-detail-2001.php');

    elseif (preg_match('/grand-prix-architekt-2002/', $route)):
        require('gpa-detail-2002.php');

    elseif (preg_match('/grand-prix-architekt-2003/', $route)):
        require('gpa-detail-2003.php');

    elseif (preg_match('/grand-prix-architekt-2004/', $route)):
        require('gpa-detail-2004.php');

    elseif (preg_match('/grand-prix-architekt-2005/', $route)):
        require('gpa-detail-2005.php');

    elseif (preg_match('/grand-prix-architekt-2006/', $route)):
        require('gpa-detail-2006.php');

    elseif (preg_match('/grand-prix-architekt-2007/', $route)):
        require('gpa-detail-2007.php');

    elseif (preg_match('/grand-prix-architekt-2008/', $route)):
        require('gpa-detail-2008.php');

    elseif (preg_match('/grand-prix-architekt-2009/', $route)):
        require('gpa-detail-2009.php');

    elseif (preg_match('/grand-prix-architekt-2010/', $route)):
        require('gpa-detail-2010.php');

    elseif (preg_match('/grand-prix-architekt-2011/', $route)):
        require('gpa-detail-2011.php');

    elseif (preg_match('/grand-prix-architekt-2012/', $route)):
        require('gpa-detail-2012.php');

    elseif (preg_match('/grand-prix-architekt-2013/', $route)):
        require('gpa-detail-2013.php');

    elseif (preg_match('/grand-prix-architekt-2014/', $route)):
        require('gpa-detail-2014.php');

    elseif (preg_match('/grand-prix-architekt-2015/', $route)):
        require('gpa-detail-2015.php');
    
    elseif (preg_match('/grand-prix-architekt-2016/', $route)):
        require('gpa-detail-2016.php');
    
    elseif (preg_match('/grand-prix-architekt-2017/', $route)):
        require('gpa-detail-2017.php');
    
    elseif (preg_match('/grand-prix-architekt-2018/', $route)):
        require('gpa-detail-2018.php');
    
    elseif (preg_match('/grand-prix-architekt-2019/', $route)):
        require('gpa-detail-2019.php');
    
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

    elseif (preg_match('/galerie-2023-galavecer-fotokoutek/', $route)):
        require('./components/galleries/2023/fotokoutek.php');
    
    elseif (preg_match('/galerie-2023-festival/', $route)):
        require('./components/galleries/2023/festival.php');
    
    elseif (preg_match('/galerie-2023-galavecer/', $route)):
        require('./components/galleries/2023/galavecer.php');
    
    elseif (preg_match('/galerie-2023-prednaska-amandy-levete/', $route)):
        require('./components/galleries/2023/prednaska.php');

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

    elseif (preg_match('/ukonceni-prihlasek-2023/', $route)):
        require('./components/downloads/2023/ukonceni-prihlasek.php');
    
    elseif (preg_match('/shortlist-2023-pdf/', $route)):
        require('./components/downloads/2023/shortlist.php');
    
    elseif (preg_match('/vysledky-2023-pdf/', $route)):
        require('./components/downloads/2023/vysledky.php');


    endif;
?>    
    
