<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head> 
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Úvodní stránka | Grand Prix Architektů</title>

    <?php include('./components/head.php'); ?>

	<link rel="stylesheet" href="<?php echo $baseurl ?>/assets/cookie-consent/dist/css/cookies.min.css">
    
    <script src="<?php echo $baseurl ?>/assets/js/slick.min.js"></script>
</head>
<body>

<!-- Menu -->
<?php include ('menu.php');?>

<section class="hero">
	<div class="hero__image" id="slider">
		<div class="hero__slide">
			<div class="hero__inner">
				<h1>
					Vítejte na stránkách <br>
					spolku Obce architektů
				</h1>
				<p>
					Smyslem naší činnosti je reprezentace ČR na úrovni UIA a V4 <br>
					a prezentace kvalitní architektury široké laické a odborné veřejnosti.
				</p>
				<a href="<?php echo $baseurl ?>/o-nas/#organization" class="button button--yellow">
					Naše práce
				</a>
			</div>
			<picture class="hero__image">
				<!--<source srcset="<?php echo $baseurl ?>/assets/images/carousel/6.jpg" media="(max-width: 940px)" type="image/jpg">-->
				<source srcset="<?php echo $baseurl ?>/assets/images/carousel/6.jpg" media="(max-width: 2560px)" type="image/jpg">
				<img src="<?php echo $baseurl ?>/assets/images/carousel/6.jpg" alt="">
			</picture>
		</div>
		<div class="hero__slide">
			<div class="hero__inner">
				<h1>
					UIA <br>
					Mezinárodní unie architektů
				</h1>
				<p>
					Budeme reprezentovat Českou republiku na valném shromáždění <br>
					UIA a světovém kongresu architektů v Kodani 2-9. července.
				</p>
				<a href="https://uia2023cph.org/" class="button button--yellow">
					Více informací
				</a>
			</div>
			<picture class="hero__image">
				<!--<source srcset="<?php echo $baseurl ?>/assets/images/carousel/4-940.jpg" media="(max-width: 940px)" type="image/jpg">-->
				<source srcset="<?php echo $baseurl ?>/assets/images/carousel/5.jpg" media="(max-width: 2560px)" type="image/jpg">
				<img src="<?php echo $baseurl ?>/assets/images/carousel/5.jpg" alt="">
			</picture>
		</div>
		
		<div class="hero__slide">
			<div class="hero__inner">
				<h1>
					Ohlednutí za ročníkem <br>
					Grand Prix Architektů 2022
				</h1>
				<p>
					Hlavní cenu GPA&nbsp;– Národní ceny za&nbsp;architekturu pro&nbsp;rok 2022 získal projekt Kusthalle, <br>
					cenu za&nbsp;celoživotní dílo obdržel autor Žižkovské věže Václav Aulický.
				</p>
				<a href="https://grandprix.grandprixarchitektu.cz/rocnik/2022/vitezove" class="button button--yellow">
					Více informací
				</a>
			</div>
			<picture class="hero__image">
				<source srcset="<?php echo $baseurl ?>/assets/images/carousel/4-940.jpg" media="(max-width: 940px)" type="image/jpg">
				<source srcset="<?php echo $baseurl ?>/assets/images/carousel/4.jpg" media="(max-width: 2560px)" type="image/jpg">
				<img src="<?php echo $baseurl ?>/assets/images/carousel/4.jpg" alt="">
			</picture>
		</div>
		<div class="hero__slide">
			<div class="hero__inner">
				<h1>Spolupráce s&nbsp;V4</h1>
				<p>
					Obec architeků podepsala memorandum V4 architectual <br>
					partnership v&nbsp;Rothmayerově sále na&nbsp;Pražském hradě.
				</p>
				<a href="https://www.instagram.com/p/CU4M9BUsOIR/" class="button button--yellow">
					O nás
				</a>
			</div>
			<picture class="hero__image">
				<source srcset="<?php echo $baseurl ?>/assets/images/carousel/2-940.jpg" media="(max-width: 940px)" type="image/jpg">
				<source srcset="<?php echo $baseurl ?>/assets/images/carousel/2.jpg" media="(max-width: 2560px)" type="image/jpg">
				<img src="<?php echo $baseurl ?>/assets/images/carousel/2.jpg" alt="">
			</picture>
		</div>
	</div>
</section>

