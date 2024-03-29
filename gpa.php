<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>GPA | Grand Prix Architektů</title>

    <?php include('./components/head.php'); ?>
</head>
<body>

<!-- Menu -->
<?php include ('menu.php');?>

<section class="hero hero--subpage hero--video">
	<div class="hero__wrapper wrapper">
		<img class="hero__logo" src="<?php echo $baseurl ?>/assets/images/brand/gpa-logo-white.png" alt="">
	</div>
	<div class="hero__image hero__image--video">
		<video class="hero__video" autoplay loop muted id="video">
			<source src="<?php echo $baseurl ?>/assets/video/gpa-video.mp4" type="video/mp4">
		</video>
		<picture class="hero__picture" id="image">
			<source srcset="<?php echo $baseurl ?>/assets/images/covers/gpa/cover_375.jpg" media="(max-width: 375px)" type="image/jpeg">
			<source srcset="<?php echo $baseurl ?>/assets/images/covers/gpa/cover_540.jpg" media="(max-width: 540px)" type="image/jpeg">
			<source srcset="<?php echo $baseurl ?>/assets/images/covers/gpa/cover_768.jpg" media="(max-width: 768px)" type="image/jpeg">
			<img src="<?php echo $baseurl ?>/assets/images/covers/gpa/cover_768.jpg" alt="">
		</picture>
	</div>
</section>

<section class="breadcrumb">
	<div class="breadcrumb__wrapper wrapper">
		<ul class="breadcrumbList">
			<li>
				<a href="<?php echo $baseurl ?>">Úvodní strana</a>
			</li>
			<li class="active">
                Grand Prix Architektů
			</li>
		</ul>
	</div>
</section>

