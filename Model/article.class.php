<?php


Class Model_Article {

	private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}

	public function loadArticles($numberArticle) {

		if(is_numeric($numberArticle) == false){
			$numberArticle = 5;
		}
		// récupérer les articles de la DB -> les stocker dans une variable $articles
		$articles = $this->db->fetchAll("SELECT * FROM articles LIMIT ".$numberArticle);

		return $articles;
	}

}


Class Model_Post {

	private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}

	public function postArticle($title, $text, $image){

		// On insère un nouvel article dans la base de données
	$idArticle = $this->db->insert("INSERT INTO articles(author_id, title, text, image_url)VALUES(:author_id, :title, :text, :image_url)", array(
		"author_id" => $_SESSION["ID"],
		"title" => $title, 
		"text" => $text,
		"image_url" => $image
		));

	return $idArticle;
	
	}
}


Class Model_Show_Article{

	private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}

	public function showArticle($articleID) {


	// récupérer l'articles ayant l'ID $articleID -> le stocker dans une variable $thisArticle

	$thisArticle = $this->db->fetchOne("SELECT * FROM articles WHERE ID=:ID", array("ID"=> $articleID));

	return $thisArticle;
	}

}