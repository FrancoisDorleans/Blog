<?php 

require_once ("Helper/database.php");
require_once("Model/user.class.php");
require_once("Model/article.class.php");

session_start();

	


	// Chercher un article particulier

	$articleShow = new Model_Show_Article ();

	$thisArticle = $articleShow->showArticle($_GET["ID"]);


	// Montrer les derniers articles

	$articleManager = new Model_article ();

	$articles = $articleManager->loadArticles(5);


include("View/show.article.phtml");