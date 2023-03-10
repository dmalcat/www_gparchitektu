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

<section class="hero hero--subpage">
	<div class="hero__wrapper wrapper">
		<h1>Partnerství</h1>
	</div>
	<picture class="hero__image">
		<source srcset="<?php echo $baseurl ?>/assets/images/carousel/cover_375.jpg" media="(max-width: 375px)" type="image/jpeg">
		<source srcset="<?php echo $baseurl ?>/assets/images/covers/o-nas/cover_540.jpg" media="(max-width: 540px)" type="image/jpeg">
        <source srcset="<?php echo $baseurl ?>/assets/images/covers/o-nas/cover_768.jpg" media="(max-width: 768px)" type="image/jpeg">
		<source srcset="<?php echo $baseurl ?>/assets/images/covers/o-nas/cover.jpg" media="(max-width: 2560px)" type="image/jpeg">
		<img src="<?php echo $baseurl ?>/assets/images/covers/o-nas/cover.jpg" alt="">
	</picture>
</section>

<section class="breadcrumb">
	<div class="breadcrumb__wrapper wrapper">
		<ul class="breadcrumbList">
			<li>
				<a href="<?php echo $baseurl ?>">Úvodní strana</a>
			</li>
			<li class="active">
                Partnerství
			</li>
		</ul>
	</div>
</section>

<section class="article">
    <div class="article__wrapper wrapper">
		<div class="article__row">
			
            <div class="article__col">
                <p>
                    Pokud vás naše aktivity zajímají a chcete je podpořit kontaktujte nás na e-mailu <a class="text-underline" href="mailto:info@obecarchitektu.cz">info@obecarchitektu.cz</a>.
                </p>
                <p>
                    Rádi s vámi probereme veškeré detaily na osobní schůzce.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="footer" class="footer">
    <?php include('footer.php'); ?>
</section>

    

    