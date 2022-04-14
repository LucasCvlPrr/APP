<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Infinite Measures</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='Dashboard.css'>
    <script src='Home.js'></script>
</head>
<body>
    <!--En-tête de page.-->
    <header class="header">

        <nav class="menuNav">

            <img src="../img/logoIM.png" alt="logoIM" height="125" width="125" class="logoIM">
        
            <p class="slogan">
                DASHBOARD 🌎
            </p>

            <!-- Menu de navigation -->
            <ul>
                <li class="button">
                    <a href="../index.php">
                        Home
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../Solution/Solution.php">
                        Solution
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../About/About.php">
                        About
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../Contact/Contact.php">
                        Contact
                    </a>
                    
                </li>

                <?php

                if(isset($_SESSION["email"])){
                    echo "<li class='button'><a href='Dashboard.php'>Dashboard</a></li>";
                    echo "<li class='button'><a href='../Home/php.scripts/logout.php'>Log out</a></li>";
                }
                else{
                    //<img src="../img/connexionLogo.png" alt="connexionLogo" height="50" width="50" class="connexionLogo">
                    echo "<li class='button'><a href='../index.php'>Log in</a></li>";
                }
            ?>

            </ul>
        </nav>
    </header>

    <!-- Contenu -->
    <div class="info_container">
        <div class="info_user">
            <?php
                $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'root', '');

                if(isset($_SESSION["email"])){
                    echo "<h1>Email : " . $_SESSION["email"] . "</h1>";
                    echo "<h1>ID : " . $_SESSION["id"] . "</h1>";
                    
                    $recupUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
                    $recupUser->execute(array($_SESSION["id"]));
                    
                    echo "<h1>Pseudo : " . $recupUser->fetch()['pseudo'] . "</h1>";

                    $recupUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
                    $recupUser->execute(array($_SESSION["id"]));

                    echo "<h1>Last Name : " . $recupUser->fetch()['last_name'] . "</h1>";

                    $recupUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
                    $recupUser->execute(array($_SESSION["id"]));
                    
                    echo "<h1>First Name : " . $recupUser->fetch()['first_name'] . "</h1>";
                }
            ?>
        </div>
    </div>


    <!-- Pied de page -->
    <footer class="footer">
        <ul>
            <li class="link">
                <a href="">
                    Legal Terms
                </a>

            </li>

            <li class="link">
                <a href="">
                    Personnal Data
                </a>

            </li>

            <li class="link">
                <a href="../Contact/Contact.html">
                    Contact
                </a>

            </li>

            <li class="link">
                <a href="">
                    Sitemap
                </a>

            </li>
        </ul>

        <div class="poweredByOversight">
            <p class="poweredBy">Powered by <a href="../About/OversightTeam/OversightTeam.html" class="oversight">Oversight</a></p>
        </div>
    </footer>
    
</body>
</html>