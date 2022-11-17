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
			<a href="search_user.php"><img src="img/search.png" id="form" alt="Logo" width="25" height="25"></a>
			<a href="cart_user.php"><img src="img/cart.png" alt="Logo" width="25" height="25"></a>
		</div>

		<div id="mobil_logo">
			<a href="index_user.php"><img src="img/hat.png" alt="Logo" width="50" height="50"></a>
		</div>
		<div id="mobil_search">
		
			<div class="search-box">
				<button class="btn-search"><img src="img/search.png" alt="Logo" width="37" height="37"></button>
				<input type="text" class="input-search" placeholder="Type to Search...">
			</div>
		</div> 

		<div id="mobil_cart">
			<a href="cart_user.php"><img src="img/cart.png" alt="Logo" width="50" height="50"></a>
		</div>
	</header>
	
	<section id="prezentare_produs">
		<div id="nume_produs">
			<h1>Hamburger</h1>
			<p>O felie de carne de vită tocată, preparată pe grătar, asezonată cu sare și piper, muștar și ketchup, ceapă, felii de castraveţi muraţi, chiflă.</p>
		</div>
		<div id="imagine_produs">
			<img src="img/hamburger.png" alt="Logo" width="350" height="280">
		</div>
	</section>
	
	<section id="ingrediente_selectie">
		<div id="ingrediente">
			<h2>Ingrediente</h2>
			<p>Chiflă regular (produs decongelat)[făină albă de GRÂU, apă, zahăr, ulei vegetal rafinat nehidrogenat de floarea soarelui, drojdie, sare iodata, agent de tratare al făinii (emulsifianți: esteri mono și diacetil-tartrici ai mono și digliceridelor cu acizi grași, făină albă de GRÂU, agent antiaglomerant: carbonat de calciu, antioxidant: acid ascorbic, enzime), conservant propionat de calciu Poate conține SEMINȚE DE SUSAN], Carne vită (tocată și congelată) (carne vită, condimente pentru Grill (Sare Iodată, piper negru măcinat, extract piper negru)), Ketchup (pastă de tomate (66%)184 gr roșii/100 g ketchup, sirop de fructoza-glucoză, oțet, sare, extract de condimente), Castraveți murați (castraveți, apă, sare, oțet, agent de întărire (E509), aromă naturală, conservant E202), Ceapă hidratata, MUȘTAR (apă, oțet, SEMINȚE DE MUȘTAR 13%, sare, condimente, aromă naturală de cuișoare, extract de condimente).</p>
		</div>
		<a href="cart_user.php" id="buton1">
				<p>Adaugare cos</p>
		</a>
	</section>
	
	<footer>
		<div id="subsol">
			<div id="social1">
				<a href="https://www.facebook.com/dragan.andrei.17/"><img src="img/facebook.png" alt="Logo" width="25" height="25"></a>
				<a href="https://www.instagram.com/dragan_andre1/"><img src="img/instagram.png" alt="Logo" width="25" height="25"></a>
			</div>
			<div id="copyright">
				<a href="index_user.php"><img src="img/hat.png" alt="Logo" width="25" height="25"></a>
				<p>Copyright 2022 Fast-Food.</p>
			</div>
		</div>
	</footer>
	<script src="main.js"></script>
</body>
</html>