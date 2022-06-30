<?php

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username && $password) {
            echo $username;
            echo '<br>';
            echo $password;
        } else {
            echo 'nieco chyba';
        }

        $connection = mysqli_connect('localhost', 'root', '', 'my_page_login');

        if($connection){
            echo 'sme prepojeni s databazou';
        } else {
            die ('niekde je chyba, databaza nepripojena');
        }

        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
        
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('Dotaz do databazy zlyhal'.mysqli_error());
        }

    }
?>

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
		
		<div id="" class="main-section">
            <section class="login-menu">
                <p class="log-in"><a href="#">Prihlásiť sa</a></p>
                <p class="register"><a href="#">Zaregistrovať sa</a></p>
            </section>

            <section class="login-section">
                <p class="login-text">Pre prihlásenie zadaj meno a heslo</p>
                <p class="register-text">Ak sa chceš zaregistrovať, zadaj meno a heslo<br>Môžeš použiť jednoduché heslo.<br><strong>Nepouživaj heslo, ktoré použvaš napr. do internetbankingu, mailu a iným svojim účtom. Zabezpečenie tejto stránky je minimálne!!!</strong></p>
                <form action="login.php" method="post">
                    <input type="text" name="username" placeholder="Zadaj meno">
                    <input type="password" name="password" placeholder="Zadaj heslo">
                    <input type="submit" name="submit" value="Potvrď">
                </form>
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