		<!-- Home-section -->
		<section id="home">
		
		<!-- Background video !OFF 
		<video autoplay loop poster="img/layout/bg-svartselet.jpg" id="bgvid">
			<source src="vid/bg-vid-h2o.webm" type="video/webm">
			<source src="vid/bg-vid-h2o.mp4" type="video/mp4">
		</video>
		-->

			<div id="pitch-home">
				<h2 id="fullwidth-text">Svartselet</h2>
				<!-- <img id="heading-logo" src="img/layout/fl-heading.png" alt="Fredrik Larsson"> -->
			</div>
			<a class="scroll-this fade-pointer-home" href="#about"><i id="scroll-pointer" class="fa fa-angle-down fa-4x black"></i></a>
		</section>
		<!-- About-section -->
		<section class="relative" id="about">
			<div id="header-about">
				<h2 id="heading-about" style="display: none;"><?php if(isset($eng)) {echo "About";} else {echo "Om";} ?></h2>
			</div>
			<div id="text-about">
				<div>

					<?php if(isset($eng)) { ?>

					<h4 class="h4-home dark-font fadeMeIn">Web, design &amp; art</h4>

					<?php } else { ?>

					<h4 class="h4-home dark-font fadeMeIn">Webb, design &amp; konst</h4>

					<?php } ?>

				</div>
			</div>
			<!--<div id="about-img-container"></div>-->
			<a class="scroll-this fade-pointer-about" href="#portfolio"><i id="scroll-pointer-about" class="fa fa-angle-down fa-4x"></i></a>
		</section>
		<!-- Portfolio -->
		<section id="portfolio">
			<?php include("portfolio.php"); ?>
		</section>
		<!-- !end-portfolio -->