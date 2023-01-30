<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Titulek -->
	<title>Obec architektů</title>

	<?php include('./components/head/styles.php'); ?>
	<?php include('./components/head/scripts.php'); ?>
</head>
<body>

<!-- Menu -->
<?php include ('menu.php');?>

<section class="gallery gallery--full" id="gallery">
	<div class="gallery__wrapper wrapper">
		<h1>
			Galavečer 2021 - neformální část
		</h1>

		<a href="<?php echo $baseurl ?>/grand-prix-architekt-2021/" class="gallery__back">< Zpět na detail ročníku</a>

		<div class="gallery__row">
			<?php for($counter=0; $counter<33; $counter++) :?>
				<a href="<?php echo $baseurl ?>/assets/images/gallery/neformalni/full/neformalni<?=$counter?>.jpg" class="gallery__item">
					<img class="gallery__item" src="<?php echo $baseurl ?>/assets/images/gallery/neformalni/thumb/neformalni<?=$counter?>.jpg" alt="">
				</a>
			<?php endfor;?>
		</div>

		<a href="<?php echo $baseurl ?>/grand-prix-architekt-2021/" class="gallery__back">< Zpět na detail ročníku</a>
	</div>
</section>

<script>
	baguetteBox.run('#gallery');
</script>


<?php include('./components/partners/2022.php'); ?>

<section id="footer" class="footer">
    <?php include('footer.php'); ?>
</section>
