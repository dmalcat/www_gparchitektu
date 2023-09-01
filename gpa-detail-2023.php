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
					Do letošního jubilejního XXX. ročníku Grand Prix Architektů – Národní ceny za architekturu se <strong>přihlásilo 275 architektonických projektů</strong>. Ve srovnání s loňským rokem došlo opět k navýšení přihlášených realizací.
				</p>
			
				<p>
					Nyní probíhá <strong>první kolo hodnocení</strong> projektů, kdy porota vybere <strong>shortlist 50 finalistů / projektů</strong>, které postoupí do finále. 
				</p>

				<p>
					Všech 275 přihlášených projektů si můžete prohlédnout <a href="https://grandprix.grandprixarchitektu.cz/rocnik/2023" target="_blank">zde</a>.
				</p>

				<p>
					<strong>Druhé kolo porotování</strong> proběhne v rámci 5. ročníku Grand Prix Architektů Festivalu by GROHE v <strong>pondělí 30. 10. 2023 ve Velké dvoraně Veletržního Paláce</strong>, kdy se všech 50 projektů bude prezentovat před porotou. 
				</p>

				<p>
					Ještě tentýž večer bude <strong>vyhlášení vítězů XXX. ročníku GPA – Národní ceny za architekturu 2023 ve 20.00 také ve Velké dvoraně Veletržního paláce</strong>.
				</p>
				
				<p>
					Členové poroty si jako předsedkyni poroty zvolili <strong>Amandu Levete</strong>.
				</p>

				<p>
					<i>„Amanda Levete, která je současně předsedkyní poroty, získala za svou práci řadu významných ocenění. A jsem rád, že se nám v rámci jejího pobytu v Praze, podařilo zorganizovat i její přednášku 27. 10. v CAMPu (Centru architektury a městského plánování). Pokračujeme tak v trendu zvyšující se úrovně této největší architektonické přehlídky v České republice.“</i> uvedl Ing. arch. Oleg Haman, předseda Obce architektů
				</p>

				<p>
					Složení poroty:
				</p>

				<ul class="gpa__jury">
					<li>
						<strong>Amanda Levete</strong> / Velká Británie <br>
						– získala ocenění Stirlingova cena, Jane Drew Prize, komandér Řádu britského impéria
						– Studio <a href="https://www.ala.uk.com/about-us/people/amanda-levete/" target="_blank">AL__A</a>
					</li>

					<li>
						<strong>Irakli Eristavi</strong> / Slovensko <br>
						– <a href="https://zerozero.sk/" target="_blank">studio zerozero</a>
					</li>
				</ul>
			</div>

			<div class="gpa__col">
				<ul class="list">
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
				<p>Počet projektů v soutěži dle kategorií:</p>
				<ul class="list">
					<li><strong>Novostavba</strong>: 70 projektů</li>
					<li><strong> Rodinný dům</strong>: 30 projektů</li>
					<li><strong> Rekonstrukce</strong>: 54 projektů</li>
					<li><strong>Interiér</strong>: 70 projektů</li>
					<li><strong>Krajinářská architektura a&nbsp;zahradní tvorba</strong>: 9 projektů</li>
					<li><strong>Urbanismus</strong>: 6 projektů</li>
					<li><strong>Architektonický design, drobná architektura a výtvarné dílo v&nbsp;architektuře</strong>: 34 projektů</li>
				</ul>

				<div class="buttonRow buttonRow--left">
					<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2023" target="_blank" class="button button--black button--arrow">
						Všechny projekty
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
					<a href="<?php echo $baseurl ?>/ukonceni-prihlasek-2023/">Tisková zpráva 17. 8. 2023 - ukončení přihlášek (PDF)</a>
				</li>
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/prodlouzeni-terminu-prihlaseni-2023/">Tisková zpráva 30. 6. 2023 - prodloužení termínu přihlášení (PDF)</a>
				</li>	
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
