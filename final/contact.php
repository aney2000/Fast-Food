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
        require("conectare.php");
    ?>
	<header id="meniu_principal">
		<div id="meniu_logo">
			<a href="index.php" id="logo">
				<img src="img/hat.png" alt="Logo" width="50" height="50">
				<h2>Fast-Food</h2>
			</a>

		<nav id="meniu">
			<ul id="meniu_ul">
				<a href="index.php"><li>Home</li></a>
				<a href="meniu.php"><li>Meniu</li></a>
				<a href="contact.php"><li>Contact</li></a>
				<a href="login.php"><li>Login</li></a>
			</ul>
		</nav>
		</div>
		<div id="mobil">
			<div id="mySidebar" class="sidebar">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="index.php"><img src="img/home.png" alt="Logo" width="25" height="25"> Home</a>
					<a href="meniu.php"><img src="img/meniu.png" alt="Logo" width="25" height="25"> Meniu</a>
					<a href="contact.php"><img src="img/email.png" alt="Logo" width="25" height="25"> Contact</a>
					<a href="cart.php"><img src="img/carts.png" alt="Logo" width="25" height="25"> Carucior</a>
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
	
	<section id="contact">
		<header id="titlu_contact">
			<h2>Date contact:</h2>
		</header>
			
		<div id="date_contact">
			<div id="exemplu">
					<div id="titlu1">
						<h3>Informatii de contact</h3>
					</div>
					<p> Adresa: Str. Vanatorilor, nr. 8</p>
					<p> Email: aney2000@yahoo.com</p>
					<p> Telefon: 0747735345</p>
					<div id="social">
						<div><a href="https://www.facebook.com/dragan.andrei.17/"><img src="img/facebook.png" alt="Logo" width="25" height="25"> Dragan Andrei</a></div>
						<div><a href="https://www.instagram.com/dragan_andre1/"><img src="img/instagram.png" alt="Logo" width="25" height="25"> dragan_andre1/</a></div>
						<div><img src="img/whatsapp.png" alt="Logo" width="25" height="25"> 0747735345</div>
					</div>
			</div>
			<div id="mesaj">
				<div id="titlu2">
					<h3>Lasati-ne un mesaj: </h3>
				</div>
				<form action="contact1.php" id="form1" method="post">
					<input type="text" name="nume" id="nume" placeholder="nume">
					<input type="text" name="email" id="email" placeholder="email">
					<input type="text" name="mesaj" id="mesaj1" placeholder="mesaj">
					<input type="text" name="telefon" id="telefon" placeholder="telefon">
					<input type="submit" name="Trimite" id="nume1">
				</form>
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