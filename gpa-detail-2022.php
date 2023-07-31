<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>GPA 2022 | Grand Prix Architektů</title>

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
                2022
			</li>
		</ul>
	</div>
</section>

<section class="gpa">
	<div class="gpa__wrapper wrapper">
		<div class="gpa__row">
			<div class="gpa__col">
				<p>
					Hlavní cenu GPA&nbsp;– Národní cenu za&nbsp;architekturu pro&nbsp;rok 2022 získal projekt <strong>Kunsthalle</strong> autorů Jana Schindlera, Ludvíka Seka, Zuzany Drahotové z&nbsp;SCHINDLER SEKO ARCHITEKTI.
				</p>
			
				<p>
					Cenu za&nbsp;celoživotní, a&nbsp;tedy velkou červenou kostku, obdržel <strong>Václav Aulický</strong>. Tuto cenu uděluje rada Obce architektů. Mezi práce Václava Aulického patří televizní věž v&nbsp;Praze na&nbsp;Žižkově.
				</p>

				<p>
					V jednotlivých kategoriích uspěly projekty: <strong>Bytový dům Rezidence Michelangelova, Bořislavka Centrum, Paluba Hamburk, Vývojové centrum modularity, Lávka přes Labe v&nbsp;Nymburce, Dům v&nbsp;Lanškrouně, Zámek Děčín – restaurování glorietu v&nbsp;Růžové zahradě, Společenský sál Farního centra v&nbsp;Lidečku</strong>.
				</p>

				<p>
					Porota se&nbsp;rozhodla proto udělit ještě sedm čestných uznání autorům, jejichž práce porotce zaujala a&nbsp;zasloužila si ocenění. 
				</p>

				<p>
					<strong>Shortlist 50 projektů</strong> naleznete <a href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/shortlist">zde</a>.
					Vybrané projekty byly přihlášeny do&nbsp;těchto kategorií:
				</p>

				<ul class="list">
					<li><strong>Novostavba</strong>: 16 projektů</li>
					<li><strong> Rodinný dům</strong>: 8 projektů</li>
					<li><strong> Rekonstrukce</strong>: 12 projektů</li>
					<li><strong>Interiér</strong>: 6 projektů</li>
					<li><strong>Krajinářská architektura a&nbsp;zahradní tvorba</strong>: 3 projekty</li>
					<li><strong>Urbanismus</strong>: 1 projekt</li>
					<li><strong>Architektonický design, drobná architektura</strong></li>
					<li><strong>a výtvarné dílo v&nbsp;architektuře</strong>: 4 projekty</li>
				</ul>
			</div>

			<div class="gpa__col">
				<p>
					Na&nbsp;tiskové konferenci vystoupil předseda Obce architektů Ing.&nbsp;arch. Oleg Haman
					a <strong>prezident UIA</strong> / Mezinárodní unie architektů <strong>Jose Luis Cortéz</strong>.
				</p>

				<p>
					Prezident UIA, jíž je&nbsp;Obec architektů jedním ze&nbsp;zakládajících členů, José Luis Cortéz na&nbsp;tiskové
					konferenci ocenil práci členů Obce architektů: <i>„Chci při&nbsp;této příležitosti pogratulovat všem
					členům Obce architektů v&nbsp;České republice. Jsme velmi hrdí, že&nbsp;máme v&nbsp;Mezinárodní unii tak&nbsp;šikovné
					architekty, a&nbsp;oceňuji i&nbsp;úroveň Grand Prix." </i>
				</p>

				<p>
					Obec architektů a&nbsp;společnost
					GROHE pořádají již <strong>4. ročník Grand Prix Architektů Festival ve&nbsp;Veletržním
					paláci</strong>. V&nbsp;rámci tohoto festivalu budou probíhat prezentace 50 vybraných projektů, ze
					kterých porota vybere ve&nbsp;druhém kole hodnocení finální projekty v&nbsp;jednotlivých
					kategoriích a&nbsp;hlavní cenu GPA&nbsp;– Národní cenu za&nbsp;architekturu 2022.
				</p>
				<p>
					Letošního XXIX. ročníku Grand Prix Architektů – Národní ceny
					za architekturu se&nbsp;účastní <strong>255 architektonických projektů</strong>, které&nbsp;se&nbsp;budou ucházet o
					hlavní cenu GPA&nbsp;Národní cena za&nbsp;architekturu 2022.&nbsp;Je&nbsp;to&nbsp;nejvyšší počet přihlášených
					projektů po&nbsp;covidové pandemii.
				</p>
				<div class="buttonRow buttonRow--left">
					<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2022" target="_blank" class="button button--black button--arrow">
						Všechny projekty
						<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('./components/partners/auspices-2022.php'); ?>

