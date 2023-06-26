<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>GPA 2023 | Grand Prix Architektů</title>

	<?php include('./components/head.php'); ?>
</head>


<body>

<!-- Menu -->
<?php include ('menu.php');?>

<section class="hero hero--subpage hero--video">
	<div class="hero__wrapper wrapper">
		<img class="hero__logo" src="<?php echo $baseurl ?>/assets/images/brand/gpa-30-wide.svg" alt="">
	</div>
	<div class="hero__image hero__image--video">
		<video class="hero__video" autoplay loop muted>
			<source src="<?php echo $baseurl ?>/assets/video/gpa-video.mp4" type="video/mp4">
		</video>
	</div>
</section>

<section class="breadcrumb">
	<div class="breadcrumb__wrapper wrapper">
		<ul class="breadcrumbList">
			<li>
				<a href="<?php echo $baseurl ?>">Úvodní strana</a>
			</li>
			<li>
				<a href="<?php echo $baseurl ?>/grand-prix-architektu/">Grand Prix Architektů</a>
			</li>
			<li class="active">
                2023
			</li>
		</ul>
	</div>
</section>

<section class="gpa">
	<div class="gpa__wrapper wrapper">
		<div class="gpa__row">
			<div class="gpa__col">
				<p>
					<strong>Obec architektů vyhlašuje již XXX. Ročník Grand Prix Architektů – Národní cenu za architekturu 2023.</strong>
				</p>
			
				<p>
					Největší českou architektonickou soutěžní přehlídku o nejlepší architektonický počin, realizovaný v roce 2022 bude tradičně oceňovat pětičlenná nezávislá porota:
				</p>

				<ul class="gpa__jury">
					<li>
						<strong>Amanda Levete</strong> / Velká Británie <br>
						– Principal at Studio AL__A <br>
						– vítězka Stirlingovy ceny, držitelka Jane Drew Prize, komandér Řádu britského impéria
					</li>

					<li>
						<strong>Irakli Eristavi</strong> / Slovensko <br>
						– <a href="https://zerozero.sk/" target="_blank">studio zerozero</a>
					</li>
					
					<li>
						<strong>Thorbjörn Andersson</strong> / Švédsko <br>
						– studio Thorbjörn Andersson Landscape Architect <br>
						– <a href="https://thorbjorn-andersson.com/" target="_blank">Sweco Architects</a>
					</li>
					
					<li>
						<strong>Balázs Bognár</strong> / USA, Japonsko, Maďarsko <br>
						– Partner at studio <a href="https://kkaa.co.jp/en/people/balazs-bognar/" target="_blank">Kengo Kuma & Associates</a>
					</li>
					
					<li>
						<strong>Petr Štefek</strong> / Česká republika <br> 
						– studio <a href="https://petrstefek.com/munio_portfolio/cv-cz/" target="_blank">Petr Štefek Architect</a>
					</li>
				</ul>
			</div>

			<div class="gpa__col">
				<p>
					“Letošní 30. ročník je jubilejní a je pro nás velkou výzvou. Věřím se nám podařilo vytvořit
					vynikající vyváženou porotu. Může nás jenom těšit, že pro oslovené architekty je účast v 
					porotě otázkou prestiže. Architektka Amanda Levete, která vedla s Janem Kaplickým světoznámé studio Future Systems, poctí naši architektonickou veřejnost svoji přednáškou v pátek 27.10. od 17 hod v prostorách CAMP. Porota nebude mít jednoduchou práci vzhledem ke stále stoupající úrovni přihlašovaných prací. V prvním elektronickém kole 5 porotců volí nezávisle na sobě a v různém čase pouze ano či ne pro postup. Úroveň je tak vysoká, že mnohdy ani 3 souhlasy nezaručí postup mezi 50 finalistů. Tato vysoká kvalita soutěžní přehlídky posunuje všechny architekty v práci, aby držely krok s dobou a současnými trendy, mne nevyjímaje,” uvedl k vyhlášení XXX. ročníku Oleg Haman, předseda Obce architektů.
				</p>
				
				<p>
					Termín vyhlášení výsledků Grand Prix Architektů a konání GPA Festivalu by Grohe je 30.10.2023. 
				</p>

				<p>
					Projekt musí být dokončen v rozmezí 1.1.2022-31.3.2023 a postaven na území České republiky. Pro krajinářská díla je rozmezí 3 roky, tedy od  1.1.2020-31.3.2023.
				</p>

				<p>
					Přihlašovat své projekty můžete do půlnoci 30.6. 2023.
				</p>

				<div class="buttonRow buttonRow--left">
					<a href="https://grandprix.grandprixarchitektu.cz/" target="_blank" class="button button--black button--arrow">
						Přihlašovací formulář
						<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('./components/partners/auspices-2023.php'); ?>

<?php include('components/jury/jury2023.php'); ?>

<section class="press gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#press" class="gpTabs__navItem">Tiskové zprávy</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="press">
		<div class="gpTabs__content">
			<ul class="downloadList">
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/vyhlaseni-rocniku-2023/">Tisková zpráva 3. 4. 2023 - vyhlášení ročníku (PDF)</a>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="gallery gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#projects" class="gpTabs__navItem">Projekty</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="projects">
		<div class="gpTabs__content">
			<p>Bude doplněno.</p>
		</div>
	</div>
</section>

<!--
<section class="gallery gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#catalog" class="gpTabs__navItem">Katalog</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="catalog">
		<div class="gpTabs__content">

			<ul class="downloadList">
				<li class="downloadList__item">
					 <a href="<?php echo $baseurl ?>/katalog-pdf/">Katalog (PDF)</a>
					Katalog bude brzy zpřístupněn
				</li>
			</ul>
			<p>Katalog bude brzy zpřístupněn.</p>
		</div>
	</div>
</section>
-->

<?php include('./components/partners/2023.php'); ?>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>
