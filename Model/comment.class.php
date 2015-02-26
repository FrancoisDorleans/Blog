<?php 


Class Model_Comment {

		private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}

	public function commentArticle($comment, $articleID){

		$newComment = $this->db->insert("INSERT INTO comments(id_author, comment, id_article)VALUES(:id_author, :comment, :id_article)", array(
		"id_author" => $_SESSION["ID"],
		"comment" => $comment,
		"id_article" => $articleID
		));

	return $newComment;

	}


}

// Class Model_Unknown_Comment {

// 	private $db;
	
// 	public function __construct()
// 	{
// 		$this->db = new Helper_Database();	
// 	}

// 	public function unknownComment($comment, $articleID){

// 	$newComment = $this->db->insert("INSERT INTO unknown_comment(comment, id_article)VALUES(:comment, :id_article)", array(
// 		"comment" => $comment,
// 		"id_article" => $articleID
// 		));

// 	return $newComment;

// 	}

// }

Class Model_Show_Comment {

		private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}

	public function showComment($articleID){

	$getComment = $this->db->fetchAll("SELECT *, u.username AS username FROM comments JOIN user AS u ON u.ID = id_author WHERE id_article=:id_article", array("id_article"=> $articleID));

	return $getComment;
	}
}