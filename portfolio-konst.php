<?php
include("includes/config.php");
include("includes/head.php");
include("includes/header-portfolio.php");
?>
<div class="show-portfolio-container">
	<div class="show-portfolio-12">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-6-img-2.jpg" alt="Exhibition">
		</div>
	</div>
	<div class="show-portfolio-4">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-6-img-1.jpg" alt="Artwork image of camera">	
		</div>
	</div>
	<div class="show-portfolio-8">
		<div class="portfolio-content-holder">

			<?php if(isset($eng)) { ?>

			<p class="p-portfolio" style="text-align: center; font-weight: 600;">Deformation - Layers - Fragments - Actions - Conventions - Surface - Identity.</p>

			<?php } else { ?>

			<p class="p-portfolio" style="text-align: center; font-weight: 600;">Deformation - Lager - Fragment - Handling - Konvention - Förlopp - Fasad - Yta - Identitet.</p>
			<p class="p-portfolio">Jag bekräftar och bygger min identitet med vad jag väljer att omge mig med och använda mig av. Jag kommunicerar och konsumerar för att skapa och upprätthålla en självbild. En bild jag presenterar för omgivningen som jag själv speglar mig i och ramar in med ett lika självdefinierande avståndstagande.
			</p><p  class="p-portfolio">Arbetena angriper ytor eller lager av självbilden som finns i omgivning, objekt, kropp, beteende och tanke. Ytor som utgör ett jag. Bilderna byggs upp då material blir föremål för handlingar jaget utsätts för eller utför. De planeras, grundas, formas, målas, rivs, renoveras, saneras, restaureras, städas, faller, utvecklas, kopieras, placeras, avbildar, avbildas, säljs, paketeras, realiseras, manipuleras, recenseras, delas, kommenteras, ifrågasätts. I denna process uppstår lager och fragment ur jaget där material och handlingar avbildat varandra eller pressats samman. Deformeringen blir olika gränser, ledtrådar eller alternativ för jagets konstruktion.
			</p>
			<p class="p-portfolio">Processen försöker svara på hur långt inpå vi vågar hålla vår självbild mot omgivningen, men likväl inför oss själva. Vad är äkthet och falskhet? Är vår bild unik, likt ett konstverk, ett självporträtt eller är den en produkt, en vara? Ser bilden ut som den gör för att en vill det eller för att den behöver se ut på ett visst sätt?</p>

			<?php } ?>

		</div>
	</div>
	<div class="show-portfolio-12">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-6-img-7.jpg" alt="Exhibition">
		</div>
	</div>
	<div class="show-portfolio-8">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-6-img-6.jpg" alt="Artwork image of knife">
		</div>
	</div>
	<div class="show-portfolio-4">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-6-img-8.jpg" alt="Artwork image of telephone">	
		</div>
	</div>
	<div class="show-portfolio-12"></div>
	<div class="show-portfolio-4">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-6-img-3.jpg" alt="Artwork image of painting">	
		</div>
	</div>
	<div class="show-portfolio-4">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-6-img-4.jpg" alt="Artwork image of painting">	
		</div>
	</div>
	<div class="show-portfolio-4">
		<div class="portfolio-content-holder">
			<img src="img/portfolio/object-6-img-5.jpg" alt="Artwork image of painting">	
		</div>
	</div>
	<div class="show-portfolio-12">
		<div class="portfolio-content-holder">
			<video controls id="portfolio-object-6-vid" poster="img/portfolio/object-6-img-9.jpg">
				<source src="vid/project-6.webm" type="video/webm">
				<source src="vid/project-6.mp4" type="video/mp4">
			</video>
		</div>
	</div>
</div>
<?php include("includes/footer.php"); ?>