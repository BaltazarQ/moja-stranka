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
			<div class="gallery-set" id="celebrations">
				<section class="column">
					<a href="img/oslavy/cel001.jpg"><img src="img/oslavy/cel001.jpg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel002.jpg"><img src="img/oslavy/cel002.jpg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel003.jpg"><img src="img/oslavy/cel003.jpg" alt="" style="width: 100%"></a>
				</section>
				<section class="column">
					<a href="img/oslavy/cel004.jpg"><img src="img/oslavy/cel004.jpg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel005.jpg"><img src="img/oslavy/cel005.jpg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel006.jpg"><img src="img/oslavy/cel006.jpg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel007.jpg"><img src="img/oslavy/cel007.jpg" alt="" style="width: 100%"></a>
				</section>
				<section class="column">
					<a href="img/oslavy/cel008.jpg"><img src="img/oslavy/cel008.jpg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel009.jpg"><img src="img/oslavy/cel009.jpg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel010.jpg"><img src="img/oslavy/cel010.jpg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel011.jpg"><img src="img/oslavy/cel011.jpg" alt="" style="width: 100%"></a>
				</section>
				<section class="column">
					<a href="img/oslavy/cel012.jpg"><img src="img/oslavy/cel012.jpg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel013.jpeg"><img src="img/oslavy/cel013.jpeg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel014.jpeg"><img src="img/oslavy/cel014.jpeg" alt="" style="width: 100%"></a>
					<a href="img/oslavy/cel015.jpeg"><img src="img/oslavy/cel015.jpeg" alt="" style="width: 100%"></a>
				</section>


			</div>
			</div>
		
		</section>
		
		
	</main>
	
	
	<!-- <div data-include="footer"></div> -->
	<footer>
		<?php
			include 'footer.php';
		?>
	</footer>

	
	
	
	<script src="js/jquery.js"></script>
	<script src="js/jquery.colors.min.js"></script>
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
	<script src="js/calendar.js"></script> -->
	
	<script src="js/include.js"></script>
	<script src="js/gallery.js"></script>
	<script src="js/script.js"></script>
	
	
</body>

</html>