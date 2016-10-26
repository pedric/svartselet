<?php
include("includes/config.php");
include("includes/head.php");
include("includes/header-portfolio.php");
?>
<div class="show-portfolio-container">
	<div class="portfolio-pitch-holder">

			<?php if(isset($eng)) { ?>

			<p class="p-portfolio-pitch">Coverart for print and digital release made out of traditional artistic craftmanship and finished up in digital editing.</p>

			<?php } else { ?>

			<p class="p-portfolio-pitch">Omslag för tryck och digital release gjorda från konsthantverk till digital redigering.</p>

			<?php } ?>
		
	</div>
	<div class="show-portfolio-12">
		<div class="portfolio-content-holder">
		<img src="img/portfolio/object-4-img-1.jpg" alt="Original artwork">
		</div>
	</div>
	<div class="show-portfolio-4">
		<div class="portfolio-content-holder">
		<img src="img/portfolio/object-4-img-2.jpg" alt="record cover">
		</div>
	</div>
	<div class="show-portfolio-4">
		<div class="portfolio-content-holder">
		<img src="img/portfolio/object-4-img-6.jpg" alt="record cover">
		</div>
	</div>
	<div class="show-portfolio-4">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-4-img-3.jpg" alt="record cover">
		</div>
	</div>
	<div class="show-portfolio-12">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-4-img-4.jpg" alt="image of concrete artwork">
		</div>
	</div>
</div>
<?php include("includes/footer.php"); ?>