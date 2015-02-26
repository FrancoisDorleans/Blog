<?php 

require_once ("Helper/database.php");
require_once("Model/user.class.php");
require_once("Model/subscribe.class.php");

session_start();

var_dump($_GET["email"]);

$modelSubscribe = new Model_Subscribe ();
$newSubscriber = $modelSubscribe-> addSubscriber($_GET['email']);