<section class="winningProjects gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#winning-projects" class="gpTabs__navItem">Vítězné projekty</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="winning-projects">
		<div class="gpTabs__content">
			<div class="gpa gpa--projects">
				<div class="gpa__row gpa__row--projects row">
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/narodni-cena.png" alt="">
						</div>
						<h3 class="gpa__projectName">Národní cena za&nbsp;architekturu 2022</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Kunsthalle</span>
							<strong>Autoři</strong>: Jan Schindler, Ludvík Seko, Zuzana Drahotová SCHINDLER SEKO ARCHITEKTI<br>
							<strong>Ateliér</strong>: SCHINDLER SEKO ARCHITEKTI <br>
							<strong>Cena:</strong> Velká modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/573">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/celozivotni-dilo.png" alt="">
						</div>
						<h3 class="gpa__projectName">Cena za&nbsp;Celoživotní dílo</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title">Tuto cenu uděluje Rada Obce architektů.</span>
							<strong>Oceněný</strong>: Václav Aulický <br>
							<strong>Cena:</strong> Velká červená kostka
						</span>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/novostavba-1.png" alt="">
						</div>
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Lávka přes Labe v&nbsp;Nymburce</span>
							<strong>Autor</strong>: Jiří Stráský, Leonard Šopík, Jan Pozdíšek, Karel Zlatuška<br>
							<strong>Ateliér</strong>: Atelier Stráský, Hustý a&nbsp;partneři, s. r.&nbsp;o. (SHP)&nbsp;Brno <br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/676">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/novostavba-2.png" alt="">
						</div>
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Společenský sál Farního centra v&nbsp;Lidečku</span>
							<strong>Autor</strong>: Jan Vojtíšek, Jakub Staník<br>
							<strong>Ateliér</strong>: studio AEIOU s. r.&nbsp;o. <br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/622">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/rekonstrukce.png" alt="">
						</div>
						<h3 class="gpa__projectName">Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Zámek Děčín – restaurování glorietu v&nbsp;Růžové zahradě</span>
							<strong>Autor</strong>: Tomáš Efler, Václav Girsa, Miloslav Hanzl, Jana Strnadová, Jaroslav Svěrek <br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/648">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/rodinny-dum.png" alt="">
						</div>
						<h3 class="gpa__projectName">Rodinný dům</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Dům v&nbsp;Lanškrouně</span>
							<strong>Autor</strong>: Martin Neruda <br>
							<strong>Ateliér</strong>: Martin Neruda Architektura<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/491">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/krajinna-architektura.png" alt="">
						</div>
						<h3 class="gpa__projectName">Krajinářská architektura</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Paluba Hamburk</span>
							<strong>Autor</strong>: Ing.&nbsp;arch. Bohuslav Strejc. Ing.&nbsp;Ondřej Janout, Ing.&nbsp;Jan Běl, Ing.&nbsp;Lucie Tlustá <br>
							<strong>Ateliér</strong>: projectstudio8 <br>
							<strong>Cena</strong>: Malá zelená kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/384">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/setrna-stavba.png" alt="">
						</div>
						<h3 class="gpa__projectName">Šetrná stavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Bytový dům Rezidence Michelangelova</span>
							<strong>Autor</strong>: Ing.&nbsp;arch. Luděk Podlipný, ing.&nbsp;Martin Sladký, ing.&nbsp;arch. Pavel Zezula, ing.&nbsp;arch. Markéta Talašová<br>
							<strong>Ateliér</strong>: Podlipný Sladký architekti s.r.o. <br>
							<strong>Cena:</strong> Malá stříbrná kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/412">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/interier.png" alt="">
						</div>
						<h3 class="gpa__projectName">Interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Vývojové centrum modularity</span>
							<strong>Autor</strong>: Ing.&nbsp;arch. Ondřej Chybík, Ing.&nbsp;arch. Michal Krištof<br>
							<strong>Autor venkovních úprav</strong>: Ing.&nbsp;Zdeněk Sendler<br>
							<strong>Ateliér</strong>: CHYBIK + KRISTOF<br>
							<strong>Cena:</strong> Malá žlutá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/590">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/urbanismus.png" alt="">
						</div>
						<h3 class="gpa__projectName">Urbanismus</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Bořislavka Centrum</span>
							<strong>Autor</strong>: Jan Aulík, Leoš Horák | Spoluautoři: Jakub Fišer, David Zalabák, Jakub Hemzal, Gabriela Králová, Alena Sedláková, Petra Coufal Skalická, Eva Mašková, Jan Dluhoš<br>
							<strong>Ateliér</strong>: Aulík Fišer architekti, s.r.o.<br>
							<strong>Cena:</strong> Malá fialová kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/370">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/cestne-uznani-1.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> V7_Underground</span>
							<strong>Autoři</strong>: Re_place.cz a&nbsp;U&nbsp;<br>
							<strong>Ateliér</strong>: U&nbsp;studio s. r.&nbsp;o. <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/440">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/cestne-uznani-2.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Sportovní hala Základní školy v&nbsp;Novém Hrozenkově</span>
							<strong>Autoři</strong>: Janica Šipulová, Martin Sládek <br>
							<strong>Ateliér</strong>:CONSEQUENCE FORMA architects <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/499">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/cestne-uznani-3.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Vodojem s&nbsp;vyhlídkou na&nbsp;Trosky</span>
							<strong>Autoři</strong>: Zdenek Balík, Jakub Dvořák <br>
							<strong>Ateliér</strong>: ZETTE ateliér <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/529">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/cestne-uznani-5.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Mezi lukami</span>
							<strong>Autor</strong>: Daniela Hradilová <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/531">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/cestne-uznani-4.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Expozice "Skrytý středověk" v&nbsp;suterénu zámku Bílovec</span>
							<strong>Autor</strong>: Ing.&nbsp;arch. Martin Materna, Ing.&nbsp;arch. Adéla Kudlová , Ing.&nbsp;arch. Adam Weczerek - WMA architekti, spolupráce Art consultancy - Mgr.&nbsp;Ivan Berger, archeologicko-historická část - Mgr.&nbsp;František Kolář, Mgr.&nbsp;Petra Kaniová <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/568">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/cestne-uznani-6.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce a&nbsp;nástavba vily Wellnerova</span>
							<strong>Autor</strong>: Mgr.&nbsp;Ing.&nbsp;arch. Jan Pospíšil/ návrh interiéru Ing.&nbsp;Jana Trundová <br>
							<strong>Ateliér</strong>: studioPAB s.r.o. <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/565">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2022/cestne-uznani-7.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Obnova vrchnostenské zahrady u&nbsp;hradu Pernštejn</span>
							<strong>Autor</strong>: Marek Tichý, Přemysl Krejčiřík, Kamila Krejčiříková<br>
							<strong>Ateliér</strong>: Archatt, Krejčiříkov <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/719">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('components/jury/jury2022.php'); ?>

