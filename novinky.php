<?php include ('config.php');?>

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
<!-- Menu -->    
<?php include ('menu.php');?> 


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
            $sql = "SELECT * FROM oa_clanky WHERE status='1' ORDER BY id DESC";

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

            for ($i=0;$i<30;$i++): 

            $pole2[$i]=$pole[$i];


            endfor;

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
                <div class='news__col'>
                    <a href='../novinka/$id-$odkaz'>
                        <div class='news__image'>
                            <img src='../uploads/images/$photo'>
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
    

    