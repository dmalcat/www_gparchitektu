<?php include ('config.php');?>

<?php 
//tady si taháš IDéčko spolupráce z URL nemusí to být číslo, může to být číslo nebo hash
$r = $_SERVER['REQUEST_URI']; 
$r = explode('/', $r);
$r = array_filter($r);
$r = array_merge($r, array()); 

$id = $r[2];
//2ka naznačuje pořadí pozice hodnoty v URL ?>

<!DOCTYPE html>
<html lang="cs">

<head> 
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Spolupráce | Grand Prix Architektů</title>

	<?php include('./components/head.php'); ?>
</head>
<body>
<!-- Menu -->    
<?php include ('menu.php');?> 

<section id="novinky-slide">
<!-- novinky -->  

<div class="col-md-12"style="background-color:yellow;" align="center">
<br>
    <div class="col-md-10"  align="center">
        <br><br>

        <div class="row">
            <div class="col-md-4" align="left">
                <h5><b>Spolupráce č. <?php echo $id;?></b></h5>
                <br>
                    <p style="font-size:12px;"><b>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Duis viverra diam non justo. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Etiam commodo dui eget wisi. In rutrum. Suspendisse nisl. Fusce aliquam vestibulum ipsum. Nulla quis diam. Fusce aliquam vestibulum ipsum. Aliquam erat volutpat. Proin mattis lacinia justo. Integer vulputate sem a nibh rutrum consequat. Quisque tincidunt scelerisque libero. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Integer in sapien. Praesent id justo in neque elementum ultrices. Mauris dictum facilisis augue. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Vivamus porttitor turpis ac leo.
<br><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Duis viverra diam non justo. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Etiam commodo dui eget wisi. In rutrum. Suspendisse nisl. Fusce aliquam vestibulum ipsum. Nulla quis diam. Fusce aliquam vestibulum ipsum. Aliquam erat volutpat. Proin mattis lacinia justo. Integer vulputate sem a nibh rutrum consequat. Quisque tincidunt scelerisque libero. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Integer in sapien. Praesent id justo in neque elementum ultrices. Mauris dictum facilisis augue. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Vivamus porttitor turpis ac leo.                </b></p>
            </div>


            <div class="col-md-4">
                    <img src="<?php echo $baseurl ?>/img/fotka1.jpg" width="100%">
                    <br><br>
                    <img src="<?php echo $baseurl ?>/img/foto5.png" width="100%">
                    <br><br>
                    <img src="<?php echo $baseurl ?>/img/foto6.png" width="100%">
                    <br><br>
            </div>
            
            <div class="col-md-4">
                    <img src="<?php echo $baseurl ?>/img/foto3.png" width="100%">
                    <br><br>
                    <img src="<?php echo $baseurl ?>/img/o.png" width="100%">
                    <br><br>
                    <img src="<?php echo $baseurl ?>/img/foto4.png" width="100%">
                    <br><br>
            </div> 
        </div>
        </div><hr size="4" style="background-color: black;opacity: 1;">
    </div>
</div>


<h5 class="nadpis"><b>
<a href="<?php echo $baseurl ?>/o-nas/">Zpět</a>
</h5></b>
</section>


<?php include('partners.php'); ?>

<?php include('./components/partners/oa-partners.php'); ?>

<br><br><br>

<section id="kontakt">
<!-- kontakty -->  

<?php include('kontakty.php'); ?>

</section>


<section id="footer">
<!-- kontakty -->  

<?php include('footer.php'); ?>

</section>
    

    