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
		<!-- HEADER FROM header.php -->
		<?php
			include 'header.php';
        ?>
	</header>

	<main>
        <aside>
			<!-- ASIDE FROM aside.php -->
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
				<div class="gallery-set" id="others">
					<section class="column">
						<a href="img/ostatne/oth001.jpg"><img src="img/ostatne/oth001.jpg" alt="" style="width: 100%"></a>
						<a href="img/ostatne/oth002.jpg"><img src="img/ostatne/oth002.jpg" alt="" style="width: 100%"></a>
						<a href="img/ostatne/oth003.jpg"><img src="img/ostatne/oth003.jpg" alt="" style="width: 100%"></a>
						<a href="img/ostatne/oth004.jpg"><img src="img/ostatne/oth004.jpg" alt="" style="width: 100%"></a>
					</section>
					<section class="column">
						<a href="img/ostatne/oth005.jpg"><img src="img/ostatne/oth005.jpg" alt="" style="width: 100%"></a>
						<a href="img/ostatne/oth006.jpg"><img src="img/ostatne/oth006.jpg" alt="" style="width: 100%"></a>
						<a href="img/ostatne/oth007.jpg"><img src="img/ostatne/oth007.jpg" alt="" style="width: 100%"></a>
					</section>
					<section class="column">
						<a href="img/ostatne/oth008.jpg"><img src="img/ostatne/oth008.jpg" alt="" style="width: 100%"></a>
						<a href="img/ostatne/oth009.jpg"><img src="img/ostatne/oth009.jpg" alt="" style="width: 100%"></a>
					</section>
					<section class="column">
						<a href="img/ostatne/oth010.jpg"><img src="img/ostatne/oth010.jpg" alt="" style="width: 100%"></a>
						<a href="img/ostatne/oth011.jpg"><img src="img/ostatne/oth011.jpg" alt="" style="width: 100%"></a>
					</section>
				</div>
			</div>
			
		</section>
		
	</main>

	<footer>
			<!-- FOOTER FROM footer.php -->
		<?php
			include 'footer.php';
		?>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/jquery.colors.min.js"></script>
	<script src="js/include.js"></script>
	<script src="js/gallery.js"></script>
	<script src="js/script.js"></script>

</body>

</html>