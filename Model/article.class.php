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
		$articles = $this->db->fetchAll("SELECT a.*, u.username FROM articles a JOIN user AS u ON u.ID = a.id_author  ORDER BY publication_date DESC LIMIT ".$numberArticle);

		return $articles;
	}

}


Class Model_Post {

	private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}

	public function postArticle($title, $text, $category, $tags, $image){

		// On insère un nouvel article dans la base de données
	$idArticle = $this->db->insert("INSERT INTO articles(id_author, title, text, theme, tags, image_url)VALUES(:author_id, :title, :text, :theme, :tags, :image_url)", array(
		"author_id" => $_SESSION["ID"],
		"title" => $title, 
		"text" => $text,
		"theme" => $category,
		"tags" => $tags,
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


Class Model_Theme_Article {

	private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}

	public function showByTheme($theme) {

	$articleByTheme = $articles = $this->db->fetchAll("SELECT * FROM articles WHERE theme =:theme", array("theme"=> $theme));	
	return $articleByTheme;

	}

}

Class Model_Search_Article {

	private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}

	function searchArticle($search){

	$resultArticle = $this->db->fetchAll("SELECT * FROM articles WHERE text LIKE :text OR title LIKE :title LIMIT 20", array("text"=> "%".$search."%", "title"=> "%".$search."%"));

	return $resultArticle;
	}

}