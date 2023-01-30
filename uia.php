<?php include ('config.php');?>

<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>UIA 2021 | Grand Prix Architektů</title>

	<?php include('./components/head.php'); ?>
</head>
<body>

<!-- Menu -->
<?php include ('menu.php');?>

<section class="gpa">
	<div class="gpa__wrapper wrapper">

		<h1>Mezinárodní unie architektů</h1>

		<div class="gpa__row">
			<div class="gpa__col">
				<p>
                    UIA byla založena 28.&nbsp;června 1948 ve&nbsp;švýcarském Lausanne po&nbsp;sloučení Comité permanent international des Architectes a&nbsp;Réunion International des Architectes. Československo bylo zakládajícím členem. Členství České republiky bylo obnoveno v&nbsp;roce 2017.
				</p>
				<p>
                    Organizace je&nbsp;uznávána jako jediná globální architektonická organizace většinou agentur OSN, včetně UNESCO, UNCHS, ECOSOC, UNIDO a&nbsp;Světové zdravotnické organizace.
				</p>
				<p>
                    Její sídlo se&nbsp;nachází v&nbsp;Paříži.
    			</p>
				<p>
                    Prostřednictvím svých členských sekcí je&nbsp;UIA zastoupena ve&nbsp;více než 100 státech a&nbsp;územích, geograficky seskupených do&nbsp;pěti regionů.
                </p>
			</div>
			<div class="gpa__col">
				<p>
                    Současný prezident: José Luis Cortés - Mexiko (2021-2023)
				</p>

				<p>
                    Česká republika je&nbsp;součástí Regionu II.  a&nbsp;má 2 hlasy.
                </p>

                <p>
                    Členové Obce architektů zasedají ve&nbsp;3 komisích – Architectural Education Commission, Professional Practice Commission, Sustainable Development Goals Commission a&nbsp;tím bylo znovu vykročeno k&nbsp;zajištění ochrany a&nbsp;práv českých architektů ve&nbsp;světě.
                </p>

                <p>
                    Obec architektů podává návrhy na&nbsp;nominace prestižních světových cen UIA:
                </p>

                <ul>
                    <li>Gold Medal</li>
                    <li>Auguste Perret Prize (Karel Hubáček 1969)</li>
                    <li>Jean Tschumi Prize</li>
                    <li>Robert Matthew Prize</li>
                    <li>Vassilis Sgoutas Prize</li>
                </ul>
			</div>
            <div class="gpa__col">
				<img class="gpa__logo" src="<?php echo $baseurl ?>/assets/images/uia.png" alt="">
			</div>
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
            $sql = "SELECT * FROM oa_clanky WHERE status='1' AND f2=1 ORDER BY id DESC LIMIT 3";

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
        <a href="<?php echo $baseurl ?>/novinky/uia" class="gpTabs__navItem">Všechny novinky</a>
    </div>
</section>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>