<section class="gpa">
	<div class="gpa__wrapper wrapper">
		<div class="gpa__row">
			<div class="gpa__col">
				<p>
					Soutěž založená Prof. Ing.&nbsp;Akad. Arch. Alenou Šrámkovou roku 1993.
				</p>
				<p>
					Obec architektů každoročně vyhlašuje Grand&nbsp;Prix Architektů – Národní cenu za&nbsp;architekturu – největší českou architektonickou soutěž o&nbsp;nejlepší realizaci.
				</p>
				<p>
					Projekty hodnotí pětičlenná porota. Skládá se&nbsp;ze&nbsp;čtyř mezinárodních porotců a&nbsp;jednoho zástupce z&nbsp;České republiky. Tradičně je&nbsp;jeden představitel poroty významná slovenská osobnost.
				</p>
				<p>
					Grand Prix Architektů je&nbsp;možné rozdělit do&nbsp;několika fází:
				</p>

				<h2>Vyhlášení nového ročníku GPA-NCA a&nbsp;přihlašování projektů</h2>
				<p>
					Obec architektů každý rok na&nbsp;jaře vyhlásí zahájení nového ročníku. S&nbsp;tím se&nbsp;otevře registrační formulář pro&nbsp;přihlášení projektů na&nbsp;<a href="https://grandprix.grandprixarchitektu.cz/">https://grandprix.grandprixarchitektu.cz/</a>
				</p>
				<p>
					Přihlášení projektu je&nbsp;velmi jednoduché a&nbsp;trvá max. 5-10 minut. Projekt je&nbsp;možné editovat do&nbsp;uzavření registrací. Projekt musí splňovat Všeobecné podmínky a&nbsp;Pravidla soutěže.
				</p>
				<p>
					Obec architektů zveřejňuje na&nbsp;sociálních sítích a&nbsp;emailem podrobnosti a&nbsp;aktuální timeline daného ročníku.
				</p>

				<h2>První kolo porotování</h2>
				<p>
					Probíhá elektronicky. Porota nezávisle hodnotí všechny přihlášené projekty. Vyhodnocením tohoto porotování je&nbsp;SHORTLIST 50 finalistů.
				</p>

				<h2>Vernisáž</h2>
				<p>
					Na&nbsp;vernisáži jsou představeny všechny projekty přihlášené do&nbsp;GPA-NCA pro&nbsp;daný rok. Zároveň jsou označeny projekty, které&nbsp;se&nbsp;dostaly do&nbsp;SHORTLIST 50.
				</p>

				<h2>Grand Prix Architektů Festival a&nbsp;druhé kolo porotování</h2>
				<p>
					Obec architektů a&nbsp;společnost Grohe pořádají Grand Prix Architektů Festival. Zde jsou projekty prezentovány před&nbsp;porotou v&nbsp;anglickém a&nbsp;českém jazyce. Porotu doplňuje student z&nbsp;řad Spolku posluchačů architektury. Porotce a&nbsp;student se&nbsp;mohou doptat na&nbsp;připomínky. Festival je&nbsp;možné sledovat i&nbsp;online na&nbsp;<a href="https://www.gpaf.cz/" target="_blank">gpaf.cz</a>
				</p>
				<p>
					Po&nbsp;prezentacích je&nbsp;druhé kolo zasedání poroty. Na&nbsp;základě diskuzí poroty a&nbsp;jejího rozhodnutí je&nbsp;vybrán vítěz GPA-NCA a&nbsp;další laureáti.
				</p>
			</div>
			<div class="gpa__col">
				<h2 class="no-top-margin">Galavečer Grand Prix Architektů</h2>
				<p>
					Na&nbsp;slavnostní zakončení Grand Prix Architektů jsou zveřejněni laureáti a&nbsp;vítězné projekty. Vítězové jsou oceněni ikonickou skleněnou kostkou a&nbsp;diplomem. Součástí večera je&nbsp;také vyhlášení Ceny za&nbsp;celoživotní dílo, kterou obdrží významná osobnost české architektonické scény.
				</p>

				<h2>Hlavní ceny soutěže</h2>

				<span class="gpa__block">
					<strong>Grand Prix Architektů</strong> – velká modrá kostka <br>
					udílí porota, tato cena musí být udělena
				</span>

				<span class="gpa__block">
					<strong>Cena za&nbsp;celoživotní dílo</strong> – velká červená kostka <br>
					udílí Rada Obce architektů – nominace zasílejte na&nbsp;email: <a href="mailto:info@obecarchitektu.cz">info@obecarchitektu.cz</a>
				</span>

				<div class="buttonRow buttonRow--left">
					<a class="button button--black button--arrow" href="<?php echo $baseurl ?>/celozivotni-ceny/">
						Ceny za celoživotní dílo
						<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
					</a>
				</div>

				<h3>Porota uděluje další ceny v&nbsp;kategoriích: </h3>
				<span class="gpa__block">
					<strong>Novostavba</strong> – malá modrá kostka <br>
					<strong>Rekonstrukce</strong> – malá modrá kostka <br>
					<strong>Rodinný dům</strong> – malá modrá kostka <br>
					<strong>Architektonický design</strong> – malá modrá kostka
				</span>

				<span class="gpa__block">
					<strong>Interiér</strong> – malá žlutá kostka <br>
					<strong>Urbanismus</strong> – malá fialová kostka <br>
					<strong>Krajinářská architektura a&nbsp;zahradní tvorba</strong> – malá zelená kostka <br>
					<strong>Šetrná stavba</strong> – malá stříbrná kostka<br>
					Udělována od&nbsp;roku 2020 ve&nbsp;spolupráci s&nbsp;Českou radou pro&nbsp;šetrné budovy (CZGBC)
				</span>

				<p>
					Porota nemá povinnost malé kostky udělit. V&nbsp;případě, že&nbsp;porota mezi finalisty nenajde pro&nbsp;danou kategorii vítěze, tak&nbsp;se&nbsp;cena v&nbsp;dané kategorii udílet nebude.
				</p>
				
				<p>
					Porota také může udělit více kostek nebo navrhnout další nové kategorie, či projekt z kategorie přesunout a ocenit jej v jiné kategorii. <br>
					V&nbsp;případě, že&nbsp;porota mezi finalisty najde projekt, který&nbsp;by&nbsp;si ocenění zasloužil, může vytvořit novou kategorii či&nbsp;vyhlásit dva vítěze. <br>
					Hlavní cena – Grand Prix Architektů – má vždy jen&nbsp;jednoho vítěze.
				</p>

				<div class="buttonRow buttonRow--left">
					<a href="https://grandprix.grandprixarchitektu.cz/" class="button button--black button--arrow">
						Registrace
						<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('./components/partners/auspices-general.php'); ?>

