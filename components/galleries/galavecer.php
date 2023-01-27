<?php include ('config.php');?>

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Titulek -->
	<title>Obec architektů</title>

	<?php include('./components/head/styles.php'); ?>
	<?php include('./components/head/scripts.php'); ?>
<body>
<!-- Menu -->
<?php include ('menu.php');?>

<section class="gallery gallery--full" id="gallery">
	<div class="gallery__wrapper wrapper">
		<h1>
			Galavečer 2021 - slavnostní předávání
		</h1>
		
		<a href="/grand-prix-architekt-2021/" class="gallery__back">< Zpět na detail ročníku</a>
		
		<div class="gallery__row">
			<?php for($counter=0; $counter<64; $counter++) :?>
				<a href="../assets/images/gallery/predavani/full/predavani<?=$counter?>.jpg" class="gallery__item">
					<img class="gallery__item" src="../assets/images/gallery/predavani/thumb/predavani<?=$counter?>.jpg" alt="">
				</a>
			<?php endfor;?>
		</div>

		<a href="/grand-prix-architekt-2021/" class="gallery__back">< Zpět na detail ročníku</a>
	</div>
</section>

<script>
	baguetteBox.run('#gallery');
</script>


<?php include('partners.php'); ?>

<section id="kontakt" class="contacts">
	<!-- kontakty -->

	<?php include('kontakty.php'); ?>
</section>


<section id="footer">
	<!-- kontakty -->

	<?php include('footer.php'); ?>

</section>


</body>

