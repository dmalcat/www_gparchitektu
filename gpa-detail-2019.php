<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>GPA 2019 | Grand Prix Architektů</title>

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
                2019
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
							<img src="<?php echo $baseurl ?>/assets/images/projects/2019/vitez.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Národní cena za&nbsp;architekturu 2019</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Corso Pod Lipami</span>
							<strong>Autor</strong>:  Lukáš Ehl, Tomáš Koumar, Alena Šrámková <br>
							<strong>Ateliér</strong>: EHL & KOUMAR ARCHITEKTI, s.r.o.  <br>
							<strong>Cena:</strong> Velká modrá kostka
						</span>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2019/celozivotni-dilo.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Cena za&nbsp;Celoživotní dílo</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title">Tuto cenu uděluje Rada Obce architektů.</span>
							<strong>Oceněný</strong>: Ing. arch. Vlado Milunič <br>
							<strong>Cena:</strong> Velká červená kostka
						</span>
					</div>
					<div class="gpa__col">
						
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Mateřská škola Nová Ruda, Vratislavice nad Nisou </span>
							<strong>Autor</strong>: Petr Stolín a Alena Mičeková  <br>
							<strong>Ateliér</strong>: CUBE LOVE s.r.o. <br>
							<strong>Cena:</strong> Malá modrá kostka
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
							<span class="gpa__title"><strong>Název projektu:</strong> Stezka nad vinohrady, Kobylí  </span>
							<strong>Autor</strong>: Jakub Roleček a Jiří Vojtěšek <br>
							<strong>Ateliér</strong>: KEEO4DESIGN s.r.o. <br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/dum-na-kozine.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Centrum současného umění DOX + </span>
							<strong>Autor</strong>:  Petr Hájek, Tereza Keilová, Cornelia Klien, Benedikt Markel, Martin Stoss <br>
							<strong>Ateliér</strong>: Petr Hájek ARCHITEKTI, s. r. o. <br>
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
							<span>Neuděleno</span>
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
						<h3 class="gpa__projectName">Výtvarné dílo v architektuře</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Zvonička, Bílovice – Lutotín </span>
							<strong>Autor</strong>: Ján Stempel a Jan Jakub Tesař  <br> 
							<strong>Ateliér</strong>: Stempel & Tesař architekti<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Lávka přes Dřetovický potok </span>
							<strong>Autor</strong>: Ondřej Císler a Petr Tej<br>
							<srong>Ateliér</srong>: Aoc architekti, Kloknerův ústav ČVUT v Praze <br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce kostela v Hodslavicích </span>
							<strong>Autor</strong>: Jakub Červenka a Václav Šuba<br>
							<strong>Ateliér</strong>: Objektor<br>
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
							<span class="gpa__title"><strong>Název projektu:</strong> Obnova nábřeží řeky Loučné v Litomyšli </span>
							<strong>Autor</strong>: Martin Rusina a Martin Frei, Jakub Finger a Mirka Svorová  <br>
							<strong>Ateliér</strong>: Rusina Frei architekti , Ateliér Partero <br>
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
							<span>Udělována od roku 2020 ve spolupráci s Českou radou pro šetrné budovy (CZGBC)</span>
						</span>
						
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání za rekonstrukci</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Vodárenská věž s observatoří</span>
							<strong>Autor</strong>: Petr Hájek, Tereza Keilová, Cornelia Klien, Benedikt Markel a Martin Stoss <br>
							<strong>Ateliér</strong>: Petr Hájek ARCHITEKTI s.r.o. <br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/panna-a-baba.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání za novostavbu</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Lávka přes řeku Lubinu v Příboře </span>
							<strong>Autor</strong>: Petr Tej, Marek Blank, Jan Mourek a Lukáš Vráblík <br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/kaplicka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání za rodinný dům</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rodinný dům v Litvínovicích  </span>
							<strong>Autor</strong>: Jiří Weinzettl <br>
							<strong>Ateliér</strong>: Atelier 111 architekti<br>
							<strong>Cena:</strong> Diplom
						</span>
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/kaplicka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání za interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Výstava Česká divadelní fotografie  </span>
							<strong>Autor</strong>: Marcela Steinbachová a Vít Holý <br>
							<strong>Ateliér</strong>: ateliér Skupina<br>
							<strong>Cena:</strong> Diplom
						</span>
						
					</div>
					<div class="gpa__col">
						<!--
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/kaplicka.png" alt="">
						</div>
						-->
						<h3 class="gpa__projectName">Čestné uznání za urbanismus</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Veřejný prostor Líbeznice, akupunkturní urbanismus </span>
							<strong>Autor</strong>: Jan Hájek, Jakub Havlas a Pavel Joba <br>
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
