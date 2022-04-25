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

			<div class="gallery">
				<div class="gallery-set" id="mama">
					<section class="column">
						<a href="img/mama_60/mam001.JPG"><img src="img/mama_60/mam001.JPG" alt="" style="width: 100%"></a>
						<a href="img/mama_60/mam002.JPG"><img src="img/mama_60/mam002.JPG" alt="" style="width: 100%"></a>
						<a href="img/mama_60/mam003.JPG"><img src="img/mama_60/mam003.JPG" alt="" style="width: 100%"></a>
						<a href="img/mama_60/mam004.JPG"><img src="img/mama_60/mam004.JPG" alt="" style="width: 100%"></a>
					</section>
					<section class="column">
						<a href="img/mama_60/mam005.JPG"><img src="img/mama_60/mam005.JPG" alt="" style="width: 100%"></a>
						<a href="img/mama_60/mam006.JPG"><img src="img/mama_60/mam006.JPG" alt="" style="width: 100%"></a>
						<a href="img/mama_60/mam007.JPG"><img src="img/mama_60/mam007.JPG" alt="" style="width: 100%"></a>
						<a href="img/mama_60/mam008.JPG"><img src="img/mama_60/mam008.JPG" alt="" style="width: 100%"></a>
					</section>
					<section class="column">
						<a href="img/mama_60/mam009.JPG"><img src="img/mama_60/mam009.JPG" alt="" style="width: 100%"></a>
						<a href="img/mama_60/mam010.JPG"><img src="img/mama_60/mam010.JPG" alt="" style="width: 100%"></a>
						<a href="img/mama_60/mam011.JPG"><img src="img/mama_60/mam011.JPG" alt="" style="width: 100%"></a>
					</section>
					<section class="column">
						<a href="img/mama_60/mam012.JPG"><img src="img/mama_60/mam012.JPG" alt="" style="width: 100%"></a>
						<a href="img/mama_60/mam013.JPG"><img src="img/mama_60/mam013.JPG" alt="" style="width: 100%"></a>
						<a href="img/mama_60/mam014.JPG"><img src="img/mama_60/mam014.JPG" alt="" style="width: 100%"></a>
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