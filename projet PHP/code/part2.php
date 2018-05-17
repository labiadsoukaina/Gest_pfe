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
            <li > <a href="http://localhost/Accueil.php">Ajouter</a> </li>
      <li> <a href="http://localhost/supprimerPFE.php">Supprimer</a> </li>
      <li> <a href="http://localhost/Afficher.php">Afficher</a> </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="http://localhost/part2.php"><span class="glyphicon glyphicon-user" ></span> s'inscrire</a></li>
        <li><a href="http://localhost/part1.php"><span class="glyphicon glyphicon-log-in"></span> se connecter</a></li>
      </ul>

        </div>
      </nav>    
    </head> 
    <body >   
        <h1 style="font-style: inherit">Please Enter Your Details For Our Dating Website!</h1>
        <form >    
            <fieldset>
      	        <legend> Your Face</legend>

      	        <label for="preview" > Your image:</label>
      	        <input type="file" id="preview" name="FileUpload" required>
      	        <br>
      	        <label > Image preview: </label>
      	        <img id="preview">

            </fieldset>
        
            <fieldset>

      	        <legend>Your General Details </legend>
      	        <label > Name:</label>
      	        
      	        <input type="text" placeholder="your full Name" name="name" required>
      	        <br>
      	        <label > Gender:</label>
      	        <input type="radio" name="GD" value="male"><span>Male</span> 
      	        <input type="radio" name="GD" value="female" > <span>female</span>
      	        <br>
                <label > Age:</label>
      	        <input type="number"  name="age" required>
      	        <br>
      	        <label > Date of brith:</label>
      	        <input type="date" name="dateofbrith" >
      	        <br>
      	        <label > Favorite Color:</label>
      	        <input type="color"  name="color"required>
      	        <br>
      	        <label >which country:</label>
      	        <select name="country">
      	        	<option name="MA"> Maroc</option>
      	        	<option name="fr">france</option>
      	        	<option name="sp">espan</option>
      	        	<option name="USA">USA</option>
      	        	<option name="jp">japan</option>
      	        	<option name="china">china</option>
      	        </select>

            </fieldset>
            <fieldset>
            	<legend> mot de passe</legend>
              
              <LABEL>mot de passe</LABEL>
              <input type="password" name="email"required>
              <br>
              <LABEL>repetez mot de passe</LABEL>
              <input type="tel" name="tel" >

            </fieldset>    
            <fieldset>
            	<legend> Your Contact Information</legend>
            	
            	<LABEL>Email:</LABEL>
            	<input type="email" name="email"required>
            	<br>
            	<LABEL>Mobile:</LABEL>
            	<input type="tel" name="tel" >
            	<br>
            	<label >Address:</label>
                <textarea name="address" style="width:360px; height:50px;"></textarea>
                <br>
                <label class="la">Method to contact you:</label>
               
                <input type="checkbox" name="method" value="email"><span>Email</span>
                <input type="checkbox" name="method" value="whatsapp"><span> Whatsapp</span>
                <input type="checkbox" name="method" value="in-appchat"><span>In-app chat</span>
                
            </fieldset>

            <input type="submit" value="submit"> 

        </form>   
        
    </body> 

</html>
