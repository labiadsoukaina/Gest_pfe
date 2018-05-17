<!DOCTYPE html>
<html>
   
	  
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<style type="text/css">
   body { background: #7575a3; }
  
</style>
	<script src="js/jquery.js"></script>	
	 <script src="js/bootstrap.min.js"></script>
			
    <meta charset="utf-8" />
    <title> Accueil </title>
	<nav class="navbar navbar-inverse">
	   <div class="navbar-header">
    <img src="img/inpt.png" class="img-thumbnail" width="230" height="50">
	</div>
    </div>
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li > <a href="http://localhost/Accueil.php">Ajouter</a> </li>
			<li > <a href="http://localhost/supprimerPFE.php">Supprimer</a> </li>
			<li class="active"> <a href="http://localhost/Afficher.php">Afficher</a> </li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/part2.php"><span class="glyphicon glyphicon-user" ></span> s'inscrire</a></li>
        <li><a href="http://localhost/part1.php"><span class="glyphicon glyphicon-log-in"></span> se connecter</a></li>
      </ul>
        </div>
      </nav>
</head>
<body>


  <div class="container">
	<header class="page-header">
    <h1 style="text-align:center">Voir les PFE</h1>
	</header>
	<div class="test">
	<?php
    $fichier = "ProjetXMLinterface.xml";
    // Ma propre fonction de traitement du texte
    // qui est appelée par le "parseur"
    function fonctionTexte($parseur, $texte)
    {
        // Dans l'immédiat nous nous contentons d'afficher
        // le texte brut accompagné d'un simple retour à la ligne
		
        echo "<b>".$texte."</b><br/>";
		
    }
    // Création du parseur XML
    $parseurXML = xml_parser_create();

    // Je précise le nom de la fonction a appeler
    // lorsque du texte est rencontré
    xml_set_character_data_handler($parseurXML, "fonctionTexte");

    // Ouverture du fichier
    $fp = fopen($fichier, "r");
    if (!$fp) die("Impossible d'ouvrir le fichier XML");

    // Lecture ligne par ligne
    while ( $ligneXML = fgets($fp, 1024)) {
        // Analyse de la ligne
        // REM: feof($fp) retourne TRUE s'il s'agit de la dernière
        //      ligne du fichier.
        xml_parse($parseurXML, $ligneXML, feof($fp)) or
            die("Erreur XML");
    }
    
    xml_parser_free($parseurXML);
    fclose($fp);
?>
	</div>
  </div> 
</body>
</html>