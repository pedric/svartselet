<body>
<?php if(isset($_REQUEST["lang"])) { $eng = true; } ?>
	
	<!-- Side-menu -->
	<div id="menu-bar">
		<!-- Accessibility alternatives -->
		<div id="lang-alt-container">
			<a <?php if(isset($eng)){echo "href='index.php'>Svenska";} else {echo "href='includes/switch_to_english.php'>English";} ?></a>
		</div>
		<nav>
			<ul>
				<li class="menu-post"><a href="#home" id="home-link"><?php if(isset($eng)) {echo "home";} else {echo "hem";} ?></a></li>
				<li class="menu-post"><a href="#about" id="about-link"><?php if(isset($eng)) {echo "about";} else {echo "om";} ?></a></li>
				<li class="menu-post"><a href="#portfolio" id="portfolio-link"><?php if(isset($eng)) {echo "work";} else {echo "portfolio";} ?></a></li>
			</ul>
		</nav>
		<div id="portrait-container">
			<img src="img/layout/header-image.jpg" alt="#" />			
			<div id="text-me">
				<p><a class="mail-link" href="mailto:epost.larsson@gmail.com">epost.larsson@gmail.com</a></p>
				<div id="icons">
					<a href="https://www.instagram.com/svartselet" target="_blank"><i class="fa fa-instagram icon-me"></i></a>
					<a href="https://www.facebook.com/svartselet" target="_blank"><i class="fa fa-facebook-square icon-me"></i></a>
					<a href="https://se.linkedin.com/svartselet" target="_blank"><i class="fa fa-linkedin-square icon-me"></i></a>
				</div>
				<?= footer(); ?>
			</div>
		</div>
	</div>
	<!-- menu icon -->
	<div id="menu-icon-container" onclick="showHideMenu()">
		<i id="menu-icon" class="fa fa-bars fa-4x"></i>
	</div>
	<div id="content">
		<h1 class="hidden">Svartselet</h1>