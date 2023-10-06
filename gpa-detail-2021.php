<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>GPA 2021 | Grand Prix Architektů</title>

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
                2021
			</li>
		</ul>
	</div>
</section>

<section class="gpa">
	<div class="gpa__wrapper wrapper">
		
		<div class="gpa__row">
			<div class="gpa__col">
				<p>
					Grand Prix Architektů – Národní cena za&nbsp;architekturu 2021 vyhrál projekt
					<strong>Přestavba menzy koleje 17.&nbsp;listopady FHS Univerzity Karlovy</strong>
				</p>
				<p>
					<strong>Praha 9. 11. 2021</strong> – Letošní ročník XXVIII. Ročník Grand Prix Architektů – Národní ceny za&nbsp;architekturu 2021 vyhrál projekt autorů Ladislava Kuby, Tomáše Pilaře a&nbsp;Martina Klimeckého / Ateliér: Kuba & Pilař architekti s.r.o. – Přestavba menzy koleje 17.&nbsp;listopadu Fakulty Humanitních studiích Univerzity Karlovy.
				</p>
				<p>
					Autoři obdrželi z&nbsp;rukou rektora ČVUT v&nbsp;Praze Vojtěcha Petráčka Velkou modrou kostku z&nbsp;dílny Bohumila Eliáše.
				</p>
				<p>
					Každoročně je&nbsp;součástí slavnostního večera, který&nbsp;se&nbsp;letos konal v&nbsp;Betlémské kapli, vyhlášena i&nbsp;cena za&nbsp;Celoživotní dílo, kterou uděluje Rada Obce architektů. Tato cena byla udělena Ing.&nbsp;arch. Viktoru Rudišovi.
				</p>
				<div class="buttonRow buttonRow--left">
					<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021">
						Všechny projekty
						<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
					</a>
				</div>
			</div>
			<div class="gpa__col">
				<p>
					Ing.&nbsp;arch. Viktor Rudiš představuje významnou osobnost naší architektonické scény. Jeho pracovní i&nbsp;osobní život je&nbsp;spjat především s&nbsp;Brnem. Za&nbsp;Rekonstrukci a&nbsp;dostavbu pavilonu G na&nbsp;brněnském výstavišti získal Grand Prix Architektů v&nbsp;roce 1996.
				</p>
				<p>
					<i>„V&nbsp;letošním roce byl&nbsp;velký rozdíl v&nbsp;práci poroty a&nbsp;to&nbsp;především v&nbsp;tom, že&nbsp;porota si nevybrala ze&nbsp;svého středu předsedu. Rozhodování bylo tedy jednomyslné, všechny vítězné projekty získaly plný počet, to&nbsp;je&nbsp;5 hlasů. Již v&nbsp;prvním kole, kdy&nbsp;porota rozhodovala o&nbsp;výběru finalistů, mělo mnoho projektů 4 nebo 5 hlasů. Proto musel být shortlist finalistů rozšířen z&nbsp;50 na&nbsp;55.&nbsp;Je&nbsp;vynikající, že&nbsp;hlavní cena je&nbsp;hrazena z&nbsp;veřejných financí. V&nbsp;loňském roce tomu bylo stejně, kdy&nbsp;vyhrála Městská hala Modřice,“</i> uvedl k&nbsp;udílení cen Oleg Haman, předseda Obce architektů.
				</p>
			</div>
        </div>
	</div>
</section>

<?php include('./components/partners/auspices-2021.php'); ?>

