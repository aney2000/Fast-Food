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
		    <?php
                if (isset($_POST['submit'])) {

                    $termen_cautare = $_POST['caut'];
                    $query = "SELECT * FROM produse WHERE denumire_produs LIKE '%" . $termen_cautare . "%'";
                    $rezultat = mysqli_query($conexiune, $query) or die ('Eroare');
                    $nr_rezultate = mysqli_num_rows($rezultat);

                    if ($nr_rezultate == 0) {
                        echo "<h2>Căutarea nu a produs rezultate.</h2>";
                    } else {
            ?>
			<?php
                    }
                }
            ?>
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
	<div id="hero">
		<div id="imagine_fundal">
			<img src="img/hero.png" alt="Logo" width="600" height="550">
		</div>
		<div id="logo_principal">
			<div id="fast-food">
				<img src="img/logo.png" alt="Logo" width="350" height="120">
			</div>
			<p id="descriere">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			
			<a href="meniu.php" id="buton">
				<div id="buton0">
					<p>Order Now</p>
				</div>
			</a>
	
			<div id="review">
				<img src="img/5star.png" id="5stele" alt="Logo" width="120" height="28">
				<p>5 star rating</p>
				<p id="reviews">based on 1788 reviews.</p>
			</div>
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