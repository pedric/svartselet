<body>
<?php if(isset($_REQUEST["lang"])) { $eng = true; } ?>
	<!-- Accessibility alternatives -->
	<div id="lang-alt-container">
		
		<!-- Accessible !OFF
		<a <?php /*if(isset($eng)) {echo "href='accessible/index.php?lang=eng'>Accessible site";} else {echo "href='accessible/index.php'>Tillgänglig sida";}*/ ?></a>
		-->

		<a <?php if(isset($eng)){echo "href='index.php'>Svenska";} else {echo "href='includes/switch_to_english.php'>English";} ?></a>
		
		<!-- Log in !OFF
		<a <?php /*if(isset($eng)) {echo "href='customer-zone-login.php?lang=eng'>Login";} else {echo "href='customer-zone-login.php'>Logga in";}*/ ?></a>
		-->

	</div>

	<!-- Side-menu -->
	<div id="menu-bar">
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
				<p><a class="mail-link" href="mailto:fredrik@svartselet.se">fredrik@svartselet.se</a></p>
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
		<p id="menu-icon-text"><?php if(isset($eng)) {echo "menu";} else {echo "meny";} ?></p>
	</div>
	<div id="content">
		<h1 class="hidden">Svartselet</h1>