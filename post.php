<?php 

require_once ("Helper/database.php");
require_once("Model/user.class.php");
require_once("Model/article.class.php");

session_start();

// Si l'utilisateur n'est pas connecté => login
if (array_key_exists("ID", $_SESSION) == true) {

if ( isset($_POST["title"]) == true && isset($_POST["text"]) == true){

	// Upload les images sur le serveur
		if ($_FILES["file"]["name"] != "")
{
	$oldName = $_FILES["file"]["tmp_name"];
	$newName = "images/".$_FILES["file"]["name"];
	move_uploaded_file($oldName, $newName);
}

	$files = scandir("images");


	$postArticle = new Model_Post();


	$publishArticle =  $postArticle-> postArticle($_POST["title"], $_POST["text"],$_POST["theme"], $_POST["tags"], $newName);

	header("Location: index.php");
	exit();

}



include("View/post.phtml");
}

else {
	header("Location: login.php");
	exit();
}