<section class="gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a class="gpTabs__navItem gpTabs__navItem--active" href="#rocniky">Ročníky</a>
	</div>
	<div class="gpTabs__wrapper gpTabs__wrapper--active wrapper" id="rocniky">
		<div class="gpTabs__content">
			<div class="gpa gpa--list">
				<div class="gpa__row row">
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/gpa-2023@2x.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2023</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2023/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/gpa-2022@2x.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2022</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2022/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/gpa-2021@2x.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2021</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2021/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/gpa-2020.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2020</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2020/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/gpa-2019.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2019</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2019/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/gpa-2018@2x.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2018</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2018/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2017.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2017</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2017/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2016.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2016</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2016/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2015.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2015</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2015/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2014.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2014</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2014/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2013.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2013</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2013/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2012.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2012</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2012/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2011.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2011</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2011/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2010.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2010</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2010/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2009.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2009</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2009/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2008.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2008</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2008/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2007.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Architektů - Národní cena za&nbsp;architekturu 2007</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2007/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2006.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů - Národní cena za&nbsp;architekturu 2006</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2006/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2005.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů - Národní cena za&nbsp;architekturu 2005</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2005/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2004.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů - Národní cena za&nbsp;architekturu 2004</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2004/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2003.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů 2003</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2003/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2002.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů 2002</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2002/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2001.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů 2001</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2001/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-2000.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů 2000</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-2000/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-1999.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů 1999</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-1999/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-1998.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů 1998</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-1998/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-1996.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů 1996</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-1996/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-1995.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů 1995</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-1995/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-1994.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů 1994</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-1994/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/competition/logo-1993.png" alt="">
						</div>
						<h3 class="gpa__projectName">Grand Prix Obce Architektů 1993</h3>
						<a class="button button--arrow button--black" href="<?php echo $baseurl ?>/grand-prix-architekt-1993/">
							Detail ročníku
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a class="gpTabs__navItem gpTabs__navItem--active" href="#novinky">Novinky</a>
	</div>
	<div class="gpTabs__wrapper gpTabs__wrapper--active wrapper" id="novinky">
		<div class="gpTabs__content">
			<div class="news">
				<div class="news__wrapper wrapper">
					<div class="news__row">
						<?php
						include 'conn.php';

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						$conn->set_charset('utf8');
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT * FROM oa_clanky WHERE status='1' AND f2=1 ORDER BY id DESC LIMIT 3";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								$id = $row['id'];
								$title = $row['title'];
								$content = $row['content'];
								$datum= $row['date'];
								$photo= $row['main_img'];


								$cisty_text = strip_tags($content);

								if (substr_count($cisty_text, " ") > 30) {
									$pole = explode(" ",$cisty_text);

									for ($i=0;$i<30;$i++):

										$pole2[$i]=$pole[$i];


									endfor;

									$text = implode(" ",$pole2);
								} else {
									$text = $cisty_text;
								}
								//vytvoření odkazu
								$string = $title;
								$string = str_replace("+", " ", $string);

								$slug = \Transliterator::createFromRules(
									':: Any-Latin;'
									. ':: NFD;'
									. ':: [:Nonspacing Mark:] Remove;'
									. ':: NFC;'
									. ':: [:Punctuation:] Remove;'
									. ':: Lower();'
									. '[:Separator:] > \'-\''
								)
									->transliterate( $string );
								$slug; // namnet-pa-bildtavlingen


								$odkaz = "$slug";

								echo "               
							<div class='news__col'>
								<a href='$baseurl/novinka/$id-$odkaz'>
									<div class='news__image'>
										<img src='$baseurl/uploads/images/$photo'>
										<span class='news__overlay'>
											<span class='button button--yellow'>Zobrazit detail</span>
										</span>
									</div>
									
									<h5>$title</h5>
									<p>$text</p>
								</a> 
							</div>
						";
							}
						} else {
						}
						$conn->close();

						?>
					</div>
					<div>
						<a href="<?php echo $baseurl ?>/novinky/gpa" class='button button--black button--arrow'>
							Další novinky
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('./components/partners/2023.php'); ?>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>