<?php include ('config.php');?>

<?php 

$slug = explode('/',$_SERVER['REQUEST_URI']);
$q = end($slug);
$id = explode('-', $q)[0];

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


<!-- Menu -->    
<?php include ('menu.php');?>

<section class="hero hero--subpage">
	<div class="hero__wrapper wrapper">
		<h1>Novinky</h1>
	</div>
	<picture class="hero__image">
		<source srcset="<?php echo $baseurl ?>/assets/images/covers/novinky/cover_375.jpg" media="(max-width: 375px)" type="image/jpeg">
		<source srcset="<?php echo $baseurl ?>/assets/images/covers/novinky/cover_540.jpg" media="(max-width: 540px)" type="image/jpeg">
        <source srcset="<?php echo $baseurl ?>/assets/images/covers/novinky/cover_768.jpg" media="(max-width: 768px)" type="image/jpeg">
		<source srcset="<?php echo $baseurl ?>/assets/images/covers/novinky/cover.jpg" media="(max-width: 2560px)" type="image/jpeg">
		<img src="<?php echo $baseurl ?>/assets/images/covers/novinky/cover.jpg" alt="">
	</picture>
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

        <div class="news__article">
            <?php
            include 'conn.php';

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            $conn->set_charset('utf8');
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM oa_clanky WHERE id = '$id' LIMIT 1";

            $result = $conn->query($sql);                            

            if ($result->num_rows > 0) {                                     
                // output data of each row   
                $row = $result->fetch_assoc();
            $id = $row['id'];   
            $title = $row['title'];
            $content = $row['content'];
            $datum= $row['date'];



            
            echo "        

                <h1 class='text-center'>$title</h5><br>
                $content
                            </b></p>
                            <br><br>
                                
            ";
            } else { 
            }
            $conn->close();

            ?>  
            </div>
            
            <div class="news__gallery">
            
            <?php


            include 'conn.php';

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            $conn->set_charset('utf8');
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM oa_media WHERE id_clanku='$id' ORDER BY poradi ASC";

            $result = $conn->query($sql);                            

            if ($result->num_rows > 0) {                                     
                // output data of each row   
                while($row = $result->fetch_assoc()) {
            $url_image = $row['cesta'];

            echo "
                <div class='gallery' id='news-gallery'>
                    <a href='$baseurl/uploads/images/$url_image' class='gallery__item'>
                        <img src='$baseurl/uploads/images/$url_image' class='gallery__item'>
                    </a>
                </div>
            ";
                }
            } else { 
            }
            $conn->close();

            ?>  

            <div class="buttonRow buttonRow--left">
                <a href="<?php echo $baseurl ?>/novinky/" class="button button--black button--arrow button--back">
                    <img class="button__arrow svg" src="<?php echo $baseurl ?>/assets/images/icons/arrow-right-white.svg" alt="">
                    Zpět na výpis novinek
                </a>
            </div>

        </div>
    </div>
</section>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>
    
<script>
	baguetteBox.run('#news-gallery');
</script> 
