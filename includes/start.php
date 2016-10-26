		<!-- Home-section -->
		<section class="span-12" id="home">
		
		<!-- Background video !OFF 
		<video autoplay loop poster="img/layout/bg-svartselet.jpg" id="bgvid">
			<source src="vid/bg-vid-h2o.webm" type="video/webm">
			<source src="vid/bg-vid-h2o.mp4" type="video/mp4">
		</video>
		-->

			<div id="pitch-home">
				<img id="heading-logo" src="img/layout/svartselet-heading.png" alt="Välkommen till Svartselet">
				<h4 class="h4-home dark-font"><?php if(isset($eng)) {echo "Web design in peace*";} else {echo "Webbdesign i det tysta*";} ?></h4>
			</div>
			<a class="scroll-this fade-pointer-home" href="#about"><i id="scroll-pointer" class="fa fa-angle-down fa-4x black"></i></a>
		</section>
		<!-- About-section -->
		<section class="span-12" id="about">
			<div id="header-about">
				<h2 id="heading-about" style="display: none;"><?php if(isset($eng)) {echo "About";} else {echo "Om";} ?></h2>
			</div>
			<div class="full-container">
				<div class="about-text">

					<?php if(isset($eng)) { ?>

					<p class="p-about">
						<span class="first-word">*Svartselet</span> is a calm water in the river Lofsån which peacefully runs by. It's also a <span class="highlight">creative studio</span> in Glöte, Härjedalen. Svartselet Studio focuses on smaller <span class="highlight">web productions</span> but also works with <span class="highlight">design, graphic, photography, video, artistic projects</span> etc.
					</p>

					<?php } else { ?>

					<p class="p-about">
						<span class="first-word">*Svartselet</span> är ett lugnvatten i Lofsån som rinner tyst förbi. Det är även en <span class="highlight">kreativ studio</span> i Glöte, Härjedalen. Svartselet Studio inriktar sig mot mindre <span class="highlight">produktioner för webb</span> men arbetar även med <span class="highlight">design, grafik, fotografi, film, konstnärliga projekt</span> etc.
					</p>

					<?php } ?>

				</div>
			</div>
			<!--<div id="about-img-container"></div>-->
			<a class="scroll-this fade-pointer-about" href="#portfolio"><i id="scroll-pointer-about" class="fa fa-angle-down fa-4x"></i></a>
		</section>
		<!-- Portfolio -->
		<section class="span-12" id="portfolio">
			<?php include("portfolio.php"); ?>
		</section>
		<!-- !end-portfolio -->