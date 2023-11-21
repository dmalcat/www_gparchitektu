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
				Grand Prix Architektů – Národní cena za architektura pro rok 2023 získalo <strong>Sídlo Kloboucké Lesní</strong> autorů Jana Macha, Jana Vondráka a Filipa Cerhy. 
			</p>

			<p>
				Galavečer se konal 30. 10. 2023 ve Velké dvoraně Veletržního paláce v Praze.
			</p>

 			<p>
				Cenu za celoživotní dílo a velkou červenou kostku získala <strong>Zdeňka Vydrová</strong>.
			</p>
			
			<p>
				Zdeňka Vydrová je autorkou nebo se autorsky podílela na mnoha architektonických návrzích nejrůznějších měřítek a společenského významu. Z mnoha jejích realizací je zajímavé uvést: rekonstrukci pavilonu G na Brněnském výstavišti, rekonstrukci Uměleckoprůmyslového muzea v Brně, lávku s novým vstupem do areálu Výstaviště, nebo novostavbu Galerie Pakosta v Litomyšli.
			</p>

			<p>
				<i>“Jsme rádi, že se nám podařilo v jubilejním 30. ročníku mít vynikající porotu, která pečlivě vybírala a ukázala na zajímavé projekty, které se zde realizují a stala se tak zrcadlem okolního světa k naší tvorbě, architektuře, kterou tu vytváříme.”</i> uvedl předseda Oleg Haman k XXX. ročníku.
			</p>
			</div>

			<div class="gpa__col">
				<p>
					Shortlist 50 projektů naleznete <a href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist" target="_blank">zde</a>. Vybrané projekty byly přihlášeny do těchto kategorií:
				</p>

				<ul class="list">
					<li><strong>Novostavba</strong>: 13 projektů</li>
					<li><strong> Rodinný dům</strong>: 1 projekt</li>
					<li><strong> Rekonstrukce</strong>: 18 projektů</li>
					<li><strong>Interiér</strong>: 4 projekty</li>
					<li><strong>Krajinářská architektura a&nbsp;zahradní tvorba</strong>: 3 projekty</li>
					<li><strong>Urbanismus</strong>: 3 projekty</li>
					<li>
						<strong>Architektonický design, drobná architektura <br>
						a výtvarné dílo v&nbsp;architektuře</strong>: 8 projektů
					</li>
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