<section class="winningProjects gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#winning-projects" class="gpTabs__navItem">Vítězné projekty</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="winning-projects">
		<div class="gpTabs__content">
			<div class="gpa gpa--projects">
				<div class="gpa__row row">
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/2021/vitez.jpg" alt="">
						</div>
						<h3 class="gpa__projectName">Národní cena za&nbsp;architekturu 2021</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Fakulta humanitních studií UK – přestavba menzy Koleje 17. listopadu</span>
							<strong>Autor</strong>: Ladislav Kuba, Tomáš Pilař, Martin Klimecký <br>
							<strong>Ateliér</strong>: Kuba & Pilař architekti s.r.o. <br>
							<strong>Cena:</strong> Velká modrá kostka
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/127">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/viktor-rudis.png" alt="">
						</div>
						<h3 class="gpa__projectName">Cena za&nbsp;Celoživotní dílo</h3>
						<span class="gpa__projectDesc">
							Tuto cenu uděluje Rada Obce architektů. <br>
							Ing.&nbsp;arch. Viktor Rudiš <br>
							<strong>Cena:</strong> Velká červená kostka
						</span>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/novostavba.png" alt="">
						</div>
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Přístavba kanceláře ve&nbsp;Vysokém Mýtě</span>
							<strong>Autor</strong>: Martin Prokš, Marek Přikryl <br>
							<strong>Ateliér</strong>: Prokš Přikryl architekti <br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/175">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/radnice-praha-7.png" alt="">
						</div>
						<h3 class="gpa__projectName">Renovace</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Radnice pro&nbsp;Prahu 7</span>
							<strong>Autor</strong>: Ing.&nbsp;arch. Vojtěch Sosna, Ing.&nbsp;arch. Jakub Straka, Ing.&nbsp;arch. Jáchym Svoboda <br>
							<strong>Ateliér</strong>: Atelier bod architekti s.r.o.<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/117">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/libusina.png" alt="">
						</div>
						<h3 class="gpa__projectName">Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Zpracování projektové dokumentace na&nbsp;rekonstrukci Libušína</span>
							<strong>Ateliér</strong>: Masák & Partner s.r.o.<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/31">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/dum-na-kozine.png" alt="">
						</div>
						<h3 class="gpa__projectName">Rodinný dům</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Dům na&nbsp;Kozině</span>
							<strong>Autor</strong>: Barbora Weinzettlová, Jiří Weinzettl <br>
							<strong>Ateliér</strong>: atelier 111 architekti<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/99">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/krajinarska-architektura.png" alt="">
						</div>
						<h3 class="gpa__projectName">Krajinářská architektura</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Obnova krajiny kočárových koní<br>
							<strong>Cena</strong>: Malá zelená kostka
						</span>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/vecna-loviste.png" alt="">
						</div>
						<h3 class="gpa__projectName">Malá architektura</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Věčná loviště</span>
							<strong>Autor</strong>: Petr Hájek, Martin Stoss, Cornelia Klien <br>
							<strong>Ateliér</strong>: Petr Hájek ARCHITEKTI, s.r.o.<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/29">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/altan-knihovna.png" alt="">
						</div>
						<h3 class="gpa__projectName">Šetrná stavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Altán městské knihovny ve&nbsp;Vamberku</span>
							<strong>Autor</strong>: MgA.&nbsp;Martin Kožnar <br>
							<strong>Spolupráce</strong>: Ing.arch.&nbsp;Miroslav Bachura (studie), Ing.&nbsp;arch. Jonáš Kolařík (DSP), Ing.arch.&nbsp;Ondřej Hart (DPS)<br>
							<strong>Cena:</strong> Malá stříbrná kostka
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/109">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/telegraph.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v&nbsp;kategorii Šetrná stavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Telegraph</span>
							<strong>Autor</strong>: Lukáš Blažek, Eva Blažková, Vojtěch Jemelka, Lucie Vyhlídalová <br>
							<strong>Ateliér</strong>: ječmen studio<br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/18">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/sakura.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v&nbsp;kategorii Šetrná stavba</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Rezidenční projekt Sakura</span>
							<strong>Ateliér</strong>: Jestico + Whiles<br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/admin/event/1/project/88">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/zvonarka.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Ústřední autobusové nádraží Zvonařka</span>
							<strong>Ateliér</strong>: CHYBIK + KRISTOF<br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/133">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/panna-a-baba.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Bytový dům Panna a&nbsp;Baba</span>
							<strong>Autor</strong>: Milan Jirovec, Matyáš Sedlák, Miroslav Holubec, Tomáš Fejk <br>
							<strong>Ateliér</strong>:&nbsp;m4 architekti s.r.o.<br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/320">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div class="gpa__col">
						<div class="gpa__projectImg">
							<img src="<?php echo $baseurl ?>/assets/images/projects/kaplicka.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							<span class="gpa__title"><strong>Název projektu:</strong> Kaplička Čtyř svatých </span>
							<strong>Autor</strong>: Kamil Měrka <br>
							<strong>Ateliér</strong>:  ti2 architekti<br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black button--arrow" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/79">
							Detail projektu
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
				</div>
				<div class="gpa__row row">
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg"></div>
						<h3 class="gpa__projectName">Interiér</h3>
						<span class="gpa__projectDesc">
							Cena nebyla udělena
						</span>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg"></div>
						<h3 class="gpa__projectName">Urbanismus</h3>
						<span class="gpa__projectDesc">
							Cena nebyla udělena
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('components/jury.php'); ?>

<section class="press gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#press" class="gpTabs__navItem">Tiskové zprávy</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="press">
		<div class="gpTabs__content">
			<ul class="downloadList">
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/vysledky-pdf/">Tisková zpráva 9. 11. 2021 - výsledky (PDF)</a>
				</li>
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/shortlist-pdf/">Tisková zpráva 20. 9. 2021 - shortlist (PDF)</a>
				</li>
				<li class="downloadList__item">
					<a href="<?php echo $baseurl ?>/projekty-pdf/">Tisková zpráva 3. 9. 2021 - přihlášené projekty (PDF)</a>
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
					<a class="gallery__link" href="<?php echo $baseurl ?>/galerie-galavacer-predavani/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/predavani/full/default.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Galavečer</strong> <br>
							slavnostní předávání
						</h2>
					</a>
					<a class="gallery__link" href="<?php echo $baseurl ?>/galerie-galavacer-neformalni/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/neformalni/full/default.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Galavečer</strong> <br>
							neformální část
						</h2>
					</a>
					<a class="gallery__link" href="<?php echo $baseurl ?>/galerie-video/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/video/default.jpeg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit video</span>
							</span>
						</span>
						<h2>
							<strong>Galavečer</strong> <br>
							video
						</h2>
					</a>
					<a class="gallery__link" href="<?php echo $baseurl ?>/galerie-porota/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/porota/full/default.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Porota v&nbsp;Praze</strong>
						</h2>
					</a>
					<a class="gallery__link" href="<?php echo $baseurl ?>/galerie-vernisaz/">
						<span class="gallery__image">
							<img src="<?php echo $baseurl ?>/assets/images/gallery/vernisaz/full/default.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Vernisáž</strong>
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
				<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/vitezove" class="button button--black button--arrow">
					Vítězové
					<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
				</a>
				<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist" class="button button--black button--arrow">
					Shortlist 55
					<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
				</a>
				<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2021" class="button button--black button--arrow">
					Všechny projekty
					<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
				</a>
			</div>
		</div>
	</div>
</section>

<section class="gallery gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#catalog" class="gpTabs__navItem">Katalog</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="catalog">
		<div class="gpTabs__content">
			<!--
			<ul class="downloadList">
				<li class="downloadList__item">
					 <a href="<?php echo $baseurl ?>/katalog-pdf/">Katalog (PDF)</a>
					Katalog bude brzy zpřístupněn
				</li>
			</ul>
			-->
			<p>Katalog bude brzy zpřístupněn.</p>
		</div>
	</div>
</section>

<?php include('partners.php'); ?>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>
