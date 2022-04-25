<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<title>MOJA STRANKA</title>
	<link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/sourcesans/fonts.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width">

</head>

<body>

	<header>
		<?php
			include 'header.php';
        ?>
	</header>
	
	<main>
		<aside>
			<?php
				include 'aside.php';
			?>
		</aside>
		
		<section class="main-section main-contact">

			<div class="contact-section">
				<h1 class="name">Stanislav Prokop</h1>
				<p class="mail">Mail: <a href="mailto:prokopstanislav@gmail.com">prokopstanislav@gmail.com</a></p>
				<p class="tel">Tel: <a href="tel:+421904744404">+421 904 744 404</a></p>
			</div>
			<div class="contact-text">
				<p>Som mladý, optimisticky naladený muž, ktorý sa nebojí nových výziev. Na veci sa pozerám z viacerých strán. 
					Rád trávim čas s priateľmi a rodinou. Mám rád DrD, humor a bryndzové halušky. 
					Zaujíma ma história, aj technologické novinky.</p>
				<p>Ak sa Vám môj projekt páči, dajte mi vedieť, ak sa Vám nepáči, tiež mi dajte vedieť, čo potrebuje doladiť. :-)</p>
			</div>

		</section>
		
	</main>
	
	<footer>
		<?php
			include 'footer.php';
		?>
	</footer>
	
	<script src="js/jquery.js"></script>
	<script src="js/jquery.colors.min.js"></script>
	<script src="js/script.js"></script>
	
</body>

</html>