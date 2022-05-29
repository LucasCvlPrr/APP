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

        <div class="leftSide">
                <img src="../img/logoIM.png" alt="logoIM" class="logoIM">

                <p class="slogan">
                    A PROPOS
                </p>

                <form action="../Config/languages.includes.php" method="post">
                    <select name='language' id="language" onchange='this.form.submit()'>
                        <option value="FR">FR</option>    
                        <option value="EN">EN</option>
                    </select>
                    <input type="hidden" name="URL" id="URL" value="About/About.php">
                    <input type="hidden" name="formsend" value="submit">
                </form>
            </div>

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
                        A propos
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

    <h1>A propos de notre entreprise</h1>

    <h3>Qu'est-ce-que <span style="color:#74b2dc">Infinite Measures</span>?</h3>

    <p>Infinite Measures est une société à taille humaine.</p>
    <p>Nous sommes spécialisé dans le développement de solutions technologiques.</p>
    
    <hr class="secondLineSeparator">

    <h3>Comment nous travaillons ?</h3>

    <p>Nous sommes particulièrement attaché à notre connaissance des besoins de chacun de nos clients.</p>
    <p>Notre équipe est composée d'ingénieurs expérimentés dans le développement de solutions sur mesure,</p>
    <p>et nous travaillons à l'unisson afin de proposer la meilleur solution pour chaque client.</p>
    <p>Nous collaborons avec les ingénieurs de <strong><span style="color:#74b2dc">Oversight</span></p>
    <p>dans le développement de notre solution pour la sécurité de l'industrie.</p>

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
                <a href="">
                    Plan du site
                </a>

            </li>
        </ul>

        <div class="poweredByOversight">
            <p class="poweredBy">Par <a href="OversightTeam/OversightTeam.php" class="oversight">Oversight</a></p>
        </div>
    </footer>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    
</body>
</html>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
