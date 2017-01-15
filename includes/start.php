		<!-- Home-section -->
		<section id="home">
		
		<!-- Background video !OFF 
		<video autoplay loop poster="img/layout/bg-svartselet.jpg" id="bgvid">
			<source src="vid/bg-vid-h2o.webm" type="video/webm">
			<source src="vid/bg-vid-h2o.mp4" type="video/mp4">
		</video>
		-->

			<div id="pitch-home">
				<img id="heading-logo" src="img/layout/fl-heading.png" alt="Fredrik Larsson">
				<!--<h4 class="h4-home dark-font"><?php //if(isset($eng)) {echo "Web design in peace*";} else {echo "Webbdesign i det tysta*";} ?></h4>-->
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

					<img src="img/fredriklarsson.jpg" style="width: 100%;" alt="Portrait of Fredrik Larsson" />
					<p class="p-about">
						<span>*Right now I'm looking for a company to cooperate with to make a B-level project in web development.</span>
					</p>
					<p class="p-about">
						 The course is the final element of my studies at the program Web Development 120hp at the Mid Sweden University. The concept of the project is flexible and can be tailored to fit the task to be done, so this is a good chance for you to get an extra resource and for me to gain more experience.
						 <br /><br />
						 Syllabus for the project is available <a href="https://www.miun.se/utbildning/Kurser/Sok-kursplan/kursplan/?kursplanid=16554" target="_blank">here<i class="fa fa-external-link" aria-hidden="true"></i></a>.
						 <br /><br />
						 More info about me in the documents and portfolio below.
					</p>
					<p class="p-about">
						<a href="pdf/CV-Fredrik_Larsson.pdf">CV, Fredrik Larsson (pdf, Swedish)</a><br />
						<a href="pdf/Personligt_brev-Fredrik_Larsson.pdf">Personligt brev, Fredrik Larsson (pdf, Swedish)</a>
					</p>

					<?php } else { ?>

					<img src="img/fredriklarsson.jpg" style="width: 100%;" alt="Portrait of Fredrik Larsson" />
					<p class="p-about">
						<span>*Jag söker just nu ett företag att samarbeta med för att utföra projektarbete på B-nivå inom webb.</span>
					</p>
					<p class="p-about">
						 Kursen ingår som avslutande moment på programmet Webbutveckling 120hp som jag läser på distans mot Mittuniversitetet. Upplägget av projektarbetet är flexibelt och kan utformas efter bådas behov, det är alltså en bra chans för er att få in en extra resurs och för mig att skaffa mer erfarenhet.
						 <br /><br />
						 Kursplan för projekt finns <a href="https://www.miun.se/utbildning/Kurser/Sok-kursplan/kursplan/?kursplanid=16554" target="_blank">här<i class="fa fa-external-link" aria-hidden="true"></i></a>.
						 <br /><br />
						 Mer info om mig i dokument och portfolio nedan.
					</p>
					<p class="p-about">
						<a href="pdf/CV-Fredrik_Larsson.pdf">CV, Fredrik Larsson (pdf)</a><br />
						<a href="pdf/Personligt_brev-Fredrik_Larsson.pdf">Personligt brev, Fredrik Larsson (pdf)</a>
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