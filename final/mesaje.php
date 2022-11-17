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
			<a href="index_admin.php" id="logo">
				<img src="img/hat.png" alt="Logo" width="50" height="50">
				<h2>Fast-Food</h2>
			</a>

		<nav id="meniu">
			<ul id="meniu_ul">
				<a href="index_admin.php"><li>Home</li></a>
				<a href="meniu_admin.php"><li>Meniu</li></a>
				<a href="signout.php"><li>Sign Out</li></a>
				<a href="mesaje.php"><li>Mesaje</li></a>
			</ul>
		</nav>
		</div>
		<div id="mobil">
			<div id="mySidebar" class="sidebar">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="index_admin.php"><img src="home.png" alt="Logo" width="25" height="25"> Home</a>
					<a href="meniu_admin.php"><img src="meniu.png" alt="Logo" width="25" height="25"> Meniu</a>
					<a href="signout.php"><img src="logout.png" alt="Logo" width="25" height="25"> Sign Out</a>
					<a href="mesaje.php"><img src="email.png" alt="Logo" width="25" height="25"> Mesaje</a>
				</div>

				<div id="main">
					<button class="openbtn" onclick="openNav()"><img src="menu.png" alt="Logo" width="48" height="44"></button>
				</div>
		</div>
		<div id="search1">
			<a href="search_admin.php"><img src="img/search.png" id="form" alt="Logo" width="25" height="25"></a>
			<a href="cart_admin.php"><img src="img/cart.png" alt="Logo" width="25" height="25"></a>
		</div>

		<div id="mobil_logo">
			<a href="index_admin.php"><img src="img/hat.png" alt="Logo" width="50" height="50"></a>
		</div>
		<div id="mobil_search">
		
			<div class="search-box">
				<button class="btn-search"><img src="img/search.png" alt="Logo" width="37" height="37"></button>
				<input type="text" class="input-search" placeholder="Type to Search...">
			</div>
		</div> 

		<div id="mobil_cart">
			<a href="cart_admin.php"><img src="img/cart.png" alt="Logo" width="50" height="50"></a>
		</div>
	</header>

    	<section id="main">
    		<article>
    			<header>
    				<h1>Mesaje primite:</h2>
    			</header>
    		</article>
			
            <article>
                <?php
				    $query = "SELECT * FROM contact";
                    $rezultat = mysqli_query($conexiune, $query) or die ('Eroare');
					
                    while ($row = mysqli_fetch_assoc($rezultat)) {
                        echo "<hr class=\"short\">";
                        echo "<p>ID: " . $row['id_contact'] . "</p>";
						echo "<p>Nume: " . $row['nume'] . "</p>";
						echo "<p>Email: " . $row['email'] . "</p>";
						echo "<p>Mesaj: " . $row['mesaj'] . "</p>";
                        echo "<p>Telefon: " . $row['telefon'] . "</p>";
                        }
                ?>
            </article>
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