<section class="tiles">
	<div class="tiles__wrapper wrapper">
		<h1 class="text-center">Naše práce</h1>
		<p class="perex text-center">
			Lorem ipsum dolor sit amet. 
		</p>
		<div class="tiles__row">
			<a href="" class="tile">
				<span class="tile__inner">
					<span class="tile__image">
						<img src="<?php echo $baseurl ?>/assets/images/tiles/gpa.jpg" alt="">
					</span>
					<span class="tile__desc">
						<span class="tile__headline">Grand Prix Architektů</span>
						<span class="tile__description">
							Obec architektů každoročně vyhlašuje Grand Prix Architektů – Národní cenu za architekturu – největší českou architektonickou soutěž o nejlepší realizaci.
						</span>
						<span class="tile__link">Více informací</span>
					</span>
				</span>
			</a>
			<div class="tile">
				<div class="tile__inner">
					<img class="tile__logo" src="http://localhost/www_gparchitektu/assets/images/uia.png" alt="">
					<span class="tile__headline">Mezinárodní unie architektů</span>
					<p class="tile__description">
						Organizace je uznávána jako jediná globální architektonická organizace většinou agentur OSN, včetně UNESCO, UNCHS, ECOSOC, UNIDO a Světové zdravotnické organizace.
					</p>
					<a href="">Více informací</a>
				</div>
			</div>
			<div class="tile">
				<div class="tile__inner">
					<img class="tile__logo" src="http://localhost/www_gparchitektu/assets/images/uia.png" alt="">
					<span class="tile__headline">Partnerství</span>
					<p class="tile__description">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Cras elementum.
					</p>
					<a href="">Více informací</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="articles articles--hp">
	<div class="articles__wrapper wrapper">
		<div class="articles__item">
			<?php

			include 'conn.php';

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			$conn->set_charset('utf8');

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT * FROM oa_clanky WHERE status='1' ORDER BY id DESC LIMIT 1";
			$result = $conn->query($sql);                            

			if ($result->num_rows > 0) {                                     
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$id = $row['id'];   
					$title = $row['title'];
					$content = $row['content'];
					$datum= $row['date'];
					$photo= $row['main_img'];

					$cisty_text = strip_tags($content);

					$pole = explode(" ",$cisty_text);
				}

					for ($i=0;$i<140;$i++) {
						$pole2[$i]=$pole[$i];
					};

					$text = implode(" ",$pole2);

					//vytvoření odkazu
					$string = $title;
					$string = str_replace("+", " ", $string);

					$slug = \Transliterator::createFromRules(
						':: Any-Latin;'
						. ':: NFD;'
						. ':: [:Nonspacing Mark:] Remove;'
						. ':: NFC;'
						. ':: [:Punctuation:] Remove;'
						. ':: Lower();'
						. '[:Separator:] > \'-\''
					)
						->transliterate( $string );
						$slug; // namnet-pa-bildtavlingen


					$odkaz = "$slug";


					
					echo "      
						<div class='articles__col articles__col--copy'>
							<h2>$title</h2>

							<img class='articles__img articles__img--mobile' src='./uploads/images/$photo' alt=''>
							
							<p>
								$text
							</p>

							<a href='$baseurl/novinka/$id-$odkaz' class='button button--yellow'>Číst dále</a>
						</div>
							
						<div class='articles__col articles__col--img'>
							<img class='articles__img articles__img--desktop' src='$baseurl/uploads/images/$photo' alt=''>
						</div>
					";
				}
			
			$conn->close();

			?>
		</div>
	</div>
</section>


<section id="novinky-slide" class="news">
    <div class="news__wrapper wrapper">
        <h1>Novinky</h1>

        <div class="news__row">
            <?php
            include 'conn.php';

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            $conn->set_charset('utf8');
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM oa_clanky WHERE status='1' AND f1=1 ORDER BY id DESC LIMIT 3";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $content = $row['content'];
                    $datum= $row['date'];
                    $photo= $row['main_img'];


                    $cisty_text = strip_tags($content);

                    if (substr_count($cisty_text, " ") > 30) {
                        $pole = explode(" ",$cisty_text);

                        $pole2 = [];

                        for ($i=0;$i<30;$i++):

                            $pole2[$i]=$pole[$i];


                        endfor;

                        $text = implode(" ",$pole2);
                    } else {
                        $text = $cisty_text;
                    }
                    //vytvoření odkazu
                    $string = $title;
                    $string = str_replace("+", " ", $string);

                    $slug = \Transliterator::createFromRules(
                        ':: Any-Latin;'
                        . ':: NFD;'
                        . ':: [:Nonspacing Mark:] Remove;'
                        . ':: NFC;'
                        . ':: [:Punctuation:] Remove;'
                        . ':: Lower();'
                        . '[:Separator:] > \'-\''
                    )
                        ->transliterate( $string );
                    $slug; // namnet-pa-bildtavlingen


                    $odkaz = "$slug";

                    echo "               
                <div class='news__col'>
                    <a href='$baseurl/novinka/$id-$odkaz'>
                        <div class='news__image'>
                            <img src='$baseurl/uploads/images/$photo'>
                            <span class='news__overlay'>
                                <span class='button button--yellow'>Zobrazit detail</span>
                            </span>
                        </div>
                        
                        <h5>$title</h5>
                        <p>$text</p>
                    </a> 
                </div>
            ";
                }
            } else {
            }
            $conn->close();

            ?>
        </div>
    </div>
</section>


<section class="winningProjects gpTabs">
	<div class="gpTabs__wrapper gpTabs__wrapper--nav wrapper">
		<a href="<?php echo $baseurl ?>/novinky/" class="gpTabs__navItem">Všechny novinky</a>
	</div>
</section>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>

</body>
