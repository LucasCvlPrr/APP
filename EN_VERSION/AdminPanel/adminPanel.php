<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/factorypng.png">
    <title>Admin-Panel</title>
    <link rel="stylesheet" type='text/css' media='screen' href="style.css">
</head>
<body>

<header class="header">

        <nav class="menuNav">

            <img src="../img/logoIM.png" alt="logoIM" class="logoIM">

            <p class="slogan">
                ADMIN
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
                        echo "<li class='button'><a href='../Dashboard/Dashboard.php'>Dashboard</a></li>";

                        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'root', '');
                        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
                        $recupUser->execute(array($_SESSION['email']));
                        $isAdmin = $recupUser->fetch()['isAdmin'];

                        if($isAdmin == 1){
                            //echo "<li class='button'><a href='../AdminPanel/adminPanel.php'>Admin-Panel</a></li>";
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
    <div class="global">
        <div class="admin_info">
            <h3>Welcome to the Admin Panel!</h3><br>
            <?php
                if(isset($_SESSION["email"])){
                    $email = $_SESSION['email'];
                    
                    echo "<p>Your email : ".$email."</p><br>";
                    
                    //récupération 'isAdmin'
                    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'root', '');
                    $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
                    $recupUser->execute(array($_SESSION['email']));
                    $isAdmin = $recupUser->fetch()['isAdmin'];
                    echo "<p>isAdmin : ".$isAdmin."</p>";
                }
            ?>
        </div>
        <div class="users_list">
                <h3>The list of the users:</h3><br>
                <?php
                    //récupération de tous les utilisateurs
                    $recupUsers = $bdd->query('SELECT * FROM users');
                    while($user = $recupUsers->fetch()){
                        ?>
                            <p><?= $user['pseudo']; ?><a id='ban_link' href="ban.php?id=<?= $user['id']; ?>" style="color:white; background-color:red; text-decoration:none;margin-left:5px;border-radius:5px;padding:5;">Ban this user</a></p>
                        <?php
                    }
                ?>
        </div>
    </div>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- Pied de page -->
    <footer class="footer">
        <ul>
            <li class="link">
                <a href="">
                    Legal Terms
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
            <p class="poweredBy">Powered by <a href="../About/OversightTeam/OversightTeam.php" class="oversight">Oversight</a></p>
        </div>
    </footer>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    
</body>
</html>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