<section class="winningProjects gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#winning-projects" class="gpTabs__navItem">Vítězné projekty</a>
	</div>
	<div class="gpTabs__wrapper gpTabs__wrapper--active wrapper" id="winning-projects">
		<div class="gpTabs__content">
			<div class="gpa gpa--projects">
				<div class="gpa__row gpa__row--projects row">
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/sidlo-kloboucke-lesni.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Národní cena za&nbsp;architekturu 2023</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Sídlo Kloboucké Lesní</span>
							<strong>Autoři</strong>: Ing. Arch. Jan Mach, Ing. Arch. Jan Vondrák, Ing. Arch. Filip Cerha<br>
							<strong>Ateliér</strong>: mjölk architekti <br>
							<strong>Cena:</strong> Velká modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/1110">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/zdenka-vydrova.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Cena za&nbsp;Celoživotní dílo</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Oceněný</strong>: Zdeňka Vydrová </span>
							<strong>Cena:</strong> Velká červená kostka <br>
							<span>Tuto cenu uděluje Rada Obce architektů.</span>
						</span>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/revitalizace-skoly-ceskobrodska-na-budovu.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Šetrná stavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Revitalizace školy Českobrodská na chytrou, udržitelnou, bezpečnou, provozně energeticky a uhlíkově pozitivní budovu</span>
							<strong>Autoři</strong>: Jiří Tencar, Pavel Šulc, Jiří Škopek, Michaela Václavská, Norbert Glejdrua, Marek Machač, Monika Hrubešová, Lucie Roubalová, David Nývlt, Patricia Sičáková, Karolína Vojáčková, Ondřej Kramer, Michal Mazanec, Lukáš Skládal, Vojtěch Pražák, Ondřej Fábry<br>
							<strong>Ateliér</strong>: ECOTEN a Pavel Šulc <br>
							<strong>Cena:</strong> Malá stříbrná kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/1081">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/lavka-v-litomysli.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Urbanismus</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Lávka v Litomyšli</span>
							<strong>Autor</strong>: Lukáš Ehl, Tomáš Koumar, Ladislav Dvořák, Ladislav Šašek<br>
							<strong>Ateliér</strong>: EHL & KOUMAR ARCHITEKTI s.r.o.
							<strong>Cena</strong>: Malá fialová kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/911">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/park-na-moravskem-namesti.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Krajinářská architektura a zahradní tvorba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Park na Moravském náměstí v Brně</span>
							<strong>Autoři</strong>: Janica Šipulová, Martin Sládek, Klára Zahradníčková <br>
							<strong>Ateliér</strong>: CONSEQUENCE FORMA architects
							<strong>Cena:</strong> Malá zelená kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/947">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/edukacni-centrum-ceske-filharmonie-rudolfinum.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Edukační centrum České filharmonie Rudolfinum, Praha</span>
							<strong>Autoři</strong>: Pavel Novy, Vít Svoboda, spolupráce: Filip Tóth, Jitka Mácová <br>
							<strong>Ateliér</strong>: 0,5 Studio<br>
							<strong>Cena:</strong> Malá žlutá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/1034">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/plato-contemporary-art-gallery.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> PLATO Contemporary Art Ostrava</span>
							<strong>Autoři</strong>: Robert Konieczny, Michał Lisiński, Dorota Skóra <br>
							<strong>Ateliér</strong>: Robert Konieczny KWK Promes <br>
							<strong>Cena</strong>: Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/965">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/kostel-nanebevzeti-panny-marie.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Kostel Nanebevzetí pany Marie v Oseku</span>
							<strong>Autor</strong>: František Koňařík, spolupráce: Jindřich Koska, Milena Nečásková, Tomáš Koňařík, Marek Koňařík, Pavel Siváň, Jan Jiruška, Pavel Dolanský, Petr Vlček, Roman Souček, Jindřich Jirsa, Adéla Hoblíková<br>
							<strong>Ateliér</strong>: Ateliér IFK Litvínov <br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/1046">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/obnova-barokni-kaple-sv-vaclava-v-praze.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Obnova barokní kaple sv. Václava v Praze</span>
							<strong>Autor</strong>: Václav Šuba, Jan Vinař, Filip Chmel<br>
							<strong>Ateliér</strong>: Studio OBJEKTOR<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/1047">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/kviff-tv-park.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Architektonický design drobná architektura a výtvarné dílo v architektuře</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> KVIFF.TV Park</span>
							<strong>Autor</strong>: Ondřej Chybík, Michal Kryštof, Kristýna Blažíčková, Ondřej Mundi, Martin Holý, Ondřej Jelínek, Alex Montolio Font<br>
							<strong>Ateliér</strong>: CHYBIK + KRISTOF<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/755">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/komunitni-bytovy-dum-pro-seniory-krenovice.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Komunitní bytový dům pro seniory Křenovice</span>
							<strong>Autoři</strong>: Adam Koten, Ondrej Palenčar, Štěpán Vašut<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/757">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/vinarstvi-pratele-pavlova.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Vinařství přátelé Pavlova</span>
							<strong>Autoři</strong>: Marek Jan Štěpán, Jan Vodička, Martin Kopecký, Dalibor Klusáček, Jan Martine, Alena Dvořáčková <br>
							<strong>Ateliér</strong>: Atelier Štěpán s.r.o. <br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/803">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/zakladna-technickych-sluzeb-v-praze.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Základna technických služeb v Praze - Lysolajích</span>
							<strong>Autoři</strong>: Vojtěch Kaas, Jan Kalivoda <br>
							<strong>Ateliér</strong>: PROGRES architekti <br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/815">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/bytovy-dum-bratislavska.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Bytový dům Bratislavská 51</span>
							<strong>Autoři</strong>: Roman Gale, Radek Pasterný, David Bureš <br>
							<strong>Ateliér</strong>: CL3 s.r.o.<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/985">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/poliklinika-lesna.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Poliklinika Lesná</span>
							<strong>Autoři</strong>: Ing. arch. David Kudla, Ing. arch. Oldřich Fikejs <br>
							<strong>Ateliér</strong>: dkarchitekti, s.r.o. <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/752">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/tea-house-pavilon.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Architektonický design, drobná architektura a výtvarné dílo v architektuře</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> TEA HOUSE PAVILION</span>
							<strong>Autor</strong>: Andrej Olah, Filip Marčák, Jana Filípková, Alexandra Májska, studentští spoluautoři: Maria Pawlova, Katarzyna Oowczarska, Julia Kurni, Aleksandra Gospodarek, Aliskja Losi, Jan Chmurski, Maciej Kuratzyk, Michał Teodorczyk<br>
							<strong>Ateliér</strong>: GRAU <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/760">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/rekonstrukce-karlova-namesti-v-trebici.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Urbanismum</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce Karlova náměstí v Třebíči</span>
							<strong>Autoři</strong>: Atelier RAW, Ivan Wahla, Petr Muthina <br>
							<strong>Autor Kašny prstence:</strong> H3T architekti s. r. o. <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/888">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/expozice-ve-vezi-smrti.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Architektonický design, drobná architektura a výtvarné dílo v architektuře</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Expozice ve Věži smrti</span>
							<strong>Autoři</strong>: Tereza Kabelková, Jiří Kabelka, Jakub Jareš (historik) <br>
							<strong>Ateliér</strong>: Studio COSMO <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/793">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/kocanda-kravsko-II.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Rekonstrukce </h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Kocanda Kravsko II Sádrovna + Třídírna</span>
							<strong>Autoři</strong>: Barbora Hora, Jan Hora, Jan Veisser, Maroš Drobňák, Klára Jordánová - krajinné úpravy <br>
							<strong>Ateliér</strong>: ORA (originální regionální architektura) <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/admin/event/3/project/1026">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/stodola-v-posumavi.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Stodola v Pošumaví</span>
							<strong>Autoři</strong>: Jan Holub, Tomáš Hanus <br>
							<strong>Ateliér</strong>: BYRÓ architekti <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/776">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/gocarova-galerie.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Gočárova galerie</span>
							<strong>Autoři</strong>: Petr Všetečka, Robert Václavík, Karel Menšík, Tereza Novotná <br>
							<strong>Ateliér</strong>: TRANSAT architekti <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/872">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/skolka-montessori.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Školka Montessori v Jablonci nad Nisou</span>
							<strong>Autoři</strong>: Jan Mach, Jan Vondrák, Pavlína Mullerova <br>
							<strong>Ateliér</strong>: mjölk architekti, projektový ateliér David <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/1123">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/rekonstrukce-a-dostavba-namesti.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Urbanismus</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce a dostavba náměstí ve Vacově</span>
							<strong>Autoři</strong>: Zbyněk Skála <br>
							<strong>Ateliér</strong>: STA, projektový ateliér, s.r.o. <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/1095">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/volnocasovy-areal-jammertal-v-parku-folimanka.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Krajinářská architektura a zahradní tvorba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Volnočasový Areál Jammertal v parku Folimanka</span>
							<strong>Autoři</strong>: Jana Mastíková <br>
							<strong>Ateliér</strong>: LOXIA <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/1067">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/premena-zameckych-pivovarskych-prostor-na-bazen-a-spa.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Přeměna zámeckých pivovarských prostor na bazén a spa</span>
							<strong>Autoři</strong>: Barbora Škorpilova, Aleš Marek, Jan Šulcek <br>
							<strong>Ateliér</strong>: Mimolimit s.r.o, AED Project, Alston <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/879">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/rekonstrukce-a-pristavba-zs-dobrichovice.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rekonstrukce a přístavba ZŠ Dobřichovice</span>
							<strong>Autoři</strong>: Oldřich Hájek, Pavel Lesenský, Olga Kostřížová, Jakub Koníř <br>
							<strong>Ateliér</strong>: Šafer Hájek architekti s.r.o. <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/943">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/vohancice-komplex-protieroznich-opatreni-a-krajinarskych-uprav.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Krajinářská architektura</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Vohančice - Komplex protierozních opatření a krajinářských úprav</span>
							<strong>Autoři</strong>: Jana Janíková, Denisa Hrubanová <br>
							<strong>Ateliér</strong>: Zahradní a krajinářská tvorba, spol. s r.o. <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/1122">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2023/cestna-uznani/revitalizace-kostela-ceskobratrske-cirkve-evangelicke.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v kategorii Interiér</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Revitalizace kostela Českobratrské církve evangelické na Smíchově</span>
							<strong>Autoři</strong>: Miroslav Cikán, Pavla Melková <br>
							<strong>Ateliér</strong>: MCA atelier <br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist/1131">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/empty.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Rodinný dům</h3>
						<span class="gpa__projectDesc">
							<span>V této kategorii letos cena udělena nebyla.</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('components/jury/jury2023.php'); ?>

