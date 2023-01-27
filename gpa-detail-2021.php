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

<section class="gpa">
	<div class="gpa__wrapper wrapper">
		
		<h1>Grand Prix Architektů 2021</h1>

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
					<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021">Všechny projekty</a>
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
            <div class="gpa__col">
				<img class="gpa__logo" src="<?php echo $assetsPath ?>img/gpa-logo.png" alt="">
			</div>
		</div>
	</div>
</section>

<section class="winningProjects gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="#winning-projects" class="gpTabs__navItem">Vítězné projekty</a>
	</div>
	<div class="gpTabs__wrapper wrapper" id="winning-projects">
		<div class="gpTabs__content">
			<div class="gpa">
				<div class="gpa__row row">
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/prestavba-menzy.png" alt="">
						</div>
						<h3 class="gpa__projectName">Národní cena za&nbsp;architektura 2021</h3>
						<span class="gpa__projectDesc">
							Fakulta humanitních studií UK – přestavba menzy Koleje 17. listopadu<br>
							<strong>Autor</strong>: Ladislav Kuba, Tomáš Pilař, Martin Klimecký <br>
							<strong>Ateliér</strong>: Kuba & Pilař architekti s.r.o. <br>
							<strong>Cena:</strong> Velká modrá kostka
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/127">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/viktor-rudis.png" alt="">
						</div>
						<h3 class="gpa__projectName">Cena za&nbsp;Celoživotní dílo</h3>
						<span class="gpa__projectDesc">
							Tuto cenu uděluje Rada Obce architektů. <br>
							Ing.&nbsp;arch. Viktor Rudiš <br>
							<strong>Cena:</strong> Velká červená kostka
						</span>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/novostavba.png" alt="">
						</div>
						<h3 class="gpa__projectName">Novostavba</h3>
						<span class="gpa__projectDesc">
							Přístavba kanceláře ve&nbsp;Vysokém Mýtě <br>
							<strong>Autor</strong>: Martin Prokš, Marek Přikryl <br>
							<strong>Ateliér</strong>: Prokš Přikryl architekti <br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/175">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/radnice-praha-7.png" alt="">
						</div>
						<h3 class="gpa__projectName">Renovace</h3>
						<span class="gpa__projectDesc">
							Radnice pro&nbsp;Prahu 7<br>
							<strong>Autor</strong>: Ing.&nbsp;arch. Vojtěch Sosna, Ing.&nbsp;arch. Jakub Straka, Ing.&nbsp;arch. Jáchym Svoboda <br>
							<strong>Ateliér</strong>: Atelier bod architekti s.r.o.<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/117">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/libusina.png" alt="">
						</div>
						<h3 class="gpa__projectName">Rekonstrukce</h3>
						<span class="gpa__projectDesc">
							Zpracování projektové dokumentace na&nbsp;rekonstrukci Libušína<br>
							<strong>Ateliér</strong>: Masák & Partner s.r.o.<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/31">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/dum-na-kozine.png" alt="">
						</div>
						<h3 class="gpa__projectName">Rodinný dům</h3>
						<span class="gpa__projectDesc">
							Dům na&nbsp;Kozině<br>
							<strong>Autor</strong>: Barbora Weinzettlová, Jiří Weinzettl <br>
							<strong>Ateliér</strong>: atelier 111 architekti<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/99">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/krajinarska-architektura.png" alt="">
						</div>
						<h3 class="gpa__projectName">Krajinářská architektura</h3>
						<span class="gpa__projectDesc">
							Obnova krajiny kočárových koní<br>
							<strong>Cena</strong>: Malá zelená kostka
						</span>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/vecna-loviste.png" alt="">
						</div>
						<h3 class="gpa__projectName">Malá architektura</h3>
						<span class="gpa__projectDesc">
							Věčná loviště<br>
							<strong>Autor</strong>: Petr Hájek, Martin Stoss, Cornelia Klien <br>
							<strong>Ateliér</strong>: Petr Hájek ARCHITEKTI, s.r.o.<br>
							<strong>Cena:</strong> Malá modrá kostka
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/29">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/altan-knihovna.png" alt="">
						</div>
						<h3 class="gpa__projectName">Šetrná stavba</h3>
						<span class="gpa__projectDesc">
							Altán městské knihovny ve&nbsp;Vamberku<br>
							<strong>Autor</strong>: MgA.&nbsp;Martin Kožnar <br>
							<strong>Spolupráce</strong>: Ing.arch.&nbsp;Miroslav Bachura (studie), Ing.&nbsp;arch. Jonáš Kolařík (DSP), Ing.arch.&nbsp;Ondřej Hart (DPS)<br>
							<strong>Cena:</strong> Malá stříbrná kostka
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/109">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/telegraph.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v&nbsp;kategorii Šetrná stavba</h3>
						<span class="gpa__projectDesc">
							Telegraph <br>
							<strong>Autor</strong>: Lukáš Blažek, Eva Blažková, Vojtěch Jemelka, Lucie Vyhlídalová <br>
							<strong>Ateliér</strong>: ječmen studio<br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/18">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/sakura.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání v&nbsp;kategorii Šetrná stavba</h3>
						<span class="gpa__projectDesc">
							Rezidenční projekt Sakura <br>
							<strong>Ateliér</strong>: Jestico + Whiles<br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/admin/event/1/project/88">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/zvonarka.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							Ústřední autobusové nádraží Zvonařka <br>
							<strong>Ateliér</strong>: CHYBIK + KRISTOF<br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/133">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/panna-a-baba.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							Bytový dům Panna a&nbsp;Baba <br>
							<strong>Autor</strong>: Milan Jirovec, Matyáš Sedlák, Miroslav Holubec, Tomáš Fejk <br>
							<strong>Ateliér</strong>:&nbsp;m4 architekti s.r.o.<br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/320">Detail projektu</a>
					</div>
					<div class="gpa__col col-md-4">
						<div class="gpa__projectImg">
							<img src="../assets/images/projects/kaplicka.png" alt="">
						</div>
						<h3 class="gpa__projectName">Čestné uznání</h3>
						<span class="gpa__projectDesc">
							Kaplička Čtyř svatých <br>
							<strong>Autor</strong>: Kamil Měrka <br>
							<strong>Ateliér</strong>:  ti2 architekti<br>
							<strong>Cena:</strong> Diplom
						</span>
						<a class="button button--black" href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist/79">Detail projektu</a>
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
					<a href="/vysledky-pdf/">Tisková zpráva 9. 11. 2021 - výsledky (PDF)</a>
				</li>
				<li class="downloadList__item">
					<a href="/shortlist-pdf/">Tisková zpráva 20. 9. 2021 - shortlist (PDF)</a>
				</li>
				<li class="downloadList__item">
					<a href="/projekty-pdf/">Tisková zpráva 3. 9. 2021 - přihlášené projekty (PDF)</a>
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
					<a class="gallery__link" href="/galerie-galavacer-predavani/">
						<span class="gallery__image">
							<img src="../assets/images/gallery/predavani/full/default.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Galavečer</strong> <br>
							slavnostní předávání
						</h2>
					</a>
					<a class="gallery__link" href="/galerie-galavacer-neformalni/">
						<span class="gallery__image">
							<img src="../assets/images/gallery/neformalni/full/default.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Galavečer</strong> <br>
							neformální část
						</h2>
					</a>
					<a class="gallery__link" href="/galerie-video/">
						<span class="gallery__image">
							<img src="../assets/images/gallery/video/default.jpeg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit video</span>
							</span>
						</span>
						<h2>
							<strong>Galavečer</strong> <br>
							video
						</h2>
					</a>
					<a class="gallery__link" href="/galerie-porota/">
						<span class="gallery__image">
							<img src="../assets/images/gallery/porota/full/default.jpg" alt="">
							<span class="gallery__overlay">
								<span class="button button--yellow">Zobrazit galerii</span>
							</span>
						</span>
						<h2>
							<strong>Porota v&nbsp;Praze</strong>
						</h2>
					</a>
					<a class="gallery__link" href="/galerie-vernisaz/">
						<span class="gallery__image">
							<img src="../assets/images/gallery/vernisaz/full/default.jpg" alt="">
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
				<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/vitezove" class="button button--black">Vítězové</a>
				<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2021/shortlist" class="button button--black">Shortlist 55</a>
				<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2021" class="button button--black">Všechny projekty</a>
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
					 <a href="/katalog-pdf/">Katalog (PDF)</a>
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
