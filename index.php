<!DOCTYPE html>
<html>

    <head>
      
        <meta charset="utf-8">
        <title>Accueil</title>
    
        <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>
    
    <body style="background-image: url('images/back.jpg');">

    <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];

                }
            ?>
            

    </div>


        
    
        <!-- header -->
    
       
        <header class="header">
            <div class="container">
            <span id="span_1">LIB   </span><span id="span_2">   HÔTEL</spanid="span_1">

                
                <nav class="menu">
                <ul>
                    <li><a href="principale.php">Profil</a>
                        <!-- Début du menu déroulant -->
                        <ul>
                            <li><a> <?php echo " $user "; ?> </a></li>
                            <li><a href='principale.php?deconnexion=true'><span>Déconnexion</span></a></li>
                        </ul>
                    </li>
                </ul>
                </nav>
                <nav class="menu">
                    <a href="#"> Accueil </a>
                    <a href="#"> Réservation </a>
                    <a href="informations.html"> Informations </a>
                    <a href="login.php"> Se connecter </a>
                    <a href="inscription.php"> S'inscrire </a>
 
                </nav>

            </div>
    
           
        </div>
        </header>
        <!-- fin header -->
    
        <!-- bannière -->
    
        <section class="banniere">
    
            <div class="title">
                <h1><span id="span_1">LIB   </span><span id="span_2">   HÔTEL</spanid="span_1"></h1>
            </div>
            
    
        </section>
</body>
</html>
