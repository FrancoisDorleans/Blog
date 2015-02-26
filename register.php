<?php 

require_once ("Helper/database.php");
require_once("Model/user.class.php");
require_once("Model/comment.class.php");

session_start();

if ( isset($_POST["log"]) == true){
$message="<p>Pour commenter, inscrivez-vous</p>";
}
else {
	$message ="";
}

if (isset($_POST["IDarticle"]) == true){
	$articleID = $_POST["IDarticle"];
}



if( isset($_POST["username"]) == true && isset($_POST["email"]) == true && isset($_POST["password"]) == true ){

	// Chercher l'ID de l'article sur lequel le user crée un compte
	$articleID = $_POST["IDarticle"];

	// Upload les images sur le serveur
	if ($_FILES["file"]["name"] != "")
{
	$oldName = $_FILES["file"]["tmp_name"];
	$newName = "images/".$_FILES["file"]["name"];
	move_uploaded_file($oldName, $newName);
}

	$files = scandir("images");

	// Hasher le password
	$password = password_hash($_POST["password"],PASSWORD_DEFAULT);

	// On crée l'utilisateur
	$modelNewUser = new Model_Add_User ();
	$createUser = $modelNewUser->createUser($_POST["username"], $_POST["email"], $password, $newName);

	// Puis on le log
	$_SESSION["ID"] = $createUser;
	$_SESSION["username"] = $_POST["username"];




	header("Location: show.article.php?ID=".$articleID."#comment");
	exit();


}


include("View/register.phtml");