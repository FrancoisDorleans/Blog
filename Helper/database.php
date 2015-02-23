<?php


Class Helper_Database
{
	private $db;	

	public function __construct(){
		$this->db = new PDO("mysql:host=127.0.0.1;dbname=blog", 'root', 'troiswa');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->db->exec("SET NAMES UTF8");

	}


	public function fetchAll($query, $data = array())
	{
		$query = $this->db->prepare($query);
		$query->execute($data);
		$res = $query->fetchAll();
		
		return $res;
	}

		public function fetchOne($query, $data = array())
	{
		$query = $this->db->prepare($query);
		$query->execute($data);
		$res = $query->fetch();
		
		return $res;
	}
	
}