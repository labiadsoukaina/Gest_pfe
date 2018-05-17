<!DOCTYPE html>
<html>
    <head>     
        <title>part 2</title>
        <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
        <style>
        fieldset{ background:lightyellow;
                  border:10px solid yellow; 
                  width: 720px;
                  margin-bottom:10px;}
        label {width: 180px;
             display:inline-block;
             text-align: right;
            text-align: top;
            font-weight: 900;

            } 
          .la{
            width:auto;
          } 
          span{
            font-weight: 900;
             text-align:center
          }
           legend{
            font-weight: 900;
           }
           .a{ background-color:  #800000;}
           .b{ background-color:  #993366;}
            body { background: #8082E2;
     }
           

        </style> 
        <nav class="navbar navbar-inverse">
  <div class="navbar-header">
    <div class="col-lg-7">

    <img src="img/inpt.png" class="img-thumbnail" width="230" height="10">
  </div>

    </div >
        <div class="container-fluid">
          <ul class="nav navbar-nav" class="a" >
            <li> <a href="http://localhost/Accueil.php">Ajouter</a> </li>
      <li> <a href="http://localhost/supprimerPFE.php">Supprimer</a> </li>
      <li> <a href="http://localhost/Afficher.php">Afficher</a> </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/part2.php"><span class="glyphicon glyphicon-user" ></span> s'inscrire</a></li>
        <li class="active"><a href="http://localhost/part1.php"><span class="glyphicon glyphicon-log-in"></span> se connecter</a></li>
      </ul>

        </div>
      </nav>    
    </head> 
    <body >   
        <h1 style="font-style: inherit">Please Enter Your Information!</h1>
        
            
            <fieldset>
            	<legend> YOUR info</legend>

              <LABEL>email</LABEL>
              <input type="email" name="email" required >
              <br>
              <LABEL>mot de passe</LABEL>
              <input type="password" name="pass"required>
              
              

            </fieldset>    
            

            <input type="submit" value="submit"> 

 
        
    </body> 

</html>
