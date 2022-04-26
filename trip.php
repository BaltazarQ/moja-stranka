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
			<!-- INCLUDE NAVIGATION FROM gallery_list.php -->
			<?php
				include 'gallery_list.php';
			?>

			<div class="gallery">
				<div class="gallery-set" id="trip">
					<section class="column">
						<a href="img/vylety/trip001.jpg"><img src="img/vylety/trip001.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip002.jpg"><img src="img/vylety/trip002.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip003.jpg"><img src="img/vylety/trip003.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip004.jpg"><img src="img/vylety/trip004.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip005.jpg"><img src="img/vylety/trip005.jpg" alt="" style="width: 100%"></a>
					</section>
					<section class="column">
						<a href="img/vylety/trip006.jpg"><img src="img/vylety/trip006.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip007.jpg"><img src="img/vylety/trip007.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip008.jpg"><img src="img/vylety/trip008.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip009.jpg"><img src="img/vylety/trip009.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip010.jpg"><img src="img/vylety/trip010.jpg" alt="" style="width: 100%"></a>
					</section>
					<section class="column">
						<a href="img/vylety/trip011.jpg"><img src="img/vylety/trip011.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip012.jpg"><img src="img/vylety/trip012.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip013.jpg"><img src="img/vylety/trip013.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip014.jpg"><img src="img/vylety/trip014.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip015.jpg"><img src="img/vylety/trip015.jpg" alt="" style="width: 100%"></a>
					</section>
					<section class="column">
						<a href="img/vylety/trip016.jpg"><img src="img/vylety/trip016.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip017.jpg"><img src="img/vylety/trip017.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip018.jpg"><img src="img/vylety/trip018.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip019.jpg"><img src="img/vylety/trip019.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip020.jpg"><img src="img/vylety/trip020.jpg" alt="" style="width: 100%"></a>
						<a href="img/vylety/trip021.jpg"><img src="img/vylety/trip021.jpg" alt="" style="width: 100%"></a>
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