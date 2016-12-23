		<!-- Home-section -->
		<section id="home">
		
		<!-- Background video !OFF 
		<video autoplay loop poster="img/layout/bg-svartselet.jpg" id="bgvid">
			<source src="vid/bg-vid-h2o.webm" type="video/webm">
			<source src="vid/bg-vid-h2o.mp4" type="video/mp4">
		</video>
		-->

			<div id="pitch-home">
				<img id="heading-logo" src="img/layout/svartselet-heading.png" alt="Svartselet - Webbdesign i det tysta">
				<h4 class="h4-home dark-font"><?php if(isset($eng)) {echo "Web design in peace*";} else {echo "Webbdesign i det tysta*";} ?></h4>
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

					<p class="p-about">
						<span class="first-word">*Svartselet</span> is a <span class="highlight">creative studio</span> in Glöte, Härjedalen. Svartselet Studio focuses on <span class="highlight">web productions</span> but also works with <span class="highlight">design, graphic, photography, video, artistic projects</span> etc.
					</p>

					<?php } else { ?>

					<p class="p-about">
						<span class="first-word">*Svartselet</span> är en <span class="highlight">kreativ studio</span> i Härjedalen. Produktion för <span class="highlight">webb, design, grafik, fotografi, film, konstnärliga projekt</span> etc.
					</p>

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