<section class="press gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#press" class="gpTabs__navItem">Tiskové zprávy</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="press">
		<div class="gpTabs__content">
			<ul class="downloadList">
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/vysledky-2022-pdf/">Tisková zpráva 31. 10. 2022 - výsledky (PDF)</a>
				</li>
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/shortlist-2022-pdf/">Tisková zpráva 14. 9. 2022 - shortlist 50 finalistů (PDF)</a>
				</li>
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/vyhlaseni-rocniku-2022/">Tisková zpráva 1. 3. 2022 - vyhlášení ročníku (PDF)</a>
				</li>
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/prodlouzeni-terminu-prihlaseni-do-souteze-2022/">Tisková zpráva 13. 7. 2022 - prodloužení termínu přihlášení do&nbsp;soutěže (PDF)</a>
				</li>
			</ul>
		</div>
	</div>
</section>

<section class="media gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#media" class="gpTabs__navItem">Média</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="media">
		<div class="gpTabs__content">
			<h3>Reportáže</h3>
			<ul class="list">
				<li>
					<a href="https://www.ceskatelevize.cz/porady/1097206490-udalosti-v-kulture/222411000121031/cast/943541/" target="_blank">Česká televize - Události v kultuře - 31. říjen 2022</a>
				</li>
				<li>
					<a href="https://www.tvarchitect.com/video/reportaz-slavnostni-predavani-cen-grand-prix-architektu-narodni-ceny-za-architekturu-2022/" target="_blank">Tv Architect - Slavnostní předávání cen - 31. říjen 2022</a>
				</li>
				<li>
					<a href="https://www.ceskatelevize.cz/porady/1097181328-udalosti/222411000101101/cast/943832/" target="_blank">Česká televize - Události - 1. listopad 2022</a>
				</li>
				<li>
					<a href="https://www.ceskatelevize.cz/porady/1097206490-udalosti-v-kulture/222411000121101/cast/943843/" target="_blank">Česká televize - Události v kultuře - 1. listopad 2022</a>
				</li>
				<li>
					<a href="https://www.ceskatelevize.cz/porady/1096902795-studio-6/222411010111102/cast/943879/" target="_blank">Česká televize - Studio 6 II - 2. listopad 2022</a>
				</li>
			</ul>

			<h3>Články</h3>

			<ul class="list">
				<li><a href="https://forbes.cz/zlata-kunsthalle-prestavbe-trafostanice-nalezi-narodni-cena-za-architekturu/" target="_blank">Forbes - Zlatá Kunsthalle. Přestavbě trafostanice náleží Národní cena za architekturu</a></li>
				<li><a href="https://ct24.ceskatelevize.cz/kultura/3540447-narodni-cena-za-architekturu-se-zabydlela-v-kunsthalle-praha-za-premenu-trafostanice" target="_blank">ČT24 - Národní cena za architekturu se zabydlela v Kunsthalle Praha. Za přeměnu trafostanice na galerii</a></li>
				<li><a href="https://www.irozhlas.cz/kultura/grand-prix-architektu-narodni-cena-za-architekturu-2022-jan-schindler-kunsthalle_2210312358_nov" target="_blank">iRozhlas - Z 255 projektů vybrala porota za vítěze Národní ceny za architekturu pro rok 2022 Kunsthalle</a></li>
				<li><a href="https://www.asb-portal.cz/aktualne/narodni-cenu-za-architekturu-pro-rok-2022-ziskala-prazska-kunsthalle">ASB - Národní cenu za architekturu pro rok 2022 získala pražská Kunsthalle</a></li>
				<li><a href="https://denikn.cz/minuta/998902/" target="_blank">DeníkN - Grand Prix Obce architektů zná vítěze</a></li>
				<li><a href="https://www.archiweb.cz/en/n/competition/v-grand-prix-architektu-zvitezila-prazska-kunsthalle" target="_blank">Archiweb - V Grand Prix Architektů zvítězila pražská Kunsthalle</a></li>
				<li><a href="https://magazin.aktualne.cz/grand-prix-architektu-2022-ziskal-projekt-prazske-kunsthalle/r~25ca807c596611ed8980ac1f6b220ee8/" target="_blank">Aktualne.cz - Grand Prix Architektů 2022 získal projekt pražské Kunsthalle</a></li>
				<li><a href="https://www.tvarchitect.com/clanek/zname-viteze-grand-prix-architektu-narodni-ceny-za-architekturu-2022/" target="_blank">TV Architect - Známe vítěze Grand Prix Architektů – Národní ceny za architekturu 2022</a></li>
				<li><a href="https://www.archinfo.sk/diskusia/blog/sutaze/vysledky-grand-prix-architektu-2022.html" target="_blank">Archinfo - Výsledky Grand Prix Architektů 2022</a></li>
				<li><a href="https://cc.cz/galerie-kunsthalle-vyhrala-grand-prix-architektu-oceneni-ziskal-i-autor-zizkovske-televizni-veze/" target="_blank">CzechCrunch - Galerie Kunsthalle vyhrála Grand Prix Architektů. Ocenění získal i autor žižkovské televizní věže</a></li>
				<li><a href="https://www.earch.cz/revue/clanek/grand-prix-architektu-2022-vyhrala-kunsthalle-cenu-za-celozivotni-dilo-ziskal-vaclav-aulicky" target="_blank">Earch - Grand Prix Architektů 2022 vyhrála Kunsthalle. Cenu za celoživotní dílo získal Václav Aulický</a></li>
				<li><a href="https://www.newstream.cz/reality/prazska-tate-modern-ziskala-prestizni-architektonickou-cenu" target="_blank">Newstream - Pražská Kunsthalle má prestižní Grand Prix Architektů. Podívejte se</a></li>
				<li><a href="https://echo24.cz/a/S3YQV/zpravy-domaci-fotogalerie-grand-prix-architekti-cena-vitez-projekt-kunsthalle" target="_blank">Echo24 - Grand Prix Architektů získal projekt pražské Kunsthalle</a></li>
				<li><a href="https://refresher.cz/124221-Ceska-architektonicka-soutez-zna-sve-viteze-Toto-jsou-nase-nejlepsi-stavby" target="_blank">Refresher - Česká architektonická soutěž zná své vítěze. Toto jsou naše nejlepší stavby</a></li>
				<li><a href="https://www.ceskenoviny.cz/zpravy/grand-prix-architektu-ziskal-projekt-prazske-kunsthalle/2279250" target="_blank">ČTK - Grand Prix Architektů získal projekt pražské Kunsthalle</a></li>
				<li><a href="https://cesky.radio.cz/grand-prix-architektu-ziskal-projekt-prazske-kunsthalle-8765744" target="_blank">Český Rozhlas - Grand Prix Architektů získal projekt pražské Kunsthalle</a></li>
				<li><a href="https://novojicinsky.denik.cz/zpravy_region/bilovec-zamek-skryty-stredovek.html" target="_blank">Novojičínský Deník - Skrytý středověk v Bílovci na zámku získal ocenění, už jste ho viděli?</a></li>
				<li><a href="https://www.kurzy.cz/zpravy/679589-plzenska-paluba-hamburk-vyhrala-kategorii-krajinarske-architektury-a-zahradni-tvorby-v-narodni-cene/" target="_blank">Kurzy.cz - Plzeňská Paluba Hamburk vyhrála kategorii Krajinářské architektury a zahradní tvorby v Národní ceně architektury</a></li>
				<li><a href="https://www.expresfm.cz/aktualne/prazska-kunsthalle-ziskala-cenu-za-architekturu-produkce-vina-bude-letos-nizsi/" target="_blank">Expres FM - Pražská Kunsthalle získala cenu za architekturu, produkce vína bude letos nižší</a></li>
				<li><a href="https://ozveny24.cz/2022/11/01/s3yqv/" target="_blank">Ozvěny24 - Grand Prix Architektů získal projekt pražské Kunsthalle</a></li>
				<li><a href="https://www.tvarchitect.com/clanek/vime-ktere-projekty-postoupily-do-finale-gpa-narodni-ceny-za-architekturu/"target="_blank">TV Architekt - Víme, které projekty postoupily do finále GPA - Národní ceny za architekturu</a></li>
				<li><a href="https://www.tvarchitect.com/clanek/vime-ktere-vyznamne-osobnosti-architektury-letos-vyberou-grand-prix-architektu-narodni-cena-za-architekturu-2022/" target="_blank">TV Architekt - Víme, které významné osobnosti architektury letos vyberou Grand Prix Architektů - Národní cena za architekturu 2022</a></li>
			</ul>
		</div>
	</div>
