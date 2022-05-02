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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">//on importe JQUERY pour rendre le chat instantanné</script>
</head>
<body>
    <!--En-tête de page.-->
    <header class="header">

        <nav class="menuNav">

            <img src="../img/logoIM.png" alt="logoIM" height="125" width="125" class="logoIM">
        
            <p class="slogan">
                DASHBOARD
            </p>

            <!-- Menu de navigation -->
            <ul class="nav-links">
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
                    //echo "<li class='button'><a href='Dashboard.php'>Dashboard</a></li>";

                    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'root', '');
                    $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
                    $recupUser->execute(array($_SESSION['email']));
                    $isAdmin = $recupUser->fetch()['isAdmin'];

                    if($isAdmin == 1){
                        echo "<li class='button'><a href='../AdminPanel/adminPanel.php'>Admin-Panel</a></li>";
                    }

                    echo "<li class='button'><a href='../Home/php.scripts/logout.php'>Log out</a></li>";
                }
                else{
                    //<img src="../img/connexionLogo.png" alt="connexionLogo" height="50" width="50" class="connexionLogo">
                    echo "<li class='button'><a href='../index.php'>Log in</a></li>";
                }
            ?>

            </ul>

            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <script>
                //navbar burger script
                const navSlide = () => {
                    const burger = document.querySelector('.burger');
                    const nav = document.querySelector('.nav-links');
                    const navLinks = document.querySelectorAll('.nav-links li');

                    //Toggle Nav
                    burger.addEventListener('click', () => {
                        nav.classList.toggle('nav-active');
                    });

                    //Animation
                    navLinks.forEach((link, index) => {
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 2}s`;
                    });
                    
                }
                navSlide();
            </script>
        </nav>
    </header>

    <!-- Contenu -->
<div class="dash">
<div class="global_container">
        <div class="info_user">
            <?php
                echo '<h1 class="profile_title">Profile</h1>';

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
        <div class="message_container">
                <div id="messages" class="messages">
                    <!-- c'est ici qu'on affiche les messages en JS -->
                </div>
            <form method="POST" action="messagerie.scripts/loadMessages.php?task=write">
                <div class="text_div">
                        <input id='messageForm' type="text" name="description" autocomplete="off">
                    
                        <div class="submit_div">
                            <button id='btn-sub' type="submit" name="send">Send</button>
                        </div>
                </div>
            </form>
        </div>
</div>


<div class="graph_global_container">
    <div class="graph_section_title">
        <h1 class="title">Personnal Measures</h1>
    </div>

    <div class="graph_container">
        <div class="graph_pollution_sensor">
        </div>

        <div class="graph_sound_sensor">
        </div>

        <div class="graph_heart_sensor">
        </div>
    </div>
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
    <script src='messagerie.scripts/messagerie.js'></script>
</body>

</html>