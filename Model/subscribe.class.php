<?php 


Class Model_Subscribe {

	private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}

	public function addSubscriber($email){

		// On insère un nouvel article dans la base de données
	$subscriber = $this->db->insert("INSERT INTO newsletter(email)VALUES(:email)", array("email" => $email));

	return $subscriber;
	
	}

}