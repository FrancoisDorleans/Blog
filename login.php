<?php 

require_once ("Helper/database.php");
require_once("Model/user.class.php");
// Initialisation de la DB et de la session
session_start();



$db = new Helper_Database("mysql:host=127.0.0.1;dbname=blog", 'root', 'troiswa');

// Si la variable POST ne contient pas les clés "username" et "password"
if (array_key_exists("username", $_POST) == false || array_key_exists("password", $_POST) == false)
{

	header("Location: index.php");
	exit();
}


// L'utilisateur existe-t-il ?
if (array_key_exists("password", $_POST) && array_key_exists("username", $_POST))
{	
	$userManager = new Model_User();
	// $username = $_POST["username"];
	// $password = $_POST["password"];
	$user = $userManager->verifLogin($_POST["username"], $_POST["password"]);


	// oui, alors on compare son mot de passe au mot de passe passé en POST
	if ($user != false)
	{   
		$_SESSION["ID"] = $user["ID"];
		$_SESSION["username"] = $user["username"];
	
		

		header("Location: index.php");
		exit();


	}

	else
	{
		// les mots de passe ne correspondent pas, on prépare un message d'erreur 
		$_SESSION["error"] = "Invalid password";

	
	}
}
else
{
	// l'utilisateur n'existe pas, on prépare un message d'erreur
	$_SESSION["error"] = "Unknown user";

}




// Redirection vers l'index
header("Location: index.php");