</section>

<section class="gallery gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#gallery" class="gpTabs__navItem">Galerie</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="gallery">
		<div class="gpTabs__content">
			<div class="gallery">
				<div class="gallery__group">
					<a class="gallery__link" href="<?php echo $baseurl ?>/galerie-galavacer-2022/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/2022/galavecer/thumb/default.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Galavečer</strong> <br>
							slavnostní předávání
						</h2>
					</a>
                    <a class="gallery__link" href="<?php echo $baseurl ?>/galerie-festival-2022/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/2022/festival/thumb/festival-2.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Festival</strong>
						</h2>
					</a>
                
                    <a class="gallery__link" href="<?php echo $baseurl ?>/galerie-2022-manes-tiskova-konference/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/2022/tiskova-konference-manes/thumb/galerie-1.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Tisková konference</strong> <br>
                            Mánes
						</h2>
					</a>
                    <a class="gallery__link" href="<?php echo $baseurl ?>/galerie-2022-porota-v-praze/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/2022/porota/thumb/default.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Porota v&nbsp;Česku</strong>
						</h2>
					</a>
                </div>
			</div>
		</div>
	</div>
</section>

<section class="gallery gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#projects" class="gpTabs__navItem">Projekty</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="projects">
		<div class="gpTabs__content">
			<div class="gpTabs__buttons">
				<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/vitezove" class="button button--black button--arrow button--arrow">Vítězové</a>
				<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/shortlist" class="button button--black button--arrow button--arrow">Shortlist</a>
				<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2022" class="button button--black button--arrow button--arrow">Všechny projekty</a>
			</div>
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

<?php include('./components/partners/2022.php'); ?>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>
