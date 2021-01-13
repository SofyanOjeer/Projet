<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>



    <body style="background-image: url('images/back.jpg');">
    
    <!-- header -->

   
    <header class="header">
        <div class="container">
        <a href="index.html" class="logo"><h1><span id="span_1">LIB   </span><span id="span_2">   HÔTEL</spanid="span_1"></h1></a> 

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
                <a href="index.php"> Accueil </a>
                <a href="#"> Réservation </a>
                <a href="information.html"> Informations </a>
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

    <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    
                }
            ?>
            

    </div>

        <h1 style="color: #f19b1a; text-align: center; font-size:300%;">Votre profil</h1>

        <h1 style="color: #f19b1a; text-align: center; font-size:300%;"> <?php echo "Bonjour $user, vous êtes connecté"; ?> </h1>

        <div id="content">

    
            <!-- tester si l'utilisateur est connecté -->
            
            
        </div>
            
            
        </div>
    </body>
</html>