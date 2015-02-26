<?php 

class Model_User
{
	private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}
	
	public function verifLogin($username, $password)
	{
		// récupérer l'utilisateur ayant pour username "$username" -> le stocker dans une variable $user
		$user = $this->db->fetchOne("SELECT *, password FROM user WHERE username = :username", array("username" => $username));
 
		// si le mot de passe en db correspond au mot de passe entré dans le formulaire
		if(password_verify($password, $user["password"])){
		// -> return $user
		return $user;	
		}	
		else {
		return false;
		}
		
	}
}

class Model_Add_User{
	private $db;
	
	public function __construct()
	{
		$this->db = new Helper_Database();	
	}
	
	public function createUser($username, $email, $password, $image){
	// On insère un nouvel user dans la base de données
	$newUser = $this->db->insert("INSERT INTO user(username, email, password, image)VALUES(:username, :email, :password, :image)", array(
		"username" => $username,
		"email" => $email, 
		"password" => $password,
		"image" => $image,
		));

	return $newUser;
	}
}