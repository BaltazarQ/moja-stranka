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

			
			<?php
				$events = [
					[
						'name' => 'Mama meniny',
						'date' => '29.7.2022',
						'what' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ante dolor, laoreet vel 
						mi non, laoreet posuere enim. Maecenas at laoreet turpis, feugiat euismod dui. Fusce 
						purus risus, aliquet vel nisi non, elementum vulputate diam. Aliquam a leo porta, 
						vestibulum ex eget, mollis tortor.',
					],
					
					[
						'name' => 'Marjena meniny',
						'date' => '12.9.2022',
						'what' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ante dolor, laoreet vel 
						mi non, laoreet posuere enim. Maecenas at laoreet turpis, feugiat euismod dui. Fusce 
						purus risus, aliquet vel nisi non, elementum vulputate diam. Aliquam a leo porta, 
						vestibulum ex eget, mollis tortor.',

					],

					[
						'name' => 'Daniela narodeniny',
						'date' => '6.10.2022',
						'what' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ante dolor, laoreet vel 
						mi non, laoreet posuere enim. Maecenas at laoreet turpis, feugiat euismod dui. Fusce 
						purus risus, aliquet vel nisi non, elementum vulputate diam. Aliquam a leo porta, 
						vestibulum ex eget, mollis tortor.',

					],

					[
						'name' => 'Martin meniny',
						'date' => '11.11.2022',
						'what' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ante dolor, laoreet vel 
						mi non, laoreet posuere enim. Maecenas at laoreet turpis, feugiat euismod dui. Fusce 
						purus risus, aliquet vel nisi non, elementum vulputate diam. Aliquam a leo porta, 
						vestibulum ex eget, mollis tortor.',

					],

					[
						'name' => 'Stanislav meniny',
						'date' => '13.11.2022',
						'what' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ante dolor, laoreet vel 
						mi non, laoreet posuere enim. Maecenas at laoreet turpis, feugiat euismod dui. Fusce 
						purus risus, aliquet vel nisi non, elementum vulputate diam. Aliquam a leo porta, 
						vestibulum ex eget, mollis tortor.',

					],

				];
			?>
				<article>
					<?php foreach ($events as $event) : ?>
					<h1><?php echo $event['name'] ?></h1>
					<h4><?php echo $event['date'] ?></h4>
					<p><?php echo $event['what'] ?></p>
					<?php endforeach ?>
				</article>

				


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