<?php 

require_once ("Helper/database.php");
require_once("Model/user.class.php");
require_once("Model/article.class.php");

session_start();



if(isset($_GET["search"]) == true){

$modelSearchArticle = new Model_Search_Article();
$articles = $modelSearchArticle-> searchArticle($_GET["search"]);
}


include("View/articles.phtml");