<section class="press gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#press" class="gpTabs__navItem">Tiskové zprávy</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="press">
		<div class="gpTabs__content">
			<ul class="downloadList">
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/vysledky-2023-pdf/">Tisková zpráva 1. 11. 2023 - výsledky (PDF)</a>
				</li>
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/shortlist-2023-pdf/">Tisková zpráva 21. 9. 2023 - shortlist 50 finalistů (PDF)</a>
				</li>
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
		<a href="#gallery" class="gpTabs__navItem">Galerie</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="gallery">
		<div class="gpTabs__content">
			<div class="gallery">
				<div class="gallery__group">
					<a class="gallery__link" href="<?php echo $baseurl ?>/galerie-2023-galavecer/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/2023/galavecer/thumb/gallery-194.jpeg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Galavečer</strong> <br>
							slavnostní předání
						</h2>
					</a>
					<a class="gallery__link" href="<?php echo $baseurl ?>/galerie-2023-galavecer-fotokoutek/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/2023/fotokoutek/thumb/gallery-54.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Galavečer</strong> <br>
							fotokoutek
						</h2>
					</a>
					<a class="gallery__link" href="<?php echo $baseurl ?>/galerie-2023-festival/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/2023/festival/thumb/gallery-7.jpeg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Festival</strong> <br>
						</h2>
					</a>
					<a class="gallery__link" href="<?php echo $baseurl ?>/galerie-2023-prednaska-amandy-levete/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/2023/prednaska-amandy-levete/thumb/gallery-1.jpeg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Přednáška</strong> <br>
							Amandy Levete
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
			<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/vitezove" target="_blank" class="button button--black button--arrow">
				Vítězné projekty
				<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
			</a>
			<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2023/shortlist" target="_blank" class="button button--black button--arrow">
				Shortlist
				<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
			</a>
			<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2023" target="_blank" class="button button--black button--arrow">
				Všechny projekty
				<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
			</a>
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
