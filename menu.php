<header class="header">
	<div class="header__wrapper wrapper">
		<a href="<?php echo $baseurl ?>/" class="header__logo">
			<img class="header__logoImg" src="<?php echo $baseurl ?>/assets/images/brand/logo-white.png" alt="logo">
		</a>

		<div class="header__menu">
			<?php include ('./components/head/navigation.php');?>
			<div class="hamburger">
				<span class="hamburger__label">Menu</span>
				<div class="hamburger__trigger">
					<span class="hamburger__trigger--bread-top"></span>
					<span class="hamburger__trigger--meat"></span>
					<span class="hamburger__trigger--bread-bottom"></span>
				</div>
			</div>
		</div>
	</div>
</header>  

<div id="overlay">
	<div class="navigation navigation--mobile">
		<?php include ('./components/head/navigation.php');?>
	</div>
</div>