<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head> 
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kontakty | Grand Prix Architektů</title>

	<?php include('./components/head.php'); ?>
</head>

<body>

<?php include ('menu.php');?>

<section class="contact" id="contact">
	<div class="contact__wrapper wrapper">
		
		<h1>Kontakty</h1>

		<div class="contact__row">
			<div class="contact__col">
				<div class="contact__wrap">
					<span class="contact__block">
						<strong>Obec architektů z.s.</strong> <br>
						Betlémské náměstí 169/5a <br>
						110 00 Praha 1 <br>
						<a href="mailto:info@obecarchitektu.cz">info@obecarchitektu.cz</a>
					</span>

					<span class="contact__block">
						IČO: 00469513 <br>
						DIČ: nejsme plátci DPH <br>
						Č. ú. 1922253359/0800 <br>
						Datová schránka: 456ahj4
					</span>
				</div>

				<p class="contact__legal">
					Spolek vedený u Městského soudu v Praze, spisová značka L 607.
				</p>
			
		
				<div class="contact__wrap">
					<span class="contact__block">
						<strong>Obec architektů z.s.</strong> <br>
						Ing. arch. Oleg Haman <br>
						Předseda <br>
						tel: +420 603 877 788 <br>
					</span>

					<span class="contact__block">
						<strong>Grand Prix Architektů</strong> <br>
						Klára Vejrová <br>
						Koordinátorka GPA <br>
						tel: +420 604 304 440 <br>
					</span>
				</div>
			</div>
			
			<div class="contact__col">
				<iframe class="contact__map" style="border:none" src="https://frame.mapy.cz/s/hucaducuze" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</section>

<?php include('./components/partners/oa-partners.php'); ?>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>

</body>