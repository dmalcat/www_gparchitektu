<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head> 
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Úvodní stránka | Grand Prix Architektů</title>

    <?php include('./components/head.php'); ?>

	<link rel="stylesheet" href="<?php echo $baseurl ?>/assets/cookie-consent/dist/css/cookies.min.css">
    
    <script src="<?php echo $baseurl ?>/assets/js/slick.min.js"></script>
</head>
<body>

<!-- Menu -->
<?php include ('menu.php');?>

<section class="hero">
	<div class="hero__wrapper wrapper">
		<div class="hero__wrap">
			<div class="hero__inner">
				<h1>
					Obec architektů
				</h1>
				<p>
					Smyslem naší činnosti je reprezentace ČR <br>
					na úrovni UIA a V4 a prezentace kvalitní <br>
					architektury široké laické a odborné veřejnosti.
				</p>
				<div class="hero__buttons">
					<a href="<?php echo $baseurl ?>/o-nas/#organization" class="button button--black button--arrow">
						O nás
						<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
					</a>
					<a href="<?php echo $baseurl ?>/o-nas/#organization" class="button button--yellow button--arrow">
						Grand Prix Architektů
						<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
					</a>
				</div>
			</div>
			
			<video class="hero__video" muted autoplay loop>
				<source src="<?php echo $baseurl ?>/assets/video/gpa-video.mp4" type="video/mp4">
			</video>
		</div>
	</div>
</section>

<section class="tiles">
	<div class="tiles__wrapper wrapper">
		<h1 class="text-center">Naše činnost</h1>
		<p class="perex text-center">
			Posláním spolku je především <strong>seznamovat širokou veřejnost <br>
			s architekturou a stavitelstvím</strong>, aktivně spolupracovat při <br>
			<strong>vytváření příznivých podmínek</strong> pro architektonickou a jinou <br>
			související tvorbu</strong>, podporovat <strong>svobodnou diskuzi</strong> o tvůrčích <br>
			a odborných otázkách v oboru architektury a aktivně <strong>spolupracovat</strong> <br>
			s obdobnými institucemi <strong>doma i v zahraničí</strong>. 
		</p>

		<div class="tiles__row">
			<a href="<?php echo $baseurl ?>/grand-prix-architektu/" class="tile">
				<span class="tile__inner">
					<span class="tile__image">
						<img src="<?php echo $baseurl ?>/assets/images/tiles/gpa.jpg" alt="">
					</span>
					<span class="tile__desc">
						<span class="tile__headline">Grand Prix Architektů</span>
						<span class="tile__copy">
							Obec architektů každoročně vyhlašuje Grand Prix Architektů – Národní cenu za architekturu – největší českou architektonickou soutěž o nejlepší realizaci.
						</span>
						<span class="tile__link">
							Více informací
							<img class="tile__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</span>
					</span>
				</span>
			</a>
			<a href="<?php echo $baseurl ?>/uia/" class="tile">
				<span class="tile__inner">
					<span class="tile__image">
						<img src="<?php echo $baseurl ?>/assets/images/tiles/uia.jpg" alt="">
					</span>
					<span class="tile__desc">
						<span class="tile__headline">UIA</span>
						<span class="tile__copy">
							Mezinárodní unie architektů je organizace uznávána jako jediná globální architektonická organizace většinou agentur OSN.
						</span>
						<span class="tile__link">
							Více informací
							<img class="tile__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</span>
					</span>
				</span>
			</a>
			<a href="<?php echo $baseurl ?>/grand-prix-architektu/" class="tile">
				<span class="tile__inner">
					<span class="tile__image">
						<img src="<?php echo $baseurl ?>/assets/images/tiles/partnership.jpg" alt="">
					</span>
					<span class="tile__desc">
						<span class="tile__headline">Partnerství</span>
						<span class="tile__copy">
							Organizace je uznávána jako jediná globální architektonická organizace většinou agentur OSN.
						</span>
						<span class="tile__link">
							Více informací
							<img class="tile__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</span>
					</span>
				</span>
			</a>
		</div>
	</div>
</section>

<section class="news news--hp">
	<div class="news__wrapper wrapper">
		<h1 class="text-center">Poslední novinky</h1>
		<div class="news__row">
			<div class="news__col news__col--image">
				<div class="news__image">
					<img src="<?php echo $baseurl ?>/assets/images/news/placeholder.jpg">
				</div>
			</div>
			<div class="news__col news__col--copy">
				<h2>
					Rozhovor předsedy Olega Hamana s&nbsp;Janem Kaslem v Českém rozhlasu
				</h2>
				<p>
					Saša Michailidis se ptal 9. listopadu 2022 od 16:30 předsedy České komory architektů Jana Kasla a předsedy Rady Obce architektů Olega Hamana. 
					Proč máme dvě velké architektonické soutěže? Jak daleko jsou úvahy o jejich případném sloučení? A jakou váhu mají ceny u samotných architektů?
				</p>
				<div class="news__button">
					<a href="" class="button button--black button--arrow">
						Číst dále
						<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
					</a>
				</div>
			</div>
		</div>
		<div class="news__row">
			<div class="news__col news__col--copy">
				<h2>
					Rozhovor předsedy Olega Hamana s&nbsp;Janem Kaslem v Českém rozhlasu
				</h2>
				<p>
					Saša Michailidis se ptal 9. listopadu 2022 od 16:30 předsedy České komory architektů Jana Kasla a předsedy Rady Obce architektů Olega Hamana. 
					Proč máme dvě velké architektonické soutěže? Jak daleko jsou úvahy o jejich případném sloučení? A jakou váhu mají ceny u samotných architektů?
				</p>
				<div class="news__button">
					<a href="" class="button button--black button--arrow">
						Číst dále
						<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
					</a>
				</div>
			</div>
			<div class="news__col news__col--image">
				<div class="news__image">
					<img src="<?php echo $baseurl ?>/assets/images/news/placeholder.jpg">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>

</body>
