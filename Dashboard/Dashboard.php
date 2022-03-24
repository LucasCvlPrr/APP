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
    <link rel='stylesheet' type='text/css' media='screen' href='Home.css'>
    <script src='Home.js'></script>
</head>
<body>
    <!--En-tête de page.-->
    <header class="header">

        <nav class="menuNav">

            <img src="../img/logoIM.png" alt="logoIM" height="125" width="125" class="logoIM">
        
            <p class="slogan">
                THE NEW INDUSTRY
            </p>

            <!-- Menu de navigation -->
            <ul>
                <li class="button">
                    <a href="../Home/Home.php">
                        Home
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../Solution/Solution.html">
                        Solution
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../About/About.html">
                        About
                    </a>
                    
                </li>

                <li class="button">
                    <a href="../Contact/Contact.html">
                        Contact
                    </a>
                    
                </li>

                <?php

                if(isset($_SESSION["email"])){
                    echo "<li class='button'><a href='../../Dashboard/Dashboard.php'>Dashboard</a></li>";
                    echo "<li class='button'><a href='php.scripts/logout.php'>Log out</a></li>";
                }
                else{
                    //<img src="../img/connexionLogo.png" alt="connexionLogo" height="50" width="50" class="connexionLogo">
                    echo "<li class='button'><a href='Home.php'>Log in</a></li>";
                }
            ?>

            </ul>
        </nav>
    </header>

    <!-- Contenu -->
    <?php

                if(isset($_SESSION["email"])){
                    echo "<p>Your email : " . $_SESSION["email"] . "</p>";
                }
                else{
                    
                }
            ?>



    <!-- Pied de page -->
    <footer class="footer">
        <div class="principalFooter">
            <h2 class="infiniteMeasuresFooter"><br>INFINITE<br>MEASURES</h2>

            <hr class="footerSeparator">

            <div class="footerLinks">
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
            </div>
        </div>

        <div class="secondaryFooter">
            <p class="poweredBy">Powered by</p>
            <p class="oversight">Oversight</p>
        </div>
    </footer>
    
</body>
</html>