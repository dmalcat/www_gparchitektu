<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>GPA 2001 | Grand Prix Architektů</title>

	<?php include('./components/head.php'); ?>
</head>
<body>

<!-- Menu -->
<?php include ('menu.php');?>

<section class="hero hero--subpage hero--video">
	<div class="hero__wrapper wrapper">
		<img class="hero__logo" src="<?php echo $baseurl ?>/assets/images/competition/logo-2001-tran.png" alt="">
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
                2001
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
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/prestavba-menzy.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Národní cena za&nbsp;architekturu 2001</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Startovní domy v Rudníku</span>
							<strong>Autor</strong>: Milan Rak, Iveta Raková, Libor Rydlo, Pavel Rydlo, Alexandr Skalický<br>
							<strong>Ateliér</strong>: ARCHTEAM <br>
							<strong>Cena:</strong> Velká modrá kostka
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/viktor-rudis.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Cena za&nbsp;Celoživotní dílo</h3>
						<span class="gpa__projectDesc">
							<strong>Oceněný</strong>: Karel Prager<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Bytový dům s pečovatelskou službou, Praha - Dejvice</span>
							<strong>Autor</strong>: Jan Němec, Zdeněk Žilka, spolupráce Jiří Pešata<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Rehabilitace Müllerovy vily v Praze</span>
							<strong>Autor</strong>: Václav Girsa, Miroslav Hanzl, Petr Urlich<br>
							<strong>Ateliér</strong>: Sdružení restaurátorů THALIA <br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce a dostavba radnice, České Budějovice</span>
							<strong>Autor</strong>: Zdeněk Jiran, Michal Kohout, spolupráce Filip Ditrich, Pavel Hietz, Jiří Cholumský, Markéta Lepilová, Jiří Pajkrt<br>
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
							<span>Neuděleno</span>
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
							<span>Neuděleno</span>
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
							<span class="gpa__projectDesc">
								<span>Neuděleno</span>
							</span>
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
							<span class="gpa__projectDesc">
								<span class="gpa__title"><strong>Název projektu:</strong> Dům Kapitol, Brno</span>
								<strong>Autor</strong>: Jindřich Škrabal, Jan Sapák, Ludvík Grym, spolupráce František Kozubík, Jiří Palacký, Stanislav Opatrný<br>
								<strong>Cena:</strong> Malá žlutá kostka
							</span>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Domov důchodců v Benešově</span>
							<strong>Autor</strong>: Jan Línek, Jiří Sezemský, Věra Dubská<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Polyfunkční dům v Benešově</span>
							<strong>Autor</strong>: Markéta Cajthamlová, Šárka Šochová<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Vila v Čerčanech</span>
							<strong>Autor</strong>: Jiří Smolík, Zdeněk Rychtařík<br>
							<strong>Ateliér</strong>: Atelier Vyšehrad <br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Rodinný dům v Mukařově</span>
							<strong>Autor</strong>: Ivan Kroupa, spolupráce Radka Exnerová<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Corso Karlín, Praha 8</span>
							<strong>Autor</strong>: Ricardo Bofill, Jean-Pierre Carniaux, José Maria Rocías, Jiří Řezák, Jiří Koukolík, Jiří Grosz, Miroslav Pánek<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce bytu v panelovém domě, Praha 4</span>
							<strong>Autor</strong>: Markéta Smrčková, Tomáš Starý<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Nástavba bytového domu, Praha 5</span>
							<strong>Autor</strong>: Jan Šesták<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce gynekologicko-porodnického oddělení, Žatec</span>
							<strong>Autor</strong>: Jiří Vaníček, Jiří Müller, Petr Bažant, spolupráce Blanka Zelnerová<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii krajinářská architektura a zahradní tvorba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Stálá expozice historie a archeologie města - exteriérová část, Mladá Boleslav</span>
							<strong>Autor</strong>: Petr Kovář, Ivo Kraml<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii krajinářská architektura a zahradní tvorba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Klášterní zahrady v Litomyšli</span>
							<strong>Autor</strong>: Václav Babka, Radko Květ, Zdeněk Sendler<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii krajinářská architektura a zahradní tvorba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Central Park v Otnicích</span>
							<strong>Autor</strong>: Jaromír Walter, spolupráce Jiří Křížek<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii výtvarné dílo v architektuře</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Památník bojovníkům a obětem za svobodu vlasti, Liberec</span>
							<strong>Autor</strong>: Jan Stolín, Petr Stolín<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii architektonický design a drobná architektura</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Přístavba ateliéru</span>
							<strong>Autor</strong>: Josef Mádr, Jiří Bezouška<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii architektonický design a drobná architektura</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rodinný dům, Kroměříž - Važany</span>
							<strong>Autor</strong>: Milan Rak, Iveta Raková, Libor Rydlo, Pavel Rydlo, Aelxandr Skalický<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání v kategorii architektonický design a drobná architektura</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Schodiště a veranda, Praha 5</span>
							<strong>Autor</strong>: Ivan Kroupa, Tomáš Novotný, Radka Exnerová<br>
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
