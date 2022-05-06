<!-- Initialisation -->

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
    <link rel='stylesheet' type='text/css' media='screen' href='About.css'>
    <link rel="icon" type="image/png" href="../img/factorypng.png">
    <script src='About.js'></script>
</head>
<body>
    
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- En-tête de page -->

    <header class="header">

        <nav class="menuNav">

            <img src="../img/logoIM.png" alt="logoIM" class="logoIM">

            <p class="slogan">
                A PROPOS
            </p>

            <select name="language" id="pet-select">
                <option value="EN" selected>EN</option>
                <option value="FR">FR</option>
                <option value="PT">PT</option>
            </select>

            <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
            <!-- Menu de navigation -->

            <ul class="nav-links">
                <li class="button">
                    <a href="../index.php">
                        Accueil
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../Solution/Solution.php">
                        Solution
                    </a>
                    
                </li>
<!--
                <li class="button">
                    <a href="../About/About.php">
                        A Propos
                    </a>
                    
                </li>
-->
                <li class="button">
                    <a href="../Contact/Contact.php">
                        Contact
                    </a>
                    
                </li>

                <?php
                
                    if(isset($_SESSION["email"])){
                        echo "<li class='button'><a href='../Dashboard/Dashboard.php'>Dashboard</a></li>";

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

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- Contenu -->
    <hr class="firstLineSeparator">

    <h1>A propos</h1>

    <h3>Qu'est ce que <span style="color:#74b2dc">Infinite Measures</span> ?</h3>

    <p>Infinite Measures est une entreprise à taille humaine.</p>
    <p>Notre équipe est spécialisé dans le dévleoppement de solutions technologiques.</p>
    
    <hr class="secondLineSeparator">

    <h3>Comment nous travaillons ?</h3>

    <p>Nous travaillons toujours sur notre connaissance des besoins de chacun de nos clients.</p>
    <p>Nos equipes sont composées d'ingénieurs expérimentés et spécialisés dans les solutions technologiques qui travaillent ensemble</p>
    <p>afin de trouver la solution la plus adapté à chaque client.</p>
    <p>Nous travaillons de paire avec les ingénieurs de <span style="color:#74b2dc">Oversight</span> sur le développement</p>
    <p>de notre solution pour la sécurité industrielle.</p>

    <hr class="secondLineSeparator">

    <div class="rect">
        <h1>Il nous font confiance...<br><br><br><br><br><br></h1>
    </div>

    <hr class="firstLineSeparator">

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- Pied de page -->

    <footer class="footer">
        <ul>
            <li class="link">
                <a href="">
                    Mentions légales
                </a>

            </li>

            <li class="link">
                <a href="../Contact/Contact.html">
                    Contact
                </a>

            </li>

            <li class="link">
                <a href="">
                    Plan du site
                </a>

            </li>
        </ul>

        <div class="poweredByOversight">
            <p class="poweredBy">Par <a href="../About/OversightTeam/OversightTeam.php" class="oversight">Oversight</a></p>
        </div>
    </footer>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    
</body>
</html>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
