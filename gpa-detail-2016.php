<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>GPA 2016 | Grand Prix Architektů</title>

	<?php include('./components/head.php'); ?>
</head>
<body>

<!-- Menu -->
<?php include ('menu.php');?>

<section class="hero hero--subpage hero--video">
	<div class="hero__wrapper wrapper">
		<img class="hero__logo" src="<?php echo $baseurl ?>/assets/images/competition/logo-2016-tran.png" alt="">
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
                2016
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
							<img src="<?php echo $baseurl ?>/assets/images/projects/2016/vitez.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Národní cena za&nbsp;architekturu 2016</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce Bílé věže v Hradci Králové</span>
							<strong>Autor</strong>:  Jaromír Chmelík, Bohumil Rusek, David Baďura, Michal Potůček, Kryštof Kreisinger, Alena Vojtíšková, Jan Ondrák <br>
							<strong>Ateliér</strong>: Architekti Chmelík & partneři <br>
							<strong>Cena:</strong> Velká modrá kostka
						</span>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2016/celozivotni-dilo.png" alt="">
						</div>
						<h3 class="gpa__projectName">Cena za&nbsp;Celoživotní dílo</h3>
						<span class="gpa__projectDesc">
							<span>Neuděleno</span>
						</span>
					</div>
					<div class="gpa__col">
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> ELI Beamlines - Mezinárodní výzkumné laserové centrum, Dolní Břežany </span>
							<strong>Autor</strong>: Ian Bogle <br>
							<strong>Ateliér</strong>: Bogle Architects s.r.o.<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce Bílé věže v Hradci Králové </span>
							<strong>Autor</strong>: Jaromír Chmelík, Bohumil Rusek, David Baďura, Michal Potůček, Kryštof Kreisinger, Alena Vojtíšková, Jan Ondrák <br>
							<strong>Ateliér</strong>: Architekti Chmelík & partneři<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Rodinný dům Oldřichov v Hájích</span>
							<strong>Autor</strong>: Pantelis Larcou<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/krajinarska-architektura.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Architektonický design, drobná architektura a výtvarné dílo v architektuře </h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rozhledna Hýlačka, Tábor</span>
							<strong>Autor</strong>: David Grygar, Martin Kocich, Pavla Kosová<br> 
							<strong>Ateliér</strong>: Architekti Grygar & spol. s.r.o. <br>
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
							<span>Neuděleno</span>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce interiéru multifunkčního sálu Střední průmyslové školy na Třebešíně, SPŠ na Třebešíně, Praha 10</span>
							<strong>Autor</strong>: Luka Križek, Radek Bláha<br> 
							<strong>Ateliér</strong>: IO Studio, s.r.o. <br>
							<strong>Cena</strong>: Malá žlutá kostka
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
							<span>Neuděleno</span>
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
							<span>Udělována od roku 2020 ve spolupráci s Českou radou pro šetrné budovy (CZGBC)</span>
						</span>
						
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Administrativní budova firmy Brusivo v Rokycanech</span>
							<strong>Autor</strong>: Tereza Nová, Jiří Zábran<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Liberec - Centrum Vlasty Buriana</span>
							<strong>Autor</strong>: Pavel Šťastný, spolupráce Tomáš Novák<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rezidenční projekt Origami v poklidné vilové čtvrti Prahy 6</span>
							<strong>Autor</strong>: David Wittassek, Jiří Řezák<br>
							<strong>Ateliér</strong>: QARTA Architektura<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/panna-a-baba.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Valtické zámecké divadlo</span>
							<strong>Ateliér</strong>: Mikuláš Hulec, Daniel Špička, Matěj Boháč<br>
							<strong>Autor</strong>: Hulec & Špička architekti <br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/panna-a-baba.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce předprostoru kina Luna, Ostrava</span>
							<strong>Autor</strong>: David Kotek, Ondřej Klimek, Zbyněk Jendryka, Martin Křivánek<br>
							<strong>Ateliér</strong>: PROJEKTSTUDIO EUCZ, s.r.o.<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/panna-a-baba.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Vzdělávací a kulturní centrum Klášter Broumov</span>
							<strong>Autor</strong>: Petr Kolář, Aleš Lapka, Jana Kynčilová, Anna Štembergová<br>
							<strong>Ateliér</strong>: ADR s.r.o.<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/panna-a-baba.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii design</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Autobusová čekárna s nástupištěm v Žatci</span>
							<strong>Autor</strong>: Jiří Vaníček, Břetislav Sedláček, Jan Vaníček, Daniel Nocar, Denisa Harajdová, Petr Bažant<br>
							<strong>Ateliér</strong>: HUML & VANÍČEK, Architekti Žatec, DESIGN PROJEKT Žatec<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/panna-a-baba.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Vinný sklep Konice</span>
							<strong>Autor</strong>: Tomáš Dvořák<br>
							<strong>Ateliér</strong>: Tomáš Dvořák Architekti s.r.o. <br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/panna-a-baba.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Megapixel Brno</span>
							<strong>Autor</strong>: Petr Kolář, Aleš Lapka<br>
							<strong>Ateliér</strong>: d3D<br>
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
