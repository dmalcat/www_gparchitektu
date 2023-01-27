<?php include ('config.php');?>

<?php 

$r = $_SERVER['REQUEST_URI']; 
$r = explode('/', $r);
$r = array_filter($r);
$r = array_merge($r, array()); 

$idecko = $r[1];

$b = $idecko; 
$b = explode('-', $b);
$b = array_filter($b);
$b = array_merge($b, array()); 

$id = $b[0];

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

<section id="novinky-slide" class="news">
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
                while($row = $result->fetch_assoc()) {
            $id = $row['id'];   
            $title = $row['title'];
            $content = $row['content'];
            $datum= $row['datum'];



            
            echo "        

                <h1 class='text-center'>$title</h5>
                            <br>
            $content
                            </b></p>
                            <br><br>
                                
            ";
                }
            } else { 
            }
            $conn->close();

            ?>  
            </div>
            <div class="col-md-8">
            <div class="row">
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
            <div class='col-md-6'>
                        <img src='../uploads/images/$url_image' class='img-responsive' data-pop-img='../uploads/images/$url_image' width='100%'><br><br>
            </div>
            ";
                }
            } else { 
            }
            $conn->close();

            ?>  


            <!-- The Modal -->
            <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
            </div>

            </div>
            </div>
                    </div>
                    </div><hr size="4" style="background-color: black;opacity: 1;">
                </div>
            </div>


        <p>
            <a href="../novinky/">Zpět</a>
        </p>

        </div>
    </div>
</section>

<section id="footer" class="footer">
	<?php include('footer.php'); ?>
</section>
    
  


    