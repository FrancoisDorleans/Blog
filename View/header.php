<!DOCTYPE html>

<html>
<head>

	<meta charset="utf-8">
	<script type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="boostrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="boostrap/js/npm.js"></script>




	<link href="https://a0.muscache.com/airbnb/static/packages/common_o2.1-480b2a02b606076a457ece648a56a9b8.css" media="all" rel="stylesheet" type="text/css" />
 	<link href="https://a2.muscache.com/airbnb/static/p1/main-pretzel-4ab1c9299beb86cb6b946aef4a0c6056.css" media="screen" rel="stylesheet" type="text/css" />
 <!-- 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
<!--  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map"> -->
<!--  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"> -->
<!--  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
<!--  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css.map">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"> -->
</head>
<style>

*  {
	/*width: 100%;*/
	border-sizing: border-box;
	-moz-box-sizing: border-box;
}

#header{
	width: 100%;
	margin: 0 auto;
}

.header-background {
	width: 100%;
	position: absolute;
	background-color: #565a5c;
	opacity: 0.95;
	height: 90px;
}

.tab {
	margin-top:  15px;
	width: 70%;
	display: inline-block;
}

.tab li   {
	margin-top: 20px;
	margin-left: 4%;
	display: inline-block;
} 

a {
	color: white;
	font-size: 14
	px;
}

.tab:first-child {
	margin-left: 10%;
}

.action-set {
	float: right;
	display: block;
	width: 200px;
	margin-bottom: 15px;
	margin-top: 15px;
}

.action-set a {
	margin-bottom: 8px;
}

.btn.btn-special{
	position: relative;
	right: 25px;
}
</style>

<body>

	<div id="header" class="row container">
		<header>
			<div class="header-background">
				<div class="nav tab list-unstyled medium-right-margin col-md-10">
					<ul class="link-reset">	
						<li><a href="#"><p>Politique</p></a></li>
						<li><a href="#"><p>Société</p></a></li>	
						<li><a href="#"><p>Economie</p></a></li>
						<li><a href="#"><p>Environnement</p></a></li>
						<li><a href="#"><p>#Cute</p></a></li>
					</ul>
				</div>

				<div class="action-set col-md-2">

					<a class="btn btn-special" href="#">Rédiger un article</a>
					<br>
					<a href="logout.php">Se déconnecter</a>

				</div>
			</div>
		</header>
	</div>

</body>


</html>