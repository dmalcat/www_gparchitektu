<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head> 
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Členství | Grand Prix Architektů</title>

	<?php include('./components/head.php'); ?>
</head>
<body>

<!-- Menu -->    
<?php include ('menu.php');?> 

<section class="about">
    <div class="about__wrapper wrapper">
		<div class="about__row">
			<div class="about__col about__col--copy">
                <h1>Staňte se&nbsp;členem Obce Architektů</h1>
                    
                <p>Členem Obce se&nbsp;může st&aacute;t každ&aacute; fyzick&aacute; osoba, kter&aacute; souhlas&iacute; s&nbsp;posl&aacute;n&iacute;m a&nbsp;&uacute;koly Obce a&nbsp;zav&aacute;že se&nbsp;dodržovat Stanovy Obce architektů, bez ohledu na&nbsp;politickou, uměleckou nebo filosofickou orientaci a&nbsp;na&nbsp;občansk&eacute; nebo v&yacute;tvarn&eacute; n&aacute;zory. Podm&iacute;nkou členstv&iacute; v&nbsp;Obci jsou t&eacute;ž zaplacen&eacute; člensk&eacute; př&iacute;spěvky.</p>
                <p>Jsou rozli&scaron;ov&aacute;ny dvě kategorie členstv&iacute; v&nbsp;Obci:</p>
                <p>a)<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>ř&aacute;dn&eacute; členstv&iacute;</p>
                <p>b)<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>čestn&eacute; členstv&iacute;</p>
                <p>Čestným členem Obce se&nbsp;může stát ten, kdo se&nbsp;mimořádně zasloužil o&nbsp;architekturu, urbanismus či&nbsp;příbuzné obory. Čestné členství uděluje Rada Obce. Každoročně se&nbsp;členi poroty Grand Prix Architektů stávají čestnými členy Obce.</p>
            </div>

            <div class="about__col about__col--img">
				<img class="about__img" src="../assets/images/partners/oa-uiamember.jpeg" alt="">
			</div>
        </div>
    </div>
</section>

<section class="article">
    <div class="article__wrapper wrapper">
        <h2 class="text-center">Registrační formulář</h2>
        
        <form class="form" action="../odeslat_form.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                <label>Jméno</label>
                    <input type="text" class="form-control" name="jmeno" placeholder="Jméno">
                    <br>
                </div>
                
                <div class="col-md-6">
                <label>Příjmení</label>
                    <input type="text" class="form-control" name="prijmeni" placeholder="Příjmení">
                    <br>
                </div>
                
                <div class="col-md-6">
                <label>Datum narození</label>
                    <input type="text" class="form-control" name="datum_nar" placeholder="Datum narození">
                    <br>
                </div>
                
                <div class="col-md-6">
                <label>Telefon</label>
                    <input type="text" class="form-control" name="phone" placeholder="Telefon">
                    <br>
                </div>
                
                <div class="col-md-6">
                <label>E-mail</label>
                    <input type="email" class="form-control" name="mail" placeholder="E-mail">
                    <br>
                </div>
                
                <div class="col-md-6">
                <label>Národnost</label>
                    <input type="text" class="form-control" name="narodnost" placeholder="Národnost">
                    <br>
                </div>
                
                <div class="col-md-6">
                <label>Profese</label>
                    <input type="text" class="form-control" name="profese" placeholder="Profese">
                    <br>
                </div>
                
                <div class="col-md-6">
                <label>Webové stránky</label>
                    <input type="text" class="form-control" name="web" placeholder="webové stránky">
                    <br>
                </div>
                
                <div class="form__row form__row--button">
                    <button class="form__button button button--black">Odeslat</button>
                </div>
                
            </div>
        </form>
    </div>
</section>

<section id="footer" class="footer">
    <?php include('footer.php'); ?>
</section>

    

    