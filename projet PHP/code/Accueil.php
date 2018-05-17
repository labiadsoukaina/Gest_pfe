<!DOCTYPE html>
<html>
      
	  
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<style type="text/css">
   body { background: #7575a3;
     }
     
</style>
	<script src="js/jquery.js"></script>	
	 <script src="js/bootstrap.min.js"></script>
			
    <meta charset="utf-8" />
    <title> Accueil </title>
	<nav class="navbar navbar-inverse">
	<div class="navbar-header">
    <div class="col-lg-7">

    <img src="img/inpt.png" class="img-thumbnail" width="230" height="10">
  </div>

    </div >
        <div class="container-fluid">
          <ul class="nav navbar-nav" class="a" >
            <li class="active" > <a href="http://localhost/Accueil.php">Ajouter</a> </li>
			<li> <a href="http://localhost/supprimerPFE.php">Supprimer</a> </li>
			<li> <a href="http://localhost/Afficher.php">Afficher</a> </li>
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
<h1>Ajouter un PFE</h1>
  </header>
  
  <form method="post" action="ajouterPFE.php">
  
  <div class="form-group col-xs-4">
    <label for="exampleInput">Identifiant du PFE</label>
    <input type="text" class="form-control" id="exampleInput" placeholder="Identifiant" name="ID">
  </div>
  <legend>Informations sur l'étudiant</legend>
  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-6">  
     
   <div class="form-group">
    <label for="exampleInput">Nom de l'étudiant</label>
    <input type="text" class="form-control" id="exampleInput"  name="nomEtud">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Prénom de l'étudiant</label>
    <input type="text" class="form-control" id="exampleInput"  name="prenETu">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Mail de l'étudiant</label>
    <input type="text" class="form-control" id="exampleInput"  name="mailETu">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'étudiant</label>
    <input type="text" class="form-control" id="exampleInput" name="teleETu">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Option</label>
    <input type="text" class="form-control" id="exampleInput" name="OptionETu">
  </div>
  </div>
  </div>
<!-- lbinom-->
<legend>Informations sur l'étudiant Binome</legend>
  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-6">  
     
   <div class="form-group">
    <label for="exampleInput">Nom de l'étudiant binome</label>
    <input type="text" class="form-control" id="exampleInput"  name="nom2">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Prénom de l'étudiant binome</label>
    <input type="text" class="form-control" id="exampleInput"  name="pren2">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Mail de l'étudiant binome</label>
    <input type="text" class="form-control" id="exampleInput"  name="mail2">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'étudiant binome</label>
    <input type="text" class="form-control" id="exampleInput" name="tel2">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Option</label>
    <input type="text" class="form-control" id="exampleInput" name="Option2">
  </div>
  </div>
  </div>

<!-- lbinom-->

  <legend>Informations sur l'entreprise et Le Stage</legend>
  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <div class="form-group">
    <label for="exampleInput">Intitulé Du Stage</label>
    <input type="text" class="form-control" id="exampleInput" name="Intitule">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Date de début de Stage</label>
    <input type="text" class="form-control" id="exampleInput" name="dated">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Date de Fin du Stage</label>
    <input type="text" class="form-control" id="exampleInput"  name="DateF">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Nom de Oraganisme d'acceuil</label>
    <input type="text" class="form-control" id="exampleInput"  name="NomO">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'Organisme d'Acceuil</label>
    <input type="text" class="form-control" id="exampleInput" name="TelephoneOr">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Mail de l'Organisme d'Acceuil</label>
    <input type="text" class="form-control" id="exampleInput" name="mailORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Adresse de l'Organisme d'Acceuil</label>
    <input type="text" class="form-control" id="exampleInput" name="AdressORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Nom du Parrain</label>
    <input type="text" class="form-control" id="exampleInput"  name="NomParrainORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Prénom du Parrain</label>
    <input type="text" class="form-control" id="exampleInput" name="prenORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Fonction du Parrain dans l'entreprise</label>
    <input type="text" class="form-control" id="exampleInput"  name="fonctionP">
  </div>
    <div class="form-group">
    <label for="exampleInput">Téléphone du Parrain</label>
    <input type="text" class="form-control" id="exampleInput" name="telePar">
  </div>
    <div class="form-group">
    <label for="exampleInput">Mail du Parrain</label>
    <input type="text" class="form-control" id="exampleInput"  name="mailPar">
  </div>
  </div>
  </div>
  <legend>Informations sur la Soutenance</legend>
  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <div class="form-group">
    <label for="exampleInput">Date de Soutenance</label>
    <input type="text" class="form-control" id="exampleInput"  name="dateS">
  </div>
    <div class="form-group">
    <label for="exampleInput">Salle de Soutenance</label>
    <input type="text" class="form-control" id="exampleInput"  name="localS">
  </div>
    <div class="form-group">
    <label for="exampleInput">Nom de l'encadrant</label>
    <input type="text" class="form-control" id="exampleInput" name="nomEnca">
  </div>
    <div class="form-group">
    <label for="exampleInput">Représentant de l'Entreprise</label>
    <input type="text" class="form-control" id="exampleInput" placeholder="Identifiant" name="identifiant">
  </div>
    <div class="form-group">
    <label for="exampleInput">Examinateur</label>
    <input type="text" class="form-control" id="exampleInput" name="exam">
  </div>
    
    <div class="form-group">
    <label for="exampleInput">Président de jury</label>
    <input type="text" class="form-control" id="exampleInput" name="PreJR">
  </div>
  </div>
  </div>
  
  <legend>Informations sur les Encadrants</legend>
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-6">  
  <div class="form-group">
    <label for="exampleInput">Nom de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput"  name="nmENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Prénom de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput" name="pnmENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Mail de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput" name="mailENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput" name="teleENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Nom de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput"  name="nomENex">
  </div>
    <div class="form-group">
    <label for="exampleInput">Prénom de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="pnomENex">
  </div>
    <div class="form-group">
    <label for="exampleInput">Mail de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="mailENex">
  </div>
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="telENex">
  </div>
  
  <div class="form-group">
    <label for="exampleInput">Fonction de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="fctENex">
  </div>
  </div>
  </div>
  
  <div class="col-sm-1"></div> 
  <div class="col-sm-6 pull-left" >
  <button type="submit"  class="btn btn-success btn-block">Ajouter</button>
  </div>
</form>
  
  
  </div> 
</body>
</html>