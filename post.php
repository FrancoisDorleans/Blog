<?php 

require_once ("Helper/database.php");
require_once("Model/user.class.php");
require_once("Model/article.class.php");

session_start();


// if (isset($_GET["ID"]) == true){

// 	include("single.article.php");

// }

if ( isset($_POST["title"]) == true && isset($_POST["text"]) == true){

	$postArticle = new Model_Post();


	$publishArticle =  $postArticle-> postArticle($_POST["title"], $_POST["text"], $_FILES["image"]["name"]);

	header("Location: index.php");
	exit();

}



include("View/post.phtml");