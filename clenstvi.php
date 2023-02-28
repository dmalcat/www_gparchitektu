<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head> 
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Členství | Grand Prix Architektů</title>

	<?php include('./components/head.php'); ?>
</head>
<body>

<!-- Menu -->    
<?php include ('menu.php');?> 

<section class="hero hero--subpage">
	<div class="hero__wrapper wrapper">
		<h1>Členství</h1>
	</div>
	<div class="hero__image">
		<img src="<?php echo $baseurl ?>/assets/images/covers/o-nas.png" alt="">
	</div>
</section>

<section class="breadcrumb">
	<div class="breadcrumb__wrapper wrapper">
		<ul class="breadcrumbList">
			<li>
				<a href="<?php echo $baseurl ?>">Úvodní strana</a>
			</li>
			<li class="active">
                Členství
			</li>
		</ul>
	</div>
</section>

<section class="article">
    <div class="article__wrapper wrapper">
		<div class="article__row">
			
            <div class="article__col">
                <h2>Staňte se&nbsp;členem Obce Architektů</h2>
                    
                <p>Členem Obce se&nbsp;může st&aacute;t každ&aacute; fyzick&aacute; osoba, kter&aacute; souhlas&iacute; s&nbsp;posl&aacute;n&iacute;m a&nbsp;&uacute;koly Obce a&nbsp;zav&aacute;že se&nbsp;dodržovat Stanovy Obce architektů, bez ohledu na&nbsp;politickou, uměleckou nebo filosofickou orientaci a&nbsp;na&nbsp;občansk&eacute; nebo v&yacute;tvarn&eacute; n&aacute;zory. Podm&iacute;nkou členstv&iacute; v&nbsp;Obci jsou t&eacute;ž zaplacen&eacute; člensk&eacute; př&iacute;spěvky.</p>
                <p>Jsou rozli&scaron;ov&aacute;ny dvě kategorie členstv&iacute; v&nbsp;Obci:</p>
                <p>a)<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>ř&aacute;dn&eacute; členstv&iacute;</p>
                <p>b)<span style="white-space:pre;">&nbsp; &nbsp;&nbsp;</span>čestn&eacute; členstv&iacute;</p>
                <p>Čestným členem Obce se&nbsp;může stát ten, kdo se&nbsp;mimořádně zasloužil o&nbsp;architekturu, urbanismus či&nbsp;příbuzné obory. Čestné členství uděluje Rada Obce. Každoročně se&nbsp;členi poroty Grand Prix Architektů stávají čestnými členy Obce.</p>

                <div class="article__form">
                    <h3>Registrační formulář</h3>
                    
                    <form class="form" action="<?php echo $baseurl ?>/odeslat_form.php" method="POST">
                        <div class="form__row">
                            <div class="form__control">
                                <label class="form__label">Jméno</label>
                                <input type="text" class="form__input" name="jmeno">
                            </div>
                            
                            <div class="form__control">
                                <label class="form__label">Příjmení</label>
                                <input type="text" class="form__input" name="prijmeni">
                            </div>
                            
                            <div class="form__control">
                                <label class="form__label">Datum narození</label>
                                <input type="text" class="form__input" name="datum_nar">
                            </div>
                            
                            <div class="form__control">
                                <label class="form__label">Telefon</label>
                                <input type="text" class="form__input" name="phone">
                            </div>
                            
                            <div class="form__control">
                                <label class="form__label">E-mail</label>
                                <input type="email" class="form__input" name="mail">
                            </div>
                            
                            <div class="form__control">
                                <label class="form__label">Národnost</label>
                                <input type="text" class="form__input" name="narodnost">
                            </div>
                            
                            <div class="form__control">
                                <label class="form__label">Profese</label>
                                <input type="text" class="form__input" name="profese">
                            </div>
                            
                            <div class="form__control">
                                <label class="form__label">Webové stránky</label>
                                <input type="text" class="form__input" name="web">
                            </div>
                            
                            <div class="form__row form__row--button">
                                <button class="form__button button button--black button--arrow">
                                    Odeslat
                                    <img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
                                </button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="members">
            <h3>Čestní členové</h3>
            <div class="members__list">
                <div class="members__item">
                    <h3>2022</h3>
                    <ul class="list">
                        <li>Jean-Pierre Carniaux (Francie)</li>
                        <li>Robert Schmitz (Švédsko)</li>
                        <li>Martin Rein-Cano (Německo)</li>
                        <li>Michal Bogár (Slovensko)</li>
                        <li>Eva Le Peutrec (Česko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2021</h3>
                    <ul class="list">
                        <li>Štefan Moravčík (Slovensko)</li>
                        <li>Jan Magasaník (Česko)</li>
                        <li>Michiel Hofman (Nizozemsko)</li>
                        <li>Ana Kučan (Slovinsko)</li>
                        <li>Anne Francoise Jumeau (Francie)</li>
                        <li>Robert Konieczny (Polsko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2020</h3>
                    <ul class="list">
                        <li>Fokke Moerel (Nizozemsko)</li>
                        <li>Christian de Portzamparc (Francie)</li>
                        <li>Peka Salminen (Finsko)</li>
                        <li>Tanja Buijs Vitkova (Slovensko)</li>
                        <li>Dan Merta (Česká republika)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2019</h3>
                    <ul class="list">
                        <li>Fabrizio Barozzi (Španělsko)</li>
                        <li>Irena Fialová (Česká republika)</li>
                        <li>Bolle Tham (Švédsko)</li>
                        <li>Daniel Zarhy (Izrael)</li>
                        <li>Oliver Sadovský (Slovensko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2018</h3>
                    <ul class="list">
                        <li>Juraj Benetin (Slovensko)</li>
                        <li>Ian Ritchie (Velká Británie)</li>
                        <li>Marta Schreieck (Rakousko)</li>
                        <li>Hindrek Kesler (Estonsko)</li>
                        <li>František Skála (Česká republika)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2017</h3>
                    <ul class="list">
                        <li>Manuelle Gautrand (Francie)</li>
                        <li>Pavel Suchánek (Slovensko)</li>
                        <li>Jakub Potůček (Česká republika)</li>
                        <li>Nikolay Schumakov (Rusko)</li>
                        <li>Francois Valentiny (Lucembursko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2016</h3>
                    <ul class="list">
                        <li>Eva Jiřičná (Velká Británie)</li>
                        <li>László Mikó (Maďarsko)</li>
                        <li>Petr Franta (Česká republika)</li>
                        <li>Elena Szolgayova (Slovensko)</li>
                        <li>Vladimír Laženský (Česká republika)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2015</h3>
                    <ul class="list">
                        <li>Wlodzimierz Mucha (Polsko)</li>
                        <li>László Mikó (Maďarsko)</li>
                        <li>Isabelle Lomholt (Velká Británie)</li>
                        <li>Irina Raud (Estonsko)</li>
                        <li>Regina Loukotová (Česká republika)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2014</h3>
                    <ul class="list">
                        <li>Magdalena Jetelová (Česká republika)</li>
                        <li>Nicoló Riva (Itálie)</li>
                        <li>Pavol Paňák (Slovensko)</li>
                        <li>Andrzej Bulanda (Polsko)</li>
                        <li>Peter Kis (Maďarsko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2013</h3>
                    <ul class="list">
                        <li>Jaume Freixa (Španělsko)</li>
                        <li>Zoltan Tima (Maďarsko)</li>
                        <li>Jerzy Grochulski (Polsko)</li>
                        <li>Števo Polakovič (Slovensko)</li>
                        <li>Adam Gebrian (Česká republika)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2012</h3>
                    <ul class="list">
                        <li>Andrea Klimko (Slovensko)</li>
                        <li>Petr Kratochvíl (Česká republika)</li>
                        <li>Maciej Hawrylak (Polsko)</li>
                        <li>Paul Katzberger (Rakousko)</li>
                        <li>Ian Bogle (Velká Británie)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2011</h3>
                    <ul class="list">
                        <li>Thomas E. Bitnar (USA)</li>
                        <li>Juri Troy (Rakousko)</li>
                        <li>Zhang Ke (Rakousko)</li>
                        <li>Zbysczek Maćków (Polsko)</li>
                        <li>Juraj Hermann (Slovensko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2010</h3>
                    <ul class="list">
                        <li>Martin Holub (USA)</li>
                        <li>Jiří Klokočka (Belgie)</li>
                        <li>Willem Jan Neutelings (Nizozemsko)</li>
                        <li>Milan Tomac (Slovinsko)</li>
                        <li>Zoran Michalčák (Slovensko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2009</h3>
                    <ul class="list">
                        <li>Antal Puhl (Maďarsko)</li>
                        <li>Andreas Klok Pedersen (Dánsko)</li>
                        <li>Andrey Chernikov (Rusko)</li>
                        <li>Heinrich Degelo (Švýcarsko)</li>
                        <li>Peter Gero (Slovensko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2008</h3>
                    <ul class="list">
                        <li>Julietta Bekkering (Nizozemsko)</li>
                        <li>José Maria Rodriguez – Pastrana Malgón (Španělsko)</li>
                        <li>René Van Zuuk (Nizozemsko)</li>
                        <li>Karol Hoffman (Slovensko)</li>
                        <li>Tomáš Vlček (Česká republika)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2007</h3>
                    <ul class="list">
                        <li>Alexandros Tombazis (Řecko)</li>
                        <li>Odile Decq (Francie)</li>
                        <li>Jan Benda (Čína, Kanada)</li>
                        <li>Matej Siebert (Slovensko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2006</h3>
                    <ul class="list">
                        <li>Zvi Hecker (Izrael)</li>
                        <li>Benedetta Tagliabue (Španělsko)</li>
                        <li>Minoru Takeyama (Japonsko)</li>
                        <li>Richard Polom (Slovensko)</li>
                        <li>Vladimír Šlapeta (Česká republika)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2005</h3>
                    <ul class="list">
                        <li>Prof. Bengt Lundsten (Finsko)</li>
                        <li>Sir Michael Hopkins (Velká Británie)</li>
                        <li>Matěj Vozlič (Slovinsko)</li>
                        <li>Lubomír Závodný (Slovensko)</li>
                        <li>Zdeněk Lukeš (Česká republika)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2004</h3>
                    <ul class="list">
                        <li>Prof. Sir Colin Stansfield Smith (Velká Británie)</li>
                        <li>Jan Gehl (Dánsko)</li>
                        <li>Wilfried van Winden (Nizozemsko)</li>
                        <li>Romuald Loegler (Polsko)</li>
                        <li>Pavol Paňák (Slovensko)</li>
                        <li>Prof. Jiří Sopko (Česká republika)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2003</h3>
                    <ul class="list">
                        <li>Prof. Peter Lizon (USA)</li>
                        <li>Solange d Herbez de la Tour (Francie)</li>
                        <li>Michel W. Kagan (Francie)</li>
                        <li>Jiří T. Kotalík (Česká republika)</li>
                        <li>Martin Drahovský (Slovensko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2002</h3>
                    <ul class="list">
                        <li>Helena Jiskrová (Nizozemsko)</li>
                        <li>Claus Dyckhoff (Německo)</li>
                        <li>Imrich Vaško (Slovensko)</li>
                        <li>Dana Zámečníková (Česká republika)</li>
                        <li>Henryk Zubel (Polsko)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2001</h3>
                    <ul class="list">
                        <li>Hermann Czech (Rakousko)</li>
                        <li>Peter Pásztor (Slovensko)</li>
                        <li>Josef Hornley (Austrálie)</li>
                        <li>Karel Doležal (Česká republika)</li>
                        <li>Marián Karel (Česká republika)</li>
                    </ul>
                </div>
                <div class="members__item">
                    <h3>2000</h3>
                    <ul class="list">
                        <li>Zdeněk Zavřel (Holandsko)</li>
                        <li>Kristina Peltomaa (Finsko)</li>
                        <li>Valter Bordini (Itálie)</li>
                        <li>Ján M. Bahna (Slovensko)</li>
                        <li>Milan Hon (Česká republika)</li>
                        <li>Kurt Gebauer (Česká republika)</li>
                    </ul>
                </div>
                
            </div>
        </form>
    </div>
</section>

<section class="members">
    <div class="members__wrapper wrapper">
        <h2 class="text-center">Čestní členové</h2>

        <div class="members__list">
            <div class="members__item">
                <h3>2022</h3>
                <ul>
                    <li>Jean-Pierre Carniaux (Francie)</li>
                    <li>Robert Schmitz (Švédsko)</li>
                    <li>Martin Rein-Cano (Německo)</li>
                    <li>Michal Bogár (Slovensko)</li>
                    <li>Eva Le Peutrec (Česko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2021</h3>
                <ul>
                    <li>Štefan Moravčík (Slovensko)</li>
                    <li>Jan Magasaník (Česko)</li>
                    <li>Michiel Hofman (Nizozemsko)</li>
                    <li>Ana Kučan (Slovinsko)</li>
                    <li>Anne Francoise Jumeau (Francie)</li>
                    <li>Robert Konieczny (30.6.2022 – udělila ROA)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2020</h3>
                <ul>
                    <li>Fokke Moerel (Nizozemsko)</li>
                    <li>Christian de Portzamparc (Francie)</li>
                    <li>Peka Salminen (Finsko)</li>
                    <li>Tanja Buijs Vitkova (Slovensko)</li>
                    <li>Dan Merta (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2019</h3>
                <ul>
                    <li>Fabrizio Barozzi (Španělsko)</li>
                    <li>Irena Fialová (Česká republika)</li>
                    <li>Bolle Tham (Švédsko)</li>
                    <li>Daniel Zarhy (Izrael)</li>
                    <li>Oliver Sadovský (Slovensko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2018</h3>
                <ul>
                    <li>Juraj Benetin (Slovensko)</li>
                    <li>Ian Ritchie (Velká Británie)</li>
                    <li>Marta Schreieck (Rakousko)</li>
                    <li>Hindrek Kesler (Estonsko)</li>
                    <li>František Skála (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2017</h3>
                <ul>
                    <li>Manuelle Gautrand (Francie)</li>
                    <li>Pavel Suchánek (Slovensko)</li>
                    <li>Jakub Potůček (Česká republika)</li>
                    <li>Nikolay Schumakov (Rusko)</li>
                    <li>Francois Valentiny (Lucembursko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2016</h3>
                <ul>
                    <li>Eva Jiřičná (Velká Británie)</li>
                    <li>László Mikó (Maďarsko)</li>
                    <li>Petr Franta (Česká republika)</li>
                    <li>Elena Szolgayova (Slovensko)</li>
                    <li>Vladimír Laženský (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2015</h3>
                <ul>
                    <li>Wlodzimierz Mucha (Polsko)</li>
                    <li>László Mikó (Maďarsko)</li>
                    <li>Isabelle Lomholt (Velká Británie)</li>
                    <li>Irina Raud (Estonsko)</li>
                    <li>Regina Loukotová (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2014</h3>
                <ul>
                    <li>Magdalena Jetelová (Česká republika)</li>
                    <li>Nicoló Riva (Itálie)</li>
                    <li>Pavol Paňák (Slovensko)</li>
                    <li>Andrzej Bulanda (Polsko)</li>
                    <li>Peter Kis (Maďarsko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2013</h3>
                <ul>
                    <li>Jaume Freixa (Španělsko)</li>
                    <li>Zoltan Tima (Maďarsko)</li>
                    <li>Jerzy Grochulski (Polsko)</li>
                    <li>Števo Polakovič (Slovensko)</li>
                    <li>Adam Gebrian (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2012</h3>
                <ul>
                    <li>Andrea Klimko (Slovensko)</li>
                    <li>Petr Kratochvíl (Česká republika)</li>
                    <li>Maciej Hawrylak (Polsko)</li>
                    <li>Paul Katzberger (Rakousko)</li>
                    <li>Ian Bogle (Velká Británie)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2011</h3>
                <ul>
                    <li>Thomas E. Bitnar (USA)</li>
                    <li>Juri Troy (Rakousko)</li>
                    <li>Zhang Ke (Rakousko)</li>
                    <li>Zbysczek Maćków (Polsko)</li>
                    <li>Juraj Hermann (Slovensko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2010</h3>
                <ul>
                    <li>Martin Holub (USA)</li>
                    <li>Jiří Klokočka (Belgie)</li>
                    <li>Willem Jan Neutelings (Nizozemsko)</li>
                    <li>Milan Tomac (Slovinsko)</li>
                    <li>Zoran Michalčák (Slovensko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2009</h3>
                <ul>
                    <li>Antal Puhl (Maďarsko)</li>
                    <li>Andreas Klok Pedersen (Dánsko)</li>
                    <li>Andrey Chernikov (Rusko)</li>
                    <li>Heinrich Degelo (Švýcarsko)</li>
                    <li>Peter Gero (Slovensko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2008</h3>
                <ul>
                    <li>Julietta Bekkering (Nizozemsko)</li>
                    <li>José Maria Rodriguez – Pastrana Malgón (Španělsko)</li>
                    <li>René Van Zuuk (Nizozemsko)</li>
                    <li>Karol Hoffman (Slovensko)</li>
                    <li>Tomáš Vlček (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2007</h3>
                <ul>
                    <li>Alexandros Tombazis (Řecko)</li>
                    <li>Odile Decq (Francie)</li>
                    <li>Jan Benda (Čína, Kanada)</li>
                    <li>Matej Siebert (Slovensko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2006</h3>
                <ul>
                    <li>Zvi Hecker (Izrael)</li>
                    <li>Benedetta Tagliabue (Španělsko)</li>
                    <li>Minoru Takeyama (Japonsko)</li>
                    <li>Richard Polom (Slovensko)</li>
                    <li>Vladimír Šlapeta (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2005</h3>
                <ul>
                    <li>Prof. Bengt Lundsten (Finsko)</li>
                    <li>Sir Michael Hopkins (Velká Británie)</li>
                    <li>Matěj Vozlič (Slovinsko)</li>
                    <li>Lubomír Závodný (Slovensko)</li>
                    <li>Zdeněk Lukeš (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2004</h3>
                <ul>
                    <li>Prof. Sir Colin Stansfield Smith (Velká Británie)</li>
                    <li>Jan Gehl (Dánsko)</li>
                    <li>Wilfried van Winden (Nizozemsko)</li>
                    <li>Romuald Loegler (Polsko)</li>
                    <li>Pavol Paňák (Slovensko)</li>
                    <li>Prof. Jiří Sopko (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2003</h3>
                <ul>
                    <li>Prof. Peter Lizon (USA)</li>
                    <li>Solange d Herbez de la Tour (Francie)</li>
                    <li>Michel W. Kagan (Francie)</li>
                    <li>Jiří T. Kotalík (Česká republika)</li>
                    <li>Martin Drahovský (Slovensko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2002</h3>
                <ul>
                    <li>Helena Jiskrová (Nizozemsko)</li>
                    <li>Claus Dyckhoff (Německo)</li>
                    <li>Imrich Vaško (Slovensko)</li>
                    <li>Dana Zámečníková (Česká republika)</li>
                    <li>Henryk Zubel (Polsko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2001</h3>
                <ul>
                    <li>Hermann Czech (Rakousko)</li>
                    <li>Peter Pásztor (Slovensko)</li>
                    <li>Josef Hornley (Austrálie)</li>
                    <li>Karel Doležal (Česká republika)</li>
                    <li>Marián Karel (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>2000</h3>
                <ul>
                    <li>Zdeněk Zavřel (Holandsko)</li>
                    <li>Kristina Peltomaa (Finsko)</li>
                    <li>Valter Bordini (Itálie)</li>
                    <li>Ján M. Bahna (Slovensko)</li>
                    <li>Milan Hon (Česká republika)</li>
                    <li>Kurt Gebauer (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>1999</h3>
                <ul>
                    <li>Pavel Zvěřina (Německo)</li>
                    <li>Alena Šrámková (Česká republika)</li>
                    <li>Josep Lluis Mateo (Španělsko)</li>
                    <li>Boris Podrecca (Rakousko)</li>
                    <li>Ľudovít Urban (Slovensko)</li>
                    <li>Jiří Ševčík (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>1998</h3>
                <ul>
                    <li>Henrieta H. Moravčíková (Slovensko)</li>
                    <li>Miro Baum (Německo)</li>
                    <li>Pavel Halík (Česká republika)</li>
                    <li>José Antonio Martínez Lapeña (Španělsko)</li>
                    <li>Gustav Peichl (Rakousko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>1996</h3>
                <ul>
                    <li>Ivan Gürtler (Slovensko)</li>
                    <li>Martin Kohlbauer (Rakousko)</li>
                    <li>Jan Hird Pokorny (USA)</li>
                    <li>Phillipe Robert (Francie)</li>
                    <li>Pavel Škranc (Česká republika)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>1995</h3>
                <ul>
                    <li>Ivan Koleček (Švýcarsko)</li>
                    <li>Matúš Dulla (Slovensko)</li>
                    <li>Karel Hubáček (Česká republika)</li>
                    <li>David Chipperfield (Velká Británie)</li>
                    <li>Stanislav Makarov (Norsko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>1994</h3>
                <ul>
                    <li>Michal Bogár (Slovensko)</li>
                    <li>Jan Kaplický (Velká Británie)</li>
                    <li>Jiří Novotný (Česká republika)</li>
                    <li>Jiří Oplatek (Švýcarsko)</li>
                    <li>Elias Torres (Španělsko)</li>
                </ul>
            </div>
            <div class="members__item">
                <h3>1993</h3>
                <ul>
                    <li>Dalibor Veselý (Velká Británie)</li>
                    <li>Eva Jiřičná (Velká Británie)</li>
                    <li>John Miller (Velká Británie)</li>
                    <li>Štefan Šlachta (Slovensko)</li>
                    <li>Antonín Tenzer (Česká republika)</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="footer" class="footer">
    <?php include('footer.php'); ?>
</section>



