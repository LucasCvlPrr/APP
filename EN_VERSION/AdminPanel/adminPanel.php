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

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!-- En-tête de page -->
    <header class="header">

        <nav class="menuNav">

            <img src="../img/logoIM.png" alt="logoIM" height="125" width="125" class="logoIM">
        
            <p class="slogan">
                ADMIN PANEL
            </p>

            <form action="../Config/languages.includes.php" method="post" id="pet-select">
                <select name='language' id="language" onchange='this.form.submit()'>
                    <option value="EN">EN</option>
                    <option value="FR">FR</option>
                </select>
                <input type="hidden" name="URL" id="URL" value="AdminPanel/adminPanel.php">
                <input type="hidden" name="formsend" value="submit">
            </form>

            <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
            <!-- Menu de navigation -->
            <ul class="nav-links">

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

                if(isset($_SESSION["id"])){
                    echo "<li class='button'><a href='../Dashboard/Dashboard.php'>Dashboard</a></li>";

                    $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'root', '');
                    $recupUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
                    $recupUser->execute(array($_SESSION['id']));
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
    <div class="global_container">
        <div class="users_list">
                <div class="div_title">
                    <h2 class="title">Research Users</h2><br>
                </div>

                <form id="research" method="POST" action="rechercheMultiCriteres.php">
                    
                    <div class="element">
                        <input id='pseudoForm' type="text" name="pseudo" autocomplete="off" placeholder="Enter a pseudo">
                    </div>

                    <div class="element">
                        <input id='last_nameForm' type="text" name="last_name" autocomplete="off" placeholder="Enter a last name">
                    </div>

                    <div class="element">
                        <input id='first_nameForm' type="text" name="first_name" autocomplete="off" placeholder="Enter a first name">
                    </div>

                    <div class="element">
                        <input id='emailForm' type="text" name="email" autocomplete="off" placeholder="Enter an email">
                    </div>
                        
                    <div class="submit_div">
                        <button id='btn-sub' type="submit" name="submit">Search</button>
                    </div>
                    
                </form>
                
                <div class="recup_users">
                    <table>
                        <tr>
                            <th>Pseudo</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>Moderation</th>
                        </tr>
                        <?php
                        //récupération de tous les utilisateurs
                        $recupUsers = $bdd->query('SELECT * FROM users');
                        while($user = $recupUsers->fetch()){
                            if($user['id'] != $_SESSION['id']){
                                //<p><?= $user['pseudo'];<a id='ban_link' href="ban.php?id=<?= $user['id'];" style="color:white; background-color:red; text-decoration:none;margin-left:5px;border-radius:5px;padding:5;">Ban this user</a></p>
                                echo "
                                <tr>
                                    <td>" . $user['pseudo']. "</td>
                                    <td>" . $user['last_name']. "</td>
                                    <td>" . $user['first_name']. "</td>
                                    <td>" . $user['email']. "</td>
                                    <td><a id='ban_link' href='ban.php?id= ". $user['id'] . "';>Ban this user</a></td>
                                </tr>
                                ";
                            }
                        }
                        ?>
                    </table>
                </div>
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
