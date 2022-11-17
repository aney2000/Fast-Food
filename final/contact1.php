<?php
session_start();
include "conectare.php";

if(isset($_POST['email'])){
	$email = $_POST['email'];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		if(isset($_POST['Trimite'])){
			$nume = $_POST['nume'];
			$mesaj = $_POST['mesaj'];
			$telefon = $_POST['telefon'];
			
			$sql="INSERT INTO contact(nume, email, mesaj, telefon) VALUES(?, ?, ?, ?);";
			$stmt = $conexiune->prepare($sql);
			$stmt->bind_param("ssss", $nume, $email, $mesaj, $telefon);
			$stmt->execute();
			$stmt->close();
			$conexiune->close();
			header("Location: contact.php");
		}
	} else {
		echo("$email nu este o adresa de email valida!<br><br> Incercati alta apasand "."<a href='contact.php'>aici.</a>");
	}
}
?>