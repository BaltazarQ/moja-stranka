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
		
		<section class="main-section">
			<!-- NAVIGATION FROM gallery_list.php -->
			<?php
				include 'gallery_list.php';
			?>

			<div class="gallery-main">
				<div class="gallery-set" id="medugorje">
					<section class="column">
						<a href="img/medugorje/med001.jpg"><img src="img/medugorje/med001.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med002.jpg"><img src="img/medugorje/med002.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med003.jpg"><img src="img/medugorje/med003.jpg" alt="" style="width:100%"></a>
					</section>
					<section class="column">
						<a href="img/medugorje/med004.jpg"><img src="img/medugorje/med004.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med005.jpg"><img src="img/medugorje/med005.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med006.jpg"><img src="img/medugorje/med006.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med007.jpg"><img src="img/medugorje/med007.jpg" alt="" style="width:100%"></a>
					</section>
					<section class="column">
						<a href="img/medugorje/med008.jpg"><img src="img/medugorje/med008.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med009.jpg"><img src="img/medugorje/med009.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med010.jpg"><img src="img/medugorje/med010.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med011.jpg"><img src="img/medugorje/med011.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med012.jpg"><img src="img/medugorje/med012.jpg" alt="" style="width:100%"></a>
					</section>
					<section class="column">
						<a href="img/medugorje/med013.jpg"><img src="img/medugorje/med013.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med014.jpg"><img src="img/medugorje/med014.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med015.jpg"><img src="img/medugorje/med015.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med016.jpg"><img src="img/medugorje/med016.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med017.jpg"><img src="img/medugorje/med017.jpg" alt="" style="width:100%"></a>
						<a href="img/medugorje/med018.jpg"><img src="img/medugorje/med018.jpg" alt="" style="width:100%"></a>
					</section>
				</div>
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
	<script src="js/gallery.js"></script>
	<script src="js/script.js"></script>
	
</body>

</html>