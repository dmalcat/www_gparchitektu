<?php include ('config.php');?>

<!DOCTYPE&nbsp;html>
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
	<div class="hero__wrapper wrapper">
		<div class="hero__slide">
			<div class="hero__inner">
				<h1>
					Obec architektů
				</h1>
				<p>
					Smyslem naší činnosti je&nbsp;reprezentace ČR <br>
					na úrovni UIA a&nbsp;V4 a&nbsp;prezentace kvalitní <br>
					architektury široké laické a&nbsp;odborné veřejnosti.
				</p>
				<div class="hero__buttons">
					<div>
						<a href="<?php echo $baseurl ?>/o-nas/" class="button button--black button--arrow">
							O nás
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
					<div>
						<a href="<?php echo $baseurl ?>/grand-prix-architektu/" class="button button--yellow button--arrow">
							Grand Prix Architektů
							<img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<picture class="hero__image">
		<source srcset="<?php echo $baseurl ?>/assets/images/carousel/cover_375.jpg" media="(max-width: 375px)" type="image/jpeg">
		<source srcset="<?php echo $baseurl ?>/assets/images/carousel/cover_500.jpg" media="(max-width: 500px)" type="image/jpeg">
		<source srcset="<?php echo $baseurl ?>/assets/images/carousel/cover_640.jpg" media="(max-width: 640px)" type="image/jpeg">	
		<source srcset="<?php echo $baseurl ?>/assets/images/carousel/cover_940.jpg" media="(max-width: 940px)" type="image/jpeg">	
		<source srcset="<?php echo $baseurl ?>/assets/images/carousel/cover_1400.jpg" media="(max-width: 1400px)" type="image/jpeg">
		<source srcset="<?php echo $baseurl ?>/assets/images/carousel/cover.jpg" media="(max-width: 2560px)" type="image/jpeg">
		<img src="<?php echo $baseurl ?>/assets/images/carousel/cover.jpg" alt="">
	</picture>
</section>

<section class="tiles">
	<div class="tiles__wrapper wrapper">
		<h1 class="text-center">Naše činnost</h1>
		
		<div class="tiles__row">
			<a href="<?php echo $baseurl ?>/grand-prix-architektu/" class="tile">
				<span class="tile__inner">
					<span class="tile__image">
						<img src="<?php echo $baseurl ?>/assets/images/tiles/gpa.jpg" alt="">
					</span>
					<span class="tile__desc">
						<span class="tile__headline">Grand Prix Architektů</span>
						<span class="tile__copy">
							Obec architektů každoročně vyhlašuje Grand Prix Architektů – Národní cenu za&nbsp;architekturu – největší českou architektonickou soutěž o&nbsp;nejlepší realizaci.
						</span>
						<span class="tile__link">
							Více informací
							<img class="tile__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</span>
					</span>
				</span>
			</a>
			<a href="<?php echo $baseurl ?>/uia/" class="tile">
				<span class="tile__inner">
					<span class="tile__image">
						<img src="<?php echo $baseurl ?>/assets/images/tiles/uia.jpg" alt="">
					</span>
					<span class="tile__desc">
						<span class="tile__headline">UIA</span>
						<span class="tile__copy">
							Mezinárodní unie architektů je&nbsp;organizace uznávána jako jediná globální architektonická organizace většinou agentur OSN.
						</span>
						<span class="tile__link">
							Více informací
							<img class="tile__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</span>
					</span>
				</span>
			</a>
			<a href="<?php echo $baseurl ?>/partnerstvi/" class="tile">
				<span class="tile__inner">
					<span class="tile__image">
						<img src="<?php echo $baseurl ?>/assets/images/tiles/partnership.jpg" alt="">
					</span>
					<span class="tile__desc">
						<span class="tile__headline">Partnerství</span>
						<span class="tile__copy">
							Staňte se&nbsp;partnerem jedné z&nbsp;nejvýznamnějších profesních sdružení architektů v&nbsp;České republice.
						</span>
						<span class="tile__link">
							Více informací
							<img class="tile__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
						</span>
					</span>
				</span>
			</a>
		</div>
	</div>
</section>

<section class="news news--hp">
	<div class="news__wrapper wrapper">
		<h1 class="text-center">Poslední novinky</h1>
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
					
					function substrwords($text, $maxchar, $end='...') {
						if (strlen($text) > $maxchar || $text == '') {
							$words = preg_split('/\s/', $text);
							$output = '';
							$i      = 0;
							while (1) {
								$length = strlen($output)+strlen($words[$i]);
								if ($length > $maxchar) {
									break;
								} 
								else {
									$output .= " " . $words[$i];
									++$i;
								}
							}
							$output .= $end;
						} 
						else {
							$output = $text;
						}
						return $output;
					}

					$text = substrwords($text, 400);

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
						<div class='news__col news__col--copy'>
							<h2>$title</h2>

							<img class='news__img news__img--mobile' src='./uploads/images/$photo' alt=''>
							
							<p>
								$text
							</p>

							<div class='buttonRow buttonRow--left'>
								<a href='$baseurl/novinka/$id-$odkaz' class='button button--black button--arrow'>
									Číst dále
									<img class='button__arrow svg' src='$baseurl/assets/images/icons/arrow-right-white.svg' alt=''>
								</a>
							</div>
						</div>
							
						<div class='news__col news__col--img'>
							<img class='news__img news__img--desktop' src='$baseurl/uploads/images/$photo' alt=''>
						</div>
					";
				}

			$conn->close();
			

			?>

				
			
	</div>
</section>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>

</body>
