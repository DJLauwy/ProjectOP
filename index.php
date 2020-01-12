<!-- ©Lau de Hoop | MD1B | v0.6 -->
<!DOCTYPE html>
	<html>
	<head>
		<title>Media- en applicatieontwikkeling ― Mediacollege Amsterdam</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="script/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="img/icon/icon.ico" />
		<?php require "script/config.php"; ?>
	</head>
	<body>

		<!-- NAVIGATIE BAR -->
		<nav>
			<img src="img/ma-logo.svg" width="200px" height="200px">
			<div>
				<h1><span id="rozeLetter">M</span>edia- en applicatieontwikkeling</h1>
				<h2><span id="rozeLetter">M</span>ediacollege Amsterdam</h2>
			</div>
		</nav>

		<!-- HEADER FOTO -->
		<div class="headerFoto">
			<img src="img/headerImg.jpg" width="100%" height="450px" class="headerStretch">
			<h1 id="slogan"><span id="rozeLetter">W</span>orden wat je bent</h1>
		</div>

		<!-- SECTIONS -->
		<main>

			<!-- SECTION ONE -->
			<section class="secOne">
				<h2>Waarom Mediadevelopment?</h2>
				<div>
					<div>
						<img src="img/foto1.jpg" id="secImgs">
						<h3 id="secOneText">Info</h3>
						<p id="secOneText">Als mediadeveloper programmeer en onderhoud je (mobiele) websites, apps en webapplicaties. Je leert niet alleen veel over technologie en programmeren, maar ook over de basis van digitale vormgeving. Want een product moet niet alleen goed werken, ook het idee erachter moet goed zijn en het product moet er aantrekkelijk uitzien. Ook leer je samenwerken met mediavormgevers, want zij nemen later de vormgeving voor hun rekening.</p>
					</div>
					<div>
						<h3 id="secOneText">Vereisten</h3>
						<p id="secOneText">Voor deze opleiding heb je minimaal VMBO kader gerichte leerweg diploma nodig. Vanaf VMBO gemengde leerweg heb je de meeste kans voor een plek op de opleiding. Het is een 3 jarige opleiding voor Mediadevelopers en 4 jaar voor Gamedevelopment. Er zijn 60 plekken per jaar vrij voor nieuwe studenten. Het is een BOL opleiding, wat inhoudt dat het een fulltime opleiding is. En op deze opleiding werk je op MBO niveau 4.</p>
						<img src="img/foto2.jpg" id="secImgs">
					</div>
				</div>
			</section>

			<!-- SECTION TWO -->
			<section class="secTwo">
				<div>
					<div>
						<div>
							<h3>Meld je nu aan!</h3>
							<p id="fontText">Je opleiding begint met een periode waarin je samen met studenten van de opleiding Gamedeveloper de lessen volgt. Na deze periode kies je ervoor om verder te studeren als mediadeveloper.</p><br>
						</div>
						<div>
							<h3>Contactgegevens</h3>
							<p id="fontText">
								<a href="https://www.google.nl/maps/place/Mediacollege+Amsterdam+(hoofdgebouw)/@52.3909826,4.8559059,18z/data=!4m2!3m1!1s0x0000000000000000:0x5dffd675d740eddb" target="_blank"><img src="img/icon/home.svg" height="15px" width="15px"> Contactweg 36, 1014AN, Amsterdam</a><br>
								<img src="img/icon/phone.svg" height="15px" width="15px"> (020) 850 95 00<br>
								<a href="mailto:info@ma-web.nl"><img src="img/icon/email.svg" height="15px" width="15px"> info@ma-web.nl</a>
							</p>
						</div>
					</div>
					<div>
						<img src="img/foto3.jpg" width="350px" height="500px" id="sec2Img">
						<p id="fontText" class="quoteText"><b>"Back-end programming vind ik het leukste, want dan kun je de ‘achterkant’ van een site bouwen. Als er iets fout is, moet je dat uitzoeken, want je ziet het niet direct."</b><br>
						Rico, student Mediadeveloper</p>
					</div>
				</div>
				<div>
					<a href="https://www.ma-web.nl/opleidingen/opleidingsoverzicht/mediadeveloper/"><input type="button" value="Schrijf je nu in!" id="callToAction" target="_blank"></a>
				</div>
			</section>

			<!-- SECTION THREE -->
			<section class="secThree">
				<h2>Studenten aan het woord!</h2>
				<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/JQmHzjhhoO0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
				<iframe src="https://player.vimeo.com/video/145398347" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
			</section>

			<!-- SECTION FOUR -->
			<section class="secFour">
				<h2>Laat alvast je gegevens achter</h2>
				<div>
					<div>
						<form action="script/save.php" method="post">
							<p id="secFourText">Naam: </p>
							<input type="text" name="naam" placeholder="Bijv. Jan Janssen" required><br><br>
							<p id="secFourText">E-mail adres: </p>
							<input type="email" name="email" placeholder="voorbeeld@hostadres.nl" required><br><br>
							<p id="secFourText">Welke opleiding zou je willen doen?</p>
							<select name="opleiding" id="selecteerOpleiding" required>
								<option value="">Selecteer een opleiding</option>
								<option value="Mediadevelopment">Media- en applicatieontwikkeling</option>
								<option value="Gamedevelopment">Gameontwikkeling</option>
								<option value="Onzeker">Nog niet zeker</option>
							</select><br><br>
							<p id="secFourText">Heb je nog opmerkingen?</p><textarea rows="8" cols="40" name="opmerking"></textarea><br>
							<input type="submit">
						</form>
					</div>

					<div>
						<img src="img/foto5.jpg" height="250px" width="450px" id="sec4Img">
					</div>
				</div>

			</section>
		</main>

		<footer>
			
			<a href="https://www.facebook.com/MediacollegeAmsterdam/" target="_blank">
				<div id="facebookLink">
					<img src="img/icon/fb.png" width="150px" height="150px">
				</div>
			</a>
			<a href="https://twitter.com/mediacollege" target="_blank">
				<div id="twitterLink">
					<img src="img/icon/twitter.png" width="150px" height="150px">
				</div>
			</a>
			<a href="https://www.instagram.com/mediacollege/" target="_blank">
				<div id="instaLink">
					<img src="img/icon/instagram.png" width="150px" height="150px">
				</div>
			</a>
			<a href="https://www.ma-web.nl/" target="_blank">
				<div id="siteLink">
					<img src="img/icon/ma.png" width="150px" height="150px">
				</div>
			</a>

		</footer>

		<section class="footer2">
			<p id="fontText">©Lau de Hoop <b>|</b> MD1B</p>
		</section>
		
	</body>
</html>