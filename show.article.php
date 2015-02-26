<?php 

require_once ("Helper/database.php");
require_once("Model/user.class.php");
require_once("Model/article.class.php");
require_once("Model/comment.class.php");

session_start();

	


	// Chercher un article particulier

	$articleShow = new Model_Show_Article ();

	// En cas de commentaire, l'ID article n'est pas défini
		$thisArticle = $articleShow->showArticle($_GET["ID"]);



	// Montrer les derniers articles

	$articleManager = new Model_article ();

	$articles = $articleManager->loadArticles(5);


	// Montrer les commentaires de l'article

	$modelComment = new Model_Show_Comment(); 

	$comments = $modelComment->showComment($_GET["ID"]);


include("View/show.article.phtml");