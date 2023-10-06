<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>GPA 2004 | Grand Prix Architektů</title>

	<?php include('./components/head.php'); ?>
</head>
<body>

<!-- Menu -->
<?php include ('menu.php');?>

<section class="hero hero--subpage hero--video">
	<div class="hero__wrapper wrapper">
		<img class="hero__logo" src="<?php echo $baseurl ?>/assets/images/competition/logo-2004-tran.png" alt="">
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
                2004
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
							<img src="<?php echo $baseurl ?>/assets/images/projects/2004/vitez.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Národní cena za&nbsp;architekturu 2004</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Křivoklátský letohrádek, Bratronice</span>
							<strong>Autor</strong>: Stanislav Picek<br>
							<strong>Cena:</strong> Velká modrá kostka
						</span>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2004/celozivotni-dilo.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Cena za&nbsp;Celoživotní dílo</h3>
						<span class="gpa__projectDesc">
							<strong>Oceněný</strong>: prof. Ing. arch. Ivan Ruller<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Smuteční síň v Turnově</span>
							<strong>Autor</strong>: Libor Čížek, Ondřej Moravec, Michal Nekola, Radek Šíma<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Obnova a dostavba rodného domu G. Mahlera, Kaliště u Humpolce</span>
							<strong>Autor</strong>: Vladimír Krátký, Jiří Pelcl<br>
							<strong>Ateliér</strong>: AS Ateliér Pelhřimov<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Socha Franze Kafky, Praha 1</span>
							<strong>Autor</strong>: Jaroslav Róna, David Vávra, Jan Linhart, Martin Rössler<br>
							<strong>Cena:</strong> Malá modrá kostka
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
								<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce Denisových sadů a Studánky v Brně, I. - III. Etapa</span>
								<strong>Autor</strong>: Václav Babka, Petr Hrůša, Petr Pelčák, Zdeněk Sendler<br>
								<strong>Cena:</strong> Malá zelená kostka
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
								<span class="gpa__title"><strong>Název projektu:</strong> Club restaurant Stromovka, Praha 7</span>
								<strong>Autor</strong>: Michal Kunc, spolupráce Daniel Pospíšil, Lukáš Zimandl<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Pavilon F, Výstaviště Brno</span>
							<strong>Autor</strong>: Martin Komárek, Martin Rudiš<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Domov důchodců - Dům seniorů Františkov, Liberec</span>
							<strong>Autor</strong>: Pavel Janoušek, Boris Šonský, Petr Kincl, spolupráce Jan Lajksner<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Obytný soubor VILLA PARK STRAHOV</span>
							<strong>Autor</strong>: Boris Redčenkov, Prokop Tomášek, Jaroslav Wertig<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Logistický terminál Písek</span>
							<strong>Autor</strong>: Tomáš Novotný, Tomáš Zmek, spolupráce Jan Karásek, Marchela Koukolová, Pavel Škorpil<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> NOVÝ ČESKÝ DŮM, Velký Týnec</span>
							<strong>Autor</strong>: Pavel Nasadil<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> UPP, Praha 1</span>
							<strong>Autor</strong>: Šimon Caban<br>
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
