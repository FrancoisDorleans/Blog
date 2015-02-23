<?php

require_once ("Helper/database.php");

// Initialisation de la DB et de la session
session_start();
$db = new Helper_Database("mysql:host=127.0.0.1;dbname=blog", 'root', 'troiswa');
$users = $db->fetchAll("SELECT * FROM user");

// header de la page
// include "top.phtml";

// L'utilisateur est-il connecté ?
if (array_key_exists("username", $_SESSION))
{
	// oui, on lui affiche la page "articles"

	include "View/articles.phtml";
}
else
{
	// non, on lui affiche le formulaire pour se connecter
	include "View/login.phtml";
}