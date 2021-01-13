<!DOCTYPE html>
<html>

    <head>
      
        <meta charset="utf-8">
        <title>Accueil</title>
    
        <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>
    
    <body style="background-image: url('images/back.jpg');">
    
        <!-- header -->
    
       
        <header class="header">
            <div class="container">
            <a href="index.html" class="logo"><h1><span id="span_1">LIB   </span><span id="span_2">   HÔTEL</spanid="span_1"></h1></a> 

                
                
                <nav class="menu">
                    <a href="index.html"> Accueil </a>
                    <a href="#"> Réservation </a>
                    <a href="informations.html"> Informations </a>
                    <a href="login.php"> Se connecter </a>
                    <a href="inscription.php"> S'inscrire </a>
 
                </nav>

            </div>
        </header>


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    
    
        <h1 style="color: #FFFFFF; text-align: center; font-size:300%;">Connexion</h1>
            
        <br>
        <br>
        <br>
    
    
        <form action="verification.php" method="POST" style="text-align: center;">
                
                <label id="input1" for="fname"><b>Nom d'utilisateur</b></label><br>
                <input id="champ1" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required><br><br><br>

                <label id="input2" for="lname"><b>Mot de passe</b></label><br>
                <input id="champ2" type="password" placeholder="Entrer le mot de passe" name="password" required><br><br><br>

                <input id="champ6" type="submit" value="Connexion">
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:black'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
    
        <br>
        <br>
    
        <h4 id="p1">Vous êtes nouveau ? <span><a href="inscription.php" style="color: #de7200;">Crée un compte</a></span></h4>
    
    
        <br>
        <br>
        <br>


            <!-- zone de connexion -->
            
            
        </div>
    </body>
</html>




