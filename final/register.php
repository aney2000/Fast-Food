<?php
session_start();
include "conectare.php";

if(isset($_POST['Trimite'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$telefon = $_POST['telefon'];
	$password = $_POST['password'];
	$password_encrypted= password_hash($password, PASSWORD_DEFAULT);
	$role = 0;
	
	if(isset($_POST['email'])){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if(isset($_POST['username']))
				{
					$username_query = $conexiune->prepare("SELECT * FROM users WHERE username = ?");
					$username_query->bind_param("s", $username);
					
					$username_query->execute();
					$username_query->store_result();
					$count = $username_query->num_rows;
					$username_query->close();
					if($count!=0)
					{
						echo "Nicknameul este deja folosit, incercat un altul!<br><br>";
						echo "<a href='sign.php'>Apasati aici ca sa reveniti la SignIn.</a>";
						exit;
					}
					else{
						$stmt = $conexiune->prepare('INSERT INTO users(username, email, telefon, parola, role) VALUES (?, ?, ?, ?, ?)');
						$stmt->bind_param("sssss", $username, $email, $telefon, $password_encrypted, $role);
						$stmt->execute();
						$stmt->close();
						$conexiune->close();
						
						header("Location: login.php");
					}
		}  else {
			echo("$email nu este o adresa de email valida!<br><br> Incercati alta apasand "."<a href='sign.php'>aici.</a>");
		}
	}
}
}
?>