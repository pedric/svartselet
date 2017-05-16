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
				<h4 class="h4-home dark-font"><?php if(isset($eng)) {echo "Web, design &amp; art";} else {echo "Webb, design &amp; konst";} ?></h4>
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

					<p class="p-about" style="margin-top: 0;">
						<span>*May 31 I'll finish my studies in web development, 120 credits, at the Mid Sweden University.</span>
					</p>
					<p class="p-about">
						 The first of june I'll then be available for employment at <a class="mail-link" href="mailto:fredrik@svartselet.se">fredrik@svartselet.se</a> or +46 70 297 87 01.<br />
					</p>
					<p class="p-about">
						See documents, resources and portfolio below.<br />
						Regards, Fredrik Larsson
					</p>
					<p class="p-about">
						<a href="pdf/CV-Fredrik_Larsson.pdf">CV, Fredrik Larsson (pdf, Swedish)</a><br />
						<a href="pdf/Personligt_brev-Fredrik_Larsson.pdf">Personligt brev, Fredrik Larsson (pdf, Swedish)</a>
						<a href="https://github.com/pedric">Github</a>
						<a href="https://www.facebook.com/svartselet">Facebook</a>
						<a href="https://www.instagram.com/svartselet">Instagram</a>
						<a href="https://se.linkedin.com/svartselet">LinkedIn</a>
					</p>

					<?php } else { ?>

					<p class="p-about" style="margin-top: 0;">
						<span>*Den 31/5 redovisar- och avslutar jag mitt exjobb på programmet Webbutveckling 120hp distans, Mittuniversitetet.</span>
					</p>
					<p class="p-about">
						 Den 1/6 är jag därmed tillgänglig för arbetsmarknaden via <a class="mail-link" href="mailto:fredrik@svartselet.se">fredrik@svartselet.se</a> eller +46 70 297 87 01.<br />
					</p>
					<p class="p-about">
						Se dokument, länkar och portfolio nedan.<br />
						Mvh, Fredrik Larsson
					</p>
					<p class="p-about" style="font-weight: normal;">
						<a href="pdf/CV-Fredrik_Larsson.pdf">CV, Fredrik Larsson (pdf)</a><br />
						<a href="pdf/Personligt_brev-Fredrik_Larsson.pdf">Personligt brev, Fredrik Larsson (pdf)</a>
						<a href="https://github.com/pedric">Github</a>
						<a href="https://www.facebook.com/svartselet">Facebook</a>
						<a href="https://www.instagram.com/svartselet">Instagram</a>
						<a href="https://se.linkedin.com/svartselet">LinkedIn</a>
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