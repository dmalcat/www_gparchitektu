<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php include('./components/head/styles.php'); ?>
	<?php include('./components/head/scripts.php'); ?>
</head>
</head>

<body>
<!-- Menu -->
<?php include ('menu.php');?>

<section class="gallery gallery--full" id="gallery">
	<div class="gallery__wrapper wrapper">
		<h1>
			Video
		</h1>

		<a href="<?php echo $baseurl ?>/grand-prix-architekt-2021/" class="gallery__back">< Zpět na detail ročníku</a>

		<div class="gallery__row">
			<video class="gallery__video" controls>
				<source src="<?php echo $baseurl ?>/assets/video/GPA21-vyhlaseni.mp4" type="video/mp4">
			</video>
		</div>
	</div>
</section>

<section id="footer" class="footer">
    <?php include('footer.php'); ?>
</section>
