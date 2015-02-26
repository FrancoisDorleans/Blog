<?php


require_once ("Helper/database.php");
require_once("Model/article.class.php");

// Initialisation de la DB et de la session
session_start();
$db = new Helper_Database("mysql:host=127.0.0.1;dbname=blog", 'root', 'troiswa');
$users = $db->fetchAll("SELECT * FROM user");

	// Créer la variable article

	$articleManager = new Model_article ();

	$articles = $articleManager->loadArticles(5);

	if ( isset($_GET["theme"]) == true){

		$modelThemeArticle = new Model_Theme_Article();

		$themeArticles = $modelThemeArticle-> showByTheme($_GET["theme"]);
		include "View/articles.phtml";

	}
	else {

	include "View/articles.phtml";

	}

