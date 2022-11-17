<?php
session_start();
include "conectare.php";

$username=$_POST['username'];

$query="SELECT * from users where username='$username'";
$rezultat=$conexiune->query($query);

if($rezultat->num_rows>0){
	$inregistrare=$rezultat->fetch_assoc();
	$bd_pass=$inregistrare['parola'];
	$form_pass=$_POST['password'];
	$id_user=$inregistrare['id_user'];
	$role=$inregistrare['role'];
	
	if(password_verify($form_pass,$bd_pass)){
		$_SESSION["loggedin"] = true;
        $_SESSION["id"] = $id_user;
        $_SESSION["username"] = $username;
		if($role==0){
			echo "<h1>Bine ai venit, ".$inregistrare['username']."!</h1>";
			echo "<a href='index_user.php'>Inapoi la Home.</a>";
		}
		else{
			header("Location: index_admin.php");
		}
	}
	else{
		echo "Parola este incorecta!";
	}
	}
	else{
		echo "Userul nu exista!";
	}
?>