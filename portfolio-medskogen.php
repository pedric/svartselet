<?php
include("includes/config.php");
include("includes/head.php");
include("includes/header-portfolio.php");
?>
<div class="show-portfolio-container">
	<div class="show-portfolio-12">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-3-img-1.jpg" alt="Logo sketches">
		</div>
	</div>
	<div class="show-portfolio-12">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-3-img-4.jpg" alt="Image of website on screen">
		</div>
	</div>
	<div class="show-portfolio-12">
		<div class="portfolio-content-holder">
			<?php if(isset($eng)) { ?>

				<p class="p-portfolio" style="text-align: center; font-weight: 600; max-width: 500px; margin: 20px auto;">*Design &amp; Production.</p>
			<p class="p-portfolio" style="text-align: center; max-width: 500px; margin: 20px auto;">Development and production of logo, graphic profile and responsive website with a unique theme in WordPress.</p>

			<?php } else { ?>

			<p class="p-portfolio" style="text-align: center; font-weight: 600; max-width: 500px; margin: 20px auto;">*Design &amp; Produktion.</p>
			<p class="p-portfolio" style="text-align: center; max-width: 500px; margin: 20px auto;">Totalproduktion från framtagande av logotyp, grafisk profil och byggande av responsiv webbplats med unikt WordPress-tema som ger användaren full kontroll över innehållet.</p>

			<?php } ?>

		</div>
	</div>
	<div class="show-portfolio-12">
		<div class="portfolio-content-holder">
			<img class="limit-width-img" src="img/portfolio/object-3-img-5.jpg" alt="Sketches of logo in production" style="margin:70px auto;">
		</div>
	</div>
	<div class="show-portfolio-12">
		<div class="portfolio-content-holder">
			<img class="limit-width-img" src="img/portfolio/object-3-img-6.png" alt="Logo" style="margin:70px auto;">
		</div>
	</div>
</div>
<?php include("includes/footer.php"); ?>