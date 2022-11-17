<!DOCTYPE html> 
<html lang="en">
<head>
	<link rel="icon" href="img/hat.png" type="image/icon">	
	<title>Fast-Food</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="stil1.css?v=<?php echo time(); ?>">
	<meta charset="UTF-8">
	<meta name="autor" content="Dragan Andrei">
</head>
<body>
    <?php
		session_start();
        require("conectare.php");
    ?>
	<header id="meniu_principal">
		<div id="meniu_logo">
			<a href="index_user.php" id="logo">
				<img src="img/hat.png" alt="Logo" width="50" height="50">
				<h2>Fast-Food</h2>
			</a>

		<nav id="meniu">
			<ul id="meniu_ul">
				<a href="index_user.php"><li>Home</li></a>
				<a href="meniu_user.php"><li>Meniu</li></a>
				<a href="contact_user.php"><li>Contact</li></a>
				<a href="signout.php"><li>Sign Out</li></a>
				<a href="reset.php"><li>Reset parola</li></a>
			</ul>
		</nav>
		</div>
		<div id="mobil">
			<div id="mySidebar" class="sidebar">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="index_user.php"><img src="img/home.png" alt="Logo" width="25" height="25"> Home</a>
					<a href="meniu_user.php"><img src="img/meniu.png" alt="Logo" width="25" height="25"> Meniu</a>
					<a href="contact_user.php"><img src="img/email.png" alt="Logo" width="25" height="25"> Contact</a>
					<a href="cart_user.php"><img src="img/carts.png" alt="Logo" width="25" height="25"> Carucior</a>
					<a href="signout.php"><img src="img/logout.png" alt="Logo" width="25" height="25"> Sign Out</a>
					<a href="reset.php">Reset parola</a>
				</div>

				<div id="main">
					<button class="openbtn" onclick="openNav()"><img src="img/menu.png" alt="Logo" width="48" height="44"></button>
				</div>
		</div>
		<div id="search1">
			<a href="search.php"><img src="img/search.png" id="form" alt="Logo" width="25" height="25"></a>
			<a href="cart.php"><img src="img/cart.png" alt="Logo" width="25" height="25"></a>
		</div>

		<div id="mobil_logo">
			<a href="index.php"><img src="img/hat.png" alt="Logo" width="50" height="50"></a>
		</div>
		<div id="mobil_search">
		
			<div class="search-box">
				<button class="btn-search"><img src="img/search.png" alt="Logo" width="37" height="37"></button>
				<input type="text" class="input-search" placeholder="Type to Search...">
			</div>
		</div> 

		<div id="mobil_cart">
			<a href="cart.php"><img src="img/cart.png" alt="Logo" width="50" height="50"></a>
		</div>
	</header>
	
	<section>
		<div id="mesaj">
			<div id="titlu2">
				<h3>Reset parola: </h3>
			</div>
				<form action="reset.php" id="form1" method="post">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" placeholder="email">
					<label for="pass_v">Parola veche:</label>
					<input type="password" name="password_v" id="password_v" placeholder="old password">
					<label for="pass_n">Parola noua:</label>
					<input type="password" name="password_n" id="password_n" placeholder="new password">
					<input type="submit" name="Trimite" id="nume1">
				</form>
<?php

if(isset($_POST['Trimite'])){
	$email = $_POST['email'];
	
	if(isset($_POST['email'])){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {					
				$query="SELECT * from users where email='$email'";
				$rezultat=$conexiune->query($query);

					if($rezultat->num_rows>0){
						$inregistrare=$rezultat->fetch_assoc();
						$bd_pass=$inregistrare['parola'];
						$bd_email=$inregistrare['email'];
						$password_v = $_POST['password_v'];
						$password_n = $_POST['password_n'];
	
						if(password_verify($password_v,$bd_pass)){
								$password_n_encrypted= password_hash($password_n, PASSWORD_DEFAULT);
								if($bd_email==$email){
								$stmt = $conexiune->prepare("UPDATE users SET parola = ? WHERE email='$email'");
								$stmt->bind_param("s", $password_n_encrypted);
								$stmt->execute();
								$stmt->close();
								$conexiune->close();
								}
								
								header("Location: login.php");
							} else{
								echo "Adresa de mail nu exista!";
							}
					}	else{
							echo "Parola veche nu este corecta!";
						}
	}  else {
			echo("$email nu este o adresa de email valida!<br><br> Incercati alta apasand "."<a href='register.php'>aici.</a>");
		}
	}
}
?>
		</div>
		</div>
	</section>
	
	<footer>
		<div id="subsol">
			<div id="social1">
				<a href="https://www.facebook.com/dragan.andrei.17/"><img src="img/facebook.png" alt="Logo" width="25" height="25"></a>
				<a href="https://www.instagram.com/dragan_andre1/"><img src="img/instagram.png" alt="Logo" width="25" height="25"></a>
			</div>
			<div id="copyright">
				<a href="index.php"><img src="img/hat.png" alt="Logo" width="25" height="25"></a>
				<p>Copyright 2022 Fast-Food.</p>
			</div>
		</div>
	</footer>
	<script src="main.js"></script>
</body>
</html>