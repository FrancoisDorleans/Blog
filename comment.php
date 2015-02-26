<?php 

require_once ("Helper/database.php");
require_once("Model/user.class.php");
require_once("Model/comment.class.php");

session_start();

// Lancer le modèle de commentaire d'un article
$modelComment = new Model_Comment();

// Si l'utilisateur n'a pas de compte, on va stocker son commentaire
// $modelSaveComment = new Model_Save_Comment();

// Chercher l'ID de l'article à commenter
$articleID = $_POST["IDarticle"];



// Exécuter l'action 

if (isset($_SESSION["ID"]) == true){
$commentOn = $modelComment-> commentArticle($_POST["comment"], $articleID); 


header("Location: show.article.php?ID=".$articleID."#comment-article");
exit();

}
else{


	header("Location:register.php");
	exit();

}