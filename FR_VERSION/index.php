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
    <link rel='stylesheet' type='text/css' media='screen' href='Home/Home.css'>
    <link rel="icon" type="image/png" href="../img/factorypng.png">
    <script src='Home/Home.js'></script>
</head>
<body>
    
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- En-tête de page -->

    <header class="header">

        <nav class="menuNav">

            <div class="leftSide">
                <img src="img/logoIM.png" alt="logoIM" class="logoIM">

                <p class="slogan">
                    LA NOUVELLE INDUSTRIE
                </p>

                <form action="Config/languages.includes.php" method="post">
                    <select name='language' id="language" onchange='this.form.submit()'>
                        <option value="FR">FR</option>    
                        <option value="EN">EN</option>
                    </select>
                    <input type="hidden" name="URL" id="URL" value="../index.php">
                    <input type="hidden" name="formsend" value="submit">
                </form>
            </div>


            <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
            <!-- Menu de navigation -->

            <ul class="nav-links">
                <!--
                <li class="button">
                    <a href="index.php">
                        Accueil
                    </a>
                    
                </li>
                -->

                <li class="button">
                    <a href="Solution/Solution.php">
                        Solution
                    </a>
                    
                </li>

                <li class="button">
                    <a href="About/About.php">
                        A propos
                    </a>
                    
                </li>

                <li class="button">
                    <a href="Contact/Contact.php">
                        Contact
                    </a>
                    
                </li>

                <?php
                
                    if(isset($_SESSION["email"])){
                        echo "<li class='button'><a href='Dashboard/Dashboard.php'>Dashboard</a></li>";

                        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'root', '');
                        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
                        $recupUser->execute(array($_SESSION['email']));
                        $isAdmin = $recupUser->fetch()['isAdmin'];

                        if($isAdmin == 1){
                            echo "<li class='button'><a href='AdminPanel/adminPanel.php'>Administration</a></li>";
                        }

                        echo "<li class='button'><a href='Home/php.scripts/logout.php'>Se déconnecter</a></li>";
                    }
                    else{
                        //<img src="../img/connexionLogo.png" alt="connexionLogo" height="50" width="50" class="connexionLogo">
                        echo "<li class='button'><a href='index.php'>Connexion</a></li>";
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

    <div class="homeLoginPreview">
        
        <div class="homeLoginFormContainer">
            <h4 class="homeLoginFormTitle">CONNEXION ✔️</h4>

            <form action="Home/php.scripts/login.php" method="post" class="homeLoginForm">
                <div class="emailInput">
                    <div class="emailLabel">
                        <label for="email">Email 📫</label>
                    </div>

                    <div class="email">
                        <input type="text" name="email" id="email" required size="40px" autocomplete="off">
                    </div>
                </div>
                
                <div class="passwordInput">
                    <div class="passwordLabel">
                        <label for="password">Mot de Passe 🔒</label>
                    </div>
                    
                    <div class="password">
                        <input type="password" name="password" id="password" required size="40px" autocomplete="off">
                    </div>
                </div>

                <div class="loginBtn">
                    <button type="submit" name="submit" id="submit">Connexion</button>
                </div>
            </form>

            <?php 
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<h1>You missed a blank, fill the other !</h1>";
                    }
                    else if($_GET["error"] == "wronglogin"){
                        echo "<h1>Incorrect login information !</h1>";
                    }
                }

            ?>

            <hr class="loginFormLineSeparator">

            <div class="notRegText">
                <p>Vous n'avez pas de compte ? ⏱</p>
            </div>
            
            <div class="registerBtn">
                <form method="get" action="Register/Register.php">
                    <button type="submit">S'inscrire</button>
                </form>    
            </div>
        </div>

        <div class="homePreviewContainer">
            <h4 class="homePreviewContainerTitle">Ce que l'on voit sur son espace personnel 📷</h4>
        </div>

    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- Pied de page -->

    <footer class="footer">
        <ul>
            <li class="link">
                <a href="">
                    Mentions Légales
                </a>

            </li>

            <li class="link">
                <a href="">
                    Plan du site
                </a>

            </li>
        </ul>

        <div class="poweredByOversight">
            <p class="poweredBy">Par <a href="About/OversightTeam/OversightTeam.php" class="oversight">Oversight</a></p>
        </div>
    </footer>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    
</body>
</html>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
