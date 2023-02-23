<?php include ('config.php');?>

<?php

$slug = explode('/',$_SERVER['REQUEST_URI']);
$q = end($slug);

?>

<!DOCTYPE html>
<html lang="cs">

<head> 
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Novinky | Grand Prix Architektů</title>

	<?php include('./components/head.php'); ?>
</head>
<body>


<?php include ('menu.php');?> 

<section class="hero hero--subpage">
	<div class="hero__wrapper wrapper">
		<h1>Novinky</h1>
	</div>
	<div class="hero__image">
		<img src="<?php echo $baseurl ?>/assets/images/covers/novinky.png" alt="">
	</div>
</section>

<section class="breadcrumb">
	<div class="breadcrumb__wrapper wrapper">
		<ul class="breadcrumbList">
			<li>
				<a href="<?php echo $baseurl ?>">Úvodní strana</a>
			</li>
			<li class="active">
				Novinky
			</li>
		</ul>
	</div>
</section>


<section class="news">
    <div class="news__wrapper wrapper">
        <div class="buttonRow buttonRow--left news__filters">
            <a href="<?php echo $baseurl ?>/novinky/" class="button button--black-border <?php if($q!='gpa'&&$q!='uia')echo 'button--active'; ?>">Všechny</a>
            <a href="<?php echo $baseurl ?>/novinky/gpa" class="button button--black-border <?php if($q=='gpa')echo 'button--active'; ?>">Grand Prix Architektů</a>
            <a href="<?php echo $baseurl ?>/novinky/uia" class="button button--black-border <?php if($q=='uia')echo 'button--active'; ?>">UIA</a>
        </div>
        
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
            if ($q == 'uia') {
                $w = " AND f3=1 ";
            } elseif ($q == 'gpa') {
                $w = " AND f2=1 ";
            } else {
                $w = "";
            }
            $sql = "SELECT * FROM oa_clanky WHERE status='1' ".$w." ORDER BY id DESC";

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

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>
    

    