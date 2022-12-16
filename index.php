<?php
//$login = new PDO 

?><!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/carolingia" rel="stylesheet">
    <title>La Taverne d'édève</title>
</head>

<body>
    <header>
                                <!--Nav barre-->
        <nav>
                                <!--Menu Burger-->
                                <div id="mySidenav" class="sidenav">
                <a id="closeBtn" href="#" class="close">×</a>
                    <ul>
                        <li><a href="https://play.aidungeon.io/main/home">IA Fun</a></li>
                        <li><a href="#">Vos Personnages</a></li>
                        <li><a href="#">Article</a></li>
                        <li><a href="#">Espace Admin</a></li>
                    </ul>
            </div>
                    <a href="#" id="openBtn">
                        <span class="burger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        </span>
                    </a>
                                <!--Script du menu Burger-->
                    <script>
                        var sidenav = document.getElementById("mySidenav");
                        var openBtn = document.getElementById("openBtn");
                        var closeBtn = document.getElementById("closeBtn");

                        openBtn.onclick = openNav;
                        closeBtn.onclick = closeNav;

                        /* Set the width of the side navigation to 250px */
                        function openNav() {
                        sidenav.classList.add("active");
                        }

                        /* Set the width of the side navigation to 0 */
                        function closeNav() {
                        sidenav.classList.remove("active");
                        }

                    </script>
        <head>
            <h1>La Taverne d'Édève</h1>                  
        </head>
            </burger>
                                <!--Bouton Utilisateur-->
            <input type="image" id="image" alt="user" src="profile.png">
        </nav>
    </header>
    
    <h2>Bienvenue</h2>
                <p>Ce site vous es proposer en temps que support de personnage et aide de jeu Donjon et Dragon.
                    Vous pouvais crée et personnaliser vos personages. </br>Gérer vos personnage pendant vos partie depuis votre ordinateur ou votre mobile.
                </p>
    <personnage>
        <h3>Vos Personnage</h3>
    </personnage>
    <news>
        <h4>Les nouvelle du barde</h4>
    </news>

    <footer>

    </footer>
    
</body>
</html>