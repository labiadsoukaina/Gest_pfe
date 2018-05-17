<!DOCTYPE html>
<html>
      
	  
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<style type="text/css">
   body { background: #7575a3 ; }
   
</style>
	<script src="js/jquery.js"></script>	
	 <script src="js/bootstrap.min.js"></script>
			
    <meta charset="utf-8" />
    <title> Accueil </title>
	<nav class="navbar navbar-inverse">
	<div class="navbar-header">
    <div class="col-lg-7">
    <img src="img/inpt.png" class="img-thumbnail" width="230" height="50">
	</div>
    </div>
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li > <a href="http://localhost/Accueil.php">Ajouter</a> </li>
			<li class="active"> <a href="http://localhost/supprimerPFE.php">Supprimer</a> </li>
			<li > <a href="http://localhost/Afficher.php">Afficher</a> </li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
        <li ><a href="http://localhost/part2.php"><span class="glyphicon glyphicon-user" ></span> s'inscrire</a></li>
        <li><a href="http://localhost/part1.php"><span class="glyphicon glyphicon-log-in"></span> se connecter</a></li>
      </ul>
        </div>
      </nav>
</head>
<body>


  <div class="container">
	<header class="page-header">
<h1 style="text-align:center">Supprimer un PFE</h1>
	</header>
	<form method="post" action="supprimerPFE.php">
  <div class="col-sm-4">
  <div class="form-group">
    <label for="exampleInput">Identifiant du PFE</label>
    <input type="text" class="form-control" id="exampleInput" placeholder="Identifiant du PFE à Supprimer" name="ID1">
  </div>
</div>
</div>
  
  <div class="col-sm-4 " style="padding-left: 100px">
  <button type="submit" class="btn btn-success btn-block" >Supprimer</button>
  </div>
  </div> 
  
</body>
</html>