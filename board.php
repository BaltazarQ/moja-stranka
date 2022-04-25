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
		
		<div class="main-section">

			<section class="add-comment">
				
				<form id="comment-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="$_POST">
					<input id="name" type="text" name="firstName" value="" placeholder="meno">
					<input name="comment" id="comment" type="text" placeholder="napíš odkaz"></input>
					<input id="submit-board" type="submit" name="submit" value="Submit">
				</form>
			</section>
			
			<section class="comments">
				<div class="my-comments"></div>
			</section>
		</div>

	</main>
	
	<footer>
		<?php
			include 'footer.php';
		?>
	</footer>
	
	
	<script src="js/jquery.js"></script>
	<script src="js/jquery.colors.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/board.js"></script>
	
</body>

</html>