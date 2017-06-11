<!-- Portfolio-section -->
<div id="header-portfolio" style="display: none;">
	<h2 id="heading-portfolio"><?php if(isset($eng)) {echo "Work";} else {echo "Portfolio";} ?></h2>
</div>

<div id="portfolio-items-container">


	<!-- Item -->
	<div class="portfolio-item white" style="background: rgb(204, 79,42);">
		<!-- <i class="fa fa-angle-down fa-2x show-item-icon" aria-hidden="true"></i> -->

		<div class="fadeMeIn">
			<div class="portfolio-item-img">
				<img src="img/portfolio-object-7.png" alt="#" />
			</div>

			<div class="portfolio-item-text" style="max-width: 590px;">
				<h3 class="h3-portfolio">walko.se</h3>
				<p class="involvement">
					<?php if(isset($eng)) {echo "Graphic design / Logo / Website / Wordpress";} else {echo "Formgivning / Logo / Webbplats / Wordpress";} ?>
				</p>
				<p class="portfolio-bread hidden">
					<?php if(isset($eng)) {echo "Logo, design and development of Wordpress-theme for Walko.se";} else {echo "Logotyp, färg– och formgivning samt utvecklande av Wordpress–tema för Walko.se";} ?>
				</p>
			</div>

			<style>
				
				#walko-img { width: 98%; height: 320px; }

				@media screen and (max-width: 400px) {
					#walko-img { height: 220px; }
				}

			</style>

			<div class="portfolio-gallery">
				<div id="walko-img"><a class="pop" href="img/portfolio/object-7-img-1.png"><img src="img/portfolio/object-7-img-1.png" alt="#" /></a></div>
			</div>
		</div>

	</div>


	<!-- Item -->
	<div class="portfolio-item white" style="background-image: url(img/portfolio/object-6-bg.jpg)">
		<!-- <i class="fa fa-angle-down fa-2x show-item-icon" aria-hidden="true"></i> -->

		<div class="fadeMeIn">
			<div class="portfolio-item-img">
				<a class="pop" href="img/portfolio-object-6.jpg"><img src="img/portfolio-object-6.jpg" alt="#" /></a>
			</div>

			<div class="portfolio-item-text">
				<h3 class="h3-portfolio white"><?php if(isset($eng)) {echo "Self";} else {echo "Självbild";} ?></h3>
				<p class="involvement white"><?php if(isset($eng)) {echo "Painting / Photo / Video / Sculpture / Installation";} else {echo "Måleri / Foto / Video / Skulptur / Installation";} ?>
				</p>
				<p class="portfolio-bread white">
					<?php if(isset($eng)) { ?>

					Artistic work that attacks the surfaces or layers of the self-image found in the surroundings, objects, body, behavior and thought. Surfaces that constitute a self. The image are given shape when the material become subject of acts that one can experience or perform. In this process layers and fragments of the self occurs, where materials and acts depicts each other or merges. The deformation create different limits, clues or options to the construction of the self.

					<?php } else { ?>
					
					Ett konstnärligt arbete som angriper ytor eller lager av självbilden som finns i omgivning, objekt, kropp, beteende och tanke. Ytor som utgör ett jag. Bilderna byggs upp då material blir föremål för handlingar jaget utsätts för eller utför. I denna process uppstår lager och fragment ur jaget där material och handlingar avbildat varandra eller pressats samman. Deformeringen blir olika gränser, ledtrådar eller alternativ för jagets konstruktion.
					<?php } ?>
				</p>
			</div>

			<div class="portfolio-gallery">
				<div><a class="pop" href="img/portfolio/object-6-img-6.jpg"><img src="img/portfolio/object-6-img-6-thumb.jpg" alt="#" /></a></div>
				<div><a class="pop" href="img/portfolio/object-6-img-10.jpg"><img src="img/portfolio/object-6-img-10-thumb.jpg" alt="#" /></a></div>
				<div><a class="pop" href="img/portfolio/object-6-img-11.jpg"><img src="img/portfolio/object-6-img-11-thumb.jpg" alt="#" /></a></div>
			</div>
		</div>

	</div>


	<!-- Item -->
	<div class="portfolio-item white" style="background: #29367a;">
		<!-- <i class="fa fa-angle-down fa-2x show-item-icon" aria-hidden="true"></i> -->

		<div class="fadeMeIn">
			<div class="portfolio-item-img">
				<a class="pop" href="img/portfolio-object-3.png"><img src="img/portfolio-object-3.png" alt="#" /></a>
			</div>

			<div class="portfolio-item-text" style="max-width: 610px;">
				<h3 class="h3-portfolio">Medskogen Hantverksost</h3>
				<p class="involvement">
					<?php if(isset($eng)) {echo "Illustration / Logo";} else {echo "Illustration / Logo";} ?>
				</p>
				<p class="portfolio-bread hidden">
					<?php if(isset($eng)) {echo "Logotype created from illustration to digital editing. Development of a Wordpress-theme (not yet released).";} else {echo "Logotyp skapad från illustration till digital redigering, Wordpress-tema under utveckling.";} ?>
				</p>
			</div>

			<style>
				
				#medskogen-img { width: 98%; height: 330px; }

				@media screen and (max-width: 400px) {
					#medskogen-img { height: 270px; }
				}

			</style>

			<div class="portfolio-gallery">
				<div id="medskogen-img">
					<a class="pop" href="img/portfolio/object-3-img-1.jpg"><img src="img/portfolio/object-3-img-1.jpg" alt="#" /></a>
				</div>
			</div>
		</div>

	</div>


	<!-- Item -->
	<div class="portfolio-item white" style="background: transparent;">
		<!-- <i class="fa fa-angle-down fa-2x show-item-icon" aria-hidden="true"></i> -->

		<div class="fadeMeIn">
			<div id="video-player-container">
				<div></div>
				<div>
					<img src="img/layout/tv2.jpg" alt="#" style="width: 100%;" />
				</div>
				<div id="changeTape" class="videoWrapper">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/xBKZg3QuhV0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>

			<div class="portfolio-item-text black" style="max-width: 440px; margin-bottom: 70px;">
				<h3 class="h3-portfolio black">Video</h3>
				<!-- tapes  -->
				<!-- Shitlife -->
				<p class="black left-align tape" onclick="changeTape(1)">
					<i class="fa fa-play-circle black" aria-hidden="true"></i> Shitlife, 2011, 19:05
				</p>
				<!-- Curbsession Bagnols -->
				<p class="black left-align tape" onclick="changeTape(2)">
					<i class="fa fa-play-circle black" aria-hidden="true"></i> Curbsession Bagnols Sur Céze, 2012, 1:40
				</p>
				<!-- Turne Brottskod 11 -->
				<p class="black left-align tape" onclick="changeTape(3)">
					<i class="fa fa-play-circle black" aria-hidden="true"></i> Brottskod 11 – Easter tour, 2012, 17:42
				</p>
				<!-- Paranojja -->
				<p class="black left-align tape" onclick="changeTape(4)">
					<i class="fa fa-play-circle black" aria-hidden="true"></i> The Dead – Paranojja, 2014, 2:01
				</p>
				<!-- DSR -->
				<p class="black left-align tape" onclick="changeTape(5)">
					<i class="fa fa-play-circle black" aria-hidden="true"></i> DSR (Skatetour – Bilbao), 2012, 14:04
				</p>

			</div>
		</div>

	</div>


	<!-- Item -->
	<div class="portfolio-item white" style="background-color: #f14ab6; /*background-image: url(img/portfolio/object-9-bg.jpg); background-position: top center;*/">
		<!-- <i class="fa fa-angle-down fa-2x show-item-icon" aria-hidden="true"></i> -->

		<div class="fadeMeIn">
			<div class="portfolio-item-img">
				<a class="pop" href="img/portfolio-object-9.png"><img src="img/portfolio-object-9.png" alt="#" style="max-width: 600px;" /></a>
			</div>

			<div class="portfolio-item-text">
				<h3 class="h3-portfolio white" style="background: #f14ab6;padding: 2px 7px 4px;">PinkPostcards</h3>
				<p class="involvement white" style="background: #f14ab6; padding: 2px 7px 4px;">
					<?php if(isset($eng)) {echo "MEAN project";} else {echo "MEAN project";} ?>
				</p>
				<p class="portfolio-bread white" style="background: #f14ab6; padding: 2px 7px 4px; margin-bottom: 50px;">
					<?php if(isset($eng)) { ?>

				App based on the MEAN-stack, university project. Testversion available <a href="https://larsson-postcardapp.herokuapp.com/">here</a>

				<?php } else { ?>

				App byggd med MEAN-stacken, universitetsprojekt för kursen "Javascriptsbaserad Webbutveckling". Går att testköra <a href="https://larsson-postcardapp.herokuapp.com/">här</a>

				<?php } ?>
				</p>
			</div>
		</div>

	</div>


	<!-- Item -->
	<div class="portfolio-item white" style="background-color: #000;">
		<!-- <i class="fa fa-angle-down fa-2x show-item-icon" aria-hidden="true"></i> -->

		<div class="fadeMeIn">
			<div class="portfolio-item-img">
				<a class="pop" href="img/portfolio-object-10.png"><img src="img/portfolio-object-10.png" alt="#" style="max-width: 600px;" /></a>
			</div>

			<div class="portfolio-item-text">
				<h3 class="h3-portfolio white">Hildings Krog</h3>
				<p class="involvement white">
					<?php if(isset($eng)) {echo "WordPress";} else {echo "WordPress";} ?>
				</p>
				<p class="portfolio-bread white" style="margin-bottom: 50px;">
					<?php if(isset($eng)) { ?>

				WordPress theme for the bar &amp; kitchen Hildings Krog, published at <a href="http://www.hildingskrog.se/">hildingskrog.se</a>.</a>

				<?php } else { ?>

				WordPress-tema för restaurangen Hildings Krog, publicerad på <a href="http://www.hildingskrog.se/">hildingskrog.se</a>.

				<?php } ?>
				</p>
			</div>
		</div>

	</div>


	<!-- Item -->
	<div class="portfolio-item black" style="background: #fff;">
		<!-- <i class="fa fa-angle-down fa-2x show-item-icon" aria-hidden="true"></i> -->

		<div class="fadeMeIn">
			<div class="portfolio-item-img">
				<a class="pop" href="img/portfolio-object-4.jpg"><img src="img/portfolio-object-4.jpg" alt="#" /></a>
			</div>

			<div class="portfolio-item-text" style="max-width: 590px;">
				<h3 class="h3-portfolio black">Cover art</h3>
				<p class="involvement black">
					<?php if(isset($eng)) {echo "Art / Design / Layout";} else {echo "Konsthantverk / Design / Layout";} ?>
				</p>
				<p class="portfolio-bread black hidden">
					<?php if(isset($eng)) { ?>

				Coverart for print and digital release.

				<?php } else { ?>

				Omslagsdesign för tryck och digital release.

				<?php } ?>
				</p>
			</div>

			<div class="portfolio-gallery">
				<div><a class="pop" href="img/portfolio/object-4-img-5.jpg"><img src="img/portfolio/object-4-img-5-thumb.jpg" alt="#" /></a></div>
				<div><a class="pop" href="img/portfolio/object-4-img-3.jpg"><img src="img/portfolio/object-4-img-3-thumb.jpg" alt="#" /></a></div>
				<div><a class="pop" href="img/portfolio/object-4-img-1.jpg"><img src="img/portfolio/object-4-img-1-thumb.jpg" alt="#" /></a></div>
				<div><a class="pop" href="img/portfolio/object-4-img-2.jpg"><img src="img/portfolio/object-4-img-2-thumb.jpg" alt="#" /></a></div>
				<div><a class="pop" href="img/portfolio/object-4-img-6.jpg"><img src="img/portfolio/object-4-img-6-thumb.jpg" alt="#" /></a></div>
			</div>
		</div>
	</div>

</div>