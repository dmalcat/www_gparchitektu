<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>GPA 2020 | Grand Prix Architektů</title>

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
                2020
			</li>
		</ul>
	</div>
</section>

<section class="winningProjects winningProjects--alone gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#winning-projects" class="gpTabs__navItem">Vítězné projekty</a>
	</div>
	<div class="gpTabs__wrapper gpTabs__wrapper--active wrapper" id="winning-projects">
		<div class="gpTabs__content">
			<div class="gpa gpa--projects">
				<div class="gpa__row gpa__row--projects row">
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2020/vitez.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Národní cena za&nbsp;architekturu 2020</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Městská hala Modřice</span>
							<strong>Autor</strong>: Vojtěch Sosna, Jakub Straka, Jáchym Svoboda / Hlavní inženýr projektu: Ing. Jan Svoboda <br>
							<strong>Ateliér</strong>: Atelier bod architekti <br>
							<strong>Cena:</strong> Velká modrá kostka
						</span>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2020/celozivotni-dilo.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Cena za&nbsp;Celoživotní dílo</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title">Tuto cenu uděluje Rada Obce architektů.</span>
							<strong>Oceněný</strong>: Akad. arch. Jiří Lasovský <br>
							<strong>Cena:</strong> Velká červená kostka
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/novostavba.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Kostel Blahoslavené Marie Restituty, Brno - Lesná</span>
							<strong>Autor</strong>: Marek Jan Štěpán / Spolupráce: František Brychta, Vanda Štěpánová, Jan Vodička, Marin Kopecký <br>
							<strong>Ateliér</strong>: Atelier Štěpán s.r.o. <br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/dum-na-kozine.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Sídlo firmy Lasvit</span>
							<strong>Autor</strong>:  Jiří Opočenský, Štěpán Valouch <br>
							<strong>Ateliér</strong>: ov architekti s.r.o.<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/radnice-praha-7.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Rodinný dům</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rodinný dům v údolí Dyje, Znojmo</span>
							<strong>Autor</strong>: Ladislav Kuba, Tomáš Pilař,  Norbert Walter <br>
							<strong>Ateliér</strong>: Kuba & Pilař architekti<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/krajinarska-architektura.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Architektonický design, drobná architektura a výtvarné dílo v architektuře</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Památník Jana Palacha ve Všetatech</span>
							<strong>Autor</strong>: doc. Ing. arch. Miroslav Cikán, doc. Ing. arch. Pavla Melková, Ph.D. <br> 
							<strong>Ateliér</strong>: MCA atelier<br>
							<strong>Cena</strong>: Malá modrá kostka
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/vecna-loviste.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Krajinářská architektura a zahradní tvorba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Tree house</span>
							<strong>Autor</strong>: Jan Tyrpekl, Jaroslav Kejř, Jan Hyk, Adam Ulrich <br>
							<strong>Cena:</strong> Malá zelená kostka
						</span>
						
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/altan-knihovna.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> House of Wine</span>
							<strong>Ateliér</strong>: CHYBIK + KRISTOF ARCHITECTS & URBAN DESIGNERS<br>
							<strong>Cena:</strong> Malá žlutá kostka
						</span>
						
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/telegraph.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Urbanismus</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Revitalizace pražských náplavek</span>
							<strong>Autor</strong>: Ing. arch. MgA. Petr Janda <br>
							<strong>Cena:</strong> Malá fialová kostka
						</span>
						
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/sakura.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Šetrná stavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Základní škola AMOS pro Psáry a Dolní Jirčany</span>
							<strong>Autor</strong>: Ondřej Píhrt, Štefan Šulek, Ondřej Laciga <br>
							<strong>Ateliér</strong>: SOA architekti s.r.o.<br>
							<strong>Cena:</strong> Malá stříbrná kostka
						</span>
						
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> PVZ – Pravá vesnická zastávka</span>
							<strong>Autor</strong>: Ing.arch. David Ptáček<br>
							<strong>Ateliér</strong>: DPA<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/panna-a-baba.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Obnova Školy architektury AVU</span>
							<strong>Autor</strong>: Marcela Steinbachová, Vít Holý <br>
							<strong>Ateliér</strong>: Skupina<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/kaplicka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Stožár s výhledem </span>
							<strong>Autor</strong>: Kristýna Rejsková & tým studentů <br>
							<strong>Ateliér</strong>: Ateliér Hlaváček – Čeněk, 1:1 lab, Ústav navrhování II, FA ČVUT<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/kaplicka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> KØMEN – Útulna u Balvanového vodopádu </span>
							<strong>Autor</strong>: Julie Kopecká & tým studentů <br>
							<strong>Ateliér</strong>: Ateliér Hlaváček – Čeněk, 1:1 lab, Ústav navrhování II, FA ČVUT<br>
							<strong>Cena:</strong> Diplom
						</span>
						
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/kaplicka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Lávka přes Hlubokou strouhu</span>
							<strong>Autor</strong>: Tomáš Minarovič & tým studentů <br>
							<strong>Ateliér</strong>: Ateliér Hlaváček – Čeněk, 1:1 lab, Ústav navrhování II, FA ČVUT<br>
							<strong>Cena:</strong> Diplom
